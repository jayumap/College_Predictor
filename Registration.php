

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="style.css">

     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>

  <style>
    
.button1 {
  background-color: #21b9ff; /* Green */
  border: none;
  color: white;
  padding: 15px 380px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 20px;

}
</style>
  <div class="container">
    <div class="title">Add College</div>
    <div class="content">
      <form action="contact.php" method="POST" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">College Name</span>
            <input id="CllgName" name="CllgName" type="text" placeholder="Enter College name" required>
          </div>
          <div class="input-box">
            <span class="details">Rank</span>
            <input id="Rank" name="Rank"  type="number" placeholder="Enter Ranking" required>
          </div>
          <div class="input-box">
            <span class="details">Cutoff</span>
            <input id="Cutoff" name="Cutoff" type="text" placeholder="Enter The Cutoff" required>
          </div>
          <div class="input-box">
            <span class="details">Total Fees</span>
            <input id="Total_Fee" name="Total_Fee"  type="text" placeholder="Enter Total-Fees" required>
          </div>
          <div class="input-box">
            <span class="details">Total Faculty</span>
            <input id="Total_Faculty" name="Total_Faculty" type="number" placeholder="Enter Total Faculty" required>
          </div>
          <div class="input-box">
            <span class="details">Estd Year</span>
            <input id="Estd_Year" name="Estd_Year" type="number" placeholder="Confirm Established Year" required>
          </div>
          <div class="input-box">
            <span class="details">Approval</span>
            <input id="Approval" name="Approval"  type="text" placeholder="Enter the Aprrroved System" required>
          </div>
          <div class="input-box">
          <span class="details">Link</span>
          <input id="Link" name="Link"  type="text" placeholder="Enter the Officail Link" required>
          </div> 
          <div>
            <span class="details"> Enter Logo </span>
            <input type="file" 
                   name="filename" 
                   value="" />
          </div>
        </div>
        <input type="checkbox" name="Q1" id="Q1" value="Q1">Q1 (Did you applied to Colleges) <br>
        <input type="checkbox" name="Q2" id="Q2" value="Q2">Q2 (What is your class rank?) <br>
        <input type="checkbox" name="Q3" id="Q3" value="Q3">Q3 (What tests have you taken?) <br>
        <input type="checkbox" name="Q4" id="Q4" value="Q4">Q4 (What are your favorite classes?) <br>
        <input type="checkbox" name="Q5" id="Q5" value="Q5">Q5 (What extracurricular activities do you participate in?) <br>
        <input type="checkbox" name="Q6" id="Q6" value="Q6">Q6 (What areas are you interested in?) <br>
        <input type="checkbox" name="Q7" id="Q7" value="Q7">Q7 (Will you play sports in college?) <br>
        <input type="checkbox" name="Q8" id="Q8" value="Q8">Q8 (What do you plan on doing after college?) <br>
        <input type="checkbox" name="Q9" id="Q9" value="Q9">Q9 (How important is low cost?) <br>
        <input type="checkbox" name="Q10" id="Q10" value="Q10">Q10 (What size school would you prefer) <br>
        <input type="checkbox" name="Q11" id="Q11" value="Q11">Q11 (What is your household income?) <br>
        <input type="checkbox" name="Q12" id="Q12" value="Q12">Q12 (How important is the school reputation?) <br>
        <input type="checkbox" name="Q13" id="Q13" value="Q13">Q13 (How much do you study) <br>
        <input type="checkbox" name="Q14" id="Q14" value="Q14">Q14 (What type of area do you want to live in) <br>
        <div class="button">
        <input type="submit" name="submit" value="submit">
        </div>
        <div class="button1" >
        <a href=admin.php>Go Back:: </a>
        </div>
        

  </div>
  </div>

</body>
</html>
