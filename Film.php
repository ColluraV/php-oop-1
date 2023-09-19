<?php 


class Film{

    public $titolo;
    public $anno;
    public $trama;
    public $genere;
}

function __construct( string $title, string $date, string $lore, string $type ){

    $this->titolo = $title;
    $this->titolo = $date;
    $this -> titolo = $type;
    $this->titolo = $lore;

}

public function getHTMLCard() {
    return "
      <div>
        <h2>$this->titolo</h2>
        <p> $this->anno </p>

        <ul>
          <li>Email: $this->email</li>
          <li>Data di nascita: {$this->getDateOfBirth()}</li>
        </ul>
    ";
  }
