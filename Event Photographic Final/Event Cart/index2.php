<!DOCTYPE html>
<html>

<head> 

 <title> INFINITE </title>
 <link rel = "stylesheet" type = "text/css"  href = "src/styles/styles.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 70%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 106px;
}
</style>
</head>



<body>
	<img src = "src/images/logo.png" class = "logo" height= "100" width= "135" alt = "Image Not Found" align = "left">
	<img src = "src/images/profile.png" class = "profile" height= "100" width= "100" alt = "Image Not Found" align = "right">

<br>
<ul class = "menu"> 
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
 <hr id = "hr"> </hr>


<div class = "sidebar">
 <ul>
 <li> <b> <a href = "https://courseweb.sliit.lk/"> Collection </a> </b> </li> 
 <li> <b> <a href = "https://courseweb.sliit.lk/"> Blog </a> </b> </li>
 <li> <b> <a href = "https://courseweb.sliit.lk/"> Links </a> </b> </li>
 <li> <b> <a href = "https://courseweb.sliit.lk/"> Settings </a> </b> </li>
 <li> <b> <a href = "https://courseweb.sliit.lk/"> Support </a> </b> </li>
 <li> <b> <a href = "https://courseweb.sliit.lk/"> Feedback </a> </b> </li>
 <li> <b> <a href = "https://courseweb.sliit.lk/"> Rate Us </a> </b> </li>
 <li> <b> <a href = "https://courseweb.sliit.lk/"> Sign Out </a> </b> </li>
 </ul>
    </div>
</div>
</center>
<div class="sid"></div>

<center>
<br>
<h2><b><i>Contact Form</b></i></h2>

<div class="container" align="center">
  <form action="/action_page.php">
    <label for="fname">First Name</label><br>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">
<br>
    <label for="lname">E-mail</label><br>
    <input type="text" id="email" name="email" placeholder="Email Address"><br>

    <label for="subject">Message</label><br>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:122px" ></textarea>
<br>
    <input type="submit" value="Submit">
  </form>
</div>
</center>
<hr id = "hr"> </hr>
<br>
</body>
</html>
