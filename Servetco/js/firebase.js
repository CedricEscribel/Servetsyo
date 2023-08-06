// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
const firebaseConfig = {
  apiKey: "AIzaSyB7rexGwGEpyQVm4-IhXOURf0JFNxRGcsU",
  authDomain: "servetsyo-caps.firebaseapp.com",
  databaseURL: "https://servetsyo-caps-default-rtdb.asia-southeast1.firebasedatabase.app",
  projectId: "servetsyo-caps",
  storageBucket: "servetsyo-caps.appspot.com",
  messagingSenderId: "105076757587",
  appId: "1:105076757587:web:1586c4a9f7e0ae2f6ba2a6"
};

firebaseConfig.initializeApp(firebaseConfig);

 var userDB = firebase.database().ref("user");
 
 document.getElementById('user').addEventListener("submit". submitForm);


 function submitForm(e){
  e.preventDefault();

  var user = getElementByVal('user');
  var pass = getElementByVal('pass');


  console.log(user, pass);

 }


 const getElementByVal = (id) =>{
    return document.getElementById(id).value;
 }
