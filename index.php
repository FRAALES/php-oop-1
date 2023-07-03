<?php

class Genre {

    public $scene;
    public $music;
    public $setting;

    public function __construct($scene, $music, $setting) {

        $this -> scene = $scene;
        $this -> music = $music;
        $this -> setting = $setting;
    }
}

class Movie {

    public static $movieCounter = 0;

    public $title;
    public $director;
    public $mainActor;


    public Array $genres;

    public function __construct ($title, $director, $mainActor, genre ...$genres) {

        self :: $movieCounter++;

        $this -> title = $title;
        $this -> director = $director;
        $this -> mainActor = $mainActor;

        $this -> genres = $genres;
    }

    public function getFullMovie () {
        return $this -> title . "," . $this -> director . "," . $this -> mainActor;
    }

    public function getGenere(){
        return $this -> genre -> genere;
    }

    public static function getCounter() {
        return self :: $movieCounter;
    }
}

$genre1 = new Genre("Action", "actionmusic", "actionsetting");
$genre2 = new Genre("Fantasy", "fantasymusic", "fantasysetting");

$movie1 = new Movie ("Back to the Future", "Robert Zemeckis", "Christopher Lloyd", $genre1);
$movie2 = new Movie ("The Lord of the Rings", "Peter Jackson", "Elijah Wood", $genre1, $genre2);



// var_dump($movie1);
// echo "<br><br>";
// var_dump($movie2);

echo "Movie 1: <br>" . $movie1 -> getFullMovie()
        . "<br>------------------<br>"
        . "Movie 2: <br>" . $movie2 -> getFullMovie();

