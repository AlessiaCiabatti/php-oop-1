<?php

require_once __DIR__ . '/Models/movie.php';

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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Document</title>

</head>

<body>
  <div class="container my-5 d-flex justify-content-between ">

    <?php foreach([$matrix, $barbie, $sinister] as $movie) : ?>

      <div class="card text-center" style="width: 18rem;">
        
        <div class="card-body">
          <h5 class="card-title"><?php echo $movie->title; ?></h5>
          <p> Genre: <?php echo implode(', ', $movie->genre) ?></p>
          <p> Year: <?php echo $movie->year; ?></p>
          <p> VM18: <?php echo $movie->VM18 ? 'Yes' : 'No'; ?></p>
        </div>
      </div>
      
    <?php endforeach ?>

  </div>
</body>

</html>