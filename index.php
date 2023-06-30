<?php

class Movie {
    public $title;
    public $director;
    public $mainActor;
    public $genre;

    public function __construct ($title, $director, $mainActor, $genre) {
        $this -> title = $title;
        $this -> director = $director;
        $this -> mainActor = $mainActor;
        $this -> genre = $genre;
    }

    public function getFullMovie () {
        return $this -> title . "," . $this -> director . "," . $this -> mainActor . "," . $this -> genre;
    }
}


$movie1 = new Movie ("Back to the Future", "Robert Zemeckis", "Christopher Lloyd", "Action");
$movie2 = new Movie ("The Lord of the Rings", "Peter Jackson", "Elijah Wood", "Fantasy");



var_dump($movie1);
echo "<br><br>";
var_dump($movie2);