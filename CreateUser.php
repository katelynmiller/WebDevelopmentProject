<?php 

//include('session.php');

require_once('config.php');
$db_table = "personalinfo";



$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$DOB = $_POST['dob'];
$Genre = $_POST['Genre'];


$sql = "INSERT INTO " .$db_table. " (`name`, `user_email`, `dob`, `genre`, `user_name`, `user_password`)
 VALUES ('$name','$email','$DOB','$Genre','$email','$password')";

mysqli_query($connection,$sql);

header("Location:Index.php");

?>