<?php
  include "check/check1.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Speech to Text Notes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="img/RANS.png" type="image/x-icon">
</head>

<style>
  body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
  .w3-bar .w3-button {
    padding: 16px;
  }
  html, body {
    height:100%;
    line-height: 1.8;
  }
  body {
    font-family: Helvetica, Arial, sans-serif;
    color: #0d122b;
    display: flex;
    flex-direction: column;
  }
  main {
    flex-grow: 2;
    justify-content: space-around;
    align-items: center;
    background-color: #fff;
    border-radius: 12px;
    margin-bottom: 2em;
    padding-top: 4em;
    text-align: center;
  }
  @keyframes bg-pulse {
    0% {
      background-color: #fff;
    }
    50% {
      background-color: #c7ecee;
    }
    100% {
      backgrouond-color: #fff;
    }
  }
  main.speaking {
    animation: bg-pulse 1.5s alternate ease-in-out infinite;
  }
  #result {
    color: #666;
    font-style: italic;
    text-align: center;
  }
  #result .final {
    color: #0d122b;
    font-style: normal;
  }
  button {
    font-size: 18px;
    font-weight: 200;
    padding: 1em;
    width: 200px;
    background: transparent;
    border: 4px solid black;
    border-radius: 4px;
    transition: all 0.4s ease 0s;
    cursor: pointer;
    color: black;
    margin-bottom: 4em;
  }
  a {
    color: #0d122b;
  }
  .error {
    color: #f22f46;
    text-align: center;
  }

</style>

<body>

  <div class="w3-top">
    <div class="w3-bar w3-blue w3-card" id="myNavbar">
      <a href="main.php" class="w3-bar-item w3-button w3-wide">RANS</a>
      <!-- Right-sided navbar links -->
      <div class="w3-hide-small w3-hide-medium">
        <a href="bot.php" class="w3-bar-item w3-button w3-left">BOT</a>
        <a href="#show" class="w3-bar-item w3-button w3-wide w3-left">NOTES</a>
        <a href="logout.php" class="w3-bar-item w3-button w3-right w3-black"><i class="fa fa-lock"></i> LOGOUT</a>
      </div>

      <!-- Hide right-floated links on small screens and replace them with a menu icon -->
      <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large" onclick="_open()">
      <i class="fa fa-bars"></i>
      </a>
      <input class="w3-bar-item w3-padding-16 w3-right" id="searchTxt" type="search" placeholder="Search" aria-label="Search">
    </div>
  </div>

  <!-- Sidebar on small screens when clicking the menu icon -->
  <nav class="w3-sidebar w3-bar-block w3-blue w3-card w3-animate-left w3-hide-large" style="display:none" id="mySidebar">
    <a href="javascript:void(0)" onclick="_close()" class="w3-bar-item w3-button w3-large w3-padding-16 w3-black">Close ×</a>
    <a href="./chatbot/build/index.html" class="w3-bar-item w3-button w3-left">BOT</a>
    <a href="#show" class="w3-bar-item w3-button w3-wide">NOTES</a>
    <a href="logout.php" class="w3-bar-item w3-button w3-right w3-black"><i class="fa fa-lock"></i> LOGOUT</a>
  </nav>

    <main>
    <br>
    <div id="home" class="container my-3">
        <h1>Welcome To Take Notes</h1>
        <button id="button" class="w3-hover-blue"> Start listening</button>
        <p id="message" hidden aria-hidden="true">
          Your browser doesn't support Speech Recognition. Sorry.
        </p>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Add a Note</h5>
                <div class="form-group">
                    <textarea class="form-control" id="addTxt" rows="3"></textarea>
                    <div id="result"></div>
                </div>
                <button class="btn btn-primary" id="addBtn">Add Note</button>
            </div>
        </div>
        <hr>
        <h1 id="show">Your Notes</h1>
        <hr>
        <div id="notes" class="row"> </div>
    </div>
  </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="js/converter.js"></script>
</body>

</html>
