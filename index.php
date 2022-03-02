<?php 

/*
Definisci una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
*/

class Movies {
    public $name;
    public $genre;
    public $year;

    public function __construct($name, $genre, $year){
        $this->name = $name;
        $this->genre = $genre;
        $this->year = $year;
    }

};

// $movie1 = new Movies('Lord of the Ring', 'Adventure', '2001');
// $movie1 = new Movies('Godzilla', 'Sci-Fi', '2014');

// var_dump($movie1);
    
// echo 'Primo film: ' . $movie1;
// echo 'Secondo film: ' . $movie2;


?>

