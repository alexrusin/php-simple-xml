<?php
// load XML document
$file = '../../xml/courses_ns2.xml';
$courses = simplexml_load_file($file);

// $ns = $courses->getDocNamespaces();
$ns = $courses->getNamespaces(true);

foreach ($courses as $course) {
    echo $course->title . PHP_EOL;
    echo $course->author . PHP_EOL;
    
    $media = $course->attributes("http://search.yahoo.com/mrss/");
    echo $media['url'] . PHP_EOL;

    $dc = $course->children($ns['dc']);
    echo $dc->description . PHP_EOL;
    echo $dc->date . PHP_EOL;

    $subjects = $course->subjects->children('dc', true);
    foreach ($subjects as $subject) {
        echo $subject . PHP_EOL;
    }

    echo '------------------' . PHP_EOL;
}
