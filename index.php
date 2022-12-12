<?php

require_once __DIR__ . "./models/class_movie.php";

$cast1 = new Cast('marco', 'luca', 'giovanni');

$array = [
    new Movie('film', 'bella trama', 12, '', $cast1, ''),
    new Movie('film', 'bella trama', 12, '', $cast1, ''),

];


var_dump($array);

foreach ($array as $value) {
    echo $value->printMovieInfo();
}
