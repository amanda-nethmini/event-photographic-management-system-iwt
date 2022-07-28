<?php
$error='';
if (isset($_POST['btn_submit']))
{
	if (empty($_POST['txt_username']) || empty($_POST['txt_password']))
		{
		$error=" Username or Password invalid ";	
		}
else
{$user=$_POST['txt_username'];
		$pass=$_POST['txt_password'];
		$conn = mysqli_connect("localhost","root","");
		//selecting a database
		$db = mysqli_select_db($conn,"iwt");
		//sql query to fetch information
		$query = mysqli_query($conn,"select * from members where username='$user' and password='$pass'"); 

		$row= mysqli_num_rows($query);
		if ($row == 1)
		{
		header("location:shopping-cart.php");//redirecting to other page
		}
		else
		{

			$error=" Username or password is invalid";
		}
		mysqli_close($conn);//closing connection

}
}

  ?>