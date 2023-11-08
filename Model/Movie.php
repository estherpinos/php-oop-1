<?php 


class Movie extends Production {
  public $duration;

  public function __construct(string $_movie_name, string $_description_movie, float $_vote, Media $_image = null, float $duration) {
    parent::__construct($_movie_name, $_description_movie, $_vote, $_image);
    $this->duration = $duration;
}

  
}



?>