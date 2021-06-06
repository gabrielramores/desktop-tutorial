
var attempt = 3;
function validate(){
    
let counter = 30;
const p = document.getElementById('notify');
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
if ( username == "sample" && password == "sample"){
   document.getElementById("notify").innerHTML = "Login successfully";
   p.style.color = "green";
   window.location = "#"; // Redirecting to other page.
   return false;
}
else{
   attempt --;// Decrementing by one.
   document.getElementById("notify").innerHTML = "The account you entered does not exist. <br/> Remaining attempt: " + attempt;
   p.style.color = "red";
      if( attempt == 0){
         document.getElementById("username").disabled = true;
         document.getElementById("password").disabled = true;
         document.getElementById("submit").disabled = true;
         document.getElementById("notify").innerHTML = "You have "+attempt+" attempt left.";
         setInterval(() => {
            document.getElementById("notify").innerHTML = "The page is lock <br/>Please wait the page to reload." + " <br> Remaining seconds: " + counter;
            counter--;
            if (counter == 0) location.reload();
         }, 1000);
         return false;
      }
   }
}
