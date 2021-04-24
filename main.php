<?php
  include "check/check.php"
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HUMANIZER BOT</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
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
    .bgimg-1{
      background-image: url('img/main.jpg');
      background-position: bottom center;
      background-repeat: no-repeat;
      background-size: cover;
      min-height: 100%;
    }
    /*Success mgg status*/
    #status {
      width: 90%;
      max-width: 500px;
      text-align: center;
      padding: 10px;
      margin: 0 auto;
      border-radius: 8px;
    }
    #status.success {
      background-color: rgb(211, 250, 153);
      animation: status 4s ease forwards;
    }
    #status.error {
      background-color: rgb(250, 129, 92);
      color: white;
      animation: status 4s ease forwards;
    }
    @keyframes status {
      0% {
        opacity: 1;
        pointer-events: all;
      }
      90% {
        opacity: 1;
        pointer-events: all;
      }
      100% {
        opacity: 0;
        pointer-events: none;
      }
    }

  </style>


<body>

  <!-- Navbar (sit on top) -->
  <div class="w3-top">
    <div class="w3-bar w3-blue w3-card" id="myNavbar">
      <a href="#home" class="w3-bar-item w3-button w3-wide">RANS</a>

      <a href="bot.html" class="w3-bar-item w3-button w3-left">BOT</a>
      <a href="logout.php" class="w3-bar-item w3-button w3-right"><i class="fa fa-lock"></i> LOGOUT</a>

      <!-- Right-sided navbar links -->
      <div class="w3-right w3-hide-small">
        <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
        <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TEAM</a>
        <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> WORK</a>
        <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
      </div>

      <!-- Hide right-floated links on small screens and replace them with a menu icon -->
      <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="_open()">
      <i class="fa fa-bars"></i>
      </a>

    </div>
  </div>


  <!-- Sidebar on small screens when clicking the menu icon -->
  <nav class="w3-sidebar w3-bar-block w3-blue w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
    <a href="javascript:void(0)" onclick="_close()" class="w3-bar-item w3-button w3-large w3-padding-16 w3-black">Close ×</a>
    <a href="#about" onclick="_close()" class="w3-bar-item w3-button">ABOUT</a>
    <a href="#team" onclick="_close()" class="w3-bar-item w3-button">TEAM</a>
    <a href="#work" onclick="_close()" class="w3-bar-item w3-button">WORK</a>
    <a href="#contact" onclick="_close()" class="w3-bar-item w3-button">CONTACT</a>
  </nav>


  <!-- Header with full-height image -->
  <header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
    <div class="w3-display-left w3-text-black" style="padding:48px">
      <span class="w3-jumbo w3-hide-small w3-whit w3-padding-large w3-large w3-margin-top w3-opacityy w3-hover-opacity-off" style="border-radius:20px" >Welcome To <br> Humanizer Bot</span><br>
      <span class="w3-xxlarge w3-hide-large w3-hide-medium">Welcome To Humanizer Bot</span><br><br>
      <span class="w3-large">Get info from anywhere anytime with one click.</span>
      <p><a href="#about" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Learn more about us</a></p>
    </div>
  </header>

<main id="myContainer" class="MainContainer">
  <!-- About Section -->
  <div class="w3-container w3-dark-grey" style="padding:128px 16px" id="about">
    <h3 class="w3-center"><b>ABOUT THE RANS</b></h3>
    <div class="w3-center">
      <p>RANS-an exclusive bot for Jain university that supports students and teachers to build their relationship with each other by knowing essential professional information.it also includes technologies like speech-to-text conversion and vice-versa, image recognition for libraries to check the availability of book or novels, obtain notes for reference, to know the updated calendar of events, current tech news etc.<br>
        With the invention of latest technology, chatbots allows users to complete specific tasks quickly at their own comfort and ease which are accurate, user-friendly, and reliable.</p>
    </div>
    <p class="w3-center w3-large"><b>Key features of our RANS</b></p>
    <div class="w3-row-padding w3-center" style="margin-top:64px">
      <div class="w3-half">
        <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
        <p class="w3-large"><b>Responsive</b></p>
        <p>This particular website is highly responsive as it renders and function efficiently in all the devices,regardless of the screensize, Operating System or browser versions.</p>
      </div>
      <div class="w3-half">
        <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
        <p class="w3-large"><b>Support</b></p>
        <p>The major support that rans provides is the reduction of the manual working system by easing out our work through various innovative technologies which saves a lot of time and effort and also need for connectedness, provides 24/7 services and is approachable as well as user satisfactory.</p>
      </div>
    </div>
  </div>
</main>

  <!-- Team Section -->
  <div class="w3-container" style="padding:95px 16px" id="team">
    <h3 class="w3-center"><b>THE TEAM</b></h3>
    <p class="w3-center w3-large"><b>The supervisors of this website</b></p>
    <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-card">
          <img src="img/rishi.jpg" alt="rishi" style="width:100%">
          <div class="w3-container">
            <h3>T.Sai Mani Rishi Nandan</h3>
            <p class="w3-opacity">TEAM MEMBER</p>
            <p>Student at Jain University and an innovative thinker.</p>
            <div class="w3-xlarge w3-section w3-center">
              <a href="https://www.instagram.com/rishi_nandan2001/" target="_blank"><i class="fa fa-instagram w3-hover-opacity"></i></a>
              <a href="mailto:rishitummalapudi@gmail.com?cc=rans@gmail.com,&subject=Mail from RANS Website&body=Hello Rishi Nandan," target="_blank"><i class="fa fa-envelope w3-hover-opacity"></i></a>
              <a href="https://twitter.com/Rishinandan15" target="_blank"><i class="fa fa-twitter w3-hover-opacity"></i></a>
              <a href="https://www.linkedin.com/in/sai-mani-rishinandan-tummalapudi/" target="_blank"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-card">
          <img src="img/nithusha.jpeg" alt="nithusha" style="width:100%">
          <div class="w3-container">
            <h3>M.B.Nithusha</h3>
            <p class="w3-opacity">TEAM MEMBER</p>
            <p>Student at Jain University and an ambitious and diligent women.</p>
            <div class="w3-xlarge w3-section w3-center">
              <a href="https://www.instagram.com/nithusha_nithu19/" target="_blank"><i class="fa fa-instagram w3-hover-opacity"></i></a>
              <a href="mailto:nithusha19@gmail.com?cc=rans@gmail.com,&subject=Mail from RANS Website&body=Hello Nithusha," target="_blank"><i class="fa fa-envelope w3-hover-opacity"></i></a>
              <a href="https://twitter.com/nithusha12" target="_blank"><i class="fa fa-twitter w3-hover-opacity"></i></a>
              <a href="https://www.linkedin.com/in/nithusha-matta-463aa31b3/" target="_blank"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-card">
          <img src="img/shruthi1.jpeg" alt="shruthi" style="width:100%">
          <div class="w3-container">
            <h3>Shruthi Satish Kumar</h3>
            <p class="w3-opacity">TEAM MEMBER</p>
            <p>Student at Jain University and an enthusiastic learner.</p>
            <div class="w3-xlarge w3-section w3-center">
              <a href="https://www.instagram.com/shruthi__kumar/" target="_blank"><i class="fa fa-instagram w3-hover-opacity"></i></a>
              <a href="mailto:srutisk24@gmail.com?cc=rans@gmail.com,&subject=Mail from RANS Website&body=Hello Shruthi," target="_blank"><i class="fa fa-envelope w3-hover-opacity"></i></a>
              <a href="https://twitter.com/ShruthiSatishK1" target="_blank"><i class="fa fa-twitter w3-hover-opacity"></i></a>
              <a href="https://www.linkedin.com/in/shruthi-satish-kumar-78841a208/" target="_blank"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-card">
          <img src="img/aarti.jpg" alt="aarti" style="width:100%">
          <div class="w3-container">
            <h3>Aarti.B</h3>
            <p class="w3-opacity">TEAM MEMBER</p>
            <p>Student at Jain University and an Adaptable person.</p>
            <div class="w3-xlarge w3-section w3-center">
              <a href="https://www.instagram.com/aarti_ingli/" target="_blank"><i class="fa fa-instagram w3-hover-opacity"></i></a>
              <a href="mailto:aartishrikutty@gmail.com?cc=rans@gmail.com,&subject=Mail from RANS Website&body=Hello Aarti," target="_blank"><i class="fa fa-envelope w3-hover-opacity"></i></a>
              <a href="https://twitter.com/AartiBaskaran" target="_blank"><i class="fa fa-twitter w3-hover-opacity"></i></a>
              <a href="https://www.linkedin.com/in/aarti-shri-696803194/" target="_blank"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Work Section -->
  <div class="w3-container w3-dark-grey" style="padding:95px 16px" id="work">
    <h3 class="w3-center"><b>OUR WORK</b></h3>
    <p class="w3-center w3-large"><b>What we've done for people</b></p>

    <div class="w3-row-padding" style="margin-top:64px">
      <div class="w3-col l3 m6">
        <img src="img/work/logo.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="RANS Logo">
      </div>
      <div class="w3-col l3 m6">
        <img src="img/work/info.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Our RANS provides the required information to students of Jain University">
      </div>
      <div class="w3-col l3 m6">
        <img src="img/work/speech recognition.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Convert Speech to text and vice versa">
      </div>
      <div class="w3-col l3 m6">
        <img src="img/work/image_recognition.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Image Recognition">
      </div>
    </div>
    <div class="w3-row-padding w3-section">
      <div class="w3-col l3 m6">
        <img src="img/work/events-calendar.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Calendar of Events exclusively for Jain University">
      </div>
      <div class="w3-col l3 m6">
        <img src="" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
      </div>
      <div class="w3-col l3 m6">
        <img src="" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
      </div>
      <div class="w3-col l3 m6">
        <img src="" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
      </div>
    </div>
  </div>
  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-blue" onclick="this.style.display='none'">
    <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption" class="w3-opacity w3-large"></p>
    </div>
  </div>


  <!-- Contact Section -->
  <div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
    <h3 class="w3-center"><b>CONTACT</b></h3>
    <p class="w3-center w3-large"><b>Lets get in touch. Send us a message:</b></p>
    <div style="margin-top:48px">
      <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Banglore, India</p>
      <p><i class="fa fa-building fa-fw w3-xxlarge w3-margin-right"></i> Jain (Deemed-to-be) University</p>
      <!--<p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: rans@gmail.com</p>-->
      <br>
      <!-- change the action form-->
      <form action="https://formspree.io/f/moqyqrvp" target="_blank" method="POST" id="my-form">
        <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
        <p>
          <button class="w3-button w3-black" type="submit">
            <i class="fa fa-paper-plane"></i> SEND MESSAGE
          </button>
        </p>
      </form>
      <div id="status"></div>
      <!-- Image of location/map -->
      <map name="imagemap">
        <area shape="circle" coords="600,520,60" href="https://www.google.com/maps/place/Faculty+of+Engineering+and+Technology+-+(FET+JU)/@12.6409923,77.4412916,1530a,35y,90h/data=!3m1!1e3!4m5!3m4!1s0x0:0x424bdd92f039db75!8m2!3d12.6421763!4d77.4399964" alt="Jain University Global Campus" target="_blank">
      </map>
      <img src="img/map.png" class="w3-image w3-greyscale-min" style="width:100%;margin-top:48px" usemap="#imagemap">
    </div>
  </div>


  <!-- Footer -->
  <footer class="w3-center w3-black w3-padding-64">
    <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
    <!--
    <div class="w3-xlarge w3-section">
      <a href="https://www.google.com"><p class="fa fa-facebook-official w3-hover-opacity"></p></a>
      <i class="fa fa-instagram w3-hover-opacity"></i>
      <i class="fa fa-snapchat w3-hover-opacity"></i>
      <i class="fa fa-pinterest-p w3-hover-opacity"></i>
      <i class="fa fa-twitter w3-hover-opacity"></i>
      <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
    -->
    <p>Powered by <a href="#home" title="rans" target="_blank" class="w3-hover-text-green">RANS</a></p>
  </footer>



  <script>
    // Toggle between showing and hiding the sidebar when clicking the menu icon
    var mySidebar = document.getElementById("mySidebar");

    function _open() {
      if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
      } else {
        mySidebar.style.display = 'block';
      }
    }
    // Close the sidebar with the close button
    function _close() {
        mySidebar.style.display = "none";
    }


    //Work Section Modal Image Gallery
    function onClick(element) {
      document.getElementById("img01").src = element.src;
      document.getElementById("modal01").style.display = "block";
      var captionText = document.getElementById("caption");
      captionText.innerHTML = element.alt;
    }


    //Contack status
    window.addEventListener("DOMContentLoaded", function () {
      // get the form elements defined in your form HTML above
      var form = document.getElementById("my-form");
      // var button = document.getElementById("my-form-button");
      var status = document.getElementById("status");
      // Success and Error functions for after the form is submitted
      function success() {
        form.reset();
        status.classList.add("success");
        status.innerHTML = "Thanks!";
      }
      function error() {
        status.classList.add("error");
        status.innerHTML = "Oops! There was a problem.";
      }
      // handle the form submission event
      form.addEventListener("submit", function (ev) {
        ev.preventDefault();
        var data = new FormData(form);
        ajax(form.method, form.action, data, success, error);
      });
    });
    // helper function for sending an AJAX request
    function ajax(method, url, data, success, error) {
      var xhr = new XMLHttpRequest();
      xhr.open(method, url);
      xhr.setRequestHeader("Accept", "application/json");
      xhr.onreadystatechange = function () {
        if (xhr.readyState !== XMLHttpRequest.DONE) return;
        if (xhr.status === 200) {
          success(xhr.response, xhr.responseType);
        } else {
          error(xhr.status, xhr.response, xhr.responseType);
        }
      };
      xhr.send(data);
    }



  </script>
</body>
</html>
