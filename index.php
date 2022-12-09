<?php

require_once __DIR__ . "./models/class_movie.php";

$cast1 = new Cast('marco', 'luca', 'giovanni');
$movie1 = new Movie('film', 'bella trama', 12, '', $cast1, '');

var_dump($movie1);

echo $movie1->printMovieInfo();
