<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "google_login";
$name=$_POST["Name"];
$address=$_POST["Address"];
$landmark=$_POST["Landmark"];
$telephone=$_POST["Telephone"];

$email=$_POST["EMail"];
$date=$_POST["Date"];
$time=$_POST["Time"];


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO donor(Name,Address,Landmark,Telephone,EMail,Date,Time) VALUES ('$name','$address','$landmark','$telephone','$email','$date','$time')";


if ($conn->query($sql) === TRUE) {

  echo("<script>alert('Submitted')</script>");
  echo("<script>window.location='register.php';</script>");
 
 
} 
else {
  echo("<script>alert('Duplicate data found')</script>");
  echo("<script>window.location='register.php';</script>");
  
}
$delt = "DELETE FROM donor WHERE ts_created < DATE_ADD(NOW(),INTERVAL -2 HOUR)";

if ( ! $conn->query($delt) ) {
}




$conn->close();
?>
