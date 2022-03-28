// Import the functions you need from the SDKs you need
import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.10/firebase-app.js";
import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.10/firebase-analytics.js";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
    apiKey: "AIzaSyB4V9pyWDageC_XAIZwG85ECY749U-qqAs",
    authDomain: "cmp304-rlsite.firebaseapp.com",
    databaseURL: "https://cmp304-rlsite-default-rtdb.firebaseio.com",
    projectId: "cmp304-rlsite",
    storageBucket: "cmp304-rlsite.appspot.com",
    messagingSenderId: "241404547458",
    appId: "1:241404547458:web:7bcd054c444d6e75bfff9b",
    measurementId: "G-4JNTYRVQMS"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);