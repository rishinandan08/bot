<?php
session_destroy();
session_start();

if(isset($_SESSION["User"])){
  header("Location: main.php");
}

 ?>
