<?php
/**
 * CONFIG
 */
$usageFile = 'usage.html';
$sorryFile = 'sorry.html';
$releasesFile = 'data/releases.json';

if ($_SERVER['REQUEST_URI'] == '/') {
	// well... quite rude ending!
	$content = file_get_contents($usageFile);
	print $content;
	die();
}
if ($_SERVER['REQUEST_URI'] == '/json') {
	$content = file_get_contents($releasesFile);

	header('Content-type: application/json');
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
$redirectData = getRedirectUrl($requestedVersion, $requestedFormat, $releasesFile);

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

function getRedirectUrl($versionName, $format, $releasesFile) {
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

?>
