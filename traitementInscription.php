<?php
 
$HostName = "localhost";
$DatabaseName = "connexion";
$HostUser = "root";
$HostPass = ""; 
 
$con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
 
$nom= $_POST['nom'];
$prenom= $_POST['prenom'];
$pseudo= $_POST['pseudo'];
$email= $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$passwordd = $_POST['passwordd'];

 	 // Creating SQL query and insert the record into MySQL database table.
	$Sql_Query =  "INSERT INTO users (nom,prenom,pseudo,email,phonenumber,passwordd) VALUES ('$nom','$prenom','$pseudo','$email','$phonenumber','$passwordd')";
	 
	 if(mysqli_query($con,$Sql_Query)){
	 
		echo "User Registered Successfully";
	 
	 }
	 else{
	 
  echo "Error: " . $Sql_Query . "<br>" . $con->error;	 
	 }
 mysqli_close($con);
?>