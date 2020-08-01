
class GenresResults {
  private $name_genre = array();
  function __construct(){
    $this ->loadFromDatabase();
  }

  public function outputGenres(){
    foreach ($this->name_genre as $genres ){
      $genres->output();
    }
  }

  private function loadFromDatabase(){
    $db=new mysqli('localhost','root','wit123','bookwrm');
    $user="root";
    $pass="wit123";
    $SELECT_GENRES =  "SELECT * FROM genres ORDER BY bookGenreId";
    $genre_result = $db->query($sql);
  }

  private function closeDB(){
    $result->close();
    $db->close();?>
  }
}
  
