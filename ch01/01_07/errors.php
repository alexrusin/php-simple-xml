<?php
// make sure display_errors is turned on
ini_set('display_errors', '1');

// load XML document
libxml_use_internal_errors(true);
$file = '../../xml/courses4_end.xml';
$courses = simplexml_load_file($file);

if ($courses === false) {
    foreach (libxml_get_errors() as $error) {
        echo 'Line: ' . $error->line . '(' . $error->column .')' . ' ' . $error->message . PHP_EOL;
    }
    exit('Xml is malformed');
}

echo 'Total courses: ' . $courses->count() . PHP_EOL . '------------------' . PHP_EOL;

foreach ($courses as $course) {
    echo $course->title . PHP_EOL;
    echo $course['url'] . PHP_EOL;
    foreach ($course->subjects->subject as $subject) {
        echo $subject . PHP_EOL;
    }
    echo '------------------' . PHP_EOL;

}