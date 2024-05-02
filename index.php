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

$matrix = new Movie('Matrix', ['Action', 'Sci-fi'], 1999);
// $matrix->title = 'Matrix';
// $matrix->genre = 'Action';
// $matrix->year = '1999';

$barbie = new Movie('Barbie', ['Comedy', 'Fantasy'], 2023);

$sinister = new Movie('Sinister', ['Horror', 'Mistery'], 2012);


var_dump($matrix);
var_dump($barbie);
var_dump($sinister);

?>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

</head>

<body>
  
</body>

</html>