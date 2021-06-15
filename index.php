<?php
  include "check/check.php";

  // if(isset($_POST['submit'])){
  //
  //   $User = mysqli_real_escape_string($conn, $_POST['user']);
  //   $pass = $_POST['pass'];
  //
  //   $sql= "SELECT * from login where User='$User' AND pass='$pass'";
  //   $result = mysqli_query($conn, $sql) or die("failed to query database");
  //
  //   if(mysqli_num_rows($result) > 0){
  //     while($row = mysqli_fetch_assoc($result)){
  //           session_start();
  //           $_SESSION["User"] = $row['User'];
  //           $_SESSION["user_id"] = $row['ID'];
  //
  //           header("Location: main.php");
  //     }
  //   }else{
  //     echo '<script language="javascript">';
  //     echo 'alert("Invalid Username or Password")';
  //     echo '</script>';
  //        }
  // }

    $host="remotemysql.com";
    $username="AQcSrmYT6v";
    $password="royIHp4kxd";
    $database="AQcSrmYT6v";
    $message="";
  try{
    $connect = new PDO("mysql:host=$host; dbname=$database", $username,$password);

    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if(isset($_POST["submit"]))
    {
      if(empty($_POST["username"]) || empty($_POST["password"]))
      {
        $message='<label>ALL fields are required</label>';
      }
      else
      {
        $query="SELECT * FROM login WHERE username = :username AND password = :password";
        $statement = $connect->prepare($query);
        $statement->execute(

          array(

            'username' => $_POST["username"],
            'password' => $_POST["password"]

          )
        );

        $count = $statement->rowCount();
        if($count > 0)
        {
          session_start();
          $_SESSION["username"] = $_POST["username"];
          header("location:main.php");
        }
        else
        {
              echo '<script language="javascript">';
              echo 'alert("Invalid Username or Password")';
              echo '</script>';

        }
      }
    }
  }
  catch(PDOException $error)
  {
    $message = $error->getMessage();
  }

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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

  /*login page style start*/
      .body {
      background-color: #F3EBF6;
      font-family: 'Ubuntu', sans-serif;
      }

      .bot {
      padding-top: 40px;
      color: #00BFFF;
      font-family: 'Ubuntu', sans-serif;
      font-weight: bold;
      font-size: 23px;
      }
      .un {
      width: 76%;
      color: #00BFFF;
      font-weight: 700;
      font-size: 14px;
      letter-spacing: 1px;
      background: rgba(136, 126, 126, 0.04);
      padding: 10px 20px;
      border: none;
      border-radius: 20px;
      outline: none;
      box-sizing: border-box;
      border: 2px solid rgba(0, 0, 0, 0.02);
      margin-bottom: 50px;
      margin-left: 46px;
      text-align: center;
      margin-bottom: 27px;
      font-family: 'Ubuntu', sans-serif;
      }
      form.form1 {
      padding-top: 30px;
      }
      .pass {
      width: 76%;
      color: #00BFFF;
      font-weight: 700;
      font-size: 14px;
      letter-spacing: 1px;
      background: rgba(136, 126, 126, 0.04);
      padding: 10px 20px;
      border: none;
      border-radius: 20px;
      outline: none;
      box-sizing: border-box;
      border: 2px solid rgba(0, 0, 0, 0.02);
      margin-bottom: 50px;
      margin-left: 46px;
      text-align: center;
      margin-bottom: 27px;
      font-family: 'Ubuntu', sans-serif;
      }
      .un:focus, .pass:focus {
      border: 2px solid rgba(0, 0, 0, 0.18) !important;
      }
      .btn-login {
      cursor: pointer;
      border-radius: 5em;
      color: #fff;
      background: linear-gradient(to right, #1E90FF, #00BFFF);
      border: 0;
      padding-left: 40px;
      padding-right: 40px;
      padding-bottom: 10px;
      padding-top: 10px;
      font-family: 'Ubuntu', sans-serif;
      margin-left: 35%;
      font-size: 14px;
      box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
      }
      .trouble {
      text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
      color: #00BFFF;
      padding-top: 20px;
      text-decoration: none;
      }
      /*password visable*/
      .eye {
        position: absolute;
        color: white;
        margin-top: 15px;
        margin-left: 5px;
      }
      #hide1{
        display: none;
      }

      /* popup style*/
      .Modal {
        display: block;
        position: fixed;
        left: 0;
        top: 0;
        z-index: 9999;
        width: 100%;
        height: 100%;
        padding-top: 50px;
        background-color: black;
        background-color: rgba(0, 0, 0, 0.4);
        -webkit-transition: 0.5s;
        overflow: auto;
        transition: all 0.3s linear;
      }
      .Modal-content {
        background-color: #000000;
        margin: 7em auto;
        padding: 10px;
        border-radius: 4px;
        width: 350px;
        height: 400px;
        flex-direction: column;
        justify-content: space-between;
        padding: 0.75rem;
        border-radius: 1.5em;
        box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
      }
      .ModalOpen { overflow: hidden; }
      .is-hidden { display: none; }
      .is-visuallyHidden { opacity: 0; }

      /*style and position of the close button*/
      .Close {
        color: #aaaaaa;
        float: right;
        font-size: 16px;
      }
      .Close:hover, .Close:focus {
        color: #00BFFF;
        text-decoration: none;
        cursor: pointer;
      }

      /*blur the main content using CSS3 filters*/
      .is-blurred {
        filter: blur(2px);
        -webkit-filter: blur(2px);
      }

  /*login page style end*/

  @media screen and (max-width: 600px) {
  .main {
      border-radius: 0px;
    }
  }

</style>

  <body>
    <!-- Navbar (sit on top) -->
    <div class="w3-top">
      <div class="w3-bar w3-blue w3-card" id="myNavbar">
        <a href="#home" class="w3-bar-item w3-button w3-wide">RANS</a>
        <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
        <a class="w3-bar-item w3-button w3-right" id="myBtn"><i class="fa fa-unlock"></i> LOGIN</a>
    </div>
  </div>




    <!-- Header with full-height image -->
    <header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
      <div class="w3-display-left w3-text-black" style="padding:48px">
        <?php if(isset($message)){echo '<label class="w3-red">'.$message.'</label>';}?><br>
        <span class="w3-jumbo w3-hide-small w3-padding-large w3-large w3-margin-top w3-opacityy w3-hover-opacity-off" style="border-radius:20px" >Welcome To <br> Humanizer Bot</span><br>
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
      <a class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off w3-center">Login to access the RANS</a>
    </div>
  </main>

    <!--login page-->
    <!-- Modal container it includes the overlay -->
    <div id="myModal"class="Modal is-hidden is-visuallyHidden">
      <!-- Modal content -->
      <div class="Modal-content">
        <span id="closeModal" class="Close">&times;</span>
        <p class="bot" align="center">Bot</p>
        <form class="form1" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
          <?php if(isset($message)){echo '<label>'.$message.'</label>';}?>
          <!-- <input class="un " name="user" type="text" align="center" placeholder="USN" required>
          <input id="visable" class="pass" name="pass" type="password" align="center" placeholder="DDMMYYYY" required> -->
          <input class="un " name="username" type="text" align="center" placeholder="USN" required>
          <input id="visable" class="pass" name="password" type="password" align="center" placeholder="DDMMYYYY" required>

          <span class="eye" onclick="vis()">
            <i id="hide1" class="fa fa-eye"></i>
            <i id="hide2" class="fa fa-eye-slash"></i>
          </span>
          <input class="btn-login" name="submit" type="submit" value="login" align="center">
        </form>
      </div>
    </div>
  </body>

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

    //password visability
    function vis() {
      var x = document.getElementById("visable");
      var y = document.getElementById("hide1");
      var z = document.getElementById("hide2");

      if(x.type === 'password'){
        x.type = "text";
        y.style.display = "block";
        z.style.display = "none";
      }
      else {
        x.type = "password";
        y.style.display = "none";
        z.style.display = "block";
      }

    }


    //loginpage popup and blur the background
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the main container and the body
    var body = document.getElementsByTagName('body');
    var container = document.getElementById('myContainer');

    // Get the open button
    var btnOpen = document.getElementById("myBtn");

    // Get the close button
    var btnClose = document.getElementById("closeModal");

    // Open the modal
    btnOpen.onclick = function() {
        modal.className = "Modal is-visuallyHidden";
        setTimeout(function() {
          container.className = "MainContainer is-blurred";
          modal.className = "Modal";
        }, 100);
        container.parentElement.className = "ModalOpen";
    }

    // Close the modal
    btnClose.onclick = function() {
        modal.className = "Modal is-hidden is-visuallyHidden";
        body.className = "";
        container.className = "MainContainer";
        container.parentElement.className = "";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.className = "Modal is-hidden";
            body.className = "";
            container.className = "MainContainer";
            container.parentElement.className = "";
        }
    }

  </script>

<?php
  include "footer.php";
 ?>
</html>
