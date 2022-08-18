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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stylon</title>
    <link rel="icon" href="css/favicon.ico" >
   
    <link rel="stylesheet" href="css/style.css">
   
    <link rel="stylesheet" media="screen and (max-width: 1220px)" href="css/frontpageResponsive.css">
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Dancing+Script">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    
</head>
<body >
   
   
        <div id="navigation">
            <div class="nav">
                <img src="http://images.squarespace-cdn.com/content/v1/5390baece4b0f5b00cae09db/1402004737316-L33YR0QV2IOK25N8S3LY/Logo.png" alt="">
                <div class="locations">
                  <ul class="navbar-nav">
                      <li class="nav-item dropdown">
                           
                          <a class="nav-link dropdown-toggle" data-toggle="dropdown"  href=""><button class="dropdown-head"> Location</button></a>
                          <div class="dropdown-menu">
                            
                                  <button class="dropdown-btn"><a class="nav-link dropdown-item" href="location.php">Dewas</a></button>
                                  <div class="dropdown-divider"></div>				    
                                  <button class="dropdown-btn"><a class="nav-link dropdown-item" href="error.php">Indore</a></button>
                                  <div class="dropdown-divider"></div>
                                  <button class="dropdown-btn"><a class="nav-link dropdown-item" href="error.php">Ujjain</a></button>
                          
                          </div>
                      </li>
                  </ul>
              </div>
                <ul class="navbar">
                  <li class="navitems"><a href="indexweb.php">Shop Now</a></li>

                  <li class="navitems"><a href="profile.php">Profile</a></li>
                   
                    
                   
                   
                    <!--Trigger-->
            
                   

                </ul>
             </div>
             <div class="contact-body">
            
              <!--Modal: Login / Register Form-->
           
     
     <div class="text-center">
     <p>Hello, <?php echo $user_data['user_name']; ?></p>
       <a href="logout.php" >Logout</a>
     </div>
           </div>
               </div>
              
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="https://media-exp1.licdn.com/dms/image/C511BAQEWNrnjSw7iNA/company-background_10000/0/1535593758708?e=2147483647&v=beta&t=FZKgBgNUNmHrPxSBanbA7IjGaEBROs5WZSONcx_ae0Q" alt="First slide">
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
           
          </div>
        
  
    <div class="formens">
      <div class="formens-head"> <p>For Men's</p></div>
      <div class="gallery1"><img src="https://s3.amazonaws.com/Snowcovered_C_Images/36638_logo.png" alt=""><a href="gallery1.php"><button>OPEN NOW</button></a></div>
    <div class="mens">
      <div class="frame"></div>
        <div class="sliding"><img src="bride3.png" alt=""></div>
      </div>
     
   
    </div>
    <div class="forwomens">
      <div class="formens-head"> <p>For Women's</p></div>
      <div class="gallery2"><img src="https://helpinghands.neocities.org/images/gallery-icon.png" alt=""><a href="gallery2.php"><button>OPEN NOW</button></a></div>
    <div class="womens">
      <div class="frame"></div>
        <div class="sliding"><img src="bride2.png" alt=""></div>
      </div>
     
   
    </div>
    <div class="forgroom">
      <div class="formens-head"> <p>Insight For Groom</p></div>
      <div class="gallery3"><img src="https://freepngimg.com/thumb/graphic_design/55592-3-gallery-free-hq-image.png" alt=""><a href="gallery3.php"><button>OPEN NOW</button></a></div>
    <div class="mens">
      <div class="frame"></div>
        <div class="sliding"><img src="Bride.png" alt=""></div>
      </div>
     
    </div>
    <div class="heading"><p>Our Services</p></div>
    <div class="services items">
      <h3> It’s convenient</h3>
      <p>
          Salon web application can be developed that allows customers to book salon services quickly and easily.It will help in relieving pressure on staff, and will help in cancellations and fill empty spots without any extra effort.
         
         
      </p>
    </div>
    <div class="services items">
      
        <h3>Social distancing</h3>
        <p>
          It will free up days for staff, and instead of a staff member having to call to confirm appointments, once a booking is made, whether done online or through the salon, automated confirmations will get sent out via email or text. 
        </p>
    
    </div>
    <div class="services items">
      <h3>Time Efficient</h3>
      <p>
         It will help user to save their time rather than waiting at Salon. It will also boost social distancing .Maps embedded within the web application will guide the cleint to reach the salons. 
          
      </p>
    </div>
    <div class="services items">
      <h3>Estimated price & time</h3>
      <p>
       Client can get the price estimation at home itself and can decide a suitable option without actual street hunting.They will also get time estimation ,so that they can report shop according to that.
          
      </p>
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
           

            
    </div>
    <footer id="footer">
      <i class="social-icon fab fa-twitter"></i>
      <i class="social-icon fab fa-facebook-f"></i>
      <i class="social-icon fas fa-envelope"></i><br>
      <p>© Copyright 2021 Stylon</p>
  
    </footer>
   
    
</body>

</html>