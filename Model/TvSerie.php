
<?php 

require_once __DIR__ ."/Model/Production.php";
require_once __DIR__ ."/Model/Media.php";
require_once __DIR__ ."/db/db.php";

class TvSerie extends Production {
  public $seasons;

  public function __construct(string $_movie_name, string $_description_movie, float $_vote, Media $_image = null, $seasons) {
      parent::__construct($_movie_name, $_description_movie, $_vote, $_image);
      $this->seasons = $seasons;
  }

}

?>