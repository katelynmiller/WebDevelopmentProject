<?php 

include('session.php');

require_once('config.php');
$db_table = "personalinfo";



$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$DOB = $_POST['dob'];
$Genre = $_POST['Genre'];


$sql = "UPDATE " .$db_table. " SET 
name = '".$name."' ,
user_email = '".$email."' ,
dob = '".$DOB."' ,
genre = '".$Genre."' WHERE user_name='".$_SESSION["username"]."';";

mysqli_query($connection,$sql);

header("Location:Profile.php");

?>