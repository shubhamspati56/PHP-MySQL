<?php
$servername ="localhost";
$username ="root";
$password = "";
$dbname = "student_db";

//create connection 
$conn = mysqli_connect($servername,$username,$password,$dbname);
// Check connection 
if(!$conn){
    die("Connetion failed:".mysqli_connect_error());

}
echo "Connected successfully";
?>