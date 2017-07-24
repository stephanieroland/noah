<!DOCTYPE html>
<?php
include_once('config.php');
//include_once('bdd.php');
include_once('php/MailChimp.php');

?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>M-Store | Modern E-Commerce Template</title>

  <!--SEO Meta Tags-->
  <meta name="description" content="M-Store - Modern E-Commerce Template" />
  <meta name="keywords" content="shop, e-commerce, modern, minimalist style, responsive, online store, business, mobile, blog, bootstrap, html5, css3, jquery, js, gallery, slider, touch, creative, clean" />
  <meta name="author" content="Rokaux" />

  <!--Mobile Specific Meta Tag-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

  <!--Favicon-->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">

  <!-- Google Material Icons -->
  <link href="css/vendor/material-icons.min.css" rel="stylesheet" media="screen">

  <!-- Brand Icons -->
  <link href="css/vendor/socicon.min.css" rel="stylesheet" media="screen">

  <!-- Bootstrap -->
  <link href="css/vendor/bootstrap.min.css" rel="stylesheet" media="screen">

  <!-- Theme Styles -->
  <link href="css/theme.min.css" rel="stylesheet" media="screen">

  <!-- Page Preloading -->
  <script src="js/vendor/page-preloading.js"></script>
</head>

<!-- Body -->
<!-- Adding/Removing class ".page-preloading" is enabling/disabling background smooth page transition effect and spinner. Make sure you also added/removed link to page-preloading.js script in the <head> of the document. -->
<body class="page-preloading">

  <!-- Page Pre-Loader -->
  <div class="page-preloader">
    <div class="preloader">
      <img src="img/preloader.gif" alt="Preloader">
    </div>
  </div><!-- .page-preloader -->

  <!-- Page Wrapper -->
  <div class="page-wrapper">

    <!-- Order Content -->
    <section class="order-content-wrap">
      <!-- Close Btn -->
      <span class="close-btn"><i class="material-icons close"></i></span>
      <!-- Preloader -->
      <div class="preloader">
        <img src="img/preloader.gif" alt="Preloader">
      </div>
      <div class="inner">
        <form class="order-content">
          <!-- Content loaded via Ajax goes here -->
        </form><!-- .order-content -->
      </div><!-- .inner -->
    </section><!-- .order-content-wrap -->

    <!-- Order Content Backdrop -->
    <div class="order-content-backdrop"></div>


    <!-- Navbar -->
    <header class="navbar">

      <!-- Site Logo -->
      <a href="index.html" class="site-logo visible-desktop">
        <span>NOAH</span> <!--M
        <span class="text-gray">/</span>
        STORE <span>]</span> -->
      </a><!-- site-logo.visible-desktop -->
      <a href="index.html" class="site-logo visible-mobile">
        <span>[</span> M <span>]</span>
      </a><!-- site-logo.visible-mobile -->

      <!-- Language Switcher -->
      <div class="lang-switcher">
        <div class="lang-toggle">
          <img src="img/flags/GB.png" alt="English">
          <i class="material-icons arrow_drop_down"></i>
          <ul class="lang-dropdown">
            <li><a href="#"><img src="img/flags/FR.png" alt="French">FR</a></li>
            <li><a href="#"><img src="img/flags/DE.png" alt="German">DE</a></li>
            <li><a href="#"><img src="img/flags/IT.png" alt="Italian">IT</a></li>
          </ul>
        </div>
      </div><!-- .lang-switcher -->

      <!-- Toolbar -->
      <div class="toolbar">
        <div class="inner">
          <div class="toolbar-toggle hidden-xs">
            <i class="material-icons smartphone"></i>
            <div class="toolbar-dropdown qr-code">
              <img src="img/qrcode.png" alt="QR Code">
            </div>
          </div>
          <div class="toolbar-toggle">
            <i class="material-icons menu"></i>
            <div class="toolbar-dropdown">
              <ul class="main-navigation">
                <li><a href="#home" class="scroll-to">Home</a></li>
                <li><a href="#features" class="scroll-to">Features</a></li>
                <li><a href="#accessories" class="scroll-to">Accessories</a></li>
                <li><a href="#video" class="scroll-to">Video Showcase</a></li>
                <li><a href="#gallery" class="scroll-to">Gallery</a></li>
                <li><a href="#feedback" class="scroll-to">Users Feedback</a></li>
              </ul>
            </div>
          </div>
          <div class="toolbar-button hidden-xs">
            <a href="ajax/oculus_rift.html" class="btn btn-pill btn-sm btn-primary waves-effect waves-light ajax-load-link">Order Now</a>
          </div>
        </div><!-- .inner -->
      </div><!-- .toolbar -->
    </header><!-- .navbar.navbar-sticky -->

    <!-- Hero Section -->
    <section id="home" class="fw-section full-height padding-top-3x padding-bottom-3x" style="background-color: #f5f5f5;" data-offset-top="0">
      <div class="container padding-top">
        <div class="row">
          <div class="col-lg-6 col-md-7 col-sm-9 mobile-center">
            <h1>Be Prepared.</h1>
            <a href="ajax/oculus_rift.html" class="btn btn-pill btn-ghost btn-primary waves-effect waves-light ajax-load-link">Order Now</a>
            <a href="ajax/specs.html" class="btn btn-pill btn-ghost btn-default ajax-load-link">Check Specs</a>
          </div>
        </div><!-- .row -->
        <div class="padding-top visible-sm visible-xs"></div>
        <!-- Remove class ".layer-parallax" to disable mouse parallax effect. -->
        <div class="layer-parallax">
          <div class="layer" data-depth="0.15">
            <img src="img/hero-image.jpg" class="block-center" alt="Oculus Rift">
          </div>
        </div>
      </div><!-- .container -->
    </section><!-- .fw-section#home -->

    <!-- Features -->
    <section id="features" class="fw-section padding-top-3x padding-bottom-3x" style="background-image: url(img/hiking.jpg);" data-offset-top="67">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-lg-offset-6 col-md-7 col-md-offset-5">
            <!-- Remove "light-skin" class to switch to dark skin version. -->
            <div class="feature light-skin">
              <div class="feature-icon">
                <img src="img/flood.png" color="white" alt="Feature">
              </div>
              <div class="feature-description">
                <h3 class="feature-title">Don't be scared of disasters</h3>
                <p class="feature-text">Flooding, hurricanes, tsunamis, storms, ...happen more and more often. <br> 
                Everybody needs to have an emergency plan. Noah is yours. </p>
              </div>
            </div><!-- .feature -->
    
       
            <div class="feature light-skin">
              <div class="feature-icon">
                <img src="img/box.png" alt="Feature">
              </div>
              <div class="feature-description">
                <h3 class="feature-title">One kit to be ready</h3>
                <p class="feature-text">We've built the one disaster kit you need to survive minimum 3 days in a tough environment. It includes everything you need to stay or to go. </p>
              </div>
            </div><!-- .feature -->
             <div class="feature light-skin">
              <div class="feature-icon">
                <img src="img/family.png" alt="Feature">
              </div>
              <div class="feature-description">
                <h3 class="feature-title">Protect you and your family</h3>
                <p class="feature-text">Whatever your household is, we've got you covered. You can add as many people as you want in the kit.</p>
              </div>
            </div><!-- .feature -->
               <div class="feature light-skin">
              <div class="feature-icon">
                <img src="img/features/02.png" alt="Feature">
              </div>
              <div class="feature-description">
                <h3 class="feature-title">Stay connected</h3>
                <p class="feature-text">Want to stay connected at every time? Add the premium package to your kit. It includes radio, charger, etc.</p>
              </div>
            </div><!-- .feature -->
          </div>
        </div><!-- .row -->
      </div><!-- .container -->
    </section><!-- .fw-section#features -->

    <!-- Accessories -->
    <section id="accessories" class="fw-section padding-top-3x padding-bottom-3x" data-offset-top="67">
      <div class="container">
        <h2 class="block-title text-center">
          One disaster kit. To stay or to go.
          <small>We gathered everything for you. </small>
        </h2>
        <div class="row space-top-2x">
          <div class="col-md-6 col-sm-12">
            <div class="shop-item">
              <div class="shop-thumbnail">
                <img src="img/box.jpg" alt="Oculus Touch">
              </div>
              <div class="shop-item-footer">
                <div class="shop-item-details">
                     <h3 class="shop-item-title">Essential kit</h3>
                  <span class="shop-item-price">
                    $143.00 /pp
                  </span>
                </div>
                <div class="shop-item-order-btn">
                  <a href="ajax/oculus_touch.html" class="btn btn-ghost btn btn-pill btn-primary waves-effect waves-light ajax-load-link">Order Now</a>
                 <!--    <a href="ajax/specs.html" class="btn btn-pill btn-ghost btn-default ajax-load-link">Check Specs</a> -->
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="shop-item">
              Noah essential disaster kit contains everything you need to stay or to go when a natural disaster strikes. 
                <br>By natural disaster, we mean flooding, hurricane, storms, etc. 
               <hr>
                <h5> What's inside? </h5>
                At least 3 days of food, water, tools to survive on the outside, an emergency medical kit, an hygiene kit, iodine tablets, etc.
                      <br>
                <div style="text-align:center"></div><a href="ajax/specs.html" class="btn btn-pill btn-ghost btn-default ajax-load-link">Check all the Specs</a></div>
        </div>
        <!--
          <div class="col-md-4 col-sm-6">
            <div class="shop-item">
              <div class="shop-thumbnail">
                <img src="img/accessories/03.jpg" alt="Xbox Controller">
              </div>
              <div class="shop-item-footer">
                <div class="shop-item-details">
                  <h3 class="shop-item-title">Xbox Controller</h3>
                  <span class="shop-item-price">
                    $50.00
                  </span>
                </div>
                <div class="shop-item-order-btn">
                  <a href="ajax/xbox_controller.html" class="btn btn-ghost btn-sm btn-pill btn-primary waves-effect waves-light ajax-load-link">Order Now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="shop-item">
              <div class="shop-thumbnail">
                <img src="img/accessories/04.jpg" alt="Oculus Remote">
              </div>
              <div class="shop-item-footer">
                <div class="shop-item-details">
                  <h3 class="shop-item-title">Oculus Remote</h3>
                  <span class="shop-item-price">
                    Free with Rift
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="shop-item">
              <div class="shop-thumbnail">
                <img src="img/accessories/05.jpg" alt="Oculus Earphones">
              </div>
              <div class="shop-item-footer">
                <div class="shop-item-details">
                  <h3 class="shop-item-title">Oculus Earphones</h3>
                  <span class="shop-item-price">
                    $49.00
                  </span>
                </div>
                <div class="shop-item-order-btn">
                  <a href="ajax/oculus_earphones.html" class="btn btn-ghost btn-sm btn-pill btn-primary waves-effect waves-light ajax-load-link">Order Now</a>
                </div>
              </div>
            </div>
          </div>-
          <div class="col-md-4 col-sm-6">
            <div class="shop-item">
              <div class="shop-thumbnail">
                <img src="img/accessories/06.jpg" alt="Oculus Case">
              </div>
              <div class="shop-item-footer">
                <div class="shop-item-details">
                  <h3 class="shop-item-title">Oculus Case</h3>
                  <span class="shop-item-price">
                    $44.00
                  </span>
                </div>
                <div class="shop-item-order-btn">
                  <a href="ajax/oculus_case.html" class="btn btn-ghost btn-sm btn-pill btn-primary waves-effect waves-light ajax-load-link">Order Now</a>
                </div>
              </div>
            </div>
          </div> -->
        </div><!-- .row -->
      </div><!-- .container -->
    </section><!-- .fw-section#accessories -->

    <!-- Video Showcase -->
      <!--
    <section id="video" class="fw-section no-cover padding-top-3x padding-bottom-3x" style="background-image: url(img/video-bg.jpg);" data-offset-top="67">
      <div class="container text-center padding-top-3x padding-bottom-3x">
        <div class="padding-top-2x hidden-xs"></div>
        <div class="row">
          <div class="col-lg-6 col-md-7 col-sm-8">
            <h2 class="block-title padding-bottom">
              Want to see Oculus in action?
              <small>Watch our short video presentation.</small>
            </h2>
            <a href="https://www.youtube.com/watch?v=pN6YCFlS8nU" class="video-popup-btn">
              <i class="material-icons play_arrow"></i>
            </a>
          </div>
        </div><!-- .row -->
      <!--
        <div class="padding-bottom-3x hidden-xs"></div>
      </div><!-- .container
    </section> --> <!-- .fw-section#video -->

    <!-- Gallery -->
      <!--
    <section id="gallery" class="fw-section padding-top-3x padding-bottom-3x" data-offset-top="67">
      <div class="container-fluid">
        <h2 class="block-title text-center space-bottom-2x">
          Gallery
          <small>Enjoy the most beautiful industrial design ever.</small>
        </h2>
        <div class="image-carousel" data-loop="true">
          <div class="inner">
            <img src="img/gallery/01.jpg" alt="Gallery">
            <img src="img/gallery/02.jpg" alt="Gallery">
            <img src="img/gallery/03.jpg" alt="Gallery">
          </div>
        </div>
      </div>
    </section><!-- .fw-section#gallery -->

    <!-- Testimonials -->
    <section id="feedback" class="fw-section padding-top-3x padding-bottom" data-offset-top="67">
      <div class="container-fluid">
        <h2 class="block-title text-center space-bottom-2x">
          What Our Buyers Have To Say
          <small>Experienced and enjoyed by thouthands people. Here’s what they think.</small>
        </h2>
        <div class="row">
          <div class="col-lg-10 col-lg-offset-1">
            <div class="row">
              <!-- Testimonial -->
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="testimonial">
                  <div class="testimonial-body">
                    <p>Why he has a kit. </p>
                  </div>
                  <footer class="testimonial-author">
                    <div class="testimonial-author-ava">
                      <img src="img/testimonials/01.jpg" alt="Author">
                    </div>
                    <div class="testimonial-author-info">
                      Nicholas, Father of two kids
                    </div>
                  </footer>
                </div>
              </div>
              <!-- Testimonial -->
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="testimonial">
                  <div class="testimonial-body">
                    <p>In 2012 when the hurricane Sandy formed, we weren't prepared at all. We had to live more than 3 days without any electricity, light, food.<br>
                      We won't do the same mistake again.</p>
                  </div>
                  <footer class="testimonial-author">
                    <div class="testimonial-author-ava">
                      <img src="img/testimonials/02.jpg" alt="Author">
                    </div>
                    <div class="testimonial-author-info">
                      Titsje & Klaas, Jersey City. 
                    </div>
                  </footer>
                </div>
              </div>
              <!-- Testimonial -->
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="testimonial">
                  <div class="testimonial-body">
                    <p>why noah kit is a necessity. </p>
                  </div>
                  <footer class="testimonial-author">
                    <div class="testimonial-author-ava">
                      <img src="img/testimonials/03.jpg" alt="Author">
                    </div>
                    <div class="testimonial-author-info">
                      bla bla bla, military. 
                    </div>
                  </footer>
                </div>
              </div>
              <!-- Testimonial -->
            <!--  
                <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="testimonial">
                  <div class="testimonial-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                  </div>
                  <footer class="testimonial-author">
                    <div class="testimonial-author-ava">
                      <img src="img/testimonials/04.jpg" alt="Author">
                    </div>
                    <div class="testimonial-author-info">
                      Nick Coleman, Developer
                    </div>
                  </footer>
                </div>
              </div>
              <!-- Testimonial -->
              <!--
                <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="testimonial">
                  <div class="testimonial-body">
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate.</p>
                  </div>
                  <footer class="testimonial-author">
                    <div class="testimonial-author-ava">
                      <img src="img/testimonials/05.jpg" alt="Author">
                    </div>
                    <div class="testimonial-author-info">
                      Emma Power, Housewife
                    </div>
                  </footer>
                </div>
              </div>
              <!-- Testimonial -->
                <!--
                <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="testimonial">
                  <div class="testimonial-body">
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
                  </div>
                  <footer class="testimonial-author">
                    <div class="testimonial-author-ava">
                      <img src="img/testimonials/06.jpg" alt="Author">
                    </div>
                    <div class="testimonial-author-info">
                      Jimm Napkin, Plumber
                    </div>
                  </footer>
                </div>
              </div> -->
            </div>
          </div>
        </div><!-- .row -->
      </div><!-- .container -->
    </section><!-- .fw-section#feedback -->

    <!-- CTA -->
    <section class="fw-section padding-bottom-3x">
      <div class="container text-center" id="newsletter">
        <hr>
        
        
          		<?php
					if(isset($_POST) && isset($_POST['email'])) {
                        
						$MailChimp = new \Drewm\MailChimp(MAILCHIMP_API_KEY);
						
						$result = $MailChimp->call('lists/subscribe', array(
						                'id'                => MAILCHIMP_LIST_ID,
						                'email'             => array('email'=>$_POST['email']),
						                
						                'double_optin'      => false,
						                'update_existing'   => true,
						                'send_welcome'      => false
						            ));
						
						
						if(isset($result['status']) && strcasecmp($result['status'],'error')==0) {
							echo '
								  <p class="text-danger"> There must be some problem. Please try again.</p>
								';
                            ?>
							
                          		<form action="newsletter.php" method="post" class="subscribe-form" novalidate>
                                      <input type="email" class="form-control" name="email" placeholder="Your e-mail">
                                      <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                      <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_c7103e2c981361a6639545bd5_1194bb7544" tabindex="-1" value=""></div>
                                        <button type="submit" class="btn btn-ghost btn-pill btn-primary waves-effect waves-light ajax-load-link">Register</button>
                                    </form>            <!--end newsletterform-->
<?php
						}
						else {
				?>
                                 <h2 class="block-title padding-top-2x space-bottom-1x">
                                     Thank you for suscribing! 
                                </h2>
                                 <p class="text-success"><strong>Your email was successfully added to our mailing list.</strong> <br>As soon as we launch new kits, you'll be the first to know.</p>
                            
						
                                    
                    <?php                
							
						}
					}
					else {
					?>
					
                            <h2 class="block-title padding-top-2x space-bottom-1x">
                                      Didn't find what you are looking for? 
                                      <small>We are preparing new amazing kits for you.<br> Register here to be informed about our next specific kits: tsunamis packs, 
                                        snow storms kits, etc.</small>
                                    </h2>
          
          
                                <form action="newsletter.php" method="post" class="subscribe-form" novalidate>
                                  <input type="email" class="form-control" name="email" placeholder="Your e-mail">
                                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                  <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_c7103e2c981361a6639545bd5_1194bb7544" tabindex="-1" value=""></div>
                                    <button type="submit" class="btn btn-ghost btn-pill btn-primary waves-effect waves-light ajax-load-link">Register</button>
                                </form>  

            
            
					<?php
					}
					?>
    
          
      </div>
    </section><!-- .fw-section -->

    <!-- Footer -->
    <footer class="footer">
    
       <!-- <p class="text-sm">Need support? Call <span class="text-primary">001 (917) 555-4836</span></p> -->
        <div class="social-bar text-center space-bottom">
          <a href="#" class="sb-skype" data-toggle="tooltip" data-placement="top" title="Skype">
            <i class="socicon-skype"></i>
          </a>
          <a href="#" class="sb-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
            <i class="socicon-facebook"></i>
          </a>
          <a href="#" class="sb-google-plus" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google+">
            <i class="socicon-googleplus"></i>
          </a>
          <a href="#" class="sb-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
            <i class="socicon-twitter"></i>
          </a>
          <a href="#" class="sb-instagram" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram">
            <i class="socicon-instagram"></i>
          </a>
        </div><!-- .social-bar -->
        <div class="cards"><img src="img/cards.png" alt="Cards"></div>
        <p class="copyright">&copy; 201. Made with <i class="text-danger material-icons favorite"></i> by Prehype.</p>

   <!--   <div class="column">
        <h3 class="widget-title">
          Subscription
          <small>To receive latest offers and discounts from the shop.</small>
        </h3>
        <form action="//rokaux.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;id=1194bb7544" method="post" target="_blank" class="subscribe-form" novalidate>
          <input type="email" class="form-control" name="EMAIL" placeholder="Your e-mail">
          <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
         <!-- <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_c7103e2c981361a6639545bd5_1194bb7544" tabindex="-1" value=""></div>
          <button type="submit"><i class="material-icons send"></i></button>
        </form>
      </div><!-- .column -->
   <!--   <div class="column">
        <h3 class="widget-title">
          Payment Methods
          <small>We support one of the following payment methods.</small>
        </h3>
        <div class="cards"><img src="img/cards.png" alt="Cards"></div>
        <!-- Scroll To Top Button -->
     <!--   <div class="scroll-to-top-btn"><i class="material-icons trending_flat"></i></div>
      </div><!-- .column -->
    </footer><!-- .footer -->

  </div><!-- .page-wrapper -->

  <!-- JavaScript (jQuery) libraries, plugins and custom scripts -->
  <script src="js/vendor/jquery-2.1.4.min.js"></script>
  <script src="js/vendor/bootstrap.min.js"></script>
  <script src="js/vendor/smoothscroll.js"></script>
  <script src="js/vendor/scrollspy.js"></script>
  <script src="js/vendor/velocity.min.js"></script>
  <script src="js/vendor/jquery.parallax.min.js"></script>
  <script src="js/vendor/waves.min.js"></script>
  <script src="js/vendor/icheck.min.js"></script>
  <script src="js/vendor/owl.carousel.min.js"></script>
  <script src="js/vendor/magnific-popup.min.js"></script>
  <script src="js/scripts.js"></script>
    
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-101906993-2', 'auto');
  ga('send', 'pageview');

</script>

</body><!-- <body> -->

</html>
