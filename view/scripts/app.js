var timeOnPage = 0;

function incrementTimer(){
   timeOnPage++;
}



$(document).ready(function (){
   var textFields = document.querySelectorAll('.mdc-text-field');
   for (var i = 0, textField; textField = textFields[i]; i++) {
      var _ = new mdc.textField.MDCTextField(textField);
   }
   var buttons = document.querySelectorAll('.mdc-button, .mdc-fab');
   for (var i = 0, button; button = buttons[i]; i++) {
      mdc.ripple.MDCRipple.attachTo(button);
   }

   $("#regForm").submit(function (event) {
      var formData = {
         email: $("#email").val(),
         emailConf: $("#emailConf").val(),
         firstName: $("#firstName").val(),
         lastName: $("#lastName").val(),
         password: $("#password").val(),
         passwordConf: $("#passwordConf").val(),
      };

      $.ajax({
         type: "POST",
         url: "../model/regUser.php",
         data: formData,
         dataType: "json",
         encode: true,
      }).done(function (data) {
         console.log(data);
         if (!data.success) {
            var output = "";
            for (let x in data.errors){
               output += data.errors[x] + "\n";
            }
            alert(output);
         } else {
            window.location.replace("login.php")
         }
      });
      event.preventDefault();
   });

   $("#loginForm").submit(function (event) {
      var formData = {
         email: $("#email").val(),
         password: $("#password").val()
      };

      $.ajax({
         type: "POST",
         url: "../model/login.php",
         data: formData,
         dataType: "json",
         encode: true,
      }).done(function (data) {
         console.log(data);
         if (!data.success) {
            var output = "";
            for (let x in data.errors){
               output += data.errors[x] + "\n";
            }
            alert(output);
         } else {
            window.location.replace("home.php")
         }
      });

      event.preventDefault();
   });
   setInterval(incrementTimer, 1000);
});

$(window).on( "unload", function(e){
   if(document.location.pathname.substr(document.location.pathname.lastIndexOf('/') + 1) == "game.php"){
      var sessionData = {
         "userID" : $("#gamePage").data("currentuser"),
         "sessionDate" : Date.now(),
         "itemViewingID" : $("#gamePage").data("gameid"),
         "timeOnPage" : timeOnPage,
         "message" : ""
      }
      navigator.sendBeacon("../../model/receiveTracking.php", JSON.stringify(sessionData));
   }
});

$(document).ready(function (){
   switch (document.location.pathname.substr(document.location.pathname.lastIndexOf('/') + 1)){
      case "login.php":
         console.log("On login page");
         break;
      case "register.php":
         console.log("On register page");
         break;
      case "home.php":
         console.log("On home page");
         break;
      case "game.php":
         console.log("On a games page");
         break;
      default:
         console.log("Can't discern which page is currently loaded");
         break;
   }
});