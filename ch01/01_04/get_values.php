<?php
// load XML document
$file = '../../xml/courses.xml';
$courses = simplexml_load_file($file);

$horisontalLine = '------------------------------------' . PHP_EOL;

echo 'Total courses ' . $courses->count() . PHP_EOL;
echo $horisontalLine;

foreach ($courses as $course) {
    echo $course->title . PHP_EOL;
    echo $course['url'] . PHP_EOL;
    foreach($course->subjects->subject as $subject) {
        echo $subject . PHP_EOL;
    }
    echo $horisontalLine;
}

echo $courses->course[1]->author . PHP_EOL;
echo $courses->course[1]['url'] . PHP_EOL;
echo $courses->course->subjects[0]->subject . PHP_EOL;