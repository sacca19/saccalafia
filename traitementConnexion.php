<?php 

  $db=mysqli_connect('localhost','root','','connexion');
  
  $email = $_POST['email'];
  $passwordd= $_POST['passwordd'];
  
  $sql="SELECT * FROM users WHERE email='".$email."' AND passwordd='".$passwordd."'";
  
  $result= mysqli_query($db,$sql);
  $count = mysqli_num_rows($result);
  
  if($count == 1){
      echo json_encode("Success");
  }else{
      echo json_encode("echec");
  }

?>