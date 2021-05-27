
showNotes();

// If user adds a note, add it to the localStorage
let addBtn = document.getElementById("addBtn");
addBtn.addEventListener("click", function(e) {
 let addTxt = document.getElementById("addTxt");
 let notes = localStorage.getItem("notes");
 if (notes == null) {
   notesObj = [];
 } else {
   notesObj = JSON.parse(notes);
 }
 notesObj.push(addTxt.value);
 localStorage.setItem("notes", JSON.stringify(notesObj));
 addTxt.value = "";
//   console.log(notesObj);
 showNotes();
});

// Function to show elements from localStorage
function showNotes() {
 let notes = localStorage.getItem("notes");
 if (notes == null) {
   notesObj = [];
 } else {
   notesObj = JSON.parse(notes);
 }
 let html = "";
 notesObj.forEach(function(element, index) {
   html += `
           <div class="noteCard my-2 mx-2 card" style="width: 18rem;">
                   <div class="card-body w3-padding-16">
                       <h5 class="card-title">Note ${index + 1}</h5>
                       <p class="card-text" id="${index+"editnote"}"> ${element}</p>
                       <button id="${index+"editbtn"}" onclick="editNote(${index})" class="btn btn-primary">Edit</button>
                       <button id="${index}" onclick="deleteNote(this.id)" class="btn btn-danger">Delete Note</button>
                       <button id="${index+"savebtn"}" onclick="saveNote(${index})" class="btn btn-success" style="display:none">Save</button>
                   </div>
               </div>`;
 });
 let notesElm = document.getElementById("notes");
 if (notesObj.length != 0) {
   notesElm.innerHTML = html;
 } else {
   notesElm.innerHTML = `Nothing to show! Use "Add a Note" section above to add notes.`;
 }
}

// Function to delete a note
function deleteNote(index) {
//   console.log("I am deleting", index);
 let notes = localStorage.getItem("notes");
 if (notes == null) {
   notesObj = [];
 } else {
   notesObj = JSON.parse(notes);
 }
 notesObj.splice(index, 1);
 localStorage.setItem("notes", JSON.stringify(notesObj));
 showNotes();
}


function editNote(id) {
  document.getElementById(id+"editnote").contentEditable=true;
  document.getElementById(id+"editnote").style.border="1px solid black";
  document.getElementById(id+"editbtn").style.display = "none";
  document.getElementById(id+"savebtn").style.display = "inline-block";
}

function saveNote(id) {
  document.getElementById(id+"editnote").contentEditable=false;
  document.getElementById(id+"editnote").style.border="0";
  document.getElementById(id+"editbtn").style.display = "inline-block";
  document.getElementById(id+"savebtn").style.display = "none";

  let editNote = document.getElementById(id+"editnote").innerHTML;
  let notes = localStorage.getItem("notes");
  if (notes == null) {
    notesObj = [];
  } else {
    notesObj = JSON.parse(notes);
  }
  notesObj[id] = editNote;
  localStorage.setItem("notes", JSON.stringify(notesObj));
  showNotes();
}

let search = document.getElementById('searchTxt');
search.addEventListener("input", function(){

   let inputVal = search.value.toLowerCase();
   // console.log('Input event fired!', inputVal);
   let noteCards = document.getElementsByClassName('noteCard');
   Array.from(noteCards).forEach(function(element){
       let cardTxt = element.getElementsByTagName("p")[0].innerText;
       if(cardTxt.includes(inputVal)){
           element.style.display = "block";
       }
       else{
           element.style.display = "none";
       }
       // console.log(cardTxt);
   })
})

window.addEventListener("DOMContentLoaded", () => {
         const button = document.getElementById("button");
         //const result = document.getElementById("result");
         const main = document.getElementsByTagName("main")[0];
         let listening = false;
         const SpeechRecognition =
           window.SpeechRecognition || window.webkitSpeechRecognition;
         if (typeof SpeechRecognition !== "undefined") {
           const recognition = new SpeechRecognition();

           const stop = () => {
             main.classList.remove("speaking");
             recognition.stop();
             button.textContent = "Start listening";
           };

           const start = () => {
             main.classList.add("speaking");
             recognition.start();
             button.textContent = "Stop listening";
           };

           const onResult = event => {
             addTxt.innerHTML = "";
             for (const res of event.results) {
               const text = document.createTextNode(res[0].transcript);
               const p = document.createElement("p");
               if (res.isFinal) {
                 p.classList.add("final");
               }
               p.appendChild(text);
               addTxt.appendChild(p);
               var speech = document.getElementById("addTxt").textContent;
               addTxt.value = speech;

             }
           };

           recognition.continuous = true;
           recognition.interimResults = true;
           recognition.addEventListener("result", onResult);
           button.addEventListener("click", event => {
             listening ? stop() : start();
             listening = !listening;
           });
         } else {
           button.remove();
           const message = document.getElementById("message");
           message.removeAttribute("hidden");
           message.setAttribute("aria-hidden", "false");
         }
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
