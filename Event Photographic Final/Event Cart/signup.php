<?php 


include("registersave.php");//include the php file

?>


<!DOCTYPE html><html><head> 

 <title> INFINITE </title>
 <link rel="stylesheet" type="text/css" href="src/styles/styles.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

input[type=password] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}


button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}


.container {
  padding: 72px;
}

span.psw {
  float: right;
  padding-top: 16px;
}


@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 10%;
  }
}
</style>
</head>



<body>
	<img src="src/images/logo.png" class="logo" height="100" width="135" alt="Image Not Found" align="left">
	<img src="src/images/profile.png" class="profile" height="100" width="100" alt="Image Not Found" align="right">

<br>
<ul class="menu"> 
 <li class = "menu"> <b> <a href = "https://courseweb.sliit.lk/"> Home </a> </b> </li>
 <li class = "menu"> <b> <a href = "https://courseweb.sliit.lk/"> Events </a> </b> </li>
 <li class = "menu"> <b> <a href = "https://courseweb.sliit.lk/"> images </a> </b> </li>
 <li class = "menu"> <b> <a href = "https://courseweb.sliit.lk/"> Contact Us </a> </b> </li>
  <li class = "menu"> <b> <a href = "cart.php"> Cart </a> </b> </li>    
 <li class = "menu"> <b> <a href = "https://courseweb.sliit.lk/"> Search </a> </b> </li>
 <li class = "menu"> <b> <a href = "index1.php"> Login </a> </b> </li>
 <li class = "menu"> <b> <a href = "signup.php"> Signup </a> </b> </li>
  <li class = "menu"> <b> <a href = "aboutus.php"> About Us </a> </b> </li>    
</ul> 

<br>
<br>
 <hr id="hr"> 


<div class="sidebar">
 <ul>
 <li> <b> <a href="https://courseweb.sliit.lk/"> Collection </a> </b> </li> 
 <li> <b> <a href="https://courseweb.sliit.lk/"> Blog </a> </b> </li>
 <li> <b> <a href="https://courseweb.sliit.lk/"> Links </a> </b> </li>
 <li> <b> <a href="https://courseweb.sliit.lk/"> Settings </a> </b> </li>
 <li> <b> <a href="https://courseweb.sliit.lk/"> Support </a> </b> </li>
 <li> <b> <a href="https://courseweb.sliit.lk/"> Feedback </a> </b> </li>
 <li> <b> <a href="https://courseweb.sliit.lk/"> Rate Us </a> </b> </li>
 <li> <b> <a href="https://courseweb.sliit.lk/"> Sign Out </a> </b> </li>
 </ul>
    </div>


<div class="sid"></div>
<br>

<center><h2><b><i>Signup Form</i></b></h2></center>
<center>
<form action="signup.php" method="post">
 
  <div class="container">
    <label for="txt_username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="txt_username" required="">
<br>
    <label for="txt_password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="txt_password" required="">
      
 <br> <center>     
    <button type="submit" name="btn_submit">Signup</button>
    <label></label></center> 
<br>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    
  </div>
<br>
<div align="center" class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
     <br>

    <span class="psw">Forgot <a href="https://support.google.com/accounts/answer/41078?co=GENIE.Platform%3DAndroid&amp;hl=en">password?</a></span>
</div></form></center>
  



<hr id="hr"> 
<br>


</body></html>
