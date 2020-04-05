<?php
// load XML document
$file = '../../xml/courses3.xml';
$courses = simplexml_load_file($file);

foreach ($courses as $course) {
    echo $course->заглавие . PHP_EOL;
    echo $course->{'tag-line'} . PHP_EOL;
    echo $course->{'user.level'} . PHP_EOL;
    echo $course->{'dc:date'} . PHP_EOL;
    echo '------------------' . PHP_EOL;
}
