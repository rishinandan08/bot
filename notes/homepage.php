<?php
session_start();

if(!isset($_SESSION["username"])){
  header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>NOTES | home</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="img/RANS.png" type="image/x-icon">
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
.footer{
  bottom:0;
}
</style>

<body>
  <!-- Navbar (sit on top) -->
  <div class="w3-top">
    <div class="w3-bar w3-blue w3-card" id="myNavbar">
      <a href="../main.php" class="w3-bar-item w3-button w3-wide">RANS</a>
      <a href="../chatbot/build/index.html" class="w3-bar-item w3-button w3-left">BOT</a>
      <a href="../logout.php" class="w3-bar-item w3-button w3-right w3-black"><i class="fa fa-lock"></i> LOGOUT</a>
    </div>
  </div>

  <!-- Intro Section -->
  <div class="w3-container w3-dark-grey" style="padding:100px 16px" id="home">
    <h3 class="w3-center"><b>WELCOME TO "THE NOTES"</b></h3>
    <div class="w3-center">
      <p><bold>Here you may all find the notes of every year(CSE-AI)<br>“Think before you speak. Read before you think.” <sub>– Fran Lebowitz</sub><br>I hope you all enjoy while reading..<br></bold></p>
    </div>
    <p><a href="#notes" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Go to the Notes</a></p>
  </div>

  <!-- Year Section -->
  <div class="w3-container" style="padding:90px 16px">
    <h3 class="w3-center" id="notes"><b>THE NOTES</b></h3>
    <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-card" style="border-radius:10px">
          <div class="w3-container w3-center">
            <h3>1<sup>st</sup> YEAR NOTES</h3>
            <p>Click on the below link to acess the notes.</p><br>
            <p><a href="1styear.php" class="w3-hover-opacity" style="text-decoration: none">physics cycle - click here</a></p>
            <p><a href="1styear.php" class="w3-hover-opacity"  style="text-decoration: none">chemistry cycle - click here</a></p>
          </div>
        </div>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-card" style="border-radius:10px">
          <div class="w3-container w3-center">
            <h3>2<sup>nd</sup> YEAR NOTES</h3>
            <p>Click on the below link to acess the notes.</p><br>
            <p><a href="2ndyear.php" class="w3-hover-opacity" style="text-decoration: none">3<sup>rd</sup> Semester - click here</a></p>
            <p><a href="2ndyear.php" class="w3-hover-opacity" style="text-decoration: none">4<sup>th</sup> Semester - click here</a></p>
          </div>
        </div>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-card" style="border-radius:10px">
          <div class="w3-container w3-center">
            <h3>3<sup>rd</sup> TEAR NOTES</h3>
            <p>Click on the below link to acess the notes.</p><br>
            <p><a href="3rdyear.php" class="w3-hover-opacity" style="text-decoration: none">5<sup>th</sup> Semester - click here</a></p>
            <p><a href="3rdyear.php" class="w3-hover-opacity" style="text-decoration: none">6<sup>th</sup> Semester - click here</a></p>
          </div>
        </div>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-card" style="border-radius:10px">
          <div class="w3-container w3-center">
            <h3>4<sup>th</sup> TEAR NOTES</h3>
            <p>Click on the below link to acess the notes.</p><br>
            <p><a href="4thyear.php" class="w3-hover-opacity" style="text-decoration: none">7<sup>th</sup> Semester - click here</a></p>
            <p><a href="4thyear.php" class="w3-hover-opacity" style="text-decoration: none">8<sup>th</sup> Semester - click here</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
