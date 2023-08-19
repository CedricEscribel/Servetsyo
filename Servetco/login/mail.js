
import { getFirestore, doc, getDoc } from "https://www.gstatic.com/firebasejs/9.8.4/firebase-firestore.js";


  const firebaseConfig = {
    apiKey: "AIzaSyDXD4wAAxiCHgBflbjXB--mOfX3PODbPLY",
    authDomain: "contactform-62904.firebaseapp.com",
    databaseURL: "https://contactform-62904-default-rtdb.firebaseio.com",
    projectId: "contactform-62904",
    storageBucket: "contactform-62904.appspot.com",
    messagingSenderId: "895456625971",
    appId: "1:895456625971:web:2e0fe327a913a7c9b56a46"
  };

// initialize firebase
firebase.initializeApp(firebaseConfig);

// reference your database
var contactFormDB = firebase.database().ref("capstone");

document.getElementById("contactForm").addEventListener("submit", submitForm);

function submitForm(e) {
  e.preventDefault();

  var name = getElementVal("name");
  var emailid = getElementVal("emailid");
  var msgContent = getElementVal("msgContent");
  var Number = getElementVal("Number");

  saveMessages(name, emailid, msgContent, Number);

  //   enable alert
  document.querySelector(".alert").style.display = "block";

  //   remove the alert
  setTimeout(() => {
    document.querySelector(".alert").style.display = "none";
  }, 3000);

  //   reset the form
  document.getElementById("contactForm").reset();
}

const saveMessages = (name, emailid, msgContent, Number) => {
  var newContactForm = contactFormDB.push();

  newContactForm.set({
    name: name,
    emailid: emailid,
    msgContent: msgContent,
    Number: Number,
  });
};

const getElementVal = (id) => {
  return document.getElementById(id).value;
};