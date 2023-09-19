<?php 


class Film{

    public $titolo;
    public $anno;
    public $trama;
    public $genere;


function __construct( string $title, int $year, string $lore, string $type ){

    $this->titolo = $title;
    $this->anno = $year;
    $this ->genere = $type;
    $this->trama = $lore;

}

/* public function printHTMLCard() {
    return "
      <div>
        <h2>$this->titolo</h2>
        <p> $this->anno </p>

        <ul>
        <li>Data di nascita: $this->trama</li>
          <li>Email: $this->genere</li>
        </ul>
    ";
  }  <----non funzionante */
  public function printHTMLCard() {
    ?>
        <div class="text-center py-3 col-5 mx-auto">
          <h2><?php echo  $this->titolo ?></h2>
          <p><?php echo  $this->anno  ?></p>
          <ul>
            <li class="list-group-item">Trama <?php echo  $this->trama ?></li>
            <li class="list-group-item">Genere: <?php echo $this->genere?></li>
          </ul>
        </div>
      <?php
      }
 
   
}