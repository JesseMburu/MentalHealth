<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">
    <title>Contact Us</title>
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
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        main {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 10px;
        }

        .contact-container {
            display: flex;
            flex-direction: column;
            max-width: 600px;
            margin: 0 20px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .contact-form {
            margin-bottom: 20px;
        }

        .contact-form h2, .contact-details h3 {
            margin-top: 0;
        }

        .contact-form label {
            display: block;
            margin: 10px 0 5px;
        }

        .contact-form input, .contact-form textarea {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .contact-form button {
            padding: 10px 20px;
            background-color: #005f73;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .contact-form button:hover {
            background-color: #003f54;
        }

        .contact-details {
            margin-top: 20px;
        }

        .sidebar {
            max-width: 300px;
            margin: 0 20px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .sidebar h3 {
            margin-top: 0;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            margin: 10px 0;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #005f73;
        }

        .sidebar p {
            margin: 10px 0;
        }

        footer {
            text-align: center;
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

    <main>
        <section class="contact-container">
            <div class="contact-form">
                <h2>Contact Us</h2>

                @if(session()->has('message'))

                    <div class="alert alert-success">

                            <button type="button" class="close" data-dismiss="alert">
                                x
                            </button>

                            {{session()->get('message')}}

                    </div>

                @endif


                <form action="{{url('submit_contact_form')}}" method="POST">
                    @csrf
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="phone">Phone:</label>
                    <input type="tel" id="phone" name="phone">

                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="6" required></textarea>

                    <button  type="submit">Send Message</button>
                </form>

            </div>
            <div class="contact-details">
                <h3>Contact Information</h3>
                <p><strong>Phone:</strong> (+254) 756-789-068</p>
                <p><strong>Email:</strong> nurturinglives@gmail.com</p>
                <p><strong>Address:</strong> 1234 Wellness St, Peaceful Town, CA 12345</p>
                <h3>Office Hours</h3>
                <p>Monday - Friday: 9:00 AM - 6:00 PM</p>
                <p>Saturday: 10:00 AM - 4:00 PM</p>
                <p>Sunday: Closed</p>
            </div>
        </section>
        <aside class="sidebar">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="/">Schedule Appointment</a></li>
            </ul>
            <h3>Emergency Contacts</h3>
            <p>If you are in immediate danger, please call 911 or visit your nearest emergency room.</p>
            <p><strong>National Suicide Prevention Lifeline:</strong> 1-800-273-8255</p>
            <p><strong>Crisis Text Line:</strong> Text HOME to 741741</p>
        </aside>

        <br>

        <p style="color:white;"><strong>Thank you for being a part of Nurturing Lives. Together, we can make a difference!</strong></p>

    </main>

    @include('user.footer')

    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>

</body>
</html>
