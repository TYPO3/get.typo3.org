<?php
/**
 * Entry point for extracting checksums and updating Classes/CheckSumProvider.php
 */

$json = file_get_contents('http://get.typo3.org/json');
$data = json_decode($json, TRUE);

$checksums = array();

foreach ($data as $branch => $releases) {
	if (!isset($releases['releases'])) continue;
	foreach ($releases['releases'] as $version => $info) {
		$checksums[$version] = $info['checksums'];
	}
}

$cache = var_export($checksums, TRUE);

// Some cleanup
$cache = str_replace('array (', 'array(', $cache);
$cache = preg_replace('/ =>\s+array/s', ' => array', $cache);
$cache = str_replace('  ', "\t", $cache);
echo '$checksums = ' . $cache . ";\n";
