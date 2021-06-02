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
  <title>NOTES | 4th sem</title>
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
      <span class="w3-xlarge">Notes of 4<sup>th</sup> semester</span><br>
      <p>(Right click on the file to download)</p>
    </div>
  </div>

  <div class="w3-light-gray">
    <div class="w3-container" id="la">
      <h4 class="w3-center">Linear Algebra and Vector Spaces</h4>
      <div style="padding:25px 16px">
        <div class="doc">
          <p>Module 1</p>
          <iframe src="files/la/unit 1 notes_la.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 2</p>
          <iframe src="files/la/unit 2 notes_la.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 3</p>
          <iframe src="files/la/unit3.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 4(part 1)</p>
          <iframe src="files/la/unit4.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 4(part 2)</p>
          <iframe src="files/la/Module_04_LT.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 5</p>
          <iframe src="files/la/unit5.pdf"></iframe>
        </div>
      </div>
    </div>

    <div class="w3-container" id="dbms">
      <h4 class="w3-center">Database Management System</h4>
      <div style="padding:25px 16px">
        <div class="doc">
          <p>Syllabus</p>
          <iframe src="files/dbms/Database Management Systems.pdf"></iframe>
        </div>
      </div>
    </div>

    <div class="w3-container" id="os">
      <h4 class="w3-center">Operating System</h4>
      <div style="padding:25px 16px">
        <div class="doc">
          <p>TestBook</p>
          <iframe src="files/os/Operating_System_Concepts,_8th_Edition[A4].pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 1</p>
          <iframe src="files/os/Unit1.pdf"></iframe>
        </div>
      </div>
    </div>

    <div class="w3-container" id="coa">
      <h4 class="w3-center">Computer Organization and Architecture</h4>
      <div style="padding:25px 16px">
        <div class="doc">
          <p>Syllabus</p>
          <iframe src="files/coa/COA SYLLABUS.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 1(part1)</p>
          <iframe src="files/coa/1-Advantages of Computers.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 1(part2)</p>
          <iframe src="files/coa/1-Basic Operational Concepts of Computer.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 2</p>
          <iframe src="files/coa/2-Fixed Point and Floating Point Number Representations.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 3</p>
          <iframe src="files/coa/3-Bus System for 4 Registers.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 4</p>
          <iframe src="files/coa/4-Computer Instructions.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 5(part 1)</p>
          <iframe src="files/coa/5-RISC and CISC.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 5(part 2)</p>
          <iframe src="files/coa/5-Types of CPU Organizations.pdf"></iframe>
        </div>
        <div class="doc">
          <p>TextBook-Mano M.M</p>
          <iframe src="files/coa/Mano M.M. - Computer System Architecture-PH (1992).pdf"></iframe>
        </div>
        <div class="doc">
          <p>TextBook-William Stalings</p>
          <iframe src="files/coa/William Stallings - Computer Organization and Architecture -Prentice Hall (2002).pdf"></iframe>
        </div>
      </div>
    </div>

    <div class="w3-container" id="daa">
      <h4 class="w3-center">Design & Analysis of Algorithms</h4>
      <div style="padding:25px 16px">
        <div class="doc">
          <p>Syllabus</p>
          <iframe src="files/daa/DAA SYLLABUS.pdf"></iframe>
        </div>
      </div>
    </div>

    <div class="w3-container" id="bussiness">
      <h4 class="w3-center">Business Communication and Presentation Skills</h4>
      <div style="padding:25px 16px">
        <div class="doc">
          <p>Module 1</p>
          <iframe src="files/bussiness/ASL_IT_BCPSk_Module I_Principles of Effective Written Communication_v2.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 2</p>
          <iframe src="files/bussiness/ASL_IT_BCPSk_Module II_Letter Writing.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 3</p>
          <iframe src="files/bussiness/ASL_IT_BCPSk_Module III_Email and Memo Writing.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 4</p>
          <iframe src="files/bussiness/ASL_IT_BCPSk_Module IV_Précis Writing  Report Writing.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 5</p>
          <iframe src="files/bussiness/ASL_IT_BCPSk_Module V_Resume Writing.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 6</p>
          <iframe src="files/bussiness/ASL_IT_BCPSk_Module VI_Conducting Effective Meetings.pdf"></iframe>
        </div>
        <div class="doc">
          <p>Module 7</p>
          <iframe src="files/bussiness/ASL_IT_BCPSk_Module VII_Presentation Skills.pdf"></iframe>
        </div>
      </div>
    </div>

  </div>
</body>
</html>
