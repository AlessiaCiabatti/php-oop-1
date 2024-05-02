<?php

require_once __DIR__ . '/Model/movie.php';

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