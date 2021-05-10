<?php
session_start();

if(!isset($_SESSION["User"])){
  header("Location: homepage.php");
}

include "navbar.php";
?>


<!DOCTYPE html>
<html>
<head>
  <title>NOTES | 3rd sem</title>
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
      <span class="w3-xlarge">Notes of 3<sup>rd</sup> semester</span><br>
      <p>(Right click on the file to download)</p>
    </div>
  </div>

  <div class="w3-light-gray">
    <div class="w3-container" id="m3">
      <h4 class="w3-center">Mathematical for Computer Science</h4>
      <div style="padding:25px 16px">
        <div class="doc">
          <p>Syllabus</p>
          <iframe src="files/m3/M3 syllabus.pdf"></iframe>
        </div>
      </div>
    </div>

    <div class="w3-container" id="ds">
      <h4 class="w3-center">Data Structures using C</h4>
      <div style="padding:25px 16px">
        <div class="doc">
          <p>Syllabus</p>
          <iframe src="files/ds/DS syllabus.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 1</p>
          <iframe src="files/ds/ds Unit 1.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 2</p>
          <iframe src="files/ds/ds Unit 2.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 3(part 1)</p>
          <iframe src="files/ds/ds Unit 3(1).pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 3(part 2)</p>
          <iframe src="files/ds/ds Unit 3(2).pdf"></iframe>
        </div>
        <div class="doc">
          <p>BFS</p>
          <iframe src="files/ds/ds-(BFS).pdf"></iframe>
        </div>
        <div class="doc">
          <p>DFS</p>
          <iframe src="files/ds/ds-(DFS).pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 5(part 1)</p>
          <iframe src="files/ds/ds Unit 5(1).pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 5(part 2)</p>
          <iframe src="files/ds/ds Unit 5(2).pdf"></iframe>
        </div>
      </div>
    </div>

    <div class="w3-container" id="de">
      <h4 class="w3-center">Digital Electronis</h4>
      <div style="padding:25px 16px">
        <div class="doc">
          <p>Syllabus</p>
          <iframe src="files/de/Syllabus_DE.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 1</p>
          <iframe src="files/de/de unit 1-binary codes.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 2</p>
          <iframe src="files/de/de unit 2.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 3</p>
          <iframe src="files/de/de unit 3.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 4(part 1)</p>
          <iframe src="files/de/de unit 4(1).pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 4(part 2)</p>
          <iframe src="files/de/de unit 4.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 5(part 1)</p>
          <iframe src="files/de/de unit 5-Counters.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 5(part 2)</p>
          <iframe src="files/de/de unit 5.pdf"></iframe>
        </div>
      </div>
    </div>

    <div class="w3-container" id="java">
      <h4 class="w3-center">OOPS using java</h4>
      <div style="padding:25px 16px">
        <div class="doc">
          <p>Syllabus</p>
          <iframe src="files/java/java syllabus.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 1</p>
          <iframe src="files/java/java Module 1.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 2</p>
          <iframe src="files/java/java Module 2.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 3</p>
          <iframe src="files/java/java Module 3-String Handling and Exception Handling.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 4(part 1)</p>
          <iframe src="files/java/java Module 4- Multithread programming.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 4(part 2)</p>
          <iframe src="files/java/java Module 4-Interface and Package.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 5(part 1)</p>
          <iframe src="files/java/java Module 5-enumerations.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 5(part 2)</p>
          <iframe src="files/java/java Module 5- Swings.pdf"></iframe>
        </div>
      </div>
    </div>

    <div class="w3-container" id="eco">
      <h4 class="w3-center">Economics for Engineering</h4>
      <div style="padding:25px 16px">
        <div class="doc">
          <p>Syllabus</p>
          <iframe src="files/Economics/economics syllabus.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 1</p>
          <iframe src="files/Economics/Eco unit 1.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 2</p>
          <iframe src="files/Economics/Eco unit 2.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 3</p>
          <iframe src="files/Economics/Eco unit 3.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 4</p>
          <iframe src="files/Economics/Eco unit 4.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 5</p>
          <iframe src="files/Economics/Eco unit 5.pdf"></iframe>
        </div>
      </div>
    </div>

  </div>
</body>
</html>
