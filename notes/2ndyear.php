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
  <title>NOTES | 2nd year</title>
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
      <span class="w3-xlarge">2<sup>nd</sup> YEAR</span><br>
      <span class="w3-large">Notes of 3rd and 4th semester</span>
    </div>

    <div class="w3-container w3-light-gray">
      <div class="w3-col l6 m12 w3-dark-gray" style="padding:100px 16px; border:25px">
        <h3 class="w3-center"><b>3<sup>rd</sup> semester Notes</b></h3>
        <div class="w3-center">
          <ul style="list-style-type: none;">
            <li><br><br></li>
            <li><br><a href="3sem.php">Mathematical for Computer Science</a></li>
            <li><br><a href="3sem.php">Data Structures using C</a></li>
            <li><br><a href="3sem.phpl">Digital Electronis</a></li>
            <li><br><a href="3sem.php">OOPS using java</a></li>
            <li><br><a href="3sem.php">Economics for Engineering</a></li>
          </ul>
        </div>
      </div>
      <div class="w3-col l6 m12 w3-gray" style="padding:100px 16px">
        <h3 class="w3-center"><b>4<sup>th</sup> semester Notes</b></h3>
        <div class="w3-center">
          <ul style="list-style-type: none;">
            <li><br><a href="4sem.php" >Linear Algebra and Vector Spaces</a></li>
            <li><br><a href="4sem.php" >Database Management System</a></li>
            <li><br><a href="4sem.php" >Operating System</a></li>
            <li><br><a href="4sem.php" >Computer Organization and Architecture</a></li>
            <li><br><a href="4sem.php" >Design & Analysis of Algorithms</a></li>
            <li><br><a href="4sem.php" >Business Communication and Presentation Skills</a></li>
          </ul>
        </div>
      </div>
    </div>

  </div>

</body>
</html>
