<?php 


class Film{

    public $titolo;
    public $anno;
    public $trama;
    public $genere;
}

function __construct( string $title, string $year, string $lore, string $type ){

    $this->titolo = $title;
    $this->anno = $year;
    $this ->genere = $type;
    $this->trama = $lore;

}

public function getHTMLCard() {
    return "
      <div>
        <h2>$this->titolo</h2>
        <p> $this->anno </p>

        <ul>
        <li>Data di nascita: $this->trama</li>
          <li>Email: $this->genere</li>
        </ul>
    ";
  }
