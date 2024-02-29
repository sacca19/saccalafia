<?php
 
header('access-control-allow-origin: *');
header('Access-Control-Allow-Headers: *');
$HostName = "localhost";
$DatabaseName = "connexion";
$HostUser = "root";
$HostPass = ""; 
 
$con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
 
// Storing the received JSON into $json variable.
$json = file_get_contents('php://input');
 
// Decode the received JSON and Store into $obj variable.
$obj = json_decode($json,true);
 
$article= $_POST['article'];
$prix = $_POST['prix'];
$description= $_POST['descriptions'];
$quantite= $_POST['quantite'];
$categorie = $_POST['categorie'];

 	 // Creating SQL query and insert the record into MySQL database table.
	$Sql_Query =  "INSERT INTO produits(article,prix,descriptions,quantite,categorie) VALUES ('$article','$prix','$description','$quantite','$categorie')";
	 
	 if(mysqli_query($con,$Sql_Query)){
	 
		 // If the record inserted successfully then show the message.
		$MSG = 'User Registered Successfully' ;
		 
		// Converting the message into JSON format.
		$json = json_encode($MSG);
		 
		// Echo the message.
		 echo $json ;
	 
	 }
	 else{
	 
  echo "Error: " . $Sql_Query . "<br>" . $con->error;	 
	 }
 mysqli_close($con);
?>