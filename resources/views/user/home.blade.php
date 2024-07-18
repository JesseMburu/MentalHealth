<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>Nurturing Lives</title>

    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/css/theme.css">

    <style>
      .logo img {
      height: 50px; /* Adjust height as necessary */
      }

    </style>
    
  </head>
  <body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>   

    <header>
      <div class="topbar">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 text-sm">
              <div class="site-info">
                <a href="tel:+254783726463"><span class="mai-call text-primary"></span> +254 783726463</a>
                <span class="divider">|</span>
                <a href="mailto:example@example.com"><span class="mai-mail text-primary"></span> nurturinglives@gmail.com</a>
              </div>
            </div>
            <div class="col-sm-4 text-right text-sm">
              <div class="social-mini-button">
                <a href="https://github.com/Kibet-1Yvonne/ICSProject1.git"><span class="mai-logo-github"></span></a>
              </div>
            </div>
          </div> <!-- .row -->
        </div> <!-- .container -->
      </div> <!-- .topbar -->

      <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">

          <a class="logo">
            <img style="height:50px; width:50px;" src="admin/assets/images/logo.jpg">
          </a>


          <a class="navbar-brand" href="{{url('/')}}"><span class="text-primary">Nurturing</span>-Lives</a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupport">
            <ul class="navbar-nav ml-auto">

              <li class="nav-item">
                <a class="nav-link" href="{{url('/')}}">Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{url('contact')}}">Contact</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{url('chatify')}}">Chat</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{url('about')}}">About Us</a>
              </li>


            @if(Route::has('login'))
              @auth

              <li>
                <a class="nav-link" href="{{url('survey')}}">Survey</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{url('myappointment')}}">My Appointment</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{url('my_post')}}">My Posts</a>
              </li>

              <li>
                <a class="nav-link" href="{{url('create_post')}}">Create Post</a>
              </li>

        
              <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ url('user/profile') }}">Profile</a>
                      <div class="dropdown-divider"></div>
                      <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault(); this.closest('form').submit();">
                          {{ __('Logout') }}
                        </a>
                      </form>
                    </div>
              </li>

              @else

              <li class="nav-item">
                <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
              </li>
              <li class="nav-item">
                <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
              </li>

              @endauth

              @endif
            </ul>
          </div> <!-- .navbar-collapse -->
        </div> <!-- .container -->
      </nav>
    </header>

    @if(session()->has('message'))

          <div class="alert alert-success">

              <button type="button" class="close" data-dismiss="alert">
                  x
              </button>

            {{session()->get('message')}}

          </div>

          @endif

    <div class="page-hero bg-image33" style="background-image: url(../assets/img/home.png); background-size: 100%; background-position: center; background-repeat: no-repeat;">
    </div>


    <div class="bg-light">
      <div class="page-section py-3 mt-md-n5 custom-index">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-4 py-3 py-md-0">
              <div class="card-service wow fadeInUp">
                <div class="circle-shape bg-secondary text-white">
                  <span class="mai-chatbubbles-outline"></span>
                </div>
                <p><span>Chat</span> with a mentor</p>
              </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
              <div class="card-service wow fadeInUp">
                <div class="circle-shape bg-primary text-white">
                  <span class="mai-shield-checkmark"></span>
                </div>
                <p><span>Book</span> an Appointment</p>
              </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
              <div class="card-service wow fadeInUp">
                <div class="circle-shape bg-accent text-white">
                  <span class="mai-basket"></span>
                </div>
                <p><span>Focus</span> on your Mental Health</p>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- .page-section -->

      <div class="page-section pb-0">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 py-3 wow fadeInUp">
              <h1>Welcome to Nurturing <br> Lives</h1>
              <p class="text-grey mb-4">Empowering Minds, Embracing Hearts<br>🌿 Join Us on a Journey of Healing and Growth 🌿<br>At Nurturing Lives, we believe in the power of compassion and support to transform lives. Whether you're seeking help for yourself or a loved one, we are here to guide you every step of the way. Explore our resources, connect with our community, and take the first step towards a brighter, healthier future.💚</p>
              <a href="{{url('about')}}" class="btn btn-primary">Learn More</a>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
              <div class="img-place custom-img-1">
                <img src="../assets/img/bg-doctor.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div> <!-- .bg-light -->
    </div> <!-- .bg-light -->

    @include('user.mentor')

    @include('user.latest')
    
    @include('user.appointment')

    @include('user.footer')

    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>

  
  </body>
</html>