<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Restaurant Offer Hub</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="frontend/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="{{ asset('frontend/css/font-awesome.css') }}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/slick.css') }}">    
    <!-- Date Picker -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap-datepicker.css') }}">   
     <!-- Gallery Lightbox -->
    <link href="{{ asset('frontend/css/magnific-popup.css') }}" rel="stylesheet"> 
    <!-- Theme color -->
    <link id="switcher" href="{{ asset('frontend/css/theme-color/default-theme.css') }}" rel="stylesheet">     

    <!-- Main style sheet -->
    <link href="{{ asset('frontend/style.css') }}" rel="stylesheet">    

   
    <!-- Google Fonts -->

    <!-- Prata for body  -->
    <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>
    <!-- Tangerine for small title -->
    <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>   
    <!-- Open Sans for title -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>

  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->
  <header id="mu-header">  
    <nav class="navbar navbar-default mu-main-navbar" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- LOGO -->       

           <!--  Text based logo  -->
          {{-- <a class="navbar-brand" href="index.html">RO<span>H</span></a>  --}}
          

		      <!--  Image based logo  -->
          {{-- <a class="navbar-brand" href="index.html"><img src="{{ asset('frontend/img/') }}/logohome/logo3.png" alt="Logo img"></a> --}}
         

        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
            <li><a href="#">HOME</a></li>
            <li><a href="#mu-about-us">ABOUT ROH</a></li>                       
            <li><a href="#mu-counter">OFFERS</a></li>                       
            <li><a href="#mu-reservation">RESERVATION</a></li>                       
            <li><a href="#mu-gallery">GALLERY</a></li>
            <li><a href="#mu-chef">RESTAURANTS</a></li> 
            <li><a href="#mu-contact">CONTACT</a></li> 
            @if(Auth::user()->type == 'restaurant')
              <li><a class="nav-link" href="{{ route('user.profile') }}" style="text-transform: uppercase;">{{ Auth::user()->name }}</a></li> 
            @endif

            {{-- <li>
                    <a class="nav-link" href="{{ route('profile') }}"
                onclick="event.preventDefault();
                              document.getElementById('profile-form').submit();">
                              <i class="nav-icon far fa-circle text-danger"></i>
                 {{ __('PROFILE') }}
             </a>

             <form id="profile-form" action="{{ route('profile') }}" method="POST" style="display: none;">
                 @csrf
             </form>
            </li> --}}
            {{-- <li><a href="#mu-contact">LOG OUT</a> --}}
              <li>
                <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                              <i class="nav-icon far fa-circle text-danger"></i>
                 {{ __('LOGOUT') }}
             </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 @csrf
             </form>
              </li>
            </li> 
          </ul>                            
        </div><!--/.nav-collapse -->       
      </div>          
    </nav> 
  </header>
  <!-- End header section -->
 

  <!-- Start slider  -->
  <section id="mu-slider">
    <div class="mu-slider-area"> 

      <!-- Top slider -->
      <div class="mu-top-slider">

        <!-- Top slider single slide -->
        <div class="mu-top-slider-single">
          <img src="{{ asset('frontend/img/slider/1.png') }}" alt="img">
          <!-- Top slider content -->
          <div class="mu-top-slider-content">
            <span class="mu-slider-small-title">Welcome</span>
            <h2 class="mu-slider-title">Restaurant Offer Hub</h2>
            <p>ONE SITE| ALL RESTAURANTS| ALL OFFERS</p>           
            {{-- <a href="#mu-reservation" class="mu-readmore-btn mu-reservation-btn">BOOK A TABLE</a> --}}
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->    

         <!-- Top slider single slide -->
        <div class="mu-top-slider-single">
          <img src="{{ asset('frontend/img/') }}/slider/2.png" alt="img">
          <!-- Top slider content -->
          <div class="mu-top-slider-content">
            <span class="mu-slider-small-title">Welcome</span>
            <h2 class="mu-slider-title">Restaurant Offer Hub</h2>
            <p>ONE SITE| ALL RESTAURANTS| ALL OFFERS</p>           
           {{-- <a href="#mu-reservation" class="mu-readmore-btn mu-reservation-btn">BOOK A TABLE</a> --}}
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide --> 

        <!-- Top slider single slide -->
        <div class="mu-top-slider-single">
          <img src="{{ asset('frontend/img/') }}/slider/3.png" alt="img">
          <!-- Top slider content -->
          <div class="mu-top-slider-content">
            <span class="mu-slider-small-title">Welcome</span>
            <h2 class="mu-slider-title">Restaurant Offer Hub</h2>
            <p>ONE SITE| ALL RESTAURANTS| ALL OFFERS</p>           
            {{-- <a href="#mu-reservation" class="mu-readmore-btn mu-reservation-btn">BOOK A TABLE</a> --}}
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->   

      </div>
    </div>
  </section>
  <!-- End slider  -->

  <!-- Start About us -->
  <section id="mu-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-about-us-area">

            <div class="mu-title">
              <span class="mu-subtitle">Discover</span>
              <h2>ABOUT ROH</h2>
            </div>

            <div class="row">
              <div class="col-md-6">
               <div class="mu-about-us-left">     
                <img src="{{ asset('frontend/img/') }}/about-us.png" alt="img">           
                </div>
              </div>
              <div class="col-md-6">
                 <div class="mu-about-us-right">
                 <p>
                  “Restaurant Offer Hub” is a new comer system to our daily life. 
                  We see restaurant business and also spend quality time in a restaurant, 
                  both of these are a hot trend in our region. But we see that, 
                  both of these actors facing kind of the same problem. 
                  Restaurants are not getting the targeted customer 
                  as well as people are getting hassled to choose their 
                  desired restaurant where they can go. On the other hand, 
                  we the people as a consumer are mad of offers. 
                  When we see an offer for our desired thing then 
                  it's a heavenly feeling for us. In this case, 
                  sometimes we see some food offers from the restaurants 
                  through social media but that's not all that we see and 
                  that's not enough information also. Besides that, 
                  all the information is not well arranged. 
                  This system will aim to overcome these 
                  complexities and create a sustainable 
                  relationship between the consumer and the restaurant. 
                  This system will especially be created to post 
                  the offers as a restaurant and view those 
                  offers as a consumer and grab it.
                   Besides that, this system will provide some essential 
                   and needy features also which will make daily life easier.
                  </p>  
                  <ul>

                    <li>Restaurants can post different types of offers time to time.</li>
                    <li>User will get notified when their subscribed restaurants post new offer.</li>
                    <li>Users will be able to order food what they are choosing.</li>                    
                    <li>Food vlogger will able to post their food review videos & 
                      registered user can stream it.</li>
                  </ul>
                  <p></p>  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End About us -->

  <!-- Start Counter Section -->
  
  <section id="mu-counter">
    <div class="mu-title">
      <span class="mu-subtitle">Discover</span>
      <h2>CURRENT OFFERS</h2>
    </div>
    <div class="mu-counter-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mu-counter-area">

              <ul class="mu-counter-nav">

                @if (!empty($restaurants))
                    @foreach($restaurants as $restaurant)
                    
                    <li class="col-md-3 col-sm-3 col-xs-12">
                      <div class="mu-single-counter">
                        <span>Offers</span>
                        <h3><span class="counter-value" data-count="{{ $restaurant->offers->count() }}">0</span><sup>+</sup></h3>
                        <p>{{ $restaurant->name }}</p>
                        <button style="color: black" data-toggle="modal" data-target="#offer_modal_{{ $restaurant->id }}">View Offers</button>
                      </div>
                    </li>
                  @endforeach
                @endif


              </ul>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Counter Section --> 

  <!-- Start Restaurant Menu -->
  <section id="mu-restaurant-menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-restaurant-menu-area">

            <div class="mu-title">
              <span class="mu-subtitle">Discover</span>
              <h2>OUR MENU</h2>
            </div>
            
            <div class="mu-restaurant-menu-content">
              <ul class="nav nav-tabs mu-restaurant-menu">
                <li class="active"><a href="#breakfast" data-toggle="tab">Breakfast</a></li>
                <li><a href="#meals" data-toggle="tab">Meals</a></li>
                <li><a href="#snacks" data-toggle="tab">Snacks</a></li>
                <li><a href="#desserts" data-toggle="tab">Desserts</a></li>
                <li><a href="#drinks" data-toggle="tab">Drinks</a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade in active" id="breakfast">
                  <div class="mu-tab-content-area">
                    <div class="row">

                      <div class="col-md-6">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="{{ asset('frontend/img/') }}/menu/item-1.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">English Breakfast</a></h4>
                                  <span class="mu-menu-price">$15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="{{ asset('frontend/img/') }}/menu/item-2.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Chines Breakfast</a></h4>
                                  <span class="mu-menu-price">$11.95</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="{{ asset('frontend/img/') }}/menu/item-1.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Indian Breakfast</a></h4>
                                  <span class="mu-menu-price">$15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                          </ul>   
                        </div>
                      </div>

                     <div class="col-md-6">
                       <div class="mu-tab-content-right">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="{{ asset('frontend/img/') }}/menu/item-1.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">English Breakfast</a></h4>
                                  <span class="mu-menu-price">$15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="{{ asset('frontend/img/') }}/menu/item-2.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Chines Breakfast</a></h4>
                                  <span class="mu-menu-price">$11.95</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="{{ asset('frontend/img/') }}/menu/item-1.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Indian Breakfast</a></h4>
                                  <span class="mu-menu-price">$15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                          </ul>   
                       </div>
                     </div>

                   </div>
                 </div>
                </div>

                <div class="tab-pane fade" id="meals">
                  <div class="mu-tab-content-area">
                    <div class="row">

                      <div class="col-md-6">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="{{ asset('frontend/img/') }}/menu/item-3.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">English Breakfast</a></h4>
                                  <span class="mu-menu-price">$15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="{{ asset('frontend/img/') }}/menu/item-4.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Chines Breakfast</a></h4>
                                  <span class="mu-menu-price">$11.95</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="{{ asset('frontend/img/') }}/menu/item-3.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Indian Breakfast</a></h4>
                                  <span class="mu-menu-price">$15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                          </ul>   
                        </div>
                      </div>

                     <div class="col-md-6">
                       <div class="mu-tab-content-right">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="{{ asset('frontend/img/') }}/menu/item-4.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">English Breakfast</a></h4>
                                  <span class="mu-menu-price">$15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="{{ asset('frontend/img/') }}/menu/item-3.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Chines Breakfast</a></h4>
                                  <span class="mu-menu-price">$11.95</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="{{ asset('frontend/img/') }}/menu/item-4.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Indian Breakfast</a></h4>
                                  <span class="mu-menu-price">$15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                          </ul>   
                       </div>
                     </div>

                   </div>
                 </div>
                </div>

                <div class="tab-pane fade" id="snacks">
                  <div class="mu-tab-content-area">
                    <div class="row">

                      <div class="col-md-6">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="{{ asset('frontend/img/') }}/menu/item-5.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">English Breakfast</a></h4>
                                  <span class="mu-menu-price">$15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="{{ asset('frontend/img/') }}/menu/item-6.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Chines Breakfast</a></h4>
                                  <span class="mu-menu-price">$11.95</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="{{ asset('frontend/img/') }}/menu/item-5.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Indian Breakfast</a></h4>
                                  <span class="mu-menu-price">$15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                          </ul>   
                        </div>
                      </div>

                     <div class="col-md-6">
                       <div class="mu-tab-content-right">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="{{ asset('frontend/img/') }}/menu/item-5.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">English Breakfast</a></h4>
                                  <span class="mu-menu-price">$15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="{{ asset('frontend/img/') }}/menu/item-6.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Chines Breakfast</a></h4>
                                  <span class="mu-menu-price">$11.95</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="{{ asset('frontend/img/') }}/menu/item-5.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Indian Breakfast</a></h4>
                                  <span class="mu-menu-price">$15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                          </ul>   
                       </div>
                     </div>

                   </div>
                 </div>
                </div>

                <div class="tab-pane fade" id="desserts">
                  <div class="mu-tab-content-area">
                    <div class="row">

                      <div class="col-md-6">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="{{ asset('frontend/img/') }}/menu/item-7.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">English Breakfast</a></h4>
                                  <span class="mu-menu-price">$15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="{{ asset('frontend/img/') }}/menu/item-8.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Chines Breakfast</a></h4>
                                  <span class="mu-menu-price">$11.95</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="{{ asset('frontend/img/') }}/menu/item-7.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Indian Breakfast</a></h4>
                                  <span class="mu-menu-price">$15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                          </ul>   
                        </div>
                      </div>

                     <div class="col-md-6">
                       <div class="mu-tab-content-right">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="{{ asset('frontend/img/') }}/menu/item-8.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">English Breakfast</a></h4>
                                  <span class="mu-menu-price">$15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="{{ asset('frontend/img/') }}/menu/item-7.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Chines Breakfast</a></h4>
                                  <span class="mu-menu-price">$11.95</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="{{ asset('frontend/img/') }}/menu/item-8.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Indian Breakfast</a></h4>
                                  <span class="mu-menu-price">$15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                          </ul>   
                       </div>
                     </div>

                   </div>
                 </div>
                </div>

                <div class="tab-pane fade" id="drinks">
                  <div class="mu-tab-content-area">
                    <div class="row">

                      <div class="col-md-6">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="{{ asset('frontend/img/') }}/menu/item-9.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">English Breakfast</a></h4>
                                  <span class="mu-menu-price">$15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="{{ asset('frontend/img/') }}/menu/item-10.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Chines Breakfast</a></h4>
                                  <span class="mu-menu-price">$11.95</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="{{ asset('frontend/img/') }}/menu/item-9.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Indian Breakfast</a></h4>
                                  <span class="mu-menu-price">$15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                          </ul>   
                        </div>
                      </div>

                     <div class="col-md-6">
                       <div class="mu-tab-content-right">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="{{ asset('frontend/img/') }}/menu/item-9.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">English Breakfast</a></h4>
                                  <span class="mu-menu-price">$15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="{{ asset('frontend/img/') }}/menu/item-10.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Chines Breakfast</a></h4>
                                  <span class="mu-menu-price">$11.95</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="{{ asset('frontend/img/') }}/menu/item-9.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Indian Breakfast</a></h4>
                                  <span class="mu-menu-price">$15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                          </ul>   
                       </div>
                     </div>

                   </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Restaurant Menu -->

  <!-- Start Reservation section -->
  <section id="mu-reservation">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-reservation-area">

            <div class="mu-title">
              <span class="mu-subtitle">Make A</span>
              <h2>Reservation With Restaurant Offer Hub</h2>
            </div>

            <div class="mu-reservation-content">
              <p>For Reserving A Table Please Fill It Up!</p>

              <div class="col-md-6">
                <div class="mu-reservation-left">
                  <form class="mu-reservation-form" action="{{ route('user.reservation') }}" method="POST">
                    @csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">                       
                          <input type="text" class="form-control" placeholder="Full Name" name="name" required>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">                        
                          <input type="email" class="form-control" placeholder="Email" name="email" required>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">                        
                          <input type="text" class="form-control" placeholder="Phone Number" name="phone" required>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <select class="form-control" name="restaurant" required>
                            <option value="">Select Restaurant</option>
                            @if (!empty($restaurants))
                            @foreach($restaurants as $restaurant)
                            
                              <option value="{{$restaurant->id}}">{{ $restaurant->name }}</option>
                            @endforeach
                            @endif
                           
                          </select>                      
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <select class="form-control" name="person_number" required>
                            <option value="">How Many?</option>
                            <option value="1 Person">1 Person</option>
                            <option value="2 People">2 People</option>
                            <option value="3 People">3 People</option>
                            <option value="4 People">4 People</option>
                            <option value="5 People">5 People</option>
                            <option value="6 People">6 People</option>
                            <option value="7 People">7 People</option>
                            <option value="8 People">8 People</option>
                            <option value="9 People">9 People</option>
                            <option value="10 People">10 People</option>
                          </select>                      
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="text" class="form-control" id="datepicker" data-date-format='yyyy-mm-dd' placeholder="Date" name="date" required>              
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <textarea class="form-control" cols="30" rows="10" placeholder="Your Message" name="msg" required></textarea>
                        </div>
                      </div>
                      <button type="submit" class="mu-readmore-btn">Make Reservation</button>
                    </div>
                  </form>    
                </div>
              </div>

              <div class="col-md-5 col-md-offset-1">
                <div class="mu-reservation-right">
                  <div class="mu-opening-hour">
                    <h2>Opening Hours</h2>
                      <ul class="list-unstyled">
                        <li>
                            <p>Monday &amp; Tuesday</p>
                            <p>9:00 AM - 4:00 PM</p>
                        </li>
                        <li>
                            <p>Wednesday &amp; Thursday</p>
                            <p>9:00 AM - Midnight</p>
                        </li>
                        <li>
                            <p>Friday &amp; Saturday</p>
                            <p>9:00 AM - Midnight</p>
                        </li>
                        <li>
                            <p>Sunday</p>
                            <p>9:00 AM - 11:00 PM</p>
                        </li>
                      </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  
  <!-- End Reservation section -->

  <!-- Start Gallery -->
  <section id="mu-gallery">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-gallery-area">

            <div class="mu-title">
              <span class="mu-subtitle">Discover</span>
              <h2>Gallery Of ROH</h2>
            </div>

            <div class="mu-gallery-content">
            
              <!-- Start gallery image -->
              <div class="mu-gallery-body">
                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4">
                    <div class="mu-single-gallery-item">
	                    <figure class="mu-single-gallery-img">
	                      <a class="mu-imglink" href="{{ asset('frontend/img/') }}/gallery/1.jpg">
                          <img alt="img" src="{{ asset('frontend/img/') }}/gallery/1.jpg">
                           <div class="mu-single-gallery-info">
                              <img class="mu-view-btn" src="{{ asset('frontend/img/') }}/plus.png" alt="plus icon img">
                          </div> 
                        </a>
	                    </figure>            
                  	</div>
                </div>
                <!-- End single gallery image -->

                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4">
                  	 <div class="mu-single-gallery-item">
                        <figure class="mu-single-gallery-img">
                          <a class="mu-imglink" href="{{ asset('frontend/img/') }}/gallery/2.jpg">
                            <img alt="img" src="{{ asset('frontend/img/') }}/gallery/2.jpg">
                             <div class="mu-single-gallery-info">
                                <img class="mu-view-btn" src="{{ asset('frontend/img/') }}/plus.png" alt="plus icon img">
                            </div> 
                          </a>
                        </figure>            
                    </div>
                </div>               
                <!-- End single gallery image -->

                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4">                  
                  	 <div class="mu-single-gallery-item">
                      <figure class="mu-single-gallery-img">
                        <a class="mu-imglink" href="{{ asset('frontend/img/') }}/gallery/3.jpg">
                          <img alt="img" src="{{ asset('frontend/img/') }}/gallery/3.jpg">
                           <div class="mu-single-gallery-info">
                              <img class="mu-view-btn" src="{{ asset('frontend/img/') }}/plus.png" alt="plus icon img">
                          </div> 
                        </a>
                      </figure>            
                    </div>
                </div>               
                <!-- End single gallery image -->

                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4">                  
                  	<div class="mu-single-gallery-item">
                      <figure class="mu-single-gallery-img">
                        <a class="mu-imglink" href="{{ asset('frontend/img/') }}/gallery/4.jpg">
                          <img alt="img" src="{{ asset('frontend/img/') }}/gallery/4.jpg">
                           <div class="mu-single-gallery-info">
                              <img class="mu-view-btn" src="{{ asset('frontend/img/') }}/plus.png" alt="plus icon img">
                          </div> 
                        </a>
                      </figure>            
                    </div>
                </div>
                <!-- End single gallery image -->

                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4">                  
                  	<div class="mu-single-gallery-item">
                      <figure class="mu-single-gallery-img">
                        <a class="mu-imglink" href="{{ asset('frontend/img/') }}/gallery/5.jpg">
                          <img alt="img" src="{{ asset('frontend/img/') }}/gallery/5.jpg">
                           <div class="mu-single-gallery-info">
                              <img class="mu-view-btn" src="{{ asset('frontend/img/') }}/plus.png" alt="plus icon img">
                          </div> 
                        </a>
                      </figure>            
                    </div>
                </div>               
                <!-- End single gallery image -->  

                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4">                  
                   <div class="mu-single-gallery-item">
                      <figure class="mu-single-gallery-img">
                        <a class="mu-imglink" href="{{ asset('frontend/img/') }}/gallery/6.jpg">
                          <img alt="img" src="{{ asset('frontend/img/') }}/gallery/6.jpg">
                           <div class="mu-single-gallery-info">
                              <img class="mu-view-btn" src="{{ asset('frontend/img/') }}/plus.png" alt="plus icon img">
                          </div> 
                        </a>
                      </figure>            
                    </div>
                </div>
                <!-- End single gallery image -->

                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4">                  
                  	<div class="mu-single-gallery-item">
                      <figure class="mu-single-gallery-img">
                        <a class="mu-imglink" href="{{ asset('frontend/img/') }}/gallery/7.jpg">
                          <img alt="img" src="{{ asset('frontend/img/') }}/gallery/7.jpg">
                           <div class="mu-single-gallery-info">
                              <img class="mu-view-btn" src="{{ asset('frontend/img/') }}/plus.png" alt="plus icon img">
                          </div> 
                        </a>
                      </figure>            
                    </div>
                </div>               
                <!-- End single gallery image -->

                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4">                  
                  	<div class="mu-single-gallery-item">
                      <figure class="mu-single-gallery-img">
                        <a class="mu-imglink" href="{{ asset('frontend/img/') }}/gallery/8.jpg">
                          <img alt="img" src="{{ asset('frontend/img/') }}/gallery/8.jpg">
                           <div class="mu-single-gallery-info">
                              <img class="mu-view-btn" src="{{ asset('frontend/img/') }}/plus.png" alt="plus icon img">
                          </div> 
                        </a>
                      </figure>            
                    </div>
                </div>               
                <!-- End single gallery image -->

                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4">                  
                  	<div class="mu-single-gallery-item">
                      <figure class="mu-single-gallery-img">
                        <a class="mu-imglink" href="{{ asset('frontend/img/') }}/gallery/9.jpg">
                          <img alt="img" src="{{ asset('frontend/img/') }}/gallery/9.jpg">
                           <div class="mu-single-gallery-info">
                              <img class="mu-view-btn" src="{{ asset('frontend/img/') }}/plus.png" alt="plus icon img">
                          </div> 
                        </a>
                      </figure>            
                    </div>
                </div>
                <!-- End single gallery image -->  

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Gallery -->
  
  <!-- Start Client Testimonial section -->
  <section id="mu-client-testimonial">
    <div class="mu-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mu-client-testimonial-area">

              <div class="mu-title">
                <span class="mu-subtitle">Testimonials</span>
                <h2>What Customers Say</h2>
              </div>

              <!-- testimonial content -->
              <div class="mu-testimonial-content">
                <!-- testimonial slider -->
                <ul class="mu-testimonial-slider">
                  <li>
                    <div class="mu-testimonial-single">                   
                      <div class="mu-testimonial-info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?</p>
                      </div>
                      <div class="mu-testimonial-bio">
                        <p>- David Muller</p>                      
                      </div>
                    </div>
                  </li>
                   <li>
                    <div class="mu-testimonial-single">                   
                      <div class="mu-testimonial-info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?</p>
                      </div>
                      <div class="mu-testimonial-bio">
                        <p>- David Muller</p>                      
                      </div>
                    </div>
                  </li>
                   <li>
                    <div class="mu-testimonial-single">                   
                      <div class="mu-testimonial-info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?</p>
                      </div>
                      <div class="mu-testimonial-bio">
                        <p>- David Muller</p>                      
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Client Testimonial section -->
  
  <!-- Start Chef Section -->
  <section id="mu-chef">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-chef-area">

            <div class="mu-title">
              <span class="mu-subtitle">Restaurant Offer Hub's</span>
              <h2>RESTAURANTS</h2>
            </div>

            <div class="mu-chef-content">
              <ul class="mu-chef-nav">
                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="{{ asset('frontend/img/') }}/chef/chef-1.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Sultan's Dine</h4>
                      <span>Dhanmondi</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="{{ asset('frontend/img/') }}/chef/chef-2.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Kacchi Bhai</h4>
                      <span>Mirpur</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="{{ asset('frontend/img/') }}/chef/chef-3.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Burger King</h4>
                      <span>Dhanmondi</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="{{ asset('frontend/img/') }}/chef/chef-4.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Pizza Hut</h4>
                      <span>7 Mosque Road</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>  

                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="{{ asset('frontend/img/') }}/chef/chef-5.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Fork & Spoon</h4>
                      <span>Uttora</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>

                {{-- <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="{{ asset('frontend/img/') }}/chef/chef-1.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Kelly Wenzel</h4>
                      <span>Pizza Chef</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li> --}}

                {{-- <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="{{ asset('frontend/img/') }}/chef/chef-2.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Greg Hong</h4>
                      <span>Grill Chef</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li> --}}
                
                {{-- <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="{{ asset('frontend/img/') }}/chef/chef-3.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Marty Fukuda</h4>
                      <span>Burger Chef</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>                       --}}
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Chef Section -->

 

  <!-- Start Contact section -->
  <section id="mu-contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-contact-area">

            <div class="mu-title">
              <span class="mu-subtitle">Get In Touch</span>
              <h2>Contact Us</h2>
            </div>

            <div class="mu-contact-content">
              <div class="row">

                <div class="col-md-6">
                  <div class="mu-contact-left">
                    <!-- Email message div -->
                    <div id="form-messages"></div>
                    <!-- Start contact form -->
                    <form id="ajax-contact" method="post" action="mailer.php" class="mu-contact-form">
                      <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                      </div>
                      <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                      </div>                      
                      <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                      </div>
                      <div class="form-group">
                        <label for="message">Message</label>                        
                        <textarea class="form-control" id="message" name="message"  cols="30" rows="10" placeholder="Type Your Message" required></textarea>
                      </div>                      
                      <button type="submit" class="mu-send-btn">Send Message</button>
                    </form>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="mu-contact-right">
                    <div class="mu-contact-widget">
                      <h3>Office Address</h3>
                      <p>Dhaka, Bangladesh</p>
                      <address>
                        <p><i class="fa fa-phone"></i> 0170000000</p>
                        <p><i class="fa fa-envelope-o"></i>Sayad35-2115@diu.edu.bd</p>
                        <p><i class="fa fa-envelope-o"></i>tanver35-2111@diu.edu.bd</p>
                        <p><i class="fa fa-map-marker"></i>Dhaka, Bangladesh</p>
                      </address>
                    </div>
                    <div class="mu-contact-widget">
                      <h3>Open Hours</h3>                      
                      <address>
                        <p><span>Monday - Friday</span> 9.00 am to 12 pm</p>
                        <p><span>Saturday</span> 9.00 am to 10 pm</p>
                        <p><span>Sunday</span> 10.00 am to 12 pm</p>
                      </address>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact section -->
  <section id="mu-logout">
    <div class="container">
      <div class="row">
        {{-- <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="nav-icon far fa-circle text-danger"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form> --}}
      </div>
    </div>
  </section>

  <!-- Start Map section -->
  <section id="mu-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9207.358598888495!2d-85.64847801496286!3d30.183918972289003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x2320479d70eb6202!2sDillard&#39;s!5e0!3m2!1sbn!2sbd!4v1462359735720" width="100%" height="100%" frameborder="0"allowfullscreen></iframe>
  </section>
  <!-- End Map section -->

  <!-- Start Footer -->
  <footer id="mu-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="mu-footer-area">
           <div class="mu-footer-social">
            <a href="#"><span class="fa fa-facebook"></span></a>
            <a href="#"><span class="fa fa-twitter"></span></a>
            <a href="#"><span class="fa fa-google-plus"></span></a>
            <a href="#"><span class="fa fa-linkedin"></span></a>
            <a href="#"><span class="fa fa-youtube"></span></a>
          </div>
          <div class="mu-footer-copyright">
            <p>&copy; Copyright <a rel="nofollow" href="#">Restaurant Offer Hub</a>. All right reserved.</p>
          </div>         
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->
  


  {{-- Modals --}}
  <!-- Modal -->
  @if (!empty($restaurants))
  @foreach($restaurants as $restaurant)
  
    <div id="offer_modal_{{ $restaurant->id }}" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Offers</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-12">
                <div class="mu-counter-area">
    
                  <ul class="mu-counter-nav">
                    @if (!empty($restaurant->offers))
                        @foreach($restaurant->offers as $offer)
                        
                        <li class="col-md-3 col-sm-3 col-xs-12">
                          <div class="mu-single-counter">
                            <span>Offers</span>
                            <h3><span class="counter-value" data-count="{{ $offer->price }}">0</span></h3>
                            <p>{{ $offer->name }}</p>
                            <img src="{{ asset('uploads/'.$offer->img) }}" alt="" style="max-height: 100px;">
                          </div>
                        </li>
                      @endforeach
                    @endif
    
    
                  </ul>
    
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>
  @endforeach
  @endif
  <!-- jQuery library -->
  <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{ asset('frontend/js/bootstrap.js') }}"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="{{ asset('frontend/js/slick.js') }}"></script>
  <!-- Counter -->
  <script type="text/javascript" src="{{ asset('frontend/js/simple-animated-counter.js') }}"></script>
  <!-- Gallery Lightbox -->
  <script type="text/javascript" src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
  <!-- Date Picker -->
  <script type="text/javascript" src="{{ asset('frontend/js/bootstrap-datepicker.js') }}"></script> 
  <!-- Ajax contact form  -->
  <script type="text/javascript" src="{{ asset('frontend/js/app.js') }}"></script>
 
  <!-- Custom js -->
  <script src="{{ asset('frontend/js/custom.js') }}""></script> 
  @if(session()->has('success'))
  <script>
    alert("{{ session()->get('success') }}");
    </script>  
    @endif
  </body>
</html>