<?php

$User = $_POST['user'];
$pass = $_POST['pass'];

$User = stripcslashes($User);
$pass = stripcslashes($pass);
//$User = mysql_real_escape_string($User);
//$pass = mysql_real_escape_string($pass);

$conn = mysqli_connect('127.0.0.1','bot','botpass','bot');

if(!$conn){
  echo 'Connection error: ' . mysqli_connect_error();
}

$result = mysqli_query($conn,"SELECT * from login where User='$User' AND pass='$pass'")
            or die("failed to query database".mysql_error());
$row = mysqli_fetch_array($result);

//$result=mysqli_query($conn, $sql);

if ($row['User'] == $User && $row['pass'] == $pass ) {
  echo "login success".$row['User'];
}else{
  echo "failed" ;
}

?>
