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
    <div id="root">
        <div class="App">
            <div>
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
                           <li><a href="#">About Us</a></li>
                           <li><a href="#">Feedback</a></li>
                        </ul>
                     </nav>
                </div>
            </div>
            <div class="row mt-3 JeeForm_row justify-content-center">
                <div class="col-md-10 col-12">
                    <h1 class="JeeForm_headerText text-center mb-0">MHT-CET College Predictor 2021</h1>
                    <p class="p-0 m-0 Jee_subText">Get College Predictions and cutoff Ranks for NIT, GFTI, IIIT
                        based on your Rank, Category, Gender, Home State, and preferred Branch <b>without Login or
                            Contact details.</b> We have done Predictive Analysis of JEE Main cutoff data taken from
                        the official JOSAA website.</p>
                </div>
            </div>
            <hr>
            <div class="row align-items-start justify-content-center JeeForm_row">
                <div class="col-12 col-md-3">
                    <picture>
                        <source class="stepper1" media="(max-width: 576px)"
                            srcset="/static/media/mobilestep2.38bde17c.png"><img alt="Step2" class="stepper1"
                            src="step1.351a550b.png"></picture>
                </div>
                    <div class="col-12 col-md-7 CetForm_formCol">
                        <form class="text-left" id="Cet_form" name="myforms">
                            <div class="">Seat Type: <span class="text-danger">*</span></div>
                            <div class="form-row mt-4 align-items-start">
                                <div class="col-12 col-md-4">
                                    <div
                                        class="form-row justify-content-sm-start justify-content-md-center align-items-start">
                                        <div class="col-2 col-md-2">
                                            <div class="form-check"><input class="form-check-input" id="CET"
                                                    name="seatType" required type="radio" value="CET" checked></div>
                                        </div><label class="CetForm_labels col-10" for="CET">MHT-CET Seats</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div
                                        class="form-row justify-content-sm-start justify-content-md-center align-items-start">
                                        <div class="col-2 col-md-2">
                                            <div class="form-check"><input class="form-check-input" id="AI"
                                                    name="seatType" required type="radio" value="AI"></div>
                                        </div><label class="CetForm_labels col-10" for="AI">All India Seats</label>
                                    </div>
                                </div>
                            </div>
                            <div></div>
                            <div></div>
                            <div class="form-row justify-content-between align-items-center mt-3 mt-md-2">
                                <div class="col-12 col-md-5"><label class="CetForm_labels" for="Cet_rank">Rank:</label>
                                    <span class="text-danger">*</span><input class="form-control" id="Cet_rank"
                                        name="Rank" required type="number" value="" min="0"
                                        placeholder="Enter Rank"></div>
                                <div class="col-12 col-md-5 mt-3 mt-md-0"><label class="CetForm_labels"
                                        for="Cet_category">Category:</label> <span class="text-danger">*</span><select
                                        class="form-control" id="Cet_catergory" name="Cet_catergory" required>
                                        <option value="null" selected>Select Category</option>
                                        <option value="OPEN">OPEN</option>
                                        <option value="SC">SC</option>
                                        <option value="ST">ST</option>
                                        <option value="VJ">VJ</option>
                                        <option value="NT1">NT1</option>
                                        <option value="NT2">NT2</option>
                                        <option value="NT3">NT3</option>
                                        <option value="OBC">OBC</option>
                                        <option value="TFWS">TFWS</option>
                                        <option value="EWS">EWS</option>
                                        <option value="PWD">PWD</option>
                                        <option value="DEF">DEF</option>
                                        <option value="MI">MINORITY</option>
                                        <option value="ORPHAN">ORPHAN</option>
                                    </select></div>
                            </div>
                            <div class="form-row align-items-center mt-3 mt-md-4 justify-content-between">
                                <div class="col-12 col-md-5"><label class="CetForm_labels" for="Cet_noc">Number of
                                        Colleges to Display:</label> <span class="text-danger">*</span><select
                                        class="form-control" id="Cet_noc" name="Cet_noc" required>
                                        <option value="null" selected>Select Number of Colleges to Display</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                        <option value="40">40</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select></div>
                                <div class="col-12 col-md-5 mt-3 mt-md-0"><label class="CetForm_labels"
                                        for="Cet_collegeStatus">College Status:</label> <span
                                        class="text-danger">*</span><select class="form-control" id="Cet_collegeStatus"
                                        name="Cet_collegeStatus" required>
                                        <option value="null" selected>Select Colleges Status</option>
                                        <option value="GOV">Government</option>
                                        <option value="UAA">Non-Government Autonomous</option>
                                        <option value="ALL">ALL</option>
                                    </select></div>
                            </div>
                            <div class="form-row mt-3 mt-md-4 align-items-center justify-content-between">
                                <div class="col-12 col-md-5"><label class="CetForm_labels" for="Cet_region">Home
                                        Region:</label> <span class="text-danger">*</span><select class="form-control"
                                        id="Cet_region" name="Cet_region" >
                                        <option value="null" selected>Select Home Region</option>
                                        <option value="AABWY">Akola, Amravati,Buldana, Washim,Yavatmal</option>
                                        <option value="ABJO">Aurangabad, Beed, Jalna, Osmanabad</option>
                                        <option value="HLNP">Hingoli, Latur, Nanded,Parbhani</option>
                                        <option value="MM">Mumbai City,Mumbai Suburban</option>
                                        <option value="RRPST">Ratnagiri, Raigad, Palghar,Sindhudurg ,Thane</option>
                                        <option value="BGNW">Bhandara, Gondia, Nagpur, Wardha</option>
                                        <option value="CG">Chandrapur, Ghadchiroli</option>
                                        <option value="DJN">Dhule,Jalgaon,Nandurbar</option>
                                        <option value="ANP">Ahmednagar, Nashik, Pune</option>
                                        <option value="KSS">Kolhapur, Sangli, Satara</option>
                                        <option value="SOL">Solapur</option>
                                    </select></div>
                            </div>
                            <div class="mt-3 mt-md-4"><b>Gender:</b> <span class="text-danger">*</span></div>
                            <div class="form-row align-items-center">
                                <div class="col-md-3 col-4">
                                    <div class="form-row ml-1">
                                        <div class="col-md-2 col-3">
                                            <div class="form-check"><input class="form-check-input" id="male"
                                                    name="gender"  type="radio" value="Gender-Neutral"></div>
                                        </div><label class="JeeForm_labels" for="male">Male</label>
                                    </div>
                                </div>
                                <div class="col-4 col-md-3">
                                    <div class="form-row">
                                        <div class="col-md-2 col-3">
                                            <div class="form-check"><input class="form-check-input" id="female"
                                                    name="gender"  type="radio" value="female"></div>
                                        </div><label class="JeeForm_labels" for="female">Female</label>
                                    </div>
                                </div>
                                <div class="col-4 col-md-3">
                                    <div class="form-row">
                                        <div class="col-md-2 col-3">
                                            <div class="form-check"><input class="form-check-input" id="other"
                                                    name="gender"  type="radio" value="Gender-Neutral"></div>
                                        </div><label class="JeeForm_labels" for="other">Other</label>
                                    </div>
                                </div>
                            </div>
 <br>
 <br>
 <br>                        
                                    <div class="header">
                                    <a href="Directpage.php" alt="Buy Tickets">Predict College </a>
                                    </div>
                                    <input type="submit"  id="logbutton" value="Proceed"  class="btn">
                            </div>
                        </form>
                    </div>
                </div>
                <hr>
                <div id="JeeResults">
                    <div></div>
                </div>
                <div class="row align-items-center justify-content-center CetForm_row" id="VideoRow">
                    <div class="col-12 col-md-5 text-left Form_textPara">
                        <p class="">Know your chances and cutoff Ranks of prestigious colleges like COEP, VJTI, SPCE,
                            SPIT, PICT, WCE, and many more.</p>
                        <p>Get Rank for all Categories (Open, SC, ST, OBC, NT, EWS, TFWS, DEF, ORPHAN, PWD) and Gender.
                        </p>
                        <p>Our Algorithm smartly displays Home University cutoffs for your selected region and Other
                            University cutoffs of other regions.</p>
                        <p>Personalize your results with your Branch Preference and College type.</p>
                        <p>All the Best for your Career!</p>
                        
</body>

</html>