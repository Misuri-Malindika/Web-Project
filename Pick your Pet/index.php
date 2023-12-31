
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Poppins:400,700&display=swap" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />

  <title>Pick your Pet</title>

</head>

<body>
  <div class="hero_area ">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" alt="">
          </a>
          <div class="" id="">
            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <span class="s-1">

                </span>
                <span class="s-2">

                </span>
                <span class="s-3">

                </span>
              </button>
            </div>
            
            <!--Login Register button-->
            
              <div class="login-container">
                      <?php
                      session_start();

                      if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
                          echo '<a href="PHP/logout.php"><button type="button">Logout</button></a>';
                      } else {
                          echo '<a href="#login-form"><button type="button">Login</button></a>';
                      }
                      ?>
                  <a href="#register-form">
                    <button type="submit" id="reg">Register</button>
                  </a>
              </div>

              <!-- Login Form Popup -->
              <div id="login-form" class="login-form-overlay">
                <div class="login-form">
                  <form action="PHP/login.php" method="post">
                    <input type="text" name="username" class="username" placeholder="Username"/> <br><br>
                    <input type="password" name="password" class="password " placeholder="password"/> <br>
                    <input class="btn login" type="submit" value="Login" />
                  </form>
                </div>
              </div>
              <!-- End Login Form Popup -->    
              <!-- Reg Form Popup -->
              <div id="register-form" class="register-form-overlay">
                <div class="register-form">
                  <form action="PHP/register.php" method="post">
                    <input type="text" name="username" class="username" placeholder="Username"/> <br><br>
                    <input type="email" name="email" class="email" placeholder="email"/> <br><br>
                    <input type="password" name="password" class="password " placeholder="password"/> <br><br>
                    <input type="password" name="repassword" class="repassword " placeholder="Repeat Password"/> <br><br>
                    <input class="btn reg" type="submit" value="Register" />
                  </form>
                </div>
              </div>
              <!-- End Reg Form Popup -->            


            <!--Login Register button-->

            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="index.html">Home</a>
                <a href="about.html">About</a>
                <a href="Pet Listings.html">Pet Listings</a>
                <a href="Pet Foods.html">Pet Foods</a>
                <a href="Adoption Application.html">Adoption Application</a>
                <a href="Success Stories.html">Success Stories</a>
                <a href="contact.html">Contact Us</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    
    <!-- slider section -->
    <section class="slider_section">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="detail-box">
                    <h1>
                      Pick  <br>
                      <span>
                        your Pet
                      </span>
                    </h1>
                    <p>
                      "Adopting a pet is not just bringing home a furry friend, it's opening your heart to a lifetime of unconditional love and companionship."
                    </p>
                    <div class="btn-box">
                      <a href="about.html" class="btn-1">
                        Read More
                      </a>
                      <a href="contact.html" class="btn-2">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="detail-box">
                    <h1>
                      Pet <br>
                      <span>
                        Listings
                      </span>
                    </h1>
                    <p>
                      "Choosing a pet is like finding a perfect puzzle piece for your life, where their unique personality and needs fit seamlessly into your heart and home."
                    </p>
                    <div class="btn-box">
                      <a href="Pet Listings.html" class="btn-1">
                        Read More
                      </a>
                      <a href="contact.html" class="btn-2">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img2.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="detail-box">
                    <h1>
                      Success  <br>
                      <span>
                        Stories
                      </span>
                    </h1>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                    </p>
                    <div class="btn-box">
                      <a href="Success Stories.html" class="btn-1">
                        Read More
                      </a>
                      <a href="contact.html" class="btn-2">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img3.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="detail-box">
        <div class="heading_container">
          <h2>
            About Us
          </h2>
        </div>
        <p>
          This is your premier online pet store! At Pick Your Pet, our passion is connecting pet lovers with their perfect companions. With a curated selection of the finest breeds and a commitment to responsible pet ownership, we're dedicated to helping you find the furry or feathered friend that perfectly fits your lifestyle and brings joy to your home.
        </p>
        <div class="btn-box">
          <a href="about.html">
            <span>
              Read More
            </span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->
  <!-- pet section -->

  <section class="pet_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/pet-img.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Why you need a pet?
              </h2>
            </div>
            <p>
              Owning a pet can enrich your life in countless ways. They offer companionship, reduce stress, and encourage a more active lifestyle. Pets also teach responsibility and empathy while fostering social connections with fellow animal lovers. Discover your perfect companion at our online pet store today!
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end pet section -->
 

  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Customers
        </h2>
        <p>
          Our customers are at the heart of everything we do, and we're dedicated to providing top-notch service and quality products to meet their every need.
      </div>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
              <div class="img-box">
                <img src="images/client.png" alt="">
              </div>
              <div class="detail-box">
                <h4>
                  Amelia Johnson
                </h4>
                <p>
                  "Pick Your Pet is a fantastic online store! I found the perfect furry friend for my family here. The site's user-friendly interface and extensive breed information made our decision easy. Plus, their commitment to responsible pet ownership is truly commendable."
                <img src="images/quote.png" alt="">
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="img-box">
                <img src="images/client 2.png" alt="">
              </div>
              <div class="detail-box">
                <h4>
                  Ethan Ramirez
                </h4>
                <p>
                  "As a cat lover, I was delighted with the selection and service at Pick Your Pet. I adopted my lovely feline companion through their site, and the entire process was seamless. The care tips and resources they provide for cat owners are invaluable."
                </p>
                <img src="images/quote.png" alt="">
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="img-box">
                <img src="images/client 3.png" alt="">
              </div>
              <div class="detail-box">
                <h4>
                  Lily Patel
                </h4>
                <p>
                  "Pick Your Pet is my go-to destination for all things cat-related. Their wide variety of cat supplies and accessories are of high quality, and their blog is a treasure trove of information on feline care. It's a must-visit for every cat owner!"
                </p>
                <img src="images/quote.png" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->



  <!-- info section -->
<footer>
  <section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="info_contact">
            <h5>
              CONTACT INFO
            </h5>
            <div>
              <img src="images/call.png" alt="" />
              <p>
                +94 000000000
              </p>
            </div>
            <div>
              <img src="images/mail.png" alt="" />
              <p>
                pickyourpet@gmail.com
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="info_social">
            <h5>
              social media
            </h5>
            <div class="social_container">
              <div>
                <a href="">
                  <img src="images/fb.png" alt="" />
                </a>
              </div>
              <div>
                <a href="">
                  <img src="images/twitter.png" alt="" />
                </a>
              </div>
              <div>
                <a href="">
                  <img src="images/linkedin.png" alt="" />
                </a>
              </div>
              <div>
                <a href="">
                  <img src="images/instagram.png" alt="" />
                </a>
              </div>
            </div>
          </div>
        </div>
        <div>
          <a href="https://www.nsbm.ac.lk/" >
            <img class="nsbmlogo" src="images/nsbm.png" alt="Logo" >
          </a>
        </div>
 
      </div>
    </div>
  </section>
</footer>

  <!-- end info_section -->


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width")
      document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style")
    }
  </script>
   <script>
    function showLogin() {
      document.getElementById("login-form").style.display = "block";
    }

    function showRegister() {
      document.getElementById("register-form").style.display = "block";
    }
  </script>

</body>

</html>
