<?php

class Movie
{
    public $film_name;
    public $trama;
    public $price;
    public $authors = '';
    public $cast = '';
    public $genres = '';


    function __construct(
        $film_name,
        $trama,
        $price,
        $authors,
        $cast,
        $genres
    ) {
        $this->film_name = $film_name;
        $this->authors = $authors;
        $this->cast = $cast;
        $this->genres = $genres;
        $this->trama = $trama;
        $this->price = $price;
    }

    public function printMovieInfo()
    {
        return "nome del film: $this->film_name,
        nome degli autori del film: $this->authors,
        nome del cast: $this->cast,
        generi: $this->genres,
        trama: $this->trama,
        prezzo del film: $this->price";
    }
}
