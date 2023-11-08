<?php 
require_once __DIR__ ."/Model/Production.php";
require_once __DIR__ ."/Model/Media.php";
require_once __DIR__ ."/Model/Movie.php";
require_once __DIR__ ."/Model/TvSerie.php";
require_once __DIR__ ."/db/db.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-oop-1</title>

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <!-- css -->

  <link rel="stylesheet" href="style.css">
</head>
<body >

<!-- FILMS -->

<h2 class="text-center mt-5 text-white">Films</h2>

<div class="container mt-5 d-flex  ">

  <?php
  foreach($movies as $movie):
  ?>

    <div class="card mx-2 bg-light rounded-2 " style="width: 18rem;">
      <img src="img/<?php echo $movie->image->file_name ?>" class="card-img-top" alt="<?php echo $movie->image->name ?>">
      <div class="card-body" >
        <h5 class="card-title"><?php echo $movie->movie_name ?></h5>
        <p class="card-text overflow-auto description"><?php echo $movie->description_movie ?></p>
        <p class="card-text">Voto: <?php echo $movie->vote ?></p>
        <p class="card-text">Durata: <?php echo $movie->duration ?> min</p>
        <button class=" btn">Play</button>
      </div>
      
    </div>

  <?php 
    endforeach;
    ?>
</div>

<!-- SERIES -->
<h2 class=" text-center mt-5 text-white  ">Series</h2>
<div class="container mt-5 d-flex  ">

  <?php
  foreach($series as $TvSeries):
  ?>

    <div class="card mx-2 bg-light rounded-2 " style="width: 18rem;">
      <img src="img/<?php echo $TvSeries->image->file_name ?>" class="card-img-top" alt="<?php echo $movie->image->name ?>">
      <div class="card-body" >
        <h5 class="card-title"><?php echo $TvSeries->movie_name ?></h5>
        <p class="card-text overflow-auto description "><?php echo $TvSeries->description_movie ?></p>
        <p class="card-text">Voto: <?php echo $TvSeries->vote ?></p>
        <p class="card-text">Stagioni: <?php echo $TvSeries->seasons ?></p>
        <button class=" btn">Play</button> 
      </div>
    </div>

  <?php 
    endforeach;
    ?>
</div>
  
</body>
</html>