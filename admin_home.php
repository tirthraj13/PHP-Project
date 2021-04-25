<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Admin Home</title>
</head>
<style>
body{
    /*background-color:#003366;*/
	background: linear-gradient(#141e30, #243b55);
	font-family:Verdana;
}
div.zoom {
  padding: 10px;
  transition: transform .2s;
  width: 20px;
  height: 35px;
  margin: 0 auto;
}
.zoom:hover {
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5); 
}
.navbar {
  overflow: hidden;
  background-color: #be556c;
   border-radius:30px;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: right;
  overflow: hidden;
  padding: 0px 35px 0px 0px;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 40px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.center {
  margin: auto;
  width: 45%;
  padding: 10px;
}
div.a {
  text-align: center;
}
input.input1{
    width: 40%;
    height: 5%;
	border: 1px;
    border-radius: 05ps;
    padding: 8px 15px 8px 15px;
	margin: 10px 0px 15px 0px;
    box-shadow: 1px 1px 2px 1px grey;

}
.button {
  border: none;
  width: 250px;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  font-family:Verdana;
  margin-left: -110px;
}
  .button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #be556c;
  border-bottom-right-radius: 25px;
  border-top-left-radius: 25px;
}

.button1:hover {
  background-color: #be556c;
  color: white;
}
.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #ff0080;
}

.button2:hover {
  background-color: #ff0080;
  color: white;
}
h1{
    color:white;
	text-align: center;
}
img {
  border-radius: 50%;
}

</style>
</head>
<?php
  session_start();
  if($_SESSION['alogin']==true){

?>
<body>
<h1>Admin Home</h1>

<div class="navbar">
  <a href="admin_home.php">Home</a>
  <div class="dropdown">
    <button class="dropbtn">More 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      
      <a href="temp2.php">sign out</a>
    </div>
  </div> 
</div>
<div class="a">
<br><br><br>
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4">
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
		<br><br>
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="officer_registration.jpg" width="420" height="260">
        </a>
        <div class="mt-4">
		<br>
		  <div class="zoom"><button onclick="window.location.href='officer_registration.php'" class="button button1">Register Officer</button></div>
    
        </div>
      </div>
      
      
    </div>
  </div>
</section>

</body>
<br><br>
<?php
  }
  else{
	  header("Location: wrong.php");
	  //include "wrong.php";
  }
  ?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
</html>
