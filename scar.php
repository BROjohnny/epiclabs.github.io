<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>EpicLABS | ScAR App</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/logos/3.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Header animation file -->
  <link rel="stylesheet" href="css/rest.css">
  <link rel="stylesheet" href="css/style1.css">

  <style>
    #about {
      background: url("img/facts-bg.jpg") center center no-repeat fixed;
      background-size: cover;
      padding: 60px 0 40px 0;
      position: relative;
    }

    #about::before {
      content: '';
      position: absolute;
      left: 0;
      right: 0;
      top: 0;
      bottom: 0;
      background: rgba(255, 255, 255, 0.7);
      z-index: 9;
    }
    #team {
      height: 28em;
      background: url(img/ar12.jpg) top center no-repeat fixed;
      background-size: cover;
      padding: 60px 0;
    }
    #team p{
      color: #fff;
      font-size: 4em;
      font-weight: bold;
    }
    #team #play-video-icon{
      width: 5%;
      text-align: center;
    }
    #team #play-video-icon i{
      border: 4px solid #fff;
      border-radius: 30px;
      padding: 4px 15px 4px 20px;
      font-size: 36px;
      line-height: 1;
      transition: all 0.3s;
    }
    #team #play-video-icon:hover i{
      border-color: #1cd3dd;
      background-color: #1cd3dd;
      color: #fff;
    }
    .video-div{
      text-align: center;
    }
    #portfolio p{
      color: #000;
    }
    @media(max-width: 678px){      
      #intro .carousel-content h2{
        font-size: 1em;
      }
      #intro .carousel-content h1{
        font-size: 3em;
      } 
      #team{
        padding: 80px 0;
        height: 24em;
      }  
      #team p{
        font-size: 2em;
      }
    }
  </style>
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header-scar">
    <div class="container-fluid">

      <div id="logo-scar" class="pull-left">
        <a href="index.php"><img src="img/logos/2.png"></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu-scar">
          <li><a href="#about">Solutions</a></li>
          <li><a href="#services">features</a></li>
          <li><a href="#team">Demo</a></li>
          <li><a href="#portfolio">Description</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-pause="false">

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" data-interval="2700">
            <div class="carousel-background"><img src="img/ar9.png" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>A new level of Augmented reality platform for</h2>
                <h1>Automobile Industry</h1>
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" data-interval="2700">
            <div class="carousel-background"><img src="img/ar6.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>A new level of Augmented reality platform for</h2>
                <h1>Real Estate Industry</h1>
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" data-interval="2700">
            <div class="carousel-background"><img src="img/ar7.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>A new level of Augmented reality platform for</h2>
                <h1>Healthcare Industry</h1>
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" data-interval="2700">
            <div class="carousel-background"><img src="img/ar8.png" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>A new level of Augmented reality platform for</h2>
                <h1>Food Industry</h1>
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      Solutions Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>One Platform, All Markets</h3>
          <p>Easily create your own interactive augmented reality experiences using <b>ScAR</b> with ready-to-use APIs running on world-class infrastructure, developers can use modern tools to deliver winning digital products in a fraction of the time.</p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="img/ar9.png" alt="" class="img-fluid">
                <div class="icon"><i class="ion-android-car"></i></div>
              </div>
              <h2 class="title">Automotive Industry</h2>
              <p>
                Automotive industry is one of the rapidly developing industry now a days. Use of complex techonologies in automotive industry has being increasing day by day. As a result of it, Augmented Reality has become a major part of it. Using Augmented Reality(AR), designers and engineers can easily create their designs/products on a digital screen just like in real world.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="img/ar6-1.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-android-home"></i></div>
              </div>
              <h2 class="title">Real State Industry</h2>
              <p>
                Because of world population increasement, the real states have got a super higher values than past. So because of this, real states industry has a fast growth in last few years. The most of people around the world spend lots of money for buy lands or houses from all around the world. But using Augmented Reality(AR), customers can see the real properties as virtual properties on digital screens. 
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="img/ar7-1.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-heart"></i></div>
              </div>
              <h2 class="title">Healthcare Industry</h2>
              <p>
                Advancement and expansion of healthcare industory, today surgeries has being getting more complex and sophisticated. In there, if serguons get a chance to see inside the body and identify the damaged body part via digital screen, so that will be really very easy to make treatments. So using <b>ScAR</b> for healthcare industry, anyone can manage anything.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Features Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Features</h3>
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-eye"></i></div>
            <h4 class="title">Augmentation & Visualization</h4>
            <p class="description">Augmentation and visualization of contents is done based on image target recognition</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-camera"></i></div>
            <h4 class="title">Capture & Share</h4>
            <p class="description">You can capture screenshots of AR in activation mode and share them with your favorites through social media</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-volume-medium"></i></div>
            <h4 class="title">Background Audio</h4>
            <p class="description">You can enable and disable the background audio based on your preference of experiencing the AR mode</p>
          </div>
          <div class="col-lg-6 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-android-settings"></i></div>
            <h4 class="title">App Customization</h4>
            <p class="description">ScAR give an ability for user to customize the app whatever he/she like. As the examples app color, font style & sizes, pop up windows behaviors and etc.</p>
          </div>
          <div class="col-lg-6 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-analytics"></i></div>
            <h4 class="title">Google Analytics/ Mix-panel analytics</h4>
            <p class="description">These feature can track the web traffics using this facility</p>
          </div>

        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Demo Section
    ============================-->
    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <p>See How it Works</p>
          <div class="video-div">
            <a href="https://youtu.be/eMy2Qbq-mBQ" data-src="https://youtu.be/eMy2Qbq-mBQ" id="play-video-icon"><i class="ion-ios-play"></i></a>
          </div>
        </div>
      </div>
    </section><!-- #team -->

    <!--==========================
      Description Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Description</h3>
        </header>


          <p>
            <b>ScAR</b> is an Augmented Reality (AR) based solution for making the life easier for your marketing team by providing more attractive and easier to understand digital marketing methods. <b>ScAR</b> will contain most of the necessary functionalities and marketing methods to effectively present the information that are to be viewed by the customers. <b>ScAR</b> is built using Augmented Reality and it lets you to experience the information as audio, video and 3D model. The application gives you an accurate impression of the information. 
          </p>
          <p>
            <b>ScAR</b> takes the experience to a whole new level. The application is easier to use and places information items in the screen of the device. The solution will use AR technologies, which are still new to Sri Lankan context, even though developed countries already use these technologies. This solution will combine the capabilities of traditional marketing and highly attractive AR based marketing techniques for newspaper marketing and promotion. 
          </p>
          <p>
            The proposed solution provides a greater visual awareness of the news with portable smart devices. It does not come with a complicated hardware setup and it is just an Android tab or an iPad. Hence, marketers can easily and confidently use this solution.
          </p>

      </div>
    </section><!-- #portfolio -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <a href="index.php"><img src="img/logos/2.png"></a>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="index.php?#intro">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="index.php?#about">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="index.php?#services">Services</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              <strong>Phone:</strong> +94 71 559 3628<br>
              <strong>Email:</strong> labs.epics@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>EpicLABS</strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
