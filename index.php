<?php
/*
    Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
    metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
    - è definita una classe ‘Movie’
    => all'interno della classe sono dichiarate delle variabili d'istanza
    => all'interno della classe è definito un costruttore
    => all'interno della classe è definito almeno un metodo
    - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
*/
class Movie
{
    private string $titolo;
    private string $genere;
    private int $durata_secondi;
    private string $regista;

    public function __construct(string $titolo, int $durata_secondi){
        $this->titolo = $titolo;
        $this->durata_secondi = $durata_secondi;
    }
    public function getTitolo(): string {
        return $this->titolo;
    }
    public function getGenere(): string {
        return $this->genere;
    }
    public function getDurata(): float {
        return $this->durata_ore();
    }
    public function getRegista(): string {
        return $this->regista;
    }

    private function durata_ore(): float {
        $durata_ore = $this->durata_secondi / 3600;
        return round($durata_ore, 2);
    }

}


$movies = [
    $film1 = New Movie('La vita è bella', 8280),
    $film2 = New Movie('Che bella giornata!', 6500)
];

?>
<?php
foreach ($movies as $movie) {
    $titolo = $movie->getTitolo();
    $durata = $movie->getDurata(); ?>
<p>Titolo: "<?=$titolo?>"<br>Durata: <?=$durata?> ore.</p>
<?php };?>