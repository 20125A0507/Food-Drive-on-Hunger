
<html>

<head>
  <title>Donor Details</title>
  <style>
  body{
	    background-image: url("https://media.istockphoto.com/photos/darkness-picture-id136851159?b=1&k=20&m=136851159&s=170667a&w=0&h=Frk0s3pdGNuOX_1IkkcgwWK2GVXBsu19_-Ir-JWqJko=");
			background-repeat: no-repeat;
			background-size: 100%;
			text-align: center;
			font-size: 22px;
			color:white;
			
		}
  th{
    color:red;
    font-size:30;
  }
  td{
    color:yellow;
    font-size:20
  }
  
  
    table
    {
        border: 1px solid #ccc;
        border-collapse: collapse;
    }
   
    table th, table td
    {
        padding: 5px;
        border: 1px solid #ccc;
    }

  </style>




</head>
<body>
	<div class="main">
  <?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "google_login";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    } 
    $loc=$_SESSION['volunloc'];
    $data= "SELECT * FROM donor WHERE Landmark='$loc' ORDER BY Date";
    $result = $conn->query($data);
    if ($result->num_rows > 0) {
      echo "<table cellspacing='30' align='center'>";
      echo "<tr><th>"."Name"."</th><th>"."Address"."</th><th>"."Landmark"."</th><th>"."Email"."</th><th>"."Date"."</th><th>"."Time"."</th><th>"."Mobile number"."</th></tr>";
     
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["Name"]."</td><td>".$row["Address"]."</td><td>".$row["Landmark"]."</td><td>".$row["Email"]."</td><td>".$row["Date"]."</td><td>".$row["Time"]."</td><td>".$row["Telephone"]."</td></tr>";

          
      }
      echo "</table";
  }
   
    else{
        echo("<script>alert('No donars')</script>");
        echo("<script>window.location='volunteer.php';</script>");
    }
    
    $conn->close();
    ?>



   



		
	</div>


</body>
</html>















