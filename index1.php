<!DOCTYPE html>
<html lang="en">

<head>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"></script>
    <link rel="stylesheet" href="CollegePredictor.css">
    <link rel="stylesheet" href="menustyle.css">
</head>

<body>
    <div>
        <nav>
            <div class="logo">
               GraduHub
            </div>
            <input type="checkbox" id="click">
            <label for="click" class="menu-btn">
            <i class="fas fa-bars"></i>
            </label>
            <ul>
               <li><a class="active" href="index1.php">Home</a></li>
               <li><a href="login.php">Login</a></li>
               <li><a href="register.php">Sign-Up</a></li>
               <li><a href="Adminpage.php">AdminPage</a></li>
               <li><a href="#">Feedback</a></li>
            </ul>
         </nav>
    </div>
    <div></div>
    <hr class="mt-0">
    <div class="row justify-content-center HomePage_secondRow">
        <div class="col-12 col-md-5 HomePage_col">
            <h1 class="HomePage_pHeader">Your first stepping stone towards Graduation</h1>
            <p class="HomePage_pSubHeader">One-stop place to clear up all your confusions around Admissions
                and Options/Choice form filling.<br>Get accurate College Predictions, the latest news for
                Exams, Applications, Option/Choice form filling, and much more <b>without login or contact
                    details.</b></p>
        </div>
        <div class="col-12 col-md-5"><img alt="graphic" class="HomePage_graphic img-fluid" src="graphic1.35242396.png">
        </div>
    </div>
    <hr>
    <div id="collegepredictor">
        <div class="row CollegePredictor_row CollegePredictor_marginTop justify-content-center">
            <div class="col-md-10 col-12 text-center CollegePredictor_Text">
                <h2 class="CollegePredictor_headerText">College Predictor</h2>
                <p class="CollegePredictor_subheaderText">Get the predicted Cutoff ranks for IITs, NITs, and
                    all other private and government institutes with our advanced algorithm for 2021. Get
                    your results according to your Rank, Category, Gender, Home state, and preferred Branch
                    and College type <b>without Login or Contact details.</b></p>
            </div>
        </div>
        <div class="row CollegePredictor_row justify-content-center">
            <div class="col-11">
                <div class="row CollegePredictor_row justify-content-center">
                    <div class="col-12 col-md-3 CollegePredictor_colLeft">
                        <picture>
                            <source class="stepper1" media="(max-width: 576px)"
                                srcset="/static/media/mobilestep1.75e15b71.png"><img alt="Step1" class="stepper1"
                                src="step1.351a550b.png"></picture>
                    </div>
                    <div class="col-12 mt-2 mt-md-0 col-md-7 text-center CollegePredictor_colRight">
                        <p style="font-weight:700">Select Exam You Have Taken</p>
                        <div class="row d-flex align-items-center justify-content-center">
                            <div class="col-4 CollegePredictor_examLogoDiv"><a href="jee-main-college-predictor.php"
                                    class="CollegePredictor_links"><img alt="JEE" class="CollegePredictor_examImg"
                                        src="jee.0fd2458f.png">
                                    <p class="mt-2 CollegePredictor_examText" style="font-weight:700;color:#000">JEE
                                        Mains</p>
                                </a></div>
                            <div class="col-4 CollegePredictor_examLogoDiv"><a href="Mht-CET.php"
                                    class="CollegePredictor_links"><img alt="MHT-CET" class="CollegePredictor_examImg"
                                        src="mhcet.be932883.jpg">
                                    <p class="mt-2 CollegePredictor_examText" style="font-weight:700;color:#000">MHT-CET
                                    </p>
                                </a></div>
                        </div>

                        <hr>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    <hr>
</body>
</html>