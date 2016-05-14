<?php// include 'connection.php';?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DIANDRA</title>
</head>
<body>
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "codingmum";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//$sql = "SELECT id, firstname, lastname FROM MyGuests";
//$result = $conn->query($sql);
//
//if ($result->num_rows > 0) {
//    // output data of each row
//    while($row = $result->fetch_assoc()) {
//        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//    }
//} else {
//    echo "0 results";
//}
$conn->close();
?>
   <div class="maincontainer">
       <div class="openingtext">
           
           <h1>BANDUNG APPETITE</h1>
       </div>
   </div>
    
</body>
</html>