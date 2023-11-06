<?php 

require_once __DIR__ ."/Model/Movie.php";
require_once __DIR__ ."/Model/Media.php";
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
</head>
<body>

<div class="container mt-4 d-flex  ">

  <?php
  foreach($movies as $movie):
  ?>

    <div class="card mx-2 " style="width: 18rem;">
      <img class=" h-25 " src="img/<?php echo $movie->image->file_name ?>" class="card-img-top" alt="<?php echo $movie->image->name ?>">
      <div class="card-body" >
        <h5 class="card-title"><?php echo $movie->movie_name ?></h5>
        <p class="card-text h-25 overflow-auto "><?php echo $movie->description_movie ?></p>
        <p class="card-text">Voto: <?php echo $movie->vote ?></p>
        
      </div>
    </div>

  <?php 
    endforeach;
    ?>
</div>
  
</body>
</html>