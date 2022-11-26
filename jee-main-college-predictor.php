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
                <div class="row mt-3 JeeForm_row justify-content-center">
                    <div class="col-md-10 col-12">
                        <h1 class="JeeForm_headerText text-center mb-0">JEE Mains College Predictor 2021</h1>
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
                    <div class="col-12 col-md-7 JeeForm_formCol">
                        <form class="text-left" method="post" name="myforms" onsubmit=myfunction()>
                            <div class="form-row mt-3 mt-md-1 align-items-start justify-content-between">
                                <div class="col-12 col-md-5"><label class="JeeForm_labels" for="Rank">Rank:</label>
                                    <span class="text-danger">*</span><input class="form-control" id="Jee_rank" name="Rank" required type="number" value="" min="0" placeholder="Enter Rank"><small>(Enter category rank if you belong to any
                                        particular category.)</small>
                                    </div>
                                <div class="col-12 mt-3 mt-md-0 col-md-5"><label class="JeeForm_labels"
                                        for="Jee_category">Category:</label> <span class="text-danger">*</span><select
                                        class="form-control" id="Jee_catergory" name="Jee_catergory" >
                                        <option value="null" selected>Select Category</option>
                                        <option value="OPEN">OPEN</option>
                                        <option value="OBC-NCL">OBC-NCL</option>
                                        <option value="EWS">EWS</option>
                                        <option value="SC">SC</option>
                                        <option value="ST">ST</option>
                                        <option value="OPEN (PwD)">OPEN (PwD)</option>
                                        <option value="OBC-NCL (PwD)">OBC-NCL (PwD)</option>
                                        <option value="EWS (PwD)">EWS (PwD)</option>
                                        <option value="SC (PwD)">SC (PwD)</option>
                                        <option value="ST (PwD)">ST (PwD)</option>
                                    </select></div>
                            </div>
                            <div class="form-row align-items-center mt-4 mt-md-4">
                                <div class="col-md-5 col-6">
                                    <div class="form-row ml-1">
                                        <div class="col-md-1 col-2">
                                            <div class="form-check"><input class="form-check-input" id="BEBT"
                                                    name="examType" required type="radio" value="BEBT" checked></div>
                                        </div><label class="JeeAdvForm_labels col-md-11 col-10" for="BEBT">JEE Main for
                                            B.E/B.Tech</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row mt-3 mt-md-4 align-items-center justify-content-between">
                            </div>
                            <div class="form-row mt-3 mt-md-4 align-items-center justify-content-between">
                                <div class="col-12 col-md-5"><label class="JeeForm_labels"
                                        for="Jee_stateOfDomicile">State of Domicile:</label> <span
                                        class="text-danger">*</span><select class="form-control"
                                        id="Jee_stateOfDomicile" name="location" required>
                                        <option value="null" selected>Select State of Domicile</option>
                                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option value="Assam">Assam</option>
                                        <option value="Bihar">Bihar</option>
                                        <option value="Chandigarh">Chandigarh</option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Havel and Daman and Diu</option>
                                        <option value="Delhi">Delhi</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Haryana">Haryana</option>
                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                        <option value="Jharkhand">Jharkhand</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Ladakh">Ladakh</option>
                                        <option value="Lakshadweep">Lakshadweep</option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Manipur">Manipur</option>
                                        <option value="Meghalaya">Meghalaya</option>
                                        <option value="Mizoram">Mizoram</option>
                                        <option value="Nagaland">Nagaland</option>
                                        <option value="Odisha">Odisha</option>
                                        <option value="Puducherry">Puducherry</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="Sikkim">Sikkim</option>
                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                        <option value="Telangana">Telangana</option>
                                        <option value="Tripura">Tripura</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        <option value="Uttarakhand">Uttarakhand</option>
                                        <option value="West Bengal">West Bengal</option>
                                    </select></div>
                            </div>
                            <div class="form-row mt-3 mt-md-4 align-items-center justify-content-between">
                                <div class="col-12 col-md-5"><label class="JeeForm_labels" for="Jee_noc">Number of
                                        Colleges to Display:</label> <span class="text-danger">*</span><select
                                        class="form-control" id="Jee_noc" name="Jee_noc" >
                                        <option value="null" selected>Select Number of Colleges to Display</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                        <option value="40">40</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
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
                <div class="row align-items-center justify-content-center JeeForm_row" id="VideoRow">
                    <div class="col-12 col-md-5 text-left Form_textPara">
                        <p class="">Know your chances and cutoff Ranks of prestigious colleges like NIT Trichy, NIT
                            Warangal, NIT Surathkal, and many more.</p>
                        <p>Get Rank for all Categories (Open, SC, ST, OBC, EWS, PWD) and Gender.</p>
                        <p>Our Algorithm smartly displays Home state cutoffs for your selected state and Other State
                            cutoffs of other states.</p>
                        <p>Personalize your results with your Branch Preference and College type.</p>
                        <p>All the Best for your Career!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
      function myfunction()
      {
       var un=document.forms["myforms"]["Rank"].value;
       var loc=document.forms["myforms"]["location"].value;
      if (un>= 1 && un <= 500 && loc=="Maharashtra") {
          document.write("Hello")
        window.location.href="collegelist1.php";
      } 
      if (un>= 501 && un <= 1000 && loc=="Maharashtra") {
          document.write("Hello")
        window.location.href="Collegelist2.php";
      }
      if (un>= 1001 && un <= 1500 && loc=="Maharashtra") {
        document.write("Hello")
        window.location.href="Collegelist3.php";
      }
      if (un>= 1501 && un <= 2000 && loc=="Maharashtra") {
        document.write("Hello")
        window.location.href="Collegelist4.php";
      }
      if (un>= 2001 && un < 2500 && loc=="Maharashtra") {
        document.write("Hello")
        window.location.href="Collegelist5.php";
      }
      }
  </script>
</body>

</html>