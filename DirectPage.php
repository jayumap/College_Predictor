
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Direct</title>
    <link rel="stylesheet" href="List.html">
    <link rel="stylesheet" href="menustyle.css">
    <link rel="stylesheet" href="harry1.css">
</head>
<body>
<style>

.Direct1 {
  position: absolute;
  right: 339px;
  top: 20%;
  margin: 9px;
  max-width: 740px;
  padding: 16px;
  background-color: white;
  border-radius: 25px;
}

</style>  <nav>
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
  <div class="Direct">
    <form  onsubmit=myfunction() class="Direct1" name="myforms" method="POST" >
          <h1 class="heading">Details</h1>
            <label for="Entrance"><b>Entrance Given</b></label>
            <div class="box">
             <select class="select" id="Entrance">
              <option value="NEET">MH-CET</option>
              <option value="cet">JEE</option>
              <option value="pcet">PERA-CET</option>
           
            </select>
            </div>
            <label for="location"><b>Location</b></label>
            <input type="text" placeholder="Enter Location" name="location" required>
            <label for="Rank"><b>Rank</b></label>
            <input type="number" placeholder="Enter Your Rank" name="Rank" required>
            <input type="submit"  id="logbutton" value="Proceed"  class="btn">
    </form>
  </div>
  <script>
      function myfunction()
      {
       var un=document.forms["myforms"]["Rank"].value;
       var loc=document.forms["myforms"]["location"].value;
      if (un>= 1 && un <= 500 && loc=="Pune") {
        window.location.href="collegelist1.php";
      } 
      if (un>= 501 && un <= 1000 && loc=="Pune") {
        window.location.href="Collegelist2.php";
      }
      if (un>= 1001 && un <= 1500 && loc=="Pune") {
        window.location.href="Collegelist3.php";
      }
      if (un>= 1501 && un <= 2000 && loc=="Pune") {
        window.location.href="Collegelist4.php";
      }
      if (un>= 2001 && un < 2500 && loc=="Pune") {
        window.location.href="Collegelist5.php";
      }
      }
  </script>
</body>
</html>