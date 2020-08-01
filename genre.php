 <?php
    $db=new mysqli('localhost','root','wit123','bookwrm');
    $user="root";
    $pass="wit123";
    $SELECT_GENRES =  "SELECT * FROM genres ORDER BY bookGenreId";
    $genre_result = $db->query($SELECT_GENRES);
?> 

<html>
  <head>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
      crossorigin="anonymous"
    ></script>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <nav id="navbar">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li class="dropdown">
          <button class="dropdownbutton">Genres</button>
          <div class="dropdown-content">
            <a href="nonfictionCurrent.html">Non-Fiction</a>
            <a href="">More Coming Soon...</a>
            <a href="pastBooks.html">Past Reads</a>
          </div>
        </li>
        <li><a href="login.html">Login </a></li>
      </ul>
    </nav>
  </head>
  <body>
  <div class='wrapper'>
    <?php
    echo "<div class='col-sm-6'>";
    while($row = $genre_result->fetch_assoc()){
      
     
      echo "<div class='card'>";
        echo "<div class='card-body'>";
   
    echo " <img src='" .$row['imageDir']. "' class='card-img-top' /> ";
    echo "<h5 class='card-title'>".$row['name']."</h5>";
    echo "<a href='resources.html' class='btn btn-primary'
              >Click here for " .$row['name'] ." books and resources related to this
              genre</a>";
    echo "</div>";
echo "        </div>";



    }
    echo "        </div>";
    ?>

          </div>
  </body>
</html>

<!-- <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <img src="scifi.jpg" class="card-img-top" />
            <h5 class="card-title">Sci Fi</h5>
            <p class="card-text">
              Books relating to different Sci-fiction subjects such as time
              travel, space exploration ,etc.
            </p>
            <a href="#" class="btn btn-primary"
              >Click here for Sci-Fi books and resources related to this
              genre</a
            >
          </div>
        </div>
      </div>
    </div> -->