 // Variable to count number of attempts.
// Below function Executes on click of login button.


var attempt = 3;
function validate(){
    
let counter = 30;

var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
if ( username == "sample" && password == "sample"){
alert ("Login successfully");
window.location = "#"; // Redirecting to other page.
return false;
}
else{
attempt --;// Decrementing by one.
document.getElementById("notify").innerHTML = "Wrong username or password. <br/> You have "+attempt+" attempt left";
if( attempt == 0){
document.getElementById("username").disabled = true;
document.getElementById("password").disabled = true;
document.getElementById("submit").disabled = true;
document.getElementById("notify").innerHTML = "You have "+attempt+" attempt left.";
setInterval(() => {
   document.querySelector("p").innerHTML = "The page is lock <br/>Please wait the page to reload." + " <br> Remaining seconds: " + counter;
    counter--;
    if (counter == 0) location.reload();
}, 1000);

return false;
}
}
}

