<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Harry.css" >
    <link rel="stylesheet" href="">
    <title>Choice</title>
    <script>
      function myfunction()
      {
        var un=document.forms["myforms"]["email"].value;
        var loc=document.forms["myforms"]["psw"].value;
         if (un == "KaranAdmin" && loc== "KaranAdmin") {
           window.location.href="admin.php";
      } 
     }
    </script>
</head>
<body>
  
    <div class="bg-img">
        <form name="myforms" class="container">
          <h1>Admin Login</h1>
          <label for="email"><b>Admin User-Name</b></label>
          <input type="text" placeholder="Enter Email" id="email" name="email" required>
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password"  id="psw" name="psw" required>
          <input type="button" id="logbutton" value="Proceed" onclick= myfunction() class="btn">
        </form>
      </div>

</div>
</body>
</html>
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Direct</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="menustyle.css">
    

</head>
<body>
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
 <section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="draw2.webp"
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form name="myforms" method="post">
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="text" id="form1Example13" name="username" class="form-control form-control-lg" required>
            <label class="form-label" name="username" for="form1Example13">User Name</label>
          </div>
          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="form1Example23" name="pass" class="form-control form-control-lg" required>
            <label class="form-label" name="pass"for="form1Example23">Password</label>
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
            <button type="submit" class="btn btn-primary btn-lg btn-work" value="Proceed" onclick= myfunction()>Proceed</button>

        </form>
      </div>
    </div>
  </div>
  </div>
  <script>
      function myfunction()
      {
       var un=document.forms["myforms"]["username"].value;
       var loc=document.forms["myforms"]["pass"].value;
      if (un== "0987654321" && loc=="0987654321") {
        document.write("Hello")
        window.location.href="admin.php";
      } 
       }
    </script>
</body>
</html>


