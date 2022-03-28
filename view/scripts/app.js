var sessionData = {
   "userID" : 1,
   "sessionDate" : Date.now(),
   "itemViewingID" : 43,
   "timeOnPage" : 300,
   "message" : "OMG THIS IS WORKING LMAOOOOOOOO"
}



$(document).ready(function (){

});

$(window).on( "unload", function(e){
   navigator.sendBeacon("../../model/receiveTracking.php", JSON.stringify(sessionData));
});

$(document).ready(function (){
   switch (document.location.pathname.substr(document.location.pathname.lastIndexOf('/') + 1)){
      case "login.php":
         alert("On login page");
         break;
      case "register.php":
         alert("On register page");
         break;
      case "home.php":
         alert("On home page");
         break;
      default:
         alert("Can't discern which page is currently loaded");
         break;
   }
});