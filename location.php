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
  <link rel="stylesheet" href="css/stylesabout.css">
  <link rel="stylesheet" media="screen and (max-width: 1000px)" href="css/locationResponsive.css">
  <link rel="stylesheet" href="https://fonts.google.com/specimen/Dancing+Script">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

  <title>location</title>
</head>
<style>
  
  
</style>
<body>
  
  
  <div class="bookbb">
    <div class="back"> <a href="frontpage.php"><img src="https://img.pngio.com/back-png-image-background-png-arts-back-png-1200_630.png" alt=""></a></div>
    <div class="tex">Select Your Shop</div>
  </div>
  
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="https://media-exp1.licdn.com/dms/image/C511BAQEWNrnjSw7iNA/company-background_10000/0/1535593758708?e=2147483647&v=beta&t=FZKgBgNUNmHrPxSBanbA7IjGaEBROs5WZSONcx_ae0Q"alt="First slide">
      </div>
      <div class="carousel-item">
          <img class="d-block w-100" src="https://www.gannett-cdn.com/presto/2020/05/15/USAT/ad7fea50-dd88-41e3-91df-15474a7eaa03-001_XXX_Haircuts_053.JPG?crop=5251,2954,x0,y450&width=1600&height=800&format=pjpg&auto=webp.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://www.gannett-cdn.com/presto/2020/05/01/PREN/f0df67f7-96b1-4048-9a29-f1b35a4aa271-REN_BARBER_OPENS_01.jpg?crop=2399,1350,x0,y107&width=1600&height=800&format=pjpg&auto=webp.jpg" alt="Second slide">
         </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
   <div class="shop-head"><b>Avaiable Shops :-<b></div>
  </div>
  <div class="box">
  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img class="img1" src="https://bklyner.com/content/images/bklyner/wp-content/uploads/2019/01/Georges-Barbershop-has-been-in-Brooklyn-for-nearly-forty-years.-The-new-Fort-Greene-location-is-their-third-shop-in-the-neighborhood.jpg" alt="Avatar" style="width:300px;height:300px;">
      </div>
      <div class="flip-card-back">
        <h1>Fashion</h1>
        <p>Keladevi mandir</p>
        <p>Dewas</p>
        <a href="bookslot.php"><button >Book Now</button></a>
      </div>
    </div>
  </div>
  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img class="img1" src="https://m.media-amazon.com/images/I/61fABAsWkjL._SY355_.jpg">
      </div>
      <div class="flip-card-back">
        <h1>Apka the salon</h1>
        <p>Vikas Nagar</p>
        <p>Dewas</p>
        <a href="apkathesalon.php"><button>Book Now</button></a>
      </div>
    </div>
  </div>
  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img class="img1" src="https://content3.jdmagicbox.com/comp/rajkot/t1/0281px281.x281.190618105053.u9t1/catalogue/the-barber-shop-rajkot-dhb6gcyln3.jpg?clr=3f3f27.jpg">
      </div>
      <div class="flip-card-back">
        <h1>Gold Comb</h1>
        <p>Vikas Nagar</p>
        <p>Dewas</p>
        <a href="goldcomb.php"><button>Book Now</button></a>
      </div>
    </div>
  </div>
  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img class="img1" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRmF3s_nU05b6Tb9MXpJwEc3uXW293Gh4pqJg&usqp=CAU.jpg">
      </div>
      <div class="flip-card-back">
        <h1>Barber Bandits</h1>
        <p>Vikas Nagar</p>
        <p>Dewas</p>
        <a href="barberbandits.php"><button>Book Now</button></a>
      </div>
    </div>
  </div>
  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img class="img1" src="https://m.media-amazon.com/images/I/51pKcuzBKAL.jpg">
      </div>
      <div class="flip-card-back">
        <h1>Hair Drive</h1>
        <p>Vikas Nagar</p>
        <p>Dewas</p>
        <a href="hairdrive.php"><button>Book Now</button></a>
      </div>
    </div>
  </div>
  </div>
  <div id="aboutus">
      
    <img src="https://www.anques.com/wp-content/uploads/2019/07/About-Us.jpg" alt="">
     <p><h1><b>Top Stories : Brand Directory</b></h1>
      MOST SEARCHED FOR ON Stylon : Ethereal Unisex Salon | Unisex Salon | Salon near me | Haircut | Regular Haircut | Hair Spa
      HAIRCUT : Hair Salon near me | Regular Haircut | Spiky Haircut | Bowl Cut | Pampadour Haircut | Hair Spa
      MASSAGE : Body Massage | Head massage | Hand Massage | Foot Massage | Aroma |
      FACIALS : Fruit | Aloevera Gel | Papaya | Biotic | Pearl |
      BLEACH : Green Apple | Orange | Insta Fuir | Acnex |
      SCRUBS : Casmara |
      HAIR-COLORING : Highlighting | Hair-coloring |
      WAXING : Rica | Bikini | Full Arms Waxing |</p>
      <p><h1><b>Online Salon Appointment in India</h1></b>
          Haircuts, Hair Wash, Pedicure, Manicure, Facials, whatever you need, Stylon, your online salon appointment site, is dedicated to provide a wide-range of services available in your nearby area at minimum price available. You don't have to wait for your turn in salons or parlors, just browse Stylon platforms on your smartphones and book your appointment at your desired salon in real time. To make your task easier, our portal is provided with filters that you can use to narrow down your search. You can refine the results on the basis of star category, location, area, price range and even the facilities you want.
          We have all sorts of salons/beauty parlors, ranging from luxury to budget friendly, so whatever be your requirement, you will get the services without wasting time in queue.</p>
          <footer id="footer">
            <i class="social-icon fab fa-twitter"></i>
            <i class="social-icon fab fa-facebook-f"></i>
            <i class="social-icon fas fa-envelope"></i><br>
            <p>© Copyright 2021 Stylon</p>
        
          </footer>
          
  </div>
<b>
</body>
</html>