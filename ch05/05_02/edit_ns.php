<?php
// load XML document
$file = '../../xml/courses_ns2.xml';
$courses = simplexml_load_file($file);

$westCoast = new DateTimeZone('America/Los_Angeles');
foreach ($courses as $course) {
    $media = $course->attributes('media', true);
    $media['url'] = str_replace('.html', '.php', $media['url']);
    $dc = $course->children('dc', true);
    $date = new DateTime($dc->date, $westCoast);
    $dc->date = $date->format(DATE_RSS);
    unset($dc->description);
}

header('Content-type: text/xml');
echo $courses->asXML();