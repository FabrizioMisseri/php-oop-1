<?php

class Movie
{
    public $film_name;
    public $trama;
    public $price;
    public $authors;
    public $cast;
    public $genres;


    function __construct(
        $film_name,
        $trama,
        $price,
        $authors,
        $cast,
        $genres
    ) {
        $this->film_name = $film_name;
        $this->trama = $trama;
        $this->price = $price;
        $this->authors = $authors;
        $this->cast = $cast;
        $this->genres = $genres;
    }

    public function printMovieInfo()
    {
        return "nome del film: $this->film_name,
        trama: $this->trama,
        prezzo del film: $this->price,
        nome degli autori del film: $this->authors,
        nome del cast: $this->cast, generi: $this->genres";
    }
};

class Cast
{
    public $person1;
    public $person2;
    public $person3;

    function __construct($person1, $person2, $person3)
    {
        $this->person1 = $person1;
        $this->person2 = $person2;
        $this->person3 = $person3;
    }
}
