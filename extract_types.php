<?php
/**
 * Entry point for extracting checksums and updating Classes/SfExtractor.php
 */

$json = file_get_contents('http://get.typo3.org/json');
$data = json_decode($json, TRUE);

echo "\t\t\$types = array(";

foreach ($data as $branch => $releases) {
	if (!isset($releases['releases'])) continue;
	echo "\n\t\t\t";
	$lineLength = 0;

	foreach ($releases['releases'] as $version => $info) {
		if ($info['type'] === 'development') continue;
		$typeLine = sprintf("'%s' => '%s',", $version, $info['type']);
		if ($lineLength + strlen($typeLine) > 100) {
			$lineLength = 0;
			echo "\n\t\t\t";
		} else {
			if ($lineLength > 0) echo ' ';
			$lineLength += strlen($typeLine) + 1;
		}
		echo $typeLine;
	}
}

echo "\n\t\t);\n";
