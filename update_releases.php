<?php

$source = 'http://typo3.causal.ch/releases.php';

$opts = array(
  'http'=>array(
    'method'=>"GET",
    'header'=> "User-agent: get.typo3.org update script\r\n"
  )
);

$context = stream_context_create($opts);

$contents = file_get_contents($source, FALSE, $context);
$releasesFile = __DIR__ . '/data/releases.txt';

if($contents !== FALSE) {
	$fh = fopen($releasesFile, 'w');
	fwrite($fh, $contents);
	fclose($fh);
} else {
	echo 'Error: Couldn\'t read ' . $source;
}

?>
