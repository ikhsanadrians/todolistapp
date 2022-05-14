<?php 

//databaseserverconfig
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "todolistdb";

$connection = mysqli_connect($servername,$username,$password,$databasename);

if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


  $sql = "SELECT * FROM todo";
  $result = $connection -> query($sql);
  
  // Associative array
  $row = $result -> fetch_assoc();
  
  

  if(isset($_POST["submit"])){
    $isitask = $_POST["todo"];
    

    
  }
  


?>
