<?php 

//include('session.php');

require_once('config.php');
$db_table = "personalinfo";



$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$DOB = $_POST['dob'];
$Genre = $_POST['Genre'];


$sql = "INSERT INTO " .$db_table. " (`name`, 'username', `user_email`, `dob`, `genre`, `user_name`, `user_password`)
 VALUES ('$name','$username','$email','$DOB','$Genre','$email','$password')";

mysqli_query($connection,$sql);

header("Location:Index.php");

?>