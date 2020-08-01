class GenreDisplay{
    var $genreId;
    var $genreName;

    public function output(){
        echo "<h5 class='card-title'>" . $this->genreName . " </h5>";
       
    }
}