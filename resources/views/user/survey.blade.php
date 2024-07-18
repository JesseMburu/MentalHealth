<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">
    <title>Survey</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

         header {
            flex-shrink: 0;
        }

        .survey-form {
            width: 100%;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            color: #333333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        .Questions {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            color: #333333;
        }

        .options {
            display: flex;
            flex-direction: column;
            margin-bottom: 10px;
        }

        .option {
            margin-bottom: 10px;
        }

        .option input[type="radio"] {
            margin-right: 10px;
        }

        .submit-btn {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            align-self: center;
        }

        .submit-btn:hover {
            background-color: #45a049;
        }
        .field_deg{
            text-align:center;
        }
        
    </style>
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
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
            x
        </button>
        {{session()->get('message')}}
    </div>
    @endif

    <div class="survey-form">
        <h1>Survey</h1>
        <form action="{{url('submit-survey')}}" method="post">
            @csrf
            <div class="Questions">
                <label for="q1">Question 1: How often do you feel anxious?</label><br>
                <div class="options">
                    <div class="option">
                        <input type="radio" id="q1_option1" name="q1" value="Rarely">
                        <label for="q1_option1">Rarely</label>
                    </div>
                    <div class="option">
                        <input type="radio" id="q1_option2" name="q1" value="Sometimes">
                        <label for="q1_option2">Sometimes</label>
                    </div>
                    <div class="option">
                        <input type="radio" id="q1_option3" name="q1" value="Often">
                        <label for="q1_option3">Often</label>
                    </div>
                    <div class="option">
                        <input type="radio" id="q1_option4" name="q1" value="Always">
                        <label for="q1_option4">Always</label>
                    </div>
                </div>
                <label for="q2">Question 2: How would you rate your overall understanding of mental health issues?</label><br>
                <div class="options">
                    <div class="option">
                        <input type="radio" id="q2_option1" name="q2" value="Bad">
                        <label for="q2_option1">Bad</label>
                    </div>
                    <div class="option">
                        <input type="radio" id="q2_option2" name="q2" value="Good">
                        <label for="q2_option2">Good</label>
                    </div>
                    <div class="option">
                        <input type="radio" id="q2_option3" name="q2" value="Average">
                        <label for="q2_option3">Average</label>
                    </div>
                    <div class="option">
                        <input type="radio" id="q2_option4" name="q2" value="Extremely good">
                        <label for="q2_option4">Extremely good</label>
                    </div>
                </div>
                <label for="q3">Question 3: Which of the following mental health disorders do you feel knowledgeable about?</label><br>
                <div class="options">
                    <div class="option">
                        <input type="radio" id="q3_option1" name="q3" value="Depression">
                        <label for="q3_option1">Depression</label>
                    </div>
                    <div class="option">
                        <input type="radio" id="q3_option2" name="q3" value="Anxiety">
                        <label for="q3_option2">Anxiety</label>
                    </div>
                    <div class="option">
                        <input type="radio" id="q3_option3" name="q3" value="Bipolar disorder">
                        <label for="q3_option3">Bipolar disorder</label>
                    </div>
                    <div class="option">
                        <input type="radio" id="q3_option4" name="q3" value="Post Traumatic Stress Disorder(PTSD)">
                        <label for="q3_option4">Post Traumatic Stress Disorder(PTSD)</label>
                    </div>
                </div>
                <label for="q4">Question 4: Have you ever witnessed or experienced stigma or discrimination against individuals with mental health issues?</label><br>
                <div class="options">
                    <div class="option">
                        <input type="radio" id="q4_option1" name="q4" value="Yes">
                        <label for="q4_option1">Yes</label>
                    </div>
                    <div class="option">
                        <input type="radio" id="q4_option2" name="q4" value="Can't recall">
                        <label for="q4_option2">Can't recall</label>
                    </div>
                    <div class="option">
                        <input type="radio" id="q4_option3" name="q4" value="No">
                        <label for="q4_option3">No</label>
                    </div>
                  </div>
                <label for="q5">Question 5: Have you ever sought professional help or mental health services?</label><br>
                <div class="options">
                    <div class="option">
                        <input type="radio" id="q5_option1" name="q5" value="Yes">
                        <label for="q5_option1">Yes</label>
                    </div>
                    <div class="option">
                        <input type="radio" id="q5_option2" name="q5" value="No">
                        <label for="q5_option2">No</label>
                    </div>
                    
                </div>
                <label for="q6">Question 6: How comfortable are you discussing mental health concerns with a healthcare professional?</label><br>
                <div class="options">
                    <div class="option">
                        <input type="radio" id="q6_option1" name="q6" value="Very comfortable">
                        <label for="q6_option1">Very comfortable</label>
                    </div>
                    <div class="option">
                        <input type="radio" id="q6_option2" name="q6" value="Abit comfortable">
                        <label for="q6_option2">Abit comfortable</label>
                    </div>
                    <div class="option">
                        <input type="radio" id="q6_option3" name="q6" value="Not comfortable at all">
                        <label for="q6_option3">Not comfortable at all</label>
                    </div>
                    
                </div>
                <label for="q7">Question 7:  Are you likely to seek help from non-professional sources for mental health concerns?</label><br>
                <div class="options">
                    <div class="option">
                        <input type="radio" id="q7_option1" name="q7" value="Yes">
                        <label for="q7_option1">Yes</label>
                    </div>
                    <div class="option">
                        <input type="radio" id="q7_option2" name="q7" value="Sometimes">
                        <label for="q7_option2">Sometimes</label>
                    </div>
                    <div class="option">
                        <input type="radio" id="q7_option3" name="q7" value="No">
                        <label for="q7_option3">No</label>
                    </div>
                    
                </div>
                <label for="q8">Question 8: How often do you engage in activities that promote mental well-being, such as exercise, mindfulness, or hobbies?</label><br>
                <div class="options">
                    <div class="option">
                        <input type="radio" id="q8_option1" name="q8" value="Rarely">
                        <label for="q8_option1">Rarely</label>
                    </div>
                    <div class="option">
                        <input type="radio" id="q8_option2" name="q8" value="Sometimes">
                        <label for="q8_option2">Sometimes</label>
                    </div>
                    <div class="option">
                        <input type="radio" id="q8_option3" name="q8" value="Often">
                        <label for="q8_option3">Often</label>
                    </div>
                    <div class="option">
                        <input type="radio" id="q8_option4" name="q8" value="Always">
                        <label for="q8_option4">Always</label>
                    </div>
                </div>
                <label for="q9">Question 9:Are you aware of the importance of maintaining good mental health?</label><br>
                <div class="options">
                    <div class="option">
                        <input type="radio" id="q9_option1" name="q9" value="Yes">
                        <label for="q9_option1">Yes</label>
                    </div>
                    <div class="option">
                        <input type="radio" id="q9_option2" name="q9" value="No">
                        <label for="q9_option2">No</label>
                    </div>
                    
                </div>
                <label for="q10">Question 10:Have you ever experienced symptoms of mental health issues (i.e., anxiety, depression) while at school?</label><br>
                <div class="options">
                    <div class="option">
                        <input type="radio" id="q10_option1" name="q10" value="Yes">
                        <label for="q10_option1">Yes</label>
                    </div>
                    <div class="option">
                        <input type="radio" id="q10_option2" name="q10" value="Sometimes">
                        <label for="q10_option2">Sometimes</label>
                    </div>
                    <div class="option">
                        <input type="radio" id="q10_option3" name="q10" value="Often">
                        <label for="q10_option3">Often</label>
                    </div>
                    <div class="option">
                        <input type="radio" id="q10_option4" name="q10" value="No">
                        <label for="q10_option4">No</label>
                    </div>
                </div>
                <label for="q11">Question 11: Are mental health resources, such as counseling services or student assistance programs, available at your school?</label><br>
                <div class="options">
                    <div class="option">
                        <input type="radio" id="q11_option1" name="q11" value="Yes">
                        <label for="q11_option1">Yes</label>
                    </div>
                    <div class="option">
                        <input type="radio" id="q11_option2" name="q11" value="No">
                        <label for="q11_option2">No</label>
                    </div>
                    <div class="option">
                        <input type="radio" id="q11_option3" name="q11" value="I do not know">
                        <label for="q11_option3">I do not know</label>
                    </div>
                </div>
                <label for="q12">Question 12: How often do you actively seek out information or resources related to mental health?</label><br>
                <div class="options">
                    <div class="option">
                        <input type="radio" id="q12_option1" name="q12" value="Rarely">
                        <label for="q12_option1">Rarely</label>
                    </div>
                    <div class="option">
                        <input type="radio" id="q12_option2" name="q12" value="Sometimes">
                        <label for="q12_option2">Sometimes</label>
                    <div class="option">
                        <input type="radio" id="q12_option2" name="q12" value="Often">
                        <label for="q12_option2">Often</label>
                    </div>
                    <div class="option">
                        <input type="radio" id="q12_option3" name="q12" value="Always">
                        <label for="q12_option3">Always</label>
                    </div>
                </div>
                <label for="q13">Question 13: Would you be interested in receiving more education or training on mental health topics?</label><br>
                <div class="options">
                    <div class="option">
                        <input type="radio" id="q13_option1" name="q13" value="Yes">
                        <label for="q13_option1">Yes</label>
                    </div>
                    <div class="option">
                        <input type="radio" id="q13_option2" name="q13" value="No">
                        <label for="q13_option2">No</label>
                    </div>
                    
                </div>
                <label for="q14">Question 14: Do you engage in any self-care activities?</label><br>
                <div class="options">
                    <div class="option">
                        <input type="radio" id="q14_option1" name="q14" value="Yes">
                        <label for="q14_option1">Yes</label>
                    </div>
                    <div class="option">
                        <input type="radio" id="q14_option2" name="q14" value="No">
                        <label for="q14_option2">No</label>
                    </div>
                    <div class="option">
                        <input type="radio" id="q12_option4" name="q12" value="Sometimes">
                        <label for="q12_option4">Sometimes</label>
                    </div>
                   
                </div>
                <label for="q15">Question 15: Do you believe that your workload or job responsibilities have a significant impact on your mental health?</label><br>
                <div class="options">
                    <div class="option">
                        <input type="radio" id="q15_option1" name="q15" value="Yes">
                        <label for="q15_option1">Yes</label>
                    </div>
                    <div class="option">
                        <input type="radio" id="q15_option2" name="q15" value="No">
                        <label for="q15_option2">No</label>
                    </div>
                    <div class="option">
                        <input type="radio" id="q15_option3" name="q15" value="Sometimes">
                        <label for="q15_option3">Sometimes</label>
                    </div>

                </div>
                <label for="q16">Question 16: How likely are you to recommend mental health resources or support to someone in need??</label><br>
                <div class="options">
                    <div class="option">
                        <input type="radio" id="q16_option1" name="q16" value="Very Likely">
                        <label for="q16_option1">Very Likely</label>
                    </div>
                    <div class="option">
                        <input type="radio" id="q16_option2" name="q16" value="Likely">
                        <label for="q16_option2">Likely</label>
                    </div>
                    <div class="option">
                        <input type="radio" id="q12_option4" name="q12" value="Unlikely">
                        <label for="q12_option4">Unlikely</label>
                    </div>
                </div>
            </div>


            <div class="field_deg">
                <input type="submit" value="Submit Survey" class="btn btn-success">
            </div>
        </form>
    </div>

    @include('user.footer')


    @include('chatbot')


    

    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>

</body>
</html>