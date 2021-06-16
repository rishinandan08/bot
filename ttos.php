<?php
  include "check/check1.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Text to Speech</title>
    <link rel="icon" href="img/RANS.png" type="image/x-icon">
  </head>

  <style>
  body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
  .w3-bar .w3-button {
    padding: 16px;
  }
  a:link {
    text-decoration: none;
  }
  </style>

  <body>
    <div class="w3-top">
      <div class="w3-bar w3-blue w3-card" id="myNavbar">
        <a href="main.php" class="w3-bar-item w3-button w3-wide">RANS</a>
        <!-- Right-sided navbar links -->
          <a href="chatbot/build/" class="w3-bar-item w3-button w3-left">BOT</a>
          <a href="logout.php" class="w3-bar-item w3-button w3-right w3-black"><i class="fa fa-lock"></i> LOGOUT</a>
      </div>
    </div>

    <main class="container l3 m12">
      <br><br><br>
      <h1 class="w3-center">Read Aloud</h1>
      <p class="lead">Select Voice</p>

      <!-- Select Menu for Voice -->
      <select id="voices" class="form-select"></select>

      <!-- Range Slliders for Volume, Rate & Pitch -->
      <div class=" w3-row-padding mt-2 text-dark">
        <div class="w3-col l3 m6">
          <p class="lead">Volume</p>
          <input type="range" min="0" max="1" value="1" step="0.1" id="volume" />
          <span id="volume-label" class="ms-2">1</span>
        </div>
        <div class="w3-col l3 m6">
          <p class="lead">Rate</p>
          <input type="range" min="0.1" max="10" value="1" id="rate" step="0.1" />
          <span id="rate-label" class="ms-2">1</span>
        </div>
        <div class="w3-col l3 m6">
          <p class="lead">Pitch</p>
          <input type="range" min="0" max="2" value="1" step="0.1" id="pitch" />
          <span id="pitch-label" class="ms-2">1</span>
        </div>
      </div>

      <!-- Text Area  for the User to Type -->
      <textarea class="form-control w3-padding-16 w3-margin" cols="30" rows="10" placeholder="Type here..."></textarea>

      <!-- Control Buttons -->
      <div class="mb-5">
        <button id="start" class="btn btn-success mt-5 me-3">Start</button>
        <button id="pause" class="btn btn-warning mt-5 me-3">Pause</button>
        <button id="resume" class="btn btn-info mt-5 me-3">Resume</button>
        <button id="cancel" class="btn btn-danger mt-5 me-3">Cancel</button>
      </div>
    </main>

  </body>
  <script>
    // Initialize new SpeechSynthesisUtterance object
    let speech = new SpeechSynthesisUtterance();

    // Set Speech Language
    speech.lang = "en";

    let voices = []; // global array of available voices

    window.speechSynthesis.onvoiceschanged = () => {
    // Get List of Voices
    voices = window.speechSynthesis.getVoices();

    // Initially set the First Voice in the Array.
    speech.voice = voices[0];

    // Set the Voice Select List. (Set the Index as the value, which we'll use later when the user updates the Voice using the Select Menu.)
    let voiceSelect = document.querySelector("#voices");
    voices.forEach((voice, i) => (voiceSelect.options[i] = new Option(voice.name, i)));
    };

    document.querySelector("#rate").addEventListener("input", () => {
    // Get rate Value from the input
    const rate = document.querySelector("#rate").value;

    // Set rate property of the SpeechSynthesisUtterance instance
    speech.rate = rate;

    // Update the rate label
    document.querySelector("#rate-label").innerHTML = rate;
    });

    document.querySelector("#volume").addEventListener("input", () => {
    // Get volume Value from the input
    const volume = document.querySelector("#volume").value;

    // Set volume property of the SpeechSynthesisUtterance instance
    speech.volume = volume;

    // Update the volume label
    document.querySelector("#volume-label").innerHTML = volume;
    });

    document.querySelector("#pitch").addEventListener("input", () => {
    // Get pitch Value from the input
    const pitch = document.querySelector("#pitch").value;

    // Set pitch property of the SpeechSynthesisUtterance instance
    speech.pitch = pitch;

    // Update the pitch label
    document.querySelector("#pitch-label").innerHTML = pitch;
    });

    document.querySelector("#voices").addEventListener("change", () => {
    // On Voice change, use the value of the select menu (which is the index of the voice in the global voice array)
    speech.voice = voices[document.querySelector("#voices").value];
    });

    document.querySelector("#start").addEventListener("click", () => {
    // Set the text property with the value of the textarea
    speech.text = document.querySelector("textarea").value;

    // Start Speaking
    window.speechSynthesis.speak(speech);
    });

    document.querySelector("#pause").addEventListener("click", () => {
    // Pause the speechSynthesis instance
    window.speechSynthesis.pause();
    });

    document.querySelector("#resume").addEventListener("click", () => {
    // Resume the paused speechSynthesis instance
    window.speechSynthesis.resume();
    });

    document.querySelector("#cancel").addEventListener("click", () => {
    // Cancel the speechSynthesis instance
    window.speechSynthesis.cancel();
});

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
  </script>
</html>
