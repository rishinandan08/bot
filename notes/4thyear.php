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
  <title>NOTES | 4th year</title>
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
      <span class="w3-xlarge">4<sup>TH</sup> YEAR</span><br>
      <span class="w3-large">Notes of 7th and 8th semester</span>
    </div>

    <div class="w3-container w3-light-gray">
      <div class="w3-col l6 m12 w3-dark-gray" style="padding:100px 16px; border:25px">
        <h3 class="w3-center"><b>7<sup>th</sup> semester Notes</b></h3>
        <div class="w3-center">
          <ul style="list-style-type: none;">
            <li><br><a href="soon.html">Genetic Algorithms and Application</a></li>
            <li><br><a href="soon.html">Robotics</a></li>
            <li><br><a href="soon.html">Graphical Models and Bayesian Networks</a></li>
            <li><br><a href="soon.html">Machine Learning Algorithms</a></li>
            <li><br><a href="soon.html">noSQL Database</a></li>
            <li><br><a href="soon.html">Design and Analytics of Experiments</a></li>
            <li><br><a href="soon.html">Deep learning</a></li>
            <li><br><a href="soon.html">Pattern Recognition</a></li>
            <li><br><a href="soon.html">Advanced Big Data Analysis</a></li>
          </ul>
        </div>
      </div>
      <div class="w3-col l6 m12 w3-gray" style="padding:100px 16px">
        <h3 class="w3-center"><b>8<sup>th</sup> semester Notes</b></h3>
        <div class="w3-center">
          <ul style="list-style-type: none;">
            <li><br><br></li>
            <li><br><a href="soon.html">Reinforcement Learning</a></li>
            <li><br><a href="soon.html">Recommender System</a></li>
            <li><br><a href="soon.html">Time Series Analysis</a></li>
            <li><br><a href="soon.html">Application of AI and ML in Robotics</a></li>
            <li><br><a href="soon.html">Expert System</a></li>
            <li><br><a href="soon.html">AI platforms</a></li>
            <li><br><br><br><br></li>
          </ul>
        </div>
      </div>
    </div>

  </div>

</body>
</html>
