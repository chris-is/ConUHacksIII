<?php

$host="localhost";
$user="root";
$password="";
$email="";
$db="admin";

$link = mysqli_connect( $host, $user, $password, $db);

if ($link ->connect_errno)
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if(isset($_POST['username'])){

  $uname    =$_POST['username'];
  $password =$_POST['password'];

  $sql="SELECT * FROM `loginform` where User='".$uname."' AND Pass='".$password."' limit 1";

  $result=mysqli_query($link,$sql);

  if(mysqli_num_rows($result)==1){
    header('Location: ../ElderHelpApp');
    exit();
  }
  else{
    $data="Didn't Work";
    echo "Didn't work";
    exit();
  }
}

if(isset($_POST['username_reg'])){

  $uname        =$_POST['username_reg'];
  $password     =$_POST['password_reg'];
  $email        =$_POST['email'];
  $confirm_pwd  =$_POST['confirm-password'];

  $sql="SELECT * FROM `loginform` where User='".$uname."' AND Pass='".$password."' limit 1";

  $result=mysqli_query($link,$sql);

  //check if two passwords are equal to each other
  if ($password == $confirm_pwd) {
    //print_r( $_POST ); die();
    //$username = $mysqli->real_escape_string($uname);
    //$email = $mysqli->real_escape_string($email);


    $sql = "INSERT INTO admin (User, Email, Pass) "
    . "VALUES ('$username', '$email', '$password')";

    if ($mysqli_query($link, $sql)){
      echo "Registration succesful! Added $username to the database!";
      //redirect the user to welcome.php
      //header( "location: welcome.php" );
    }
    else {
      echo "Failed to add user";
    }

  }

}



?>
