<?php

session_start();


$con = mysqli_connect('studmysql01.fhict.local','dbi413156','chabalaquE831999');
mysqli_select_db($con, 'dbi413156');

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$s1 = " select * FROM usertable WHERE name ='$username'  ";
$s2 = " select * FROM usertable WHERE email ='$email' && password ='$password' ";
$result1= mysqli_query($con,$s1);
$num1 = mysqli_num_rows($result1);
$result2= mysqli_query($con,$s2);
$num2 = mysqli_num_rows($result2);

if($num2 == 1){
  $_SESSION['loggedin'] = true;
  $_SESSION['user'] = $result['username'];
  $_SESSION['email']= $email;
  header('location:homepage.php');}
  else {header('location:wrongPasswordOrEmail.html');}




?>
