<?php
require_once('Classes/SafeWriter.php');
/**
 * CONFIG
 */
$sorryFile = 'sorry.html';
$releasesFile = 'Data/releases.json';
$statsFile = 'Data/stats.json';

if ($_SERVER['REQUEST_URI'] == '/') {

	// well... quite rude ending!
	$template = 'LandingPage/template.html';
	$output = file_get_contents($template);

	$contentTemplate = 'content.html';
	$content = file_get_contents($contentTemplate);

	$output = str_replace('###CONTENT###', $content, $output);
	$output = str_replace('../', '/LandingPage/', $output);

	print $output;
	die();
}

// Print releases file
if ($_SERVER['REQUEST_URI'] == '/json') {
	$content = file_get_contents($releasesFile);

	header('Content-type: application/json; charset=utf-8');
	header('Access-Control-Allow-Origin: *');
	header('Expires: ' . gmdate('D, d M Y H:i:s \G\M\T', filemtime($cacheFile) + 3600));
	print $content;
	die();
}

// Print stats file
// FYI, "stats" segment is reserved for Awstats => fallback to "statistics"
if ($_SERVER['REQUEST_URI'] == '/statistics') {
	$content = file_get_contents($statsFile);

	header('Content-type: application/json; charset=utf-8');
	header('Access-Control-Allow-Origin: *');
	header('Expires: ' . gmdate('D, d M Y H:i:s \G\M\T', filemtime($cacheFile) + 3600));
	print $content;
	die();
}

/**
 * APPLICATION
 */
$arguments = explode('/', $_SERVER['REQUEST_URI']);
$requestedVersion = !empty($arguments[1]) ? $arguments[1] : 'stable';
$requestedFormat = !empty($arguments[2]) ? $arguments[2] : 'tar.gz';
if ($requestedVersion == 'current') {
	$requestedVersion = 'stable';
}

// Get information about version to download
$redirectData = getSourceForgeRedirect($requestedVersion, $requestedFormat, $releasesFile);
if (empty($redirectData)) {
	$redirectData = getFedextRedirect($requestedVersion, $requestedFormat, $releasesFile);
}

if (empty($redirectData)) {
	// well... quite rude ending!
	$content = file_get_contents($sorryFile);
	print $content;
	die();
} else {
	if (
		strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'wget') === FALSE &&
		strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'curl') === FALSE
	) {

		// Write stats
		writeStats($requestedVersion, $redirectData['version'], $requestedFormat, $statsFile);
		header("Content-type: application/octet-stream");
		$fileName = basename($redirectData['url']);
		header('Content-Disposition: attachment; filename="' . $fileName . '"');
		readfile($redirectData['url']);
		die();
	} else {
		header('Location: ' . $redirectData['url']);
		die();
	}
}

/**
 * @param string $versionName
 * @param string $format
 * @param string $releasesFile
 * @return array
 */
function getSourceForgeRedirect($versionName, $format, $releasesFile) {
	$packageFiles = array(
		// slug (url part) => filename (without Extensions, url-encoded)
		'typo3_src' => 'typo3_src',
		'typo3_src_dummy' => 'typo3_src%2Bdummy',
		'dummy' => 'dummy',
		'introduction' => 'introductionpackage',
		'government' => 'governmentpackage',
		'blank' => 'blankpackage'
	);

	$result = array();
	$releases = json_decode(file_get_contents($releasesFile));
	// defaults
	$package = 'typo3_src';

	/*
	 * $versionName could be something like:
	 * stable
	 * dev
	 * 4.5
	 * 6.0.0
	 * typo3_src-4.5
	 * typo3_src-dev
	 * dummy-4.5
	 * dummy-6.0.0
	 */
	// Detecting Package files, possible with version number
	foreach ($packageFiles as $slug => $filename) {

		// a Package Name without version number
		if ($versionName == $slug) { // simple
			$package = $filename;
			$versionName = 'stable';
			break;
		}
		// a Package Name with version number
		if (substr($versionName, 0, strlen($slug) + 1) == $slug . '-') {
			$package = $filename;
			$versionName = substr($versionName, strlen($slug) + 1);
			break;
		}
	}

	// named version detection
	if ($versionName == 'stable') {
		$versionName = $releases->latest_stable;
	} elseif ($versionName == 'dev') {
		$versionName = getDevVersionName($releases);
	}
	$versionParts = explode('.', $versionName);

	// Make sure we can retrieve a product release
	if (count($versionParts) > 1 && in_array($format, array('tar.gz', 'zip'))) {
		$branchName = $versionParts[0] . '.' . $versionParts[1];
		$branch = $releases->$branchName;

		// $versionParts[2] can be the number '0' as a valid content. e.g. 6.0.0.
		if (isset($versionParts[2]) === FALSE) {
			$versionName = $branch->latest;
		}

		$version = $branch->releases->$versionName->version;

		// Versions 3.3.0 and 3.5.0 was packed as tgz and not tar.gz and we got no zip package here
		if ($version == '3.5.0' || $version == '3.3.0') {
			$format = 'tgz';
		}

		if ($version !== NULL) {
			// TYPO3 6.2 does not have some packages anymore
			$legacyPackages = array('introductionpackage', 'governmentpackage', 'blankpackage', 'dummy');
			if (version_compare($version, '6.2.0', '>=') && in_array($package, $legacyPackages)) {
				$flippedPackageFiles = array_flip($packageFiles);
				$fallbackPackage = $flippedPackageFiles[$package] . '-6.1.7';
				return getSourceForgeRedirect($fallbackPackage, $format, $releasesFile);
			}
			$result = array(
				'url' => 'http://downloads.sourceforge.net/project/typo3/TYPO3%20Source%20and%20Dummy/TYPO3%20' . $version . '/' . $package . '-' . $version . '.' . $format,
				'version' => $version,
				'format' => $format
			);
		}
	}
	return $result;
}

function getDevVersionName($releases) {
	$latestBranch = '0.0';
	foreach ($releases as $key => $release) {
		if (version_compare($key, $latestBranch) == 1) {
			$latestBranch = $key;
		}
	}
	return $latestBranch;
}

/**
 * @param string $versionName
 * @param string $format
 * @param string $releasesFile
 * @return array
 */
function getFedextRedirect($versionName, $format, $releasesFile) {
	$result = array();
	if ($versionName == 'bootstrap') {

		$releases = json_decode(file_get_contents($releasesFile));

		$result['url'] = sprintf('http://cdn.fedext.net/%spackage.%s', $versionName, $format);
		$result['format'] = $format;
		$result['version'] = $releases->latest_stable;
	}
	return $result;
}


/**
 * @param string $versionName
 * @param string $version
 * @param string $format
 * @param string $statsFile
 * @return void
 */
function writeStats($versionName, $version, $format, $statsFile) {

	if (!file_exists($statsFile)) {
		touch($statsFile);
	}

	// Initialize stats
	$stats = json_decode(file_get_contents($statsFile), TRUE);

	if (!is_array($stats)) {
		$stats = array('starting_date' => date('d-m-Y @ H:m'));
	}

	// Initialize summary array
	if (empty($stats[$versionName])) {
		$stats[$versionName] = array(
			'summary' => array(
				'total' => 0,
				'tar.gz' => 0,
				'zip' => 0,
				'starting_date' => date('d-m-Y @ H:m'),
			),
			'versions' => array(),
		);
	}

	// Initialize version array
	if (empty($stats[$versionName]['versions'][$version])) {
		$stats[$versionName]['versions'][$version] = array(
			'total' => 0,
			'tar.gz' => 0,
			'zip' => 0,
		);
	}

	// Increment value
	$stats[$versionName]['summary']['total'] = $stats[$versionName]['summary']['total'] + 1;
	$stats[$versionName]['summary'][$format] = $stats[$versionName]['summary'][$format] + 1;
	$stats[$versionName]['versions'][$version]['total'] = $stats[$versionName]['versions'][$version]['total'] + 1;
	$stats[$versionName]['versions'][$version][$format] = $stats[$versionName]['versions'][$version][$format] + 1;

	$safeWriter = new SafeWriter();
	$safeWriter->write($statsFile, json_encode($stats));
}

?>
