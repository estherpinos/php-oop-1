<?php 

class Movie{
    public $movie_name;
    public $description_movie;
    public $vote;
    public $image;

    public function __construct( string $_movie_name, string $_description_movie, float $_vote)
    {
      $this->movie_name = $_movie_name;
      $this->description_movie = $_description_movie;
      $this->vote = $_vote;
    }

     public function setImage(Media $image){
      $this->image = $image;
     }
}

?>