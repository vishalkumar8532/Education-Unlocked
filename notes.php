<?php include "navbar.php"; ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" href="css/notes.css">
<link rel="stylesheet" href="css/login.css">
    <script type="text/javascript" src="js/login.js"></script>
    <script type="text/javascript" src="js/navbar.js"></script>
     <script type="text/javascript" src="js/chat.js"></script>

</head>
<body>
  
<div class="sidenav">
 <button class="dropdown-btn"> 1. First Semester 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="c.php">C</a>
    <a href="#">FIT</a>
    <a href="#">ILCDD</a>
    <a href="#">English</a>
    <a href="#">Math-1</a>
  </div>
 <button class="dropdown-btn"> 2. Second Semester 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Management </a>
    <a href="#">Data Structure</a>
    <a href="#">Maths-2</a>
    <a href="#">Database</a>
    <a href="#">Operating system</a>
  </div>
 <button class="dropdown-btn"> 3. Third Semester 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="cplus.php">C++</a>
    <a href="#">Computer architecture and organization</a>
    <a href="python.php">Python</a>
    <a href="#">Discrete structure and graph theory</a>
    <a href="evs.php">Environment studies</a>
  </div>
 <button class="dropdown-btn"> 4. Fourth Semester 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">System design</a>
    <a href="#">Computer network</a>
    <a href="java.php">Java</a>
    <a href="visualbasic.php">Visual basic</a>
    <a href="#">Ethics and values</a>
    <a href="#">Optimization methods</a>
  </div>
  <button class="dropdown-btn">5. Fifth Semester 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="webtech.php">Web technology</a>
    <a href="digital.php">Digital Marketing</a>
    <a href="#">Design and Analysis</a>
    <a href="#">Distributed system</a>
    <a href="#">Advanced Java</a>
  </div>
  <button class="dropdown-btn"> 6. Sixth Semester 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Advanced Database Management System</a>
    <a href="#">Introduction to Cloud Computing</a>
    <a href="#">.Net Framework Using vb.net</a>
  </div>
</div>

<div class="main">
  <h2>Content Display</h2>
           
  
</div>

<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>

</body>
</html> 
