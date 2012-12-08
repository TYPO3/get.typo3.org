<?php
/**
 * Entry point for updating the Data
 */

require_once ('Classes/CheckSumProvider.php');
require_once ('Classes/SfExtractor.php');

$dataDirectory = $_SERVER['PWD'] . '/Data';
if (is_dir($dataDirectory)) {
	$cacheFile = $dataDirectory . '/releases.json';
} else {
	// hardcoded path as fallback
	$cacheFile = '/var/www/vhosts/get.typo3.org/www/Data/releases.json';
}
$summary = '';
if (!file_exists($cacheFile) || filemtime($cacheFile) < time() - 3600) {
	$extractor = new SfExtractor();
	$summary = json_encode($extractor->getSummary());

	file_put_contents($cacheFile, $summary);
}

// header('Content-type: application/json');
// header('Expires: ' . gmdate('D, d M Y H:i:s \G\M\T', filemtime($cacheFile) + 3600));
// echo $summary ?: file_get_contents($cacheFile);

?>
