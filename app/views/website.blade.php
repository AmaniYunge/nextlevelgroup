<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="shortcut icon" href="img/ico/favicon.ico">
      <title>Next Level</title>
      <!-- ALL STYLESHEETS -->
       {{ HTML::style("css/all-stylesheet.css") }}
      <!-- ALL COLORED STYLESHEETS -->
       {{ HTML::style("css/colors/orange.css") }}
<!--       {{ HTML::style("css/colors/blue.css") }}-->
<!--       {{ HTML::style("css/colors/green.css") }}-->
<!--       {{ HTML::style("css/colors/red.css") }}-->
<!--       {{ HTML::style("css/colors/default.css") }}-->
<!--       {{ HTML::style("css/colors/yellow.css") }}-->
<!--       {{ HTML::style("css/colors/brown.css") }}-->
<!--       {{ HTML::style("css/colors/purple.css") }}-->
<!--       {{ HTML::style("css/colors/grey.css") }}-->
<!--       {{ HTML::style("css/colors/meroon.css") }}-->
       {{ HTML::style("plugins/bootstrap/bootstrap.css") }}
       {{ HTML::style("fonts/font-awesome/css/font-awesome.min.css") }}

       <!-- Just for debugging purposes. Don't actually copy this line! -->
      <!--[if lt IE 9]>
       {{ HTML::script("js/ie8-responsive-file-warning.js") }}
      <![endif]-->
      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
       {{ HTML::script("js/html5shiv.js") }}
       {{ HTML::script("js/respond.min.js") }}
      <![endif]-->
   </head>
   <body>
   <?php $gallery = Gallery::all();?>
      <!-- PRELOADER STARTS
         ========================================================================= -->		
      <div id="preloader">
         <div class="preloader"><img src="{{asset('img/progress.gif')}}" alt=""></div>
      </div>
      <!-- PRELOADER STARTS
         ========================================================================= -->
      <!-- SLIDER STARTS
         ========================================================================= -->
      <section id="slider">
      <div class="tp-banner-container">
      <div class="tp-banner" >

      <ul>
      <!-- SLIDE NR. 1-->
      @foreach(Slider::all() as $slider)
      <li data-transition="fade" data-slotamount="5" data-masterspeed="700">
          <!-- MAIN IMAGE -->
          <img src="<?php echo asset('uploads/slider/'.$slider->image1) ?>"  alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
          <!-- LAYER NR. 1 -->
          <div class="tp-caption mediumlarge_light_white_center customin customout start"
               data-x="center"
               data-y="-120"
               data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
               data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
               data-speed="1000"
               data-start="1000"
               data-easing="Back.easeInOut"
               data-endspeed="300"><img src="<?php echo asset('img/logo/logo-biig.png') ?>" alt="" style="height: 100px; width:500px">
          </div>
          <!-- LAYER NR. 2 -->
          <div class="tp-caption very_large_text sft customout"
               data-x="center"
               data-y="280"
               data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
               data-speed="800"
               data-start="1800"
               data-easing="Power4.easeOut"
               data-endspeed="300"
               data-endeasing="Power1.easeIn"
               data-captionhidden="on"
               style="z-index: 6">THE <span style="font-weight:700" class="colored-text">NEXT LEVEL</span>

          </div>
          <!-- LAYER NR. 3 -->
          <div class="tp-caption very_large_text sft customout"
               data-x="center"
               data-y="320"
               data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
               data-speed="800"
               data-start="2200"
               data-easing="Power4.easeOut"
               data-endspeed="300"
               data-endeasing="Power1.easeIn"
               data-captionhidden="on"
               style="z-index: 6">___________
          </div>
          <!-- LAYER NR. 4 -->
          <div class="tp-caption large_text skewfromleft customout"
               data-x="200"
               data-y="420"
               data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
               data-speed="800"
               data-start="2500"
               data-easing="Power4.easeOut"
               data-endspeed="300"
               data-endeasing="Power1.easeIn"
               data-captionhidden="on"
               style="z-index: 6">Gifts Shop
          </div>
          <!-- LAYER NR. 5 -->
          <div class="tp-caption large_text skewfromleft customout"
               data-x="420"
               data-y="420"
               data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
               data-speed="800"
               data-start="2800"
               data-easing="Power4.easeOut"
               data-endspeed="300"
               data-endeasing="Power1.easeIn"
               data-captionhidden="on"
               style="z-index: 6">|
          </div>
          <!-- LAYER NR. 6 -->
          <div class="tp-caption large_text skewfromleft customout"
               data-x="460"
               data-y="420"
               data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
               data-speed="800"
               data-start="3100"
               data-easing="Power4.easeOut"
               data-endspeed="300"
               data-endeasing="Power1.easeIn"
               data-captionhidden="on"
               style="z-index: 6">Pharmacy
          </div>
          <!-- LAYER NR. 7 -->
          <div class="tp-caption large_text skewfromleft customout"
               data-x="695"
               data-y="420"
               data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
               data-speed="800"
               data-start="3400"
               data-easing="Power4.easeOut"
               data-endspeed="300"
               data-endeasing="Power1.easeIn"
               data-captionhidden="on"
               style="z-index: 6">|
          </div>
          <!-- LAYER NR. 8 -->
          <div class="tp-caption large_text skewfromleft customout"
               data-x="730"
               data-y="420"
               data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
               data-speed="800"
               data-start="3700"
               data-easing="Power4.easeOut"
               data-endspeed="300"
               data-endeasing="Power1.easeIn"
               data-captionhidden="on"
               style="z-index: 6">Unisex salon
          </div>
      </li>
      <!-- SLIDE NR. 2-->
      <li data-transition="fade" data-slotamount="5" data-masterspeed="700" >
          <!-- MAIN IMAGE -->
          <img src="<?php echo asset('uploads/slider/'.$slider->image2)?> "  alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
          <!-- LAYER NR. 1 -->
          <div class="tp-caption very_large_text sft customout"
               data-x="center"
               data-y="0"
               data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
               data-speed="800"
               data-start="1500"
               data-easing="Power4.easeOut"
               data-endspeed="300"
               data-endeasing="Power1.easeIn"
               data-captionhidden="on"
               style="z-index: 6">AWESOME <span style="font-weight:700" class="colored-text">FEATURES</span>
          </div>
          <!-- LAYER NR. 2 -->
          <div class="tp-caption very_large_text sft customout"
               data-x="center"
               data-y="50"
               data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
               data-speed="800"
               data-start="1800"
               data-easing="Power4.easeOut"
               data-endspeed="300"
               data-endeasing="Power1.easeIn"
               data-captionhidden="on"
               style="z-index: 6">___________
          </div>
          <!-- LAYER NR. 3 -->
          <div class="tp-caption large_text customin"
               data-x="400"
               data-y="180"
               data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
               data-speed="800"
               data-start="2100"
               data-easing="Power4.easeOut"
               data-endspeed="300"
               data-endeasing="Power1.easeIn"
               data-captionhidden="on"
               style="z-index: 6">
          </div>
          <!-- LAYER NR. 4 -->
          <div class="tp-caption large_text customin"
               data-x="center"
               data-y="180"
               data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
               data-speed="800"
               data-start="2400"
               data-easing="Power4.easeOut"
               data-endspeed="300"
               data-endeasing="Power1.easeIn"
               data-captionhidden="on"
               style="z-index: 6">
          </div>
          <!-- LAYER NR. 5 -->
          <div class="tp-caption large_text customin"
               data-x="700"
               data-y="180"
               data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
               data-speed="800"
               data-start="2700"
               data-easing="Power4.easeOut"
               data-endspeed="300"
               data-endeasing="Power1.easeIn"
               data-captionhidden="on"
               style="z-index: 6">
          </div>
          <!-- LAYER NR. 6 -->
          <div class="tp-caption large_text skewfromleftshort customout"
               data-x="center"
               data-y="315"
               data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
               data-speed="800"
               data-start="3100"
               data-easing="Power4.easeOut"
               data-endspeed="300"
               data-endeasing="Power1.easeIn"
               data-captionhidden="on"
               style="z-index: 6"><p class="text-center">ENJOY OUR SERVICES</p>
          </div>
      </li>
      <!-- SLIDE NR. 3 -->
      <li data-transition="fade" data-slotamount="5" data-masterspeed="700" >
          <!-- MAIN IMAGE -->
          <img src="<?php echo asset('uploads/slider/'.$slider->image3) ?>"  alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
          <!-- LAYER NR. 1 -->
          <div class="tp-caption very_large_text sft customout"
               data-x="center"
               data-y="0"
               data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
               data-speed="800"
               data-start="1500"
               data-easing="Power4.easeOut"
               data-endspeed="300"
               data-endeasing="Power1.easeIn"
               data-captionhidden="on"
               style="z-index: 6">OUTSTANDING <span style="font-weight:700" class="colored-text">SERVICES</span>
          </div>
          <!-- LAYER NR. 2 -->
          <div class="tp-caption very_large_text sft customout"
               data-x="center"
               data-y="50"
               data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
               data-speed="800"
               data-start="1800"
               data-easing="Power4.easeOut"
               data-endspeed="300"
               data-endeasing="Power1.easeIn"
               data-captionhidden="on"
               style="z-index: 6">___________
          </div>
          <!-- LAYER NR. 3 -->
          <div class="tp-caption medium_text customin"
               data-x="center"
               data-y="160"
               data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
               data-speed="800"
               data-start="2700"
               data-easing="Power4.easeOut"
               data-endspeed="300"
               data-endeasing="Power1.easeIn"
               data-captionhidden="on"
               style="z-index: 6">A FULL SERVICE HAIR SALON BEAUTY SALON
              <br> For Men And Women
          <!-- LAYER NR. 4 -->
          <div class="tp-caption large_text skewfromleftshort customout"
               data-x="center"
               data-y="275"
               data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
               data-speed="800"
               data-start="3100"
               data-easing="Power4.easeOut"
               data-endspeed="300"
               data-endeasing="Power1.easeIn"
               data-captionhidden="on"
               style="z-index: 6"><p class="text-center">ENJOY OUR SERVICES</p>
          </div>
      </li>
      @endforeach
      </ul>
      <div class="tp-bannertimer"></div>
      </div>
      </div>
      </section>
      <!-- /. SLIDER ENDS -->
      <!-- NAVIGATION STARTS
         ========================================================================= -->
      <section id="navigation">
         <div class="navbar navbar-inverse" role="navigation">
            <div class="container">
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                 <h3>Next Level</h3>
               </div>
               <div class="collapse navbar-collapse">
                  <ul class="nav navbar-nav pull-right">
                     <li class="current"><a href="index.html#slider" data-toggle="collapse" data-target=".navbar-collapse">HOME</a></li>
                     <li><a href="index.html#about" data-toggle="collapse" data-target=".navbar-collapse">ABOUT</a></li>
                     <li><a href="index.html#services" data-toggle="collapse" data-target=".navbar-collapse">SERVICES</a></li>
                     <li><a href="index.html#portfolio" data-toggle="collapse" data-target=".navbar-collapse">GALLERY</a></li>
                     <li><a href="index.html#contact" data-toggle="collapse" data-target=".navbar-collapse">CONTACT</a></li>
                  </ul>
               </div>
               <!--/.nav-collapse --> 
            </div>
         </div>
      </section>
      <!-- /.NAVIGATION -->
      <!-- ABOUT US STARTS
         ========================================================================= -->
      <section id="about">
         <div class="container">
            <div class="row">
               <div class="col-md-12 section-heading animated" data-animation="fadeInRight" data-animation-delay="0">
                  <h2>UNIQUE / <span class="colored-text">BEAUTIFUL</span> / MODERN THEME</h2>
                  <h1>GET THE BEST YOU EVER <span class="colored-text">DREAM</span></h1>
                  <p class="line">&nbsp;</p>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 animated" data-animation="fadeIn" data-animation-delay="200">
                  <div class="circle icon"><i class="fa fa-thumbs-o-up"></i></div>
                  <div class="heading">WHO WE ARE</div>
                  <div class="lead">We're a small business, family operation located in Tegeta Kinondoni Dar es salaam.
                      We started back in 2009 in Mbezi Beach Kinondoni Dar es salaam, as a way to help our friends and the community surrounding
                      that area to get their awesome gift items for all occasion, and have since grown to have a lot more friends & customers from all over the Kinondoni from Mbezi Beach to all over Bunju and Bagamoyo.
                      On June 15th, 2012, we shift our first ever gift retail business to Tegeta at the Kibo Commercial Complex. </div>
               </div>
               <div class="col-md-4 animated" data-animation="fadeIn" data-animation-delay="400">
                  <div class="circle icon"><i class="fa fa-cog"></i></div>
                  <div class="heading">WHAT WE DO</div>
                  <div class="lead">
                      <p><strong class="colored-text">We Care Pharmacy:</strong> Helping the community feel better through provision in retail selling human and veterinary medicines, food supplements and quality cosmetics including new born babies products.</p>
                      <p><strong class="colored-text">Next Level Unisex Salon:</strong>   Offer all your various requirements in hair and body treatment.</p>
                      <p><strong class="colored-text">Next Level gifts</strong> Sure, our unique and unforgettable gift suggestions are a big part of why people love us, but we also offer endless inspiration, tips and tools to make every day a reason to celebrate.</p>
                  </div>
               </div>
               <div class="col-md-4 animated" data-animation="fadeIn" data-animation-delay="600">
                  <div class="circle icon"><i class="fa fa-eye"></i></div>
                  <div class="heading">WHY CHOOSE US</div>
                  <div class="lead">On top of competitive benefits package, there's a whole bunch of other perks that make us happy
                      to be here.
                      <h4><strong class="colored-text">Unique Gifts</strong></h4>
                      No traffic. No lines. No fighting for the last item.
                      <h4><strong class="colored-text">Our Mission</strong></h4>
                      To help you find the perfect gift, every time.
                      <h4><strong class="colored-text">Our Culture</strong></h4>
                      We’re changing the way people shop for gifts.

                  </div>
               </div>
            </div>
            <div> </div>
         </div>
      </section>
      <!-- ABOUT BLOCK 2 STARTS
         ========================================================================= -->                
      <section id="about-2">
         <div class="container">
            <div class="row">
               <div class="col-md-12 section-heading animated" data-animation="fadeInRight" data-animation-delay="0">
                  <h2 class="colored-text">WHAT WE OFFER</h2>
                  <h1>DEDICATED <span class="colored-text">CUSTOMER</span> SUPPORT</h1>
                  <p class="line">&nbsp;</p>
               </div>
            </div>


             <div id="myCarousel" class="carousel slide" data-ride="carousel">

                 <!-- Indicators -->
                 <div class="carousel-inner" >

                     <?php $i = 1 ?>
                     @foreach(Offer::all() as $offer)
                     @if($i==1)
                     <div class="item active">
                         @else
                     <div class="item">
                         @endif
                         <?php $i++ ?>
                         <div class="row featurette">
                             <div class="col-md-5">
                                 <img  class="img"  style="width: 350px; height: 300px" src="<?php echo asset('uploads/offer/'.$offer->image) ?>" class="img-responsive" alt="">
                             </div>
                             <div class="col-md-7">
                                 <h2 class="featurette-heading text-muted">{{$offer->title}}</h2>
                                 <p class="lead">{{$offer->description}}</p>
                                 <h3 class="featurette-heading text-muted">OPEN TIME</h3>
                                 <p class="colored-text"><strong style="color: #000000">Mon- Sat.</strong> 7:30 – 23:00
                                     <br><strong style="color: #000000">Sunday / Public Holiday.</strong> 8:30- 22:30</p>

                             </div>
                         </div>
                     </div>
                     @endforeach
                 </div>
             </div>
             </div>
         </section>
                     <!--

                           <!-- SERVICES STARTS
                              ========================================================================= -->
                     <section id="services">
                         <div class="container">
                             <div class="row">
                                 <div class="col-md-12 section-heading animated" style="text-align:center" data-animation="fadeInUp" data-animation-delay="0">
                                     <h2>OUR SERVICES</h2>
                                     <h1>WHAT WE DO</h1>
                                     <p class="line">&nbsp;</p>
                                 </div>
                             </div>
                             <div class="owl-carousel" id="our-services">
                                 <div class="item animated" data-animation="flipInY" data-animation-delay="200">
                                     <div class="circle icon"><i class="fa fa-hospital-o"></i></div>
                                     <div class="heading-1">Health</div>
                                     <div class="heading-2"> PHARMACY</div>
                                     <p class="smallline">&nbsp;</p>
                                     <div class="lead">Helping the community feel better through provision in retail selling human and veterinary medicines, food supplements and quality cosmetics including new born babies products.</div>
                                 </div>
                                 <div class="item animated" data-animation="flipInY" data-animation-delay="400">
                                     <div class="circle icon"><i class="fa fa-eye"></i></div>
                                     <div class="heading-1">Beauty</div>
                                     <div class="heading-2"> UNISEX SALON</div>
                                     <p class="smallline">&nbsp;</p>
                                     <div class="lead">At <strong class="colored-text">Next level Unisex Salon</strong> our team of expert professionals is dedicated to providing each and
                                         every client with healthy and beautiful hair. We strive to provide the highest quality services and products available
                                         at affordable prices. </div>
                                 </div>
                                 <div class="item animated" data-animation="flipInY" data-animation-delay="600">
                                     <div class="circle icon"><i class="fa fa-gift"></i></div>
                                     <div class="heading-1">Gifts</div>
                                     <div class="heading-2"> GIFTS SHOP</div>
                                     <p class="smallline">&nbsp;</p>
                                     <div class="lead"><strong class="colored-text">Next level</strong> provides more than just ideas. Sure, our unique and unforgettable gift suggestions are a big part of why people love us,
                                         but we also offer endless inspiration, tips and tools to make every day a reason to celebrate.</div>
                                 </div>
                                 <div class="item animated" data-animation="flipInY" data-animation-delay="800">
                                     <div class="circle icon"><i class="fa fa-cogs"></i></div>
                                     <div class="heading-1">To Do List</div>
                                     <div class="heading-2">OTHERS</div>
                                     <p class="smallline">&nbsp;</p>
                                     <div class="lead">Customer satisfaction is our top priority and is reflected by our large loyal customer base and excellent reputation in our community.</div>
                                 </div>

                             </div>
                             <div> </div>
                         </div>
                     </section>
                     <!-- /.SERVICES -->
                     <!-- GALLERY STARTS
                             ========================================================================= -->
                     <section id="portfolio">
                         <div class="container">
                             <div class="row">
                                 <div class="col-md-12 section-heading animated" style="text-align:center" data-animation="fadeInUp" data-animation-delay="0">
                                     <h2>OUR GALLERY</h2>
                                     <h1>DISPLAY YOUR WORK</h1>
                                     <p class="line">&nbsp;</p>
                                 </div>
                             </div>
                         </div>
                         <!-- AJAX gallery Details -->
                         <div class="portfolio-detail"></div>
                         <!-- AJAX gallery Details -->
                         <div class="container">
                             <!-- gallery Thumbs Starts -->
                             <div class="row" id="container-thumbs">
                                 @foreach(Gallery::all() as $gallery)
                                 <div class="col-xs-12 col-sm-6 col-md-3 items graphics animated" data-animation="fadeIn" data-animation-delay="200" data-project="portfolio-pages">
                                     <a href="index.html#" class="overlayzoom"><img src="<?php echo asset('uploads/gallery/'.$gallery->image)?>" class="img-responsive" alt=""><span class="zoom"><span><i class="fa fa-heart"></i></span></span> </a>
                                 </div>
                               @endforeach
                             </div>
                             <!-- gallery Thumbs Ends -->
                         </div>
                     </section>
                     <!-- /.GALLERY -->
                     <!-- CONTACT STARTS
                        ========================================================================= -->
                     <section id="contact">
                         <div class="container">
                             <div class="row">
                                 <div class="col-md-12 section-heading animated" style="text-align:center" data-animation="fadeInUp" data-animation-delay="0">
                                     <h2>CONTACT US</h2>
                                     <h1>Get in <span class="colored-text">touch</span> with us</h1>
                                     <p class="line">&nbsp;</p>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-lg-12 animated" data-animation="fadeInUp" data-animation-delay="100">

                                     <p class="lead">Please note that we cannot take orders by <strong class="colored-text">phone</strong>.
                                         We're not always by our desks,   we recommend emailing or you can text message us
                                         at +255 -----------,<br>instead of calling, as we'll be able to serve you better, and often quicker.</p>

                                 </div>
                                 <div class=" col-lg-4 address">
                                     <h3 class=" lead colored-text">Physical Address</h3><i class="fa fa-map-marker"></i>
                                     <p class="lead"> Next level ltd<br>
                                         Kibo commercial Complex<br>
                                         Tegeta Kibaoni – Bagamoyo Road<br>
                                         Kinondoni Dar es salaam<br></p>
                                 </div>
                                 <div class=" col-lg-4 address">
                                     <h3 class=" lead colored-text">Postal Address</h3>
                                     <i class="fa fa-map-marker"></i>
                                     <p class="lead">The Next level co.ltd<br>
                                         P.O Box 12142<br>
                                         Dar es salaam <br></p></div>
                                 <div class=" col-lg-4 address">
                                     <h3 class="lead colored-text">Mailing Address</h3>
                                     <i class="fa fa-envelope"></i><span class="lead">nextleveltz@gmail.com</span>
                                 </div>
                             </div>
                         </div>
                 </div>
      </section>
      <!-- /.CONTACT -->
      <!-- SOCIAL MEDIA STARTS
         ========================================================================= -->
      <section id="social-media" data-speed="20" data-type="background">
         <div class="container">
            <div class="row">
               <div class="col-md-12 section-heading animated" style="text-align:center" data-animation="fadeInUp" data-animation-delay="0">
                  <h2>SOCIAL MEDIA</h2>
                  <h1>GET IN <span class="colored-text">TOUCH</span> WITH UPDATES</h1>
                  <p class="line">&nbsp;</p>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 col-md-offset-3 animated" data-animation="fadeInUp" data-animation-delay="200">
                  <div class="lead">Get us on social networks by following the links below.</div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-12">
                  <ul>
                     <li class="animated" data-animation="fadeInUp" data-animation-delay="400"><a href="index.html#"</a><i class="fa fa-facebook"></i></li>
                     <li class="animated" data-animation="fadeInUp" data-animation-delay="500"><a href="index.html#"</a><i class="fa fa-instagram" style="color: #000000"></i></li>
                     <li class="animated" data-animation="fadeInUp" data-animation-delay="800"><a href="index.html#"</a><i class="fa fa-google-plus" style="color: #ff0000"></i></li>
                  </ul>
               </div>
            </div>
         </div>
      </section>
      <!-- /.SOCIAL MEDIA -->
      <!-- FOOTER STARTS
         ========================================================================= -->
      <section id="footer">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-lg-offset-3">
<!--                  <div class="desc1"><i class="fa fa-heart"></i><br>© 2015. Next Level.<br><span class="colored-text">designed by JoP Inc.</span></div>-->
                  <div class="line"></div>
                  <a href="index.html#" class="scrollup"><i class="fa fa-angle-double-up"></i></a>
               </div>
            </div>
         </div>
      </section>
      <!-- /.FOOTER -->
      <!-- /.CONTAINER -->

      <!-- JAVASCRIPTS STARTS
         ========================================================================= --> 
      <!-- Bootstrap -->
      {{ HTML::script("js/jquery-1.11.0.min.js") }}
      {{ HTML::script("js/bootstrap.min.js") }}
      <!-- Style Switcher -->
      {{ HTML::script("js/styleswitcher/styleswitcher.js") }}
      <!-- Animation -->
      {{ HTML::script("js/animation/jquery.appear.js") }}
      <!-- AJAX Contact Form -->
      {{ HTML::script("js/contact/contact-form.js") }}
      <!-- Lightbox -->
      {{ HTML::script("lightbox/ekko-lightbox.js") }}
      <!-- Isotope -->
      {{ HTML::script("js/isotope/jquery.isotope.min.js") }}
      {{ HTML::script("js/isotope/custom-isotope.js") }}
      <!-- Slider Revolution 4.x Scripts -->
      {{ HTML::script("rs-plugin/js/jquery.themepunch.plugins.min.js") }}
      {{ HTML::script("rs-plugin/js/jquery.themepunch.revolution.js") }}
      <script>
         var revapi;
         
         		jQuery(document).ready(function() {
         
         			   revapi = jQuery('.tp-banner').revolution(
         				{
         					delay:15000,
         					startwidth:1170,
         					startheight:500,
         					hideThumbs:10,
         					fullWidth:"off",
         					fullScreen:"on",
         					fullScreenOffsetContainer: "",
         					hideCaptionAtLimit:400
         					//hideAllCaptionAtLimit:400
         				});
         
         		});	//ready	
      </script>       
      <!-- Owl Carousel -->
      {{ HTML::script("owl-carousel/owl-carousel/owl.carousel.js") }}
      <!-- Custom -->
      {{ HTML::script("js/custom.js") }}
      <!-- Parallex -->
      {{ HTML::script("js/parallex/script.js") }}
      <!-- ScrollTo -->
      {{ HTML::script("js/nav/jquery.scrollTo.js") }}
      {{ HTML::script("js/nav/jquery.nav.js") }}
      <!-- Sticky -->
      {{ HTML::script("js/sticky/jquery.sticky.js") }}
      <!-- Donut Chart -->
      {{ HTML::script("js/progress-bars/jquery.donutchart.js") }}
      <script>
         $("#donutchart1").donutchart("animate");
         $("#donutchart2").donutchart("animate");
         $("#donutchart3").donutchart("animate");
         $("#donutchart4").donutchart("animate");
         $("#donutchart5").donutchart("animate");
         $("#donutchart6").donutchart("animate");
         $("#donutchart7").donutchart("animate");
         $("#donutchart8").donutchart("animate");			
      </script>
      <!-- SmoothScroll -->
      {{ HTML::script("js/SmoothScroll/SmoothScroll.js") }}
      <!-- Retina -->
      {{ HTML::script("js/retina/retina.js") }}
        <!-- FitVids -->
      {{ HTML::script("js/jquery.fitvids.js") }}
   </body>
</html>