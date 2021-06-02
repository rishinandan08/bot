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
  <title>NOTES | 5th sem</title>
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
.doc{
  display:inline-block;
  width: 24%;
  height: 30%;
}
@media (max-width:1000px){
  .doc{
    width:40%;
  }
}
</style>

<body>

  <div class="w3-container w3-dark-gray">
    <div class="w3-center" style="padding:60px">
      <span class="w3-xxlarge w3-hide-small w3-padding-large w3-large w3-margin-top w3-opacityy w3-hover-opacity-off" style="border-radius:20px">Welcome to THE NOTES</span><br>
      <span class="w3-xlarge w3-hide-large w3-hide-medium">Welcome to THE NOTES</span><br>
      <span class="w3-xlarge">Notes of 5<sup>th</sup> semester</span><br>
      <p>(Right click on the file to download)</p>
    </div>
  </div>

  <div class="w3-light-gray">
    <div class="w3-container" id="m1">
      <h4 class="w3-center">Engineering Mathematics-1</h4>
      <div style="padding:25px 16px">
        <div class="doc">
          <p>Total Notes</p>
          <iframe src="files/m1.pdf"></iframe>
        </div>
      </div>
    </div>

    <div class="w3-container" id="chemistry">
      <h4 class="w3-center">Chemistry</h4>
      <div style="padding:25px 16px">
        <div class="doc">
          <p>Syllabus</p>
          <iframe src="files/che/Chemistry syllabus.pdf"></iframe>
        </div>
      </div>
    </div>

    <div class="w3-container" id="electrical">
      <h4 class="w3-center">Basic of Electrical Engineering</h4>
      <div style="padding:25px 16px">
        <div class="doc">
          <p>Syllabus</p>
          <iframe src="files/electrical/electrical.pdf"></iframe>
        </div>
      </div>
    </div>

    <div class="w3-container" id="Sociology">
      <h4 class="w3-center">Sociology</h4>
      <div style="padding:25px 16px">
        <div class="doc">
          <p>Syllabus</p>
          <iframe src="files/Sociology/Sociology syllabus.pdf"></iframe>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
