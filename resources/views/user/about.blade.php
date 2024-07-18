<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>About Us</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">

  <style>
    .logo img {
    height: 50px; /* Adjust height as necessary */
    }

    body {
    font-family: 'Arial', sans-serif;
    line-height: 1.6;
    margin: 0;
    padding: 0;
    }

    .header {
        background: #333;
        color: #fff;
        padding: 10px 0;
        text-align: center;
    }

    .header h1 {
        margin: 0;
        font-size: 2.5em;
    }

    .main-content {
        display: flex;
        flex-direction: row;
        margin-top: 20px;
    }

    .sidebar {
        flex: 1;
        background: #f0f0f0;
        padding: 20px;
        border-right: 1px solid #ddd;
    }

    .sidebar nav ul {
        list-style-type: none;
        padding: 0;
    }

    .sidebar nav ul li {
        margin-bottom: 10px;
    }

    .sidebar nav ul li a {
        color: #333;
        text-decoration: none;
        font-weight: bold;
        display: block;
    }

    .sidebar nav ul li a:hover {
        color: #555;
        text-decoration: underline;
    }

    .content {
        flex: 3;
        padding: 20px;
    }

    .content h2 {
        color: #333;
        border-bottom: 2px solid #f0f0f0;
        padding-bottom: 10px;
    }

    .content h3 {
        color: #444;
        margin-top: 20px;
        margin-bottom: 10px;
    }

    .content p, .content ul {
        margin-bottom: 20px;
    }

    .content ul {
        list-style-type: disc;
        margin-left: 20px;
    }

    .content ul li {
        margin-bottom: 10px;
    }

    .content a {
        color: #3498db;
        text-decoration: none;
    }

    .content a:hover {
        text-decoration: underline;
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

            <li><a class="nav-link" href="{{url('create_post')}}">Create Post</a></li>

      
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
    <div class="container">
          <div class="main-content">
              <section class="content">
                  <h2 style="text-align:center;">About Us</h2>
                  <p>Welcome to Nurturing Lives!</p>
                  <p>At Nurturing Lives, we believe in the power of compassion and support to transform lives. Whether you're seeking help for yourself or a loved one, we are here to guide you every step of the way. Explore our resources, connect with our community, and take the first step towards a brighter, healthier future.💚</p>

                  <h3 style="text-align:center;">Our Mission</h3>
                  <p>Our mission is to nurture, support, and empower individuals and communities by providing resources, services, and opportunities that promote health, education, and social well-being. We strive to create an inclusive environment where everyone can thrive and reach their full potential.</p>

                  <h3 style="text-align:center;">Our Vision</h3>
                  <p>We envision a world where every individual has access to the resources and support they need to live a healthy, fulfilling, and empowered life. We aim to be a leading organization in fostering positive change and making a lasting impact on the lives of those we serve.</p>

                  <h3 style="text-align:center;">Our Values</h3>
                  <ul>
                      <li><strong>Compassion:</strong> We approach every individual with kindness and understanding, recognizing the unique challenges they face.</li>
                      <li><strong>Empowerment:</strong> We believe in the power of individuals and communities to drive their own growth and development.</li>
                      <li><strong>Inclusivity:</strong> We are committed to creating a welcoming and inclusive environment for everyone, regardless of background or circumstance.</li>
                      <li><strong>Integrity:</strong> We operate with transparency, honesty, and accountability in all our actions and decisions.</li>
                      <li><strong>Innovation:</strong> We embrace creativity and innovation to continuously improve our services and impact.</li>
                  </ul>

                  <h3 style="text-align:center;">Our History</h3>
                  <p>Founded in 2024, Nurturing Lives began as a small community initiative aimed at providing support and resources to underserved populations.We have grown into a robust organization, expanding our reach and services to address a wide range of needs, including health, education, and social support. Today, we are proud to serve thousands of individuals and families, helping them navigate challenges and build better futures.</p>

                  <h3 style="text-align:center;">Our Team</h3>
                  <p>Our team is comprised of dedicated professionals, volunteers, and supporters who share a common passion for making a positive impact. From healthcare providers and educators to social workers and community organizers, each member of our team brings unique skills and expertise to our organization. Meet some of our key team members:</p>
                  <ul>
                      <li><strong>Jesse Mburu</strong> - Founder & CEO</li>
                      <li><strong>Yvonne Kibet</strong> - Director & Co-Founder</li>
                      <li><strong>Anthony Kim</strong> - Head of Mental Health Services</li>
                      <li><strong>Stephen Muasya</strong> - Education Program Coordinator</li>
                  </ul>

                  <h3 style="text-align:center;">What We Do</h3>
                  <p>Nurturing Lives offers a wide range of programs and services designed to meet the diverse needs of the communities we serve. Our key areas of focus include:</p>
                  <ul>
                      <li><strong>Health & Wellness:</strong> Providing access to healthcare services, mental health support, and wellness programs.</li>
                      <li><strong>Education & Training:</strong> Offering educational programs, skills training, and resources to promote lifelong learning and development.</li>
                      <li><strong>Community Support:</strong> Facilitating social support services, community engagement activities, and resources for individuals and families in need.</li>
                  </ul>

                  <h3 style="text-align:center;">How You Can Help</h3>
                  <p>Your support is crucial to our mission. There are many ways you can get involved and make a difference:</p>
                  <ul>
                      <li><strong>Partner with Us:</strong> Collaborate with us to expand our reach and enhance our programs and services.</li>
                  </ul>

                  <p style="text-align:center;"><strong>Thank you for being a part of Nurturing Lives. Together, we can make a difference!</strong></p>
              </section>
          </div>
      </div>
  @include('user.footer')


<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>


  
</body>
</html>