// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
const firebaseConfig = {
  apiKey: "AIzaSyD0auFCuXR77VLORyy_tr0OWo6_9SgsJ68",
  authDomain: "capstone-835fb.firebaseapp.com",
  databaseURL: "https://capstone-835fb-default-rtdb.asia-southeast1.firebasedatabase.app",
  projectId: "capstone-835fb",
  storageBucket: "capstone-835fb.appspot.com",
  messagingSenderId: "637591110580",
  appId: "1:637591110580:web:eff67250c41c20f010e8e1"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);

import {getDatabase, ref, set, child, remove}
from "firebase/database";