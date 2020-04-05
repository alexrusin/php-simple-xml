<?php
// load XML document
$file = '../../xml/courses_ns3.xml';
$courses = simplexml_load_file($file);

$courses->registerXPathNamespace('dublin', "http://purl.org/dc/elements/1.1/");


$path = '//dublin:subject[text()="MySQL"]/../..';

$mysql = $courses->xpath($path);

foreach ($mysql as $course) {
    echo $course->title . PHP_EOL;
    echo $course->author . PHP_EOL;
    $course->registerXPathNamespace('m', "http://search.yahoo.com/mrss/");
    $media = $course->xpath('@m:url');
    echo $media[0] . PHP_EOL;
    $course->registerXPathNamespace('dublin', "http://purl.org/dc/elements/1.1/");
    $subjects  = $course->xpath('subjects/dublin:subject');
    foreach ($subjects as $subject) {
        echo $subject . PHP_EOL;
    }

    echo '-----------------' . PHP_EOL;

}