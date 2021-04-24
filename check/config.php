<?php

$conn = mysqli_connect('127.0.0.1','bot','botpass','bot');
if(!$conn){
  echo 'Connection error: ' . mysqli_connect_error();
}

?>
