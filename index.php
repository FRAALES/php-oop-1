<?php

class Movie {
    public $title;
    public $director;
    public $mainactor;

    public function __construct ($title, $director, $mainactor) {
        $this -> title = $title;
        $this -> director = $director;
        $this -> mainactor = $mainactor;
    }

    public function getFullMovie () {
        return $this -> title . "," . $this -> director . "," . $this -> mainactor;
    }
}


$movie1 = new Movie ("Ritorno al Futuro", "Robert Zemeckis", "Christopher Lloyd");
$movie2 = new Movie ("The Lord of the Rings", "Peter Jackson", "Elijah Wood");



var_dump($movie1);

var_dump($movie2);