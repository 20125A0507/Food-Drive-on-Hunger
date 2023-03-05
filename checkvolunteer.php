<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "google_login";
$volunuser = $_POST['volunuser'];
$volunpwd= $_POST['volunpwd'];
$volunloc=$_POST['volunloc'];
$_SESSION['volunloc']=$volunloc;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
$sql= "SELECT * FROM volunteer WHERE username = '$volunuser' AND password = '$volunpwd' AND location='$volunloc' ";
$result = mysqli_query($conn,$sql);
$check = mysqli_fetch_array($result);
if(isset($check)){
    header('Location: donardetails.php');
}
else{
    echo("<script>alert('user not found')</script>");
    echo("<script>window.location='volunteer.html';</script>");
}

$conn->close();
?>















