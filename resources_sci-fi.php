<html>
<?php 
include('config.php');
session_start();
?>
<head>
    <meta charset="utf-8">
    <title>BookWrm | Welcome</title> 
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
    <link href="https://fonts.googleapis.com/css2?family=Gentium+Book+Basic:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Style.css">
    <link rel="icon" href="icon.png">
</head>

<nav id="navbar">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="genre.php">Genre</a></li>
        <?php 
        if(empty($_SESSION['username'])) {
            //if not on index of login page, instead echo:
            //"<li><a href='login.php'>Login</a></li>"
            echo "<li><a href='SignUp.php'>Sign Up</a></li>"; 
        } else { 
            echo "<li class='dropdown'><button class='dropdownbutton' href='Profile.php'>Profile</button><div class='dropdown-content' style='right: 0;'>
                        <a href='Editprofile.php'>Edit Profile</a>
                        <a href='ResetPassword.php'>Reset Password</a>
                        <a href='Bookshelf.php'>Bookshelf</a>
                        <a href='logout.php'>Logout</a>
                    </div></li>"; }?>
    </ul>
</nav>
<body>
  <div class="wrapper">
    <div class="list-group" style="display: grid; padding: 20px;">
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="scifi.jpg" alt="Card image cap" />
        <li class="list-group-item-primary">Sci-Fi Resources</li>

        <a
          href="https://www.sparknotes.com/lit/"
          class="list-group-item list-group-item-action"
          id="resourceLinks"
          >SparkNotes</a
        >
        <a
          href="https://www.youtube.com/watch?v=T4j5tGNms14"
          class="list-group-item list-group-item-action"
          id="resourceLinks"
          >Evolution of Science Fiction</a
        >
    
       
    
      </div>
    </div>
        </div>
  </body>
</html>
