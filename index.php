<?php
/**
 * CONFIG
 */
$explanatoryFile = 'usage.html';
$releasesFile = 'data/releases.txt';



/**
 * APPLICATION
 */

$arguments = explode('/', $_SERVER['REDIRECT_SCRIPT_URL']);

$requestedVersion = $arguments[1] ? $arguments[1] : 'stable';
$requestedFormat = $arguments[2] ? $arguments[2] : 'tar.gz';
if($requestedVersion == 'current') {
	$requestedVersion = 'stable';
}

$redirectData = getRedirectUrl($requestedVersion, $requestedFormat, $releasesFile);
if($redirectData === FALSE) {
	echo '<p>Sorry, the requested package was not found.</p>
	<p>
		<a href="http://typo3.org/download/packages/">Official TYPO3 Packages</a><br />
		<a href="http://get.typo3.org/">Explanation of this Short URL service</a>
	</p>
	';
} else {
	$redirectUrl = $redirectData['url'];
	$versionName = $redirectData['version'];
	$formatName = $redirectData['format'];
	if(
		strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'wget') === FALSE &&
		strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'curl') === FALSE
	) {
		$downloadName = 'version <b>' . $versionName . '</b>';
		if($formatName == 'zip') {
			$downloadName .= ' in zip format';
		}
		$requestUrl = $_SERVER['REDIRECT_SCRIPT_URL'] == '/' ? '/current' : $_SERVER['REDIRECT_SCRIPT_URL'];

		$content = file_get_contents($explanatoryFile);
		$content = str_replace('###REDIRECTURL###', $redirectUrl, $content);
		$content = str_replace('###TYPEURL###', 'get.typo3.org' . $requestUrl, $content);
		$content = str_replace('###DOWNLOADNAME###', $downloadName, $content);
		echo $content;die();
	} else {
		header('Location: ' . $redirectUrl);die();
	}
}


function getRedirectUrl($versionName, $format, $releasesFile) {
	$releases = json_decode(file_get_contents($releasesFile));
	if($versionName == 'stable') {
		$versionName = $releases->latest_stable;
	}
	if($versionName == 'dev') {
		$versionName = getDevVersionName($releases);
	}
	$versionParts = explode('.', $versionName);
	$branchName = $versionParts[0] . '.' . $versionParts[1];
	$branch = $releases->$branchName;
	if(!$versionParts[2]) {
		$versionName = $branch->latest;
	}
	$version = $branch->releases->$versionName->version;
	if($version === NULL || !in_array($format, array('tar.gz', 'zip'))) {
		return FALSE;
	}
	return array(
		'url' => 'http://downloads.sourceforge.net/project/typo3/TYPO3%20Source%20and%20Dummy/TYPO3%20' . $version . '/typo3_src-' . $version . '.' . $format,
		'version' => $version,
		'format' => $format
	);
}

function getDevVersionName($releases) {
	$latestBranch = '0.0';
	foreach($releases as $key => $release) {
		if(version_compare($key, $latestBranch) == 1) {
			$latestBranch = $key;
		}
	}
	return $latestBranch;
}

?>
