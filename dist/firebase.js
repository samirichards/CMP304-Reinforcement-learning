"use strict";

var _firebaseApp = require("https://www.gstatic.com/firebasejs/9.6.10/firebase-app.js");

var _firebaseAnalytics = require("https://www.gstatic.com/firebasejs/9.6.10/firebase-analytics.js"); // Import the functions you need from the SDKs you need
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries
// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional


var firebaseConfig = {
  apiKey: "AIzaSyB4V9pyWDageC_XAIZwG85ECY749U-qqAs",
  authDomain: "cmp304-rlsite.firebaseapp.com",
  databaseURL: "https://cmp304-rlsite-default-rtdb.firebaseio.com",
  projectId: "cmp304-rlsite",
  storageBucket: "cmp304-rlsite.appspot.com",
  messagingSenderId: "241404547458",
  appId: "1:241404547458:web:7bcd054c444d6e75bfff9b",
  measurementId: "G-4JNTYRVQMS"
}; // Initialize Firebase

var app = (0, _firebaseApp.initializeApp)(firebaseConfig);
var analytics = (0, _firebaseAnalytics.getAnalytics)(app);
//# sourceMappingURL=firebase.js.map