<?php
// load XML document
$file = '../../xml/courses2.xml';
$courses = simplexml_load_file($file);

foreach ($courses as $course) {
    if($course->author != 'Jon Peck') {
        echo $course->title . PHP_EOL;
        echo strtoupper($course->author) . PHP_EOL;
        echo $course['url'] . PHP_EOL;
        echo '-----------------------' . PHP_EOL;
    }
   
}
