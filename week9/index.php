<!DOCTYPE html>
<html lang="en">

<head>
  <!-- meta -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>f</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/hover/hover.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Responsive css -->
  <link href="css/responsive.css" rel="stylesheet">

  <!-- Favicon -->
  <link href="data:image/x-icon;base64,AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAAAJv8AAAAAAP/8owD///8AAQ2KAP+GVwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAEURERERAABERREQAAAAAERFEQAAAAAAREUQAAAAAABEURAABERERERREABVVVVVRFEABVVVVVVEUQAFVUiIiIRRAAVUiIjMhFEAAFSIjMxEUQAABEREREREAAAAAAAARERAAAAAAAREREQAAAAAREREREQAAERERERERERERERHAAwAAwAMAAMADAADAAwAAgAEAAIAAAACAAAAAgAAAAIAAAACAAQAAgAMAAMADAADgBwAA8A8AAPw/AAD//wAA" rel="icon" type="image/x-icon" />

</head>

<body>

  <!-- start section navbar -->
  <nav id="main-nav">
    <div class="row">
      <div class="container">

        <div class="logo">
          <a href="index.html"><img src="images/logo.gif" alt="logo"></a>
        </div>

        <div class="responsive"><i data-icon="m" class="ion-navicon-round"></i></div>

        <ul class="nav-menu list-unstyled">
          <li><a href="#header" class="smoothScroll">Home</a></li>
          <li><a href="#about" class="smoothScroll">About</a></li>
          <li><a href="#portfolio" class="smoothScroll">Portfolio</a></li>
          <li><a href="form.php" class="smoothScroll">Login</a></li>
          <!-- to be implementedd
          <li><a href="#journal" class="smoothScroll">Blog</a></li>
          <li><a href="#contact" class="smoothScroll">Contact</a></li>
          -->
        </ul>

      </div>
    </div>
  </nav>
  <!-- End section navbar -->


  <!-- start section header -->
  <div id="header" class="home">

    <div class="container">
      <div class="header-content">
        <h1>I'm <span class="typed"></span></h1>
       <p id ="quote-display">The future belongs to those who believe in the beauty of their dreams.</p>

        <ul class="list-unstyled list-social">
          <li><a href="https://www.facebook.com/justheaa"><i class="ion-social-facebook"></i></a></li>
          <li><a href="https://www.twitter.com/dyastin_223"><i class="ion-social-twitter"></i></a></li>
          <li><a href="https://www.instagram.com/dystn03"><i class="ion-social-instagram"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- End section header -->


  <!-- start section about us -->
  <div id="about" class="paddsection">
    <div class="container">
      <div class="row justify-content-between">

        <div class="col-lg-4 ">
          <div class="div-img-bg">
            <div class="about-img">
              <img src="images/me.jpg" class="img-responsive" id="image-display" alt="me">
            </div>
          </div>
        </div>

        <div class="col-lg-7">
          <div class="about-descr">

            <p class="p-heading">Hi, I'm Carl! I am a Student with a passion for Programming. With 4 years of experience in Web Devlopment, I have developed a strong set of skills and expertise that I bring to every project I work on.</p>
            <p class="separator">Whether I'm helping clients achieve their goals or working on a personal project, I am always striving to learn and grow as a professional.</p>

          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- end section about us -->


  <!-- start section services -->
  <div id="services">
    <div class="container">

        <div class="services-carousel owl-theme">

          <div class="services-block">

            <i class="ion-ios-browsers-outline"></i>
            <span>UI/UX DESIGN</span>
            <p class="separator">I have proficient knowledge about the do's and dont's of UI/UX Design </p>

          </div>

          <div class="services-block">

            <i class="ion-ios-lightbulb-outline"></i>
            <span>Bright Learner</span>
            <p class="separator">I am always hungry for knowledge, and always strive to put something new in me everyday</p>

          </div>

          <div class="services-block">

            <i class="ion-ios-color-wand-outline"></i>
            <span>WEB DESIGN</span>
            <p class="separator">Web designing is a part of me that I can't use properly</p>

          </div>

          <div class="services-block">

            <i class="ion-social-android-outline"></i>
            <span>MOBILE APPS</span>
            <p class="separator">I have sufficient knowledge on developing applications and programs for mobile devices</p>

          </div>
          <div class="services-block">

            <i class="ion-ios-camera-outline"></i>
            <span>PHOTOGRAPHY</span>
            <p class="separator">I like to take photos and keep it as a memory, I am not a professional at it but I like doing it</p>

          </div>

        </div>

    </div>

  </div>
  <!-- end section services -->


  <!-- start section portfolio -->
  <div id="portfolio" class="text-center paddsection">

    <div class="container">
      <div class="section-title text-center">
        <h2>My Portfolio</h2>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <div class="portfolio-list">

            <ul class="nav list-unstyled" id="portfolio-flters">
              <li class="filter filter-active" data-filter=".all">All</li>
              <li class="filter" data-filter=".esgs">ESGS</li>
              <li class="filter" data-filter=".rev">Rev Major</li>
              <li class="filter" data-filter=".me">Me</li>
              <li class="filter" data-filter=".ran">Random Images</li>
            </ul>

          </div>

          <div class="portfolio-container">

            <div class="col-lg-4 col-md-6 portfolio-thumbnail all ran webdesign">
              <a class="popup-img" href="images/portfolio/1.png">
                <img src="images/portfolio/1.png" alt="img">
              </a>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-thumbnail all ran webdesign">
              <a class="popup-img" href="images/portfolio/real.png">
                <img src="images/portfolio/real.png" alt="img">
              </a>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-thumbnail all ran webdesign">
              <a class="popup-img" href="images/portfolio/real1.png">
                <img src="images/portfolio/real1.png" alt="img">
              </a>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-thumbnail all ran webdesign">
              <a class="popup-img" href="images/portfolio/real2.png">
                <img src="images/portfolio/real2.png" alt="img">
              </a>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-thumbnail all me photography">
              <a class="popup-img" href="images/portfolio/2.png">
                <img src="images/portfolio/2.png"  alt="img">
              </a>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-thumbnail all ran photographyn">
              <a class="popup-img" href="images/portfolio/3.png">
                <img src="images/portfolio/3.png" alt="img">
              </a>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-thumbnail all me photography">
              <a class="popup-img" href="images/portfolio/4.png">
                <img src="images/portfolio/4.png" alt="img">
              </a>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-thumbnail all ran photography">
              <a class="popup-img" href="images/portfolio/5.png">
                <img src="images/portfolio/5.png" alt="img">
              </a>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-thumbnail all me webdesign">
              <a class="popup-img" href="images/portfolio/6.png">
                <img src="images/portfolio/6.png" alt="img">
              </a>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-thumbnail all ran webdesign">
              <a class="popup-img" href="images/portfolio/16.png">
                <img src="images/portfolio/16.png" alt="img">
              </a>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-thumbnail all rev webdesign">
              <a class="popup-img" href="images/portfolio/20.png">
                <img src="images/portfolio/20.png" alt="img">
              </a>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-thumbnail all esgs webdesign">
              <a class="popup-img" href="images/portfolio/13.png">
                <img src="images/portfolio/13.png" alt="img">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

    <!-- end section about us -->
  <!-- End section portfolio -->


  <!-- start section journal -->
  <!-- to be implemented
  <div id="journal" class="text-left paddsection">

    <div class="container">
      <div class="section-title text-center">
        <h2>journal</h2>
      </div>
    </div>

    <div class="container">
      <div class="journal-block">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="journal-info">

              <a href="blog-single.html"><img src="images/blog-post-1.jpg" class="img-responsive" alt="img"></a>

              <div class="journal-txt">

                <h4><a href="blog-single.html">SO LETS MAKE THE MOST IS BEAUTIFUL</a></h4>
                <p class="separator">To an English person, it will seem like simplified English
                </p>

              </div>

            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="journal-info">

              <a href="blog-single.html"><img src="images/blog-post-2.jpg" class="img-responsive" alt="img"></a>

              <div class="journal-txt">

                <h4><a href="#blog-single.html">WE'RE GONA MAKE DREAMS COMES</a></h4>
                <p class="separator">To an English person, it will seem like simplified English
                </p>

              </div>

            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="journal-info">

              <a href="blog-single.html"><img src="images/blog-post-3.jpg" class="img-responsive" alt="img"></a>

              <div class="journal-txt">

                <h4><a href="blog-single.html">NEW LIFE CIVILIZATIONS TO BOLDLY</a></h4>
                <p class="separator">To an English person, it will seem like simplified English
                </p>

              </div>

            </div>
          </div>

        </div>
      </div>
    </div>

  </div>
  -->
  <!-- End section journal -->


  <!-- start sectoion contact -->

  <!-- start sectoion contact -->


  <!-- start section footer -->
  <div id="footer" class="text-center">
    <div class="container">
      <div class="socials-media text-center">

        <ul class="list-unstyled">
          <li><a href="https://www.facebook.com/justheaa"><i class="ion-social-facebook"></i></a></li>
          <li><a href="https://www.twitter.com/dyastin_223"><i class="ion-social-twitter"></i></a></li>
          <li><a href="https://www.instagram.com/dystn03"><i class="ion-social-instagram"></i></a></li>
        </ul>

      </div>

      <div id="quote-display"></div>

      <div class="credits">
        Libraries by <a href="https://getbootstrap.com">Bootstrap</a>
      </div>

    </div>
  </div>
  <!-- End section footer -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/typed/typed.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>



  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>

</html>
