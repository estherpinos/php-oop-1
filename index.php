<?php 

require_once __DIR__ ."/Model/Movie.php";
require_once __DIR__ ."/Model/Media.php";

$silencio = new Movie ('EL silencio', 'Clarice, affascinata da Hannibal, affronta con il suo aiuto un spietato assassino. Clarice Starling, giovane e ambiziosa studentessa dell\'Accademia dell\'FBI.', '8');
$homealone = new Movie ('Home Alone','Kevin McCallister, il bambino protagonista, è l\'ultimo di cinque figli. I genitori pianificano un viaggio durante le feste natalizie coi figli ed altri parenti dimenticando però Kevin a casa per errore. ','9',) ;

var_dump($silencio);
var_dump($homealone);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-oop-1</title>
</head>
<body>
  
</body>
</html>