<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Booked Status</title>
</head>
<style>
 .big{
    display: flex;
    justify-content: center;
    align-items: center;
   height: 100%;
   background-color:#edc968;
 }
 .small{
    display: flex;
    justify-content: center;
    align-items: center;
 }
 .back img{
    height: 50px;
    width: 90px;
    margin-top: 0px;
    
    position: absolute;
}
.back img:hover{
  filter: invert();
}
 *{padding:0;margin:0}.wrapper{height:100vh;display:flex;justify-content:center;align-items:center;background-color:#edc968}.checkmark__circle{stroke-dasharray: 166;stroke-dashoffset: 166;stroke-width: 2;stroke-miterlimit: 10;stroke: #7ac142;fill: none;animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards}.checkmark{width: 56px;height: 56px;border-radius: 50%;display: block;stroke-width: 2;stroke: #fff;stroke-miterlimit: 10;margin: 10% auto;box-shadow: inset 0px 0px 0px #7ac142;animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both}.checkmark__check{transform-origin: 50% 50%;stroke-dasharray: 48;stroke-dashoffset: 48;animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards}@keyframes stroke{100%{stroke-dashoffset: 0}}@keyframes scale{0%, 100%{transform: none}50%{transform: scale3d(1.1, 1.1, 1)}}@keyframes fill{100%{box-shadow: inset 0px 0px 0px 30px #7ac142}}
</style>
<body>
<div class="back">
    <a href="frontpage.php"><img src="https://img.pngio.com/back-png-image-background-png-arts-back-png-1200_630.png" alt=""></a>
   
  </div>
    <div class="big" >
    <div class="wrapper"> <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"> <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/> <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
</svg>
</div>
        <div class="small"><h1>Booked Successfully</h1></div>
       
    </div>
</body>
</html>