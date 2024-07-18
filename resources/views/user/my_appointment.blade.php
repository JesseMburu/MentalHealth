<!DOCTYPE html>
<html lang="en">
<head>


<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer">
  </script>
  
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
            <li class="nav-item active">
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

            <li class="nav-item">
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

  <div align="center" style="padding:70px;">

  <table>

  <tr style="background-color:black;" align="center">
    <th style="padding:10px; font-size:20px; color:white;">Mentor Name</th>
    <th style="padding:10px; font-size:20px; color:white;">Date</th>
    <th style="padding:10px; font-size:20px; color:white;">Message</th>
    <th style="padding:10px; font-size:20px; color:white;">Status</th>

    <th style="padding:10px; font-size:20px; color:white;">Cancel Appointment</th>
  </tr>

  @foreach($appoint as $appoints)

  <tr style="background-color:black;" align="center">
    <td style="padding:10px; color:white;">{{$appoints->mentor}}</td>
    <td style="padding:10px; color:white;">{{$appoints->date}}</td>
    <td style="padding:10px; color:white;">{{$appoints->message}}</td>
    <td style="padding:10px; color:white;">{{$appoints->status}}</td>

    <td>
      <a class="btn btn-danger" onclick="confirmation(event)" href="{{ url('cancel_appoint', $appoints->id) }}">Cancel</a>
    </td>

  </tr>

  @endforeach

  </table>

  </div>


<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

<script type="text/javascript">

            function confirmation(ev){

                ev.preventDefault();

                var urlToRedirect = ev.currentTarget.getAttribute('href');

                console.log(urlToRedirect);

                swal({
                    title : " Are you sure you want to delete this? " ,
                    text : "You will not be able to reverse this action!" ,
                    icon : "warning",
                    buttons : true ,
                    dangerMode : true ,
                })

                .then((willCancel)=>{

                    if(willCancel){
                        window.location.href=urlToRedirect;
                    }

                });

            }
        </script>

  
</body>
</html>