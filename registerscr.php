<?php

session_start();
$con = mysqli_connect('studmysql01.fhict.local','dbi413156','chabalaquE831999');
mysqli_select_db($con, 'dbi413156');

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$s1 = " select * FROM usertable WHERE name ='$username'  ";
$s2 = " select * FROM usertable WHERE email ='$email'  ";
$result1= mysqli_query($con,$s1);
$num1 = mysqli_num_rows($result1);
$result2= mysqli_query($con,$s2);
$num2 = mysqli_num_rows($result2);

if($num1 ==1 || $num2==1){
  echo " Username or email has already taken";
}else {
  $reg = " insert into usertable(name, email, password) values ('$username','$email','$password')";
  mysqli_query($con, $reg);
  echo "Success";
  header('location:login.html');
}
  //$form_email = $_POST['email'];
  //$form_password = $_POST['password'];
  //$form_username = $_POST['username'];

  // check database for credentials
  //$dbusername = 'root';
  //$dbpassword = 'chabalaquE831999';
  //Connect to DB
  //$conn = new PDO('mysql:host=localhost;dbname=user',$dbusername,$dbpassword);

  // Query a user with a password
  //$sql = 'insert into registration(name, email, password) VALUES (:username, :email, :password)';

  //$stmt = $conn->prepare($sql);

  // Exeute the query with the variables


  //if($stmt->execute([':username' => $form_username, ':password' => $form_password,':email' => $form_email]) === false){
    //echo  'registeration unsuccessful!';
    //header("Location: index.html");


    //}else{
    //echo "The new user is created ";
  //  header("Location: login.html");

    //}

    // $sql_u = "SELECT COUNT(*) AS nrU FROM registration WHERE name='$username'";
  	//$sql_e = "SELECT COUNT(*) AS nrE FROM registration WHERE email='$email'";
    //$queryU = mysql_query($sql_u);
    //$rowU = mysql_fetch_assoc($queryU);
    //$queryE = mysql_query($sql_e);
    //$rowE = mysql_fetch_assoc($queryE);

    //if ($rowU['nrU'] == 0 && $rowE['nrE'] == 0){
        //$sql = 'insert into registration(name, email, password) VALUES (:username, :email, :password)';
        //$query2 = mysql_query($sql);

        //if ($query2){
          //  header("Location: LiSuPage.php");
        //} else {
          //  echo "Error.";
        //}
    //} else {
      //  echo "Email existed!";
    //}

?>
