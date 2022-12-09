<?php

require_once __DIR__ . "./models/class_movie.php";

$movie1 = new Movie('film', 'bella trama', 12, '', '', '');

var_dump($movie1);

echo $movie1->printMovieInfo();
