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
    public $description;

    public function __construct($name, $genre, $year, $description) {
        $this->name = $name;
        $this->genre = $genre;
        $this->year = $year;
        $this->description = $description;
    }

    // public function getSubstring(){
    //     return substr($movie_1_desc, 0, 30);
    // }

}

$movie_1_desc = 'Nel 1954 nell\'Oceano Pacifico, all\'epoca teatro di numerosi test nucleari da parte degli Stati Uniti d\'America, viene avvistata e confermata quella che da millenni si riteneva una leggenda: una gigantesca creatura anfibia risalente alla Preistoria, di dimensioni mastodontiche, chiamata Gojira o Godzilla; ben presto tutti gli sforzi del mondo per distruggere la creatura (camuffati da test atomici) falliscono, e le varie nazioni, consce dell\'impossibilità di distruggere il mostro, danno vita alla M.O.N.A.R.C.H., un\'associazione con il compito di monitorare Godzilla e tenere il mondo all\'oscuro della sua esistenza, mentre quest\'ultimo vaga nelle profondità del Pacifico.';

$movie_2_desc = 'Il Signore degli Anelli (titolo originale in inglese: The Lord of the Rings) è un romanzo epico high fantasy scritto da J. R. R. Tolkien e ambientato alla fine della Terza Era dell\'immaginaria Terra di Mezzo. Scritto a più riprese tra il 1937 e il 1949, fu pubblicato in tre volumi tra il 1954 e il 1955 nonché tradotto in trentotto lingue[2] ed ha venduto oltre 150 milioni di copie che lo rendono una delle opere letterarie di maggior successo del XX secolo.[3]';

$movie1 = new Movies('Lord of the Ring', 'Adventure', '2001', $movie_1_desc);
$movie1 = new Movies('Godzilla', 'Sci-Fi', '2014', $movie_2_desc);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Titolo: <?= $movie1->name ?></h1>
        <p>Genere: <?= $movie1->genre ?></p>
        <address>Anno: <?= $movie1->year ?></address>
        <p>Descrizione: <?= $movie1->description ?></p>
    </div>
</body>
</html>

