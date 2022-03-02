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

    public function __construct($name, $cover, $year){
        $this->name = $name;
        $this->cover = $cover;
        $this->year = $year;
    }

};

$movie1 = new Movies('Lord of the Ring', 'Adventure', '2001');
$movie1 = new Movies('Godzilla', 'Sci-Fi', '2014');
    
echo $movie1;
echo $movie2;
?>

