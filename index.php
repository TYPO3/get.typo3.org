<?php
/**
 * CONFIG
 */
$usageFile = 'usage.html';
$sorryFile = 'sorry.html';
$releasesFile = 'data/releases.json';

if ($_SERVER['REQUEST_URI'] == '/') {
	// well... very there is room for improvement here ;)
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
$arguments = explode('/', $_SERVER['REDIRECT_SCRIPT_URL']);

$requestedVersion = !empty($arguments[1]) ? $arguments[1] : 'stable';
$requestedFormat = !empty($arguments[2]) ? $arguments[2] : 'tar.gz';
if ($requestedVersion == 'current') {
	$requestedVersion = 'stable';
}

// Get information about version to download
$redirectData = getRedirectUrl($requestedVersion, $requestedFormat, $releasesFile);

if (empty($redirectData)) {
	// well... very there is room for improvement here ;)
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
	$result = array();
	$releases = json_decode(file_get_contents($releasesFile));
	$package = 'typo3_src';
	if ($versionName == 'introduction' || $versionName == 'government') {
		$package = $versionName . 'package';
		$versionName = $releases->latest_stable;
	} elseif ($versionName == 'stable') {
		$versionName = $releases->latest_stable;
	} elseif ($versionName == 'dev') {
		$versionName = getDevVersionName($releases);
	}
	$versionParts = explode('.', $versionName);

	// Make sure we can retrieve a product release
	if (count($versionParts) > 1 && in_array($format, array('tar.gz', 'zip'))) {
		$branchName = $versionParts[0] . '.' . $versionParts[1];
		$branch = $releases->$branchName;
		if (!$versionParts[2]) {
			$versionName = $branch->latest;
		}

		$version = $branch->releases->$versionName->version;
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
