<?php
// load XML document
$file = '../../xml/courses2.xml';
$courses = simplexml_load_file($file);

// initialize a variable to store the author's name
$previous = '';
foreach ($courses as $course) {
    echo $course->title . PHP_EOL;
    // check the author's name against the previous value
    if ($course->author == $previous) {
        echo 'Another great course by ';
    }
    echo $course->author . PHP_EOL;
    echo $course['url'] . PHP_EOL;
    echo '------------------' . PHP_EOL;
    // store the current author's name
    // to compare with the next one
    $previous = (string) $course->author;
}
