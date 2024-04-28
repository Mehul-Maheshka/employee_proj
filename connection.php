<?php
// error_reporting(0);  //error_reporting, this function don't show the report of error
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "responsiveform3";

//To establish connection of this page with database
$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
  //  echo "Connection ok";
}
else
{
  // mysqli_connect_error, this function tells about the error.
  echo "Connection failed".mysqli_connect_error();
}
?>

0