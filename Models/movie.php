<?php

class Movie {
  public $title;
  public $genre;
  public $year;
  public $VM18 = false;

  // costruttore
  public function __construct(string $_title, array $_genre, int $_year)
  {
    $this->title = $_title;
    $this->genre = $_genre;
    $this->year = $_year;
    $this->setFasciaEta();
  }

  // metodo
  public function setFasciaEta(){
    if(in_array('Horror', $this->genre)){
      $this->VM18 = true;
    }
  }
}

?>