<?php

class Movie
{
    public $film_name;
    public $trama;
    public $price;
    public $authors;
    public $cast;
    public $genres;


    public function __construct(
        String $film_name,
        String $trama,
        Int $price,
        String $authors,
        Cast $cast,
        String $genres
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
        $string = '';
        foreach ($this->cast as $value) {
            $string .= $value;
        };
        return "nome del film: $this->film_name,
        trama: $this->trama,
        prezzo del film: $this->price,
        nome degli autori del film: $this->authors,
        cast: $string generi: $this->genres";
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
