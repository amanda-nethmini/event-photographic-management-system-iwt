<?php

      $error='';
if (isset($_POST['btn_submit']))
{
	    $password=$_POST['txt_password'];

	if (empty($_POST['txt_username'])) 
	{
	    $error= "Username Cannot Be Blank ";	
	}
	elseif (empty($_POST['txt_password']))
	{
        $error= "Please Enter Password ";		# code...
	}
	elseif (is_numeric($_POST['txt_username'])) 
	{
		$error= "Username cannot include Numbers";	
	}
	
else
{
$username=$_POST['txt_username'];
$password=$_POST['txt_password'];
$server="localhost";
		$usr="root";
		$pwd="";
		$db="iwt";

		$conn =new mysqli($server,$usr,$pwd,$db);
		//check connection
		if ($conn->connect_error)
		{
		die("Connection Failed :".$conn->connect_error);	# code...
		}
		else
		{
//sql query to fetch information
		$ql ="insert into users (username,password) values ('$username' ,'$password')"; 

		if ($conn->query($ql)===TRUE)
		{
		echo "Successfully Registered !! Please go to home page and log in!! ".'<a href="index1">Click here</a>';
		}
		else
		{

			$error= "username already registered ";
		}

		$conn->close();//closing connection		
}
}
}
?>

