<?php

class Movie {
    public $title;
    public $director;
    public $mainActor;

    public function_construct ($title, $director, $mainActor) {
        $this -> title = $title;
        $this -> director = $director;
        $this -> $mainActor = $mainActor;
    }

    public function getFullMovie () {
        return $this -> title . "," . $this -> director . "," . $this -> mainActor;
    }
}


$movie1 = new Movie ("Ritorno al Futuro", "Robert Zemeckis", "Christopher Lloyd");
$movie2 = new Movie ("The Lord of the Rings", "Peter Jackson", "Elijah Wood");



var_dump($movie1);