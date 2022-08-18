<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$state = $_POST['state'];
		$city = $_POST['city'];
		$colony = $_POST['colony'];
		$house_no = $_POST['house_no'];
		$landmark = $_POST['landmark'];
		$phone_no = $_POST['phone_no'];
		

		if(!empty($user_name) && !empty($password) && !empty($state)  && !is_numeric($state)  && !is_numeric($user_name) && !empty($city)  && !is_numeric($city) && !empty($colony)  && !is_numeric($colony) && !empty($house_no)   && !empty($landmark)  && !is_numeric($landmark) && !empty($phone_no))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password,state,city,colony,house_no,landmark,phone_no) values ('$user_id','$user_name','$password','$state','$city','$colony','$house_no','$landmark','$phone_no')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">
	
	#text{

height: 25px;
border-radius: 5px;
padding: 4px;
border: solid thin #aaa;
width: 100%;
}

#button{

padding: 10px;
width: 100px;
color: white;
background-color: lightblue;
border: none;
}

#box{
   
background-color: grey;
margin: auto;
width: 50%;
padding: 20px;
}

#big{
background-color: rgb(93 82 82);
background-repeat: no-repeat;
display : flex;
   align-items: center;
   justify-content:center;
   height: 100vh;
   width: 100%
}
	</style>
 <div id="big">
	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

			<input id="text" type="text" name="user_name" placeholder="User_name"><br><br>
			<input id="text" type="password" name="password" placeholder="password"><br><br>
			<input id="text" type="text" name="state" placeholder="state"><br><br>
			<input id="text" type="text" name="city" placeholder="city"><br><br>
			<input id="text" type="text" name="colony" placeholder="colony"><br><br>
			<input id="text" type="number" name="house_no" placeholder="house_no"><br><br>
			<input id="text" type="text" name="landmark" placeholder="landmark"><br><br>
			<input id="text" type="number" name="phone_no" placeholder="phone_no"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</div>
</body>
</html>