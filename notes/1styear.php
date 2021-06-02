<?php
session_start();

if(!isset($_SESSION["username"])){
  header("Location: homepage.php");
}

include "navbar.php";
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>NOTES | 1st year</title>
</head>
<style>

body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
body, html {
  height: 100%;
  line-height: 1.8;
}
.w3-bar .w3-button {
  padding: 16px;
}
</style>

<body>

  <div class="w3-container w3-light-gray">
    <div class="w3-center" style="padding:60px">
      <span class="w3-xxlarge w3-hide-small w3-padding-large w3-large w3-margin-top w3-opacityy w3-hover-opacity-off" style="border-radius:20px">Welcome to THE NOTES</span><br>
      <span class="w3-xlarge w3-hide-large w3-hide-medium">Welcome to THE NOTES</span><br>
      <span class="w3-xlarge">1<sup>st</sup> YEAR</span><br>
      <span class="w3-large">Notes of chemisrty cycle and physics cycle</span>
    </div>

    <div class="w3-container">
      <div class="w3-col l6 m12 w3-dark-gray" style="padding:100px 16px">
        <h3 class="w3-center"><b>Chemistry Cycle Notes</b></h3>
        <div class="w3-center">
          <ul style="list-style-type:none">
            <li><br><br></li>
            <li><br><a href="ccycle.php">Engineering Mathematics-1</a></li>
            <li><br><a href="ccycle.php" >Chemistry</a></li>
            <li><br><a href="ccycle.php" >Basic of Electrical Engineering</a><li>
            <li><br><a href="ccycle.php" >Sociology</a></li>
          </ul>
        </div>
      </div>
      <div class="w3-col l6 m12 w3-gray" style="padding:100px 16px; border:25px">
        <h3 class="w3-center"><b>Physics Cycle Notes</b></h3>
        <div class="w3-center">
          <ul style="list-style-type:none">
            <li><br><a href="pcycle.php">Engineering Mathematics-2</a></li>
            <li><br><a href="pcycle.php">Physics</a></li>
            <li><br><a href="pcycle.php">English</a></li>
            <li><br><a href="pcycle.php">Engineering Graphics</a></li>
            <li><br><a href="pcycle.php">Problem Solving Through Programming</a></li>
          </ul>
        </div>
      </div>
    </div>

  </div>

</body>
</html>
