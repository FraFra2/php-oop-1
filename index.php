<?php
class Movie {
    public $titolo;
    public $autore;
    public $anno;
    public $genere;

    public function __construct($titolo, $autore, $anno, $genere) {
        $this->titolo = $titolo;
        $this->autore = $autore;
        $this->anno = $anno;
        $this->genere = $genere;
    }

    public function printDetails() {
        echo "Titolo: " . $this->titolo . "<br>";
        echo "Regista: " . $this->autore . "<br>";
        echo "Anno: " . $this->anno . "<br>";
        echo "Genere: " . $this->genere . "<br>";
    }
}

$movie1 = new Movie("Il Padrino", "Francis Ford Coppola", 1972, "Poliziesco");
$movie2 = new Movie("Forrest Gump", "Robert Zemeckis", 1994, "Letteratura");

echo "Dettagli del Film 1:<br>";
$movie1->printDetails();
echo "<br>";

echo "Dettagli del Film 2:<br>";
$movie2->printDetails();
?>