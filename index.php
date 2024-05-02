<?php

class Movie {
  public $title;
  public $genre;
  public $year;

  public function __construct(string $_title, array $_genre, int $_year)
  {
    $this->title = $_title;
    $this->genre = $_genre;
    $this->year = $_year;
  }
}

$matrix = new Movie('Matrix', ['Action', 'Sci-fi'], 1999);
// $matrix->title = 'Matrix';
// $matrix->genre = 'Action';
// $matrix->year = '1999';

var_dump($matrix);

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