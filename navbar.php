<section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div id="google_translate_element" ></div>
 
      <script type="text/javascript">
      function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
      }
      </script>

      <div class="contact-info d-flex align-items-center">
        <a href="<?php echo $base_url;?>" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img width="100px" height="100px" src="<?php echo $base_url.'assets/img/logo.png';?>" alt="">
            <!-- <h1>Impact<span>.</span></h1> -->
        </a>
      </div>
 
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-box-arrow-in-right d-flex align-items-center"><a href="<?php echo $base_url.'login.php';?>">Login</a></i>
        <i class="bi bi-person-plus d-flex align-items-center ms-4"><a href="<?php echo $base_url.'signup.php';?>">Signup</a></i>
      </div>
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="<?php echo $base_url;?>" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img width="180px" height="100px" src="<?php echo $base_url.'assets/img/logo2.png';?>" alt="">
        <!-- <h1>Impact<span>.</span></h1> -->
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <!-- <li><a href="<?php echo $base_url;?>">Home</a></li> -->
          <li><a href="<?php echo $base_url.'home.php#services';?>">About Us</a></li>
          <li><a href="<?php echo $base_url.'index.php';?>">View Ads</a></li>
          <!-- <li><a href="#">Blog</a></li> -->
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a href="<?php echo $base_url.'home.php#contact';?>">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
