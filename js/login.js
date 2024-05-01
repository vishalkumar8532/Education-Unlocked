function login() {
    document.getElementById("popup-1").classList.toggle("active");
    document.getElementById("regi1").classList.remove("active");


  }

  function register() {
    document.getElementById("regi1").classList.toggle("active");
    document.getElementById("popup-1").classList.remove("active");
  }
  
  var password=document.getElementById("password");
  var Confirm_Password =document.getElementById("Confirm_Password");
  function validatePassword(){
 if(password.value != Confirm_Password.value) {
  Confirm_Password.setCustomValidity("Passwords Don't Match");
} else {
  Confirm_Password.setCustomValidity('');
}
}