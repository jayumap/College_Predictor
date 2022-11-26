<!DOCTYPE html>
<html>
    <head>

   <link rel="stylesheet" href="menustyle.css">

    </head>
<body>
    <style>
    form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: #21b9ff;;
 }
        .Direct1{
    padding: 4px 121px;
    display: block ;
    padding: -46px 400px;
    align-items: center;
    box-sizing:border-box;
    margin: 130px 0;
    font-size: 25px;
    font-family: "Inter UI", sans-serif;
    margin:0px;
     }
    .Container{
    color: rgba(0, 0, 0, 0.87);
    position: relative;
    margin: 27px;
    box-shadow: 0px 2px 1px -1px rgb(0 0 0 / 20%), 0px 1px 1px 0px rgb(0 0 0 / 14%), 0px 1px 3px 0px rgb(0 0 0 / 12%);
    border-radius: 4px;
    
    box-sizing: 
    }
    .Font-Size{
    font-size: 2rem;
    font-family: "Inter UI", "Roboto", sans-serif;
    font-weight: 400;
    line-height: 1.33;

    }
}
}
    </style>
<nav>
    <div class="logo">
       College Predictor
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
 <div class="content">
    <div>
       
    </div>
    <div>

    </div>
 </div>

    
<form  action="QuizRelate.php" method="POST">
<div class="Container">
<fieldset class='Direct1'>
<p class="Font-Size">Enter Your username?</p>
<br>
  <input class="Direct1"type="text" id="name" name="name" placeholder="Enter Your Username" >
 
</fieldset>
</div>
<div class="Container">
<fieldset class='Direct1'>
<p class="Font-Size">Did you apply to colleges?</p>
<br>
  <input type="radio" id="Q1" name="Q1" value="Yes">
  <label for="html">YES</label><br>
  <input type="radio" id="Q1" name="Q1" value="No">
  <label for="css">NO</label><br>
</fieldset>
</div>
<div class="Container">
<fieldset class="Direct1">
 <p class="Font-Size">What is your class rank?</p> 
 <br>
  <input type="radio" id="html" name="Q2" value="Top 10">
  <label for="html">Top 10</label><br>
  <input type="radio" id="css" name="Q2" value="10>50">
  <label for="css">below 10 greater than 50</label><br>
  <input type="radio" id="javascript" name="Q2" value="Below 50">
  <label for="javascript">Below 50</label>
</fieldset> </div>
<div class="Container"><fieldset class="Direct1">
<p class="Font-Size"> What tests have you taken?</p>
<br>
  <input type="radio" id="html" name="Q3" value="JEE">
  <label for="html">JEE</label><br>
  <input type="radio" id="css" name="Q3" value="CET">
  <label for="css">CET</label><br>
  <input type="radio" id="javascript" name="Q3" value="PERA-CET">
  <label for="javascript">PERA-CET</label> </fieldset>
 </div> 
<div class="Container"><fieldset class="Direct1">
<p class="Font-Size">What are your favorite classes?</p>
<br>
  <input type="radio" id="html" name="Q4" value="MATHS">
  <label for="html">Maths</label><br>
  <input type="radio" id="css" name="Q4" value="Coding">
  <label for="css">Coding</label><br>
  <input type="radio" id="javascript" name="Q4" value="History">
  <label for="javascript">History</label><br>
&nbsp; <input type="radio" id="Geography" name="Q4" value="Geography">
  <label for="Geography">Geography</label><br>
&nbsp; <input type="radio" id="English" name="Q4" value="English">
  <label for="English">English</label><br>
&nbsp; <input type="radio" id="GS" name="Q4" value="General Science">
  <label for="GS">General Science</label></fieldset>
 </div>
<div class="Container"><fieldset class="Direct1">
<p class="Font-Size">What extracurricular activities do you participate in?</p>
<br>
  <input type="radio" id="html" name="Q5" value="Sports">
  <label for="html">Sports</label><br>
  <input type="radio" id="css" name="Q5" value="Full-Time">
  <label for="css">Full-Time</label><br>
  <input type="radio" id="javascript" name="Q5" value="School-Club">
  <label for="javascript">School Club</label><br>
&nbsp;  <input type="radio" id="javascript" name="Q5" value="Part-Time">
  <label for="javascript">Part-Time Job</label></fieldset>
 
 </div>
<div class="Container"><fieldset class="Direct1">
<p class="Font-Size">What areas are you interested in?</p>
<br>
   <input type="radio" id="html" name="Q6" value="Arts">
  <label for="html">Arts</label><br>
  <input type="radio" id="css" name="Q6" value="Humanities">
  <label for="css">Humanities</label><br>
  <input type="radio" id="javascript" name="Q6" value="Bussiness">
  <label for="javascript">Bussiness</label><br>
&nbsp; <input type="radio" id="java" name="Q6" value="Coding">
&nbsp; <label for="javascript">Coding</label><br> 
&nbsp; <input type="radio" id="javascript" name="Q6" value="Maths">
&nbsp; <label for="javascript">Maths</label><br>
&nbsp; <input type="radio" id="javascript" name="Q6" value="Accounting">
&nbsp; <label for="javascript">Acoounting</label><br>
&nbsp; <input type="radio" id="javascript" name="Q6" value="Engineering">
&nbsp; <label for="javascript">Engineering</label></fieldset>

 </div>
<div class="Container"><fieldset class="Direct1">
<p class="Font-Size">Will you play sports in college?</p>
<br>
  <input type="radio" id="html" name="Q7" value="Yes">
  <label for="html">Yes</label><br>
  <input type="radio" id="css" name="Q7" value="No">
  <label for="css">No</label><br>
  <input type="radio" id="javascript" name="Q7" value="Maybe">
  <label for="javascript">Maybe</label></fieldset>
</div>
<div class="Container"><fieldset class="Direct1">
<p class="Font-Size">What do you plan on doing after college?</p>
<br>
  <input type="radio" id="html" name="Q8" value="Get-a-Job">
  <label for="html">Get a Job</label><br>
  <input type="radio" id="css" name="Q8" value="Graduate-School">
  <label for="css">Graduate School</label><br>
  <input type="radio" id="javascript" name="Q8" value="Further-Studies">
  <label for="javascript">Further Studies</label></fieldset>
 </div>
<div class="Container"><fieldset class="Direct1">
<p class="Font-Size">How important is low cost?</p>
<br>
  <input type="radio" id="html" name="Q9" value="Very Little">
  <label for="html">Very LittlE</label><br>
  <input type="radio" id="css" name="Q9" value="Very Much">
  <label for="css">Very Much</label><br>
  <input type="radio" id="javascript" name="Q9" value="Little Bit">
  <label for="javascript">a Litte Bit</label></fieldset>
 </div>
<div class="Container"><fieldset class="Direct1">
<p class="Font-Size">What size school would you prefer?</p>
<br>
  <input type="radio" id="html" name="Q10" value="Small">
  <label for="html">Small</label><br>
  <input type="radio" id="css" name="Q10" value="Big">
  <label for="css">Big</label><br>
  <input type="radio" id="javascript" name="Q10" value="Medium">
  <label for="javascript">Medium</label></fieldset>
 </div>
<div class="Container"><fieldset class="Direct1"> 
<p class="Font-Size">What is your household income?</p>
<br>
  <input type="radio" id="css" name="Q11" value="above 10 Lakh">
  <label for="css">Above 10 Lakh</label><br>
  <input type="radio" id="javascript" name="Q11" value="Below 10 Lakh">
  <label for="javascript">below 10 Lakh</label></fieldset>
 </div>
<div class="Container"><fieldset class="Direct1">
<p class="Font-Size">How important is the school reputation?</p>
<br>
  <input type="radio" id="html" name="Q12" value="Very Much">
  <label for="html">Very Much</label><br>
  <input type="radio" id="css" name="Q12" value="Little Bit">
  <label for="css">Little bit</label><br>
  <input type="radio" id="javascript" name="Q12" value="Doesnt Matter">
  <label for="javascript">Doesn't Matter</label></fieldset>
 </div>
<div class="Container"><fieldset class="Direct1">
<p class="Font-Size">How much do you study?</p>
<br>
  <input type="radio" id="html" name="Q13" value="2-3Hrs/Day">
  <label for="html">2-3Hrs/Day</label><br>
  <input type="radio" id="css" name="Q13" value="4-5Hr/Day">
  <label for="css">4-5Hr/Day</label><br>
  <input type="radio" id="javascript" name="Q13" value="5-6Hrs/Day">
  <label for="javascript">5-6Hrs/Day</label></fieldset>

</div>
<div class="Container"><fieldset class="Direct1">
<p class="Font-Size">What type of area do you want to live in?</p>
<br>
  <input type="radio" id="html" name="Q14" value="Urban">
  <label for="html">Urban</label><br>
  <input type="radio" id="css" name="Q14" value="Sub-urban">
  <label for="css">Sub-urban</label><br>
  <input type="radio" id="javascript" name="Q14" value="Rural">
  <label for="javascript">Rural</label></fieldset>

</div>
<br>
<br>
        <div class="button">
        <input type="submit" name="submit" value="save">

        </div>
</form>
</div>
</body>
</html>

