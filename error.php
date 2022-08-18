
<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?><!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .box{
    
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        text-align: center;
    }
    .box-content{
        margin: auto ;
      
        display: flex;
        justify-content: center;
        text-align: center;
    }
   
</style>
<body>
    <div class="box">
        <div class="box-content">
    <h2>No data Found</h2>
</div>
</div>
</body>
</html>