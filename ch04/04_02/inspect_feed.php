<?php
$cache = '../../xml/bbc_tech.xml';
$feed = simplexml_load_file($cache);

//echo 'Total items: ' . $feed->count() . PHP_EOL;

print_r($feed);