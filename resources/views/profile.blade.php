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
            <li><a href="{{ route('user.home') }}">HOME</a></li>
            <li><a href="#mu-counter">OUR OFFERS</a></li>                       
                
            <li><a href="#mu-reservation">ADD OFFER</a></li>   
            
            
          <li><a href="{{ route('user.profile') }}" style="text-transform: uppercase;">{{ Auth::user()->name }}</a></li> 
          <li><a href="#mu-contact">RESERVATIONS</a></li>                         
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

                @if(!empty($current_offers))
                @foreach($current_offers as $offer)
                    <li class="col-md-3 col-sm-3 col-xs-12">
                    <div class="mu-single-counter">
                        <span>{{ $offer->name }}</span>
                        <p>{{ Auth::user()->name }}</p>
                        <p>{{ $offer->price }}</p>
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
    </div>
  </section>
  <!-- End Counter Section --> 

  <!-- Start Reservation section -->
  <section id="mu-reservation">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-reservation-area">

            <div class="mu-title">
              <span class="mu-subtitle">Offer</span>
              <h2>Add Offer</h2>
            </div>

            <div class="mu-reservation-content">
              <p></p>

              <div class="col-md-6">
                <div class="mu-reservation-left">
                <form action="{{ route('user.add-offer') }}" class="mu-reservation-form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">                       
                          <input type="text" class="form-control" name="name" placeholder=" Name" required>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">                       
                          <input type="number" class="form-control" name="price" placeholder=" Price" required min='1'>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">                        
                          <input type="file" name="img" accept="image/*" class="form-control" placeholder="IMG" required>
                        </div>
                      </div>
                      
                      <button type="submit" class="mu-readmore-btn">Add</button>
                    </div>
                  </form>    
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  
  <!-- End Reservation section -->

 <!-- Start Contact section -->
 <section id="mu-contact">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-contact-area">

          <div class="mu-title">
            <span class="mu-subtitle">Messages</span>
            <h2>Reservations</h2>
          </div>

          <div class="mu-contact-content">
            <div class="row">

              <div class="col-md-12">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Person</th>
                      <th>Date</th>
                      <th>Message</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if (!empty($messages))
                        @foreach ($messages as $message)
                            <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $message->name }}</td>
                              <td>{{ $message->email }}</td>
                              <td>{{ $message->phone }}</td>
                              <td>{{ $message->person_number }}</td>
                              <td>{{ $message->date }}</td>
                              <td>{!! $message->msg !!}</td>
                            </tr>
                        @endforeach
                    @endif
                  </tbody>
                </table>
              </div>

              

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Contact section -->
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
  <script src="{{ asset('frontend/js/custom.js') }}"></script> 
  @if(session()->has('success'))
    <script>
    alert("{{ session()->get('success') }}");
    </script>  
  @endif
  </body>
</html>