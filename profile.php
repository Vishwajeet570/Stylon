<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/profilestyle.css">
</head>
<style>
  .linker{
    height: 40px;
    width: 100%;
    top: 0;
    position: sticky;
    background-color: transparent;
    z-index: 3;
  }
 
.linker img{
  height: 60px;
  width: 100px;
}
.linker img:hover{
  filter: invert();
}
</style>
<body>
  <div class="linker">
    <a href="frontpage.php"><img src="https://img.pngio.com/back-png-image-background-png-arts-back-png-1200_630.png" alt=""></a>
   
  </div>
    <aside class="profile-card">
        <header>
          <!-- here’s the avatar -->
          <a target="_blank" href="#">
            <img src="https://0.soompi.io/wp-content/uploads/2018/02/01215618/Yoo-Seung-Ho.jpg?s=900x600&e=t.jpg" class="hoverZoomLink">
          </a>
      
          <!-- the username -->
          <h1>
                  Happy
                </h1>
      
          <!-- and role or location -->
          <h2>
                  ABOUT
                </h2>
      
        </header>
      
        <!-- bit of a bio; who are you? -->
        <div class="profile-bio">

         <H2>Phone no. : 9876543210</H2>
        
         <h2>House no. : 41</h2>
         
         <H2>Colony : Mishrilal Nagar</H2>
         
         <h2>State : Madhya Pradesh</h2>

         <h2>City : Dewas</h2>
         
        <h2>Landmark : Near Keladevi Mandir</h2>
        
         
      
        </div>
      
        <!-- some social links to show off -->
        <ul class="profile-social-links">
          <li>
            <a target="_blank" href="https://www.facebook.com/creativedonut">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li>
            <a target="_blank" href="https://twitter.com/dropyourbass">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li>
            <a target="_blank" href="https://github.com/vipulsaxena">
              <i class="fa fa-github"></i>
            </a>
          </li>
          <li>
            <a target="_blank" href="https://www.behance.net/vipulsaxena">
             
              <i class="fa fa-behance"></i>
            </a>
          </li>
        </ul>
      </aside>
</body>
</html>