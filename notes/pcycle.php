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
  <title>NOTES | pcycle</title>
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
      <span class="w3-xlarge">Notes of physics cycle</span><br>
      <p>(Right click on the file to download)</p>
    </div>
  </div>

  <div class="w3-light-gray">
    <div class="w3-container" id="m2">
      <h4 class="w3-center">Engineering Mathematics-2</h4>
      <div style="padding:25px 16px">
        <div class="doc">
          <p>Syllabus</p>
          <iframe src="files/m2/M2 syllabus.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 1</p>
          <iframe src="files/m2/M2-Module-1.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 2</p>
          <iframe src="files/m2/M2-Module-2.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 3</p>
          <iframe src="files/m2/M2-Module-3.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 4</p>
          <iframe src="files/m2/M2-Module-4.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 5</p>
          <iframe src="files/m2/M2-Module-5.pdf"></iframe>
        </div>
      </div>
    </div>

    <div class="w3-container" id="Physics">
      <h4 class="w3-center">Physics</h4>
      <div style="padding:25px 16px">
        <div class="doc">
          <p>Syllabus</p>
          <iframe src="files/phy/phy syllabus.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 1(part 1)</p>
          <iframe src="files/phy/phy-Unit1(1).pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 1(part 2)</p>
          <iframe src="files/phy/phy-Unit1(2).pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 2</p>
          <iframe src="files/phy/phy-Unit2.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 3</p>
          <iframe src="files/phy/phy-Unit3.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 4</p>
          <iframe src="files/phy/phy-Unit4.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 5</p>
          <iframe src="files/phy/phy-Unit5.pdf"></iframe>
        </div>
      </div>
    </div>

    <div class="w3-container" id="English">
      <h4 class="w3-center">English</h4>
      <div style="padding:25px 16px">
        <div class="doc">
          <p>Syllabus</p>
          <iframe src="files/eng/eng syllabus.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 1&2</p>
          <iframe src="files/eng/eng-Module 1 & 2.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 3</p>
          <iframe src="files/eng/eng-Module3.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Homophones</p>
          <iframe src="files/eng/eng-homophones.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Sentence Structure Types</p>
          <iframe src="files/eng/eng-Sentence_Structure_Types.pdf"></iframe>
        </div>
      </div>
    </div>

    <div class="w3-container" id="psp">
      <h4 class="w3-center">Problem Solving Through Programming</h4>
      <div style="padding:25px 16px">
        <div class="doc">
          <p>Syllabus</p>
          <iframe src="files/psp/PSP Syllabus.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 1</p>
          <iframe src="files/psp/psp-UNIT-1.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 2</p>
          <iframe src="files/psp/psp-UNIT-2.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 3</p>
          <iframe src="files/psp/psp-UNIT-3.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 4(part 1)</p>
          <iframe src="files/psp/psp-UNIT-4(1).pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 4(part 2)</p>
          <iframe src="files/psp/psp-UNIT-4(2).pdf"></iframe>
        </div>
        <div class="doc">
          <p>Syllabus</p>
          <iframe src="files/psp/psp-UNIT-5.pdf"></iframe>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
