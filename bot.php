<?php
  include "check/check.php";
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="img/RANS.png" type="image/x-icon">
  <title>RANS Window</title>
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
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  button{
    border:none;
    outline: none;
    cursor: pointer;
  }
  body{
    font-family: Arial, Helvetica, sans-serif;
    display: flex;
    justify-content: center;
    height: 100vh;
    width: 100%;
  }
  section{
    max-width: 1100px;
    margin: auto;
    text-align: center;
    padding: 0 1rem;
  }
  h1{
    font-size: 3.5rem;
    margin-bottom: 2rem;
  }
  p{
    font-size: 2rem;
  }
  .chat-btn{
    position: fixed;
    right:50px;
    bottom: 40px;
    background: dodgerblue;
    color: white;
    width:60px;
    height: 60px;
    border-radius: 50%;
    opacity: 0.8;
    transition: opacity 0.3s;
    box-shadow: 0 5px 5px rgba(0,0,0,0.4);
  }
  .chat-btn:hover, .submit:hover, #emoji-btn:hover{
    opacity: 1;
  }
  .chat-popup{
    display: none;
    position: fixed;
    bottom:80px;
    right:120px;
    height: 550px;
    width: 450px;
    background-color: white;
    /* display: flex; */
    flex-direction: column;
    justify-content: space-between;
    padding: 0.75rem;
    box-shadow: 5px 5px 5px rgba(0,0,0,0.4);
    border-radius: 10px;
  }
  .show{
    display: flex;
  }
  .chat-area{
    height: 80%;
    overflow-y: auto;
    overflow-x: hidden;
  }
  .income-msg{
    display: flex;
    align-items: center;
  }
  .avatar{
    width:45px;
    height: 45px;
    border-radius: 50%;
    object-fit: cover;
  }
  .income-msg .msg{
    background-color: dodgerblue;
    color: white;
    padding:0.5rem;
    border-radius: 25px;
    margin-left: 1rem;
    box-shadow: 0 2px 5px rgba(0,0,0,0.4);
  }
  .input-area{
    position: relative;
    display: flex;
    justify-content: center;
  }
  input[type="text"]{
    width:100%;
    border: 1px solid #ccc;
    font-size: 1rem;
    border-radius: 5px;
    height: 2.2rem;
  }
  #emoji-btn{
    position: absolute;
    font-size: 1.2rem;
    background: transparent;
    right: 50px;
    top:2px;
    opacity:0.5;
  }
  .submit{
    padding: 0.25rem 0.5rem;
    margin-left: 0.5rem;
    background-color: green;
    color:white;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 5px;
    opacity: 0.7;
  }
  .out-msg{
    display: flex;
    justify-content: flex-end;
    align-items: center;
  }
  .my-msg{
    display: flex;
    justify-content: flex-end;
    margin: 0.75rem;
    padding: 0.5rem;
    background-color: #ddd;
    border-radius: 25px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.4);
    word-break: break-all;
  }
  .disable{
    opacity:0.7;
    cursor:not-allowed;
  }
  @media (max-width:500px){
    .w3-bar .w3-button {
      padding: 10px;
    }
    .chat-btn{
      right:10px;
      bottom: 10px;
      width:50px;
      height: 50px;
      border-radius: 50%;
    }
    .chat-popup{
      bottom: 40px;
      right:10%;
      width: 80vw;
    }
  }

</style>

<body>

    <!-- Navbar (sit on top) -->
    <div class="w3-top">
      <div class="w3-bar w3-blue w3-card" id="myNavbar">
        <a href="main.php" class="w3-bar-item w3-button w3-wide">RANS</a>
        <a href="bot.php" class="w3-bar-item w3-button w3-left">BOT</a>
        <a href="logout.php" class="w3-bar-item w3-button w3-right w3-black"><i class="fa fa-lock"></i> LOGOUT</a>
      </div>
    </div>

    <div class="w3-dropdown-hover" style="padding:70px 5px">
      <button class="w3-button w3-blue w3-circle">+</button>
      <div class="w3-dropdown-content w3-bar-block">
        <a href="notes/homepage.php" class="w3-bar-item w3-button w3-blue w3-border" title="provided class notes" style="border-radius:25px"><i class="fa fa-book"> The Notes</i></a>
        <a href="#" class="w3-bar-item w3-button w3-blue w3-border disable" title="Checking the availability of the books in collage library" style="border-radius:25px"><i class="fa fa-search"> Library</i></a>
        <a href="#" class="w3-bar-item w3-button w3-blue w3-border disable" title="Convert Speech-to-text and ViceVersa" style="border-radius:25px"><i class="fa fa-exchange"> Conversion</i></a>
      </div>
    </div>

    <section class="w3-container">

        <span class="w3-jumbo w3-hide-small w3-padding-large w3-large w3-margin-top">Welcome to chat bot page</span><br>
        <span class="w3-xxlarge w3-hide-large w3-hide-medium">Welcome to chat bot page</span><br><br>
        <span class="w3-large">Click on the chat button to start chatting.</span>

      <button class="chat-btn">
        <i class="material-icons"> comment </i>
      </button>

      <div class="chat-popup ">
        <div class="chat-area">
          <div class="income-msg">
            <img src="img/bot_img.jpg" class="avatar" alt="">
            <span class="msg"> Hi, How can I help you?</span>
          </div>
        </div>

        <div class="input-area">
          <input type="text">
          <button id="emoji-btn"> &#127773;</button>
          <button class="submit"> <i class="material-icons"> send</i></button>
        </div>
      </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/@joeattardi/emoji-button@3.1.1/dist/index.min.js"></script>
    <script>
    const popup = document.querySelector('.chat-popup');
    const chatBtn = document.querySelector('.chat-btn');
    const submitBtn = document.querySelector('.submit');
    const chatArea = document.querySelector('.chat-area');
    const inputElm = document.querySelector('input');
    const emojiBtn = document.querySelector('#emoji-btn');
    const picker = new EmojiButton();


    // Emoji selection
    window.addEventListener('DOMContentLoaded', () => {

        picker.on('emoji', emoji => {
          document.querySelector('input').value += emoji;
        });

        emojiBtn.addEventListener('click', () => {
          picker.togglePicker(emojiBtn);
        });
      });

    //   chat button toggler

    chatBtn.addEventListener('click', ()=>{
        popup.classList.toggle('show');
    })

    // send msg
    submitBtn.addEventListener('click', ()=>{
        let userInput = inputElm.value;

        let temp = `<div class="out-msg">
        <span class="my-msg">${userInput}</span>
        <img src="img/me.jpeg" class="avatar">
        </div>`;

        chatArea.insertAdjacentHTML("beforeend", temp);
        inputElm.value = '';
    })


    </script>
</body>
</html>
