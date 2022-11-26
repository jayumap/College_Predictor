<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menustyle.css">
    <title>Document</title>
</head>
<body>
    <style>
        html,body {
  width: 100%;
  height: 100%;
}

body {
  font: 1.2em/1.4 'Oswald', sans-serif;
  color: #fff;
  text-align: right;
}

.rolldown-list {
  text-align: left;
  padding: 0;
  margin: 0;
}

.rolldown-list li {
  padding: 1em;
  margin-bottom: .125em;
  display: block;
  list-style: none;
  text-transform: uppercase;
}

.rolldown-list li {
  visibility: hidden;
  animation: rolldown .8s 1;
  transform-origin: 50% 0;
  animation-fill-mode: forwards;
}

.rolldown-list li:nth-child(2n) {
  background-color: #444;
}

.rolldown-list li:nth-child(2n+1) {
  background-color: #333;
}

#myList {
  position: absolute;
  width: 50%; 
  left: 50%;
  margin-left: -25%;
}

#btnReload {
  float: right;
  color: #333;
  background: #ccc;
  text-transform: uppercase;
  border: none;
  padding: .5em 1em;
}

#btnReload:hover {
  background: #ddd;
}

@keyframes rolldown {
  0% {
    visibility: visible;
    transform: rotateX(180deg) perspective(500px);
  }
  70% {
    visibility: visible;
    transform: rotateX(-20deg);
  }
  100% {
    visibility: visible;
    transform: rotateX(0deg);
  }
}
    </style>
    <script>
        $('.rolldown-list li').each(function () {
  var delay = ($(this).index() / 4) + 's';
  $(this).css({
    webkitAnimationDelay: delay,
    mozAnimationDelay: delay,
    animationDelay: delay
  });
});

$('#btnReload').click(function () {
  $('#myList').removeClass('rolldown-list');
  setTimeout(function () {
    $('#myList').addClass('rolldown-list');
  }, 1);
});
    </script>
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
       <li><a href="Quiz.php"> Retake</a></li>
       <li><a href="#">Feedback</a></li>
    </ul>
 </nav>
 <div class="content">
    <div>
       
    </div>
    <div>

    </div>
 </div>
    <?php        
    session_start();
    $myusername = $_POST['name'];
    $conn = mysqli_connect("localhost","root","","login");
    $sql = " SELECT Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14 from users ORDER BY created_at DESC Limit 1 ";
     $result = $conn -> query($sql);

     if ($result-> num_rows > 0) {
         while ($row = $result-> fetch_assoc()) {
          ?>
          <ul class="rolldown-list" id="myList" >
          <li >Did you applied to Colleges <br><h2><?php echo $row["Q1"]; ?></h2>
          <li >What is your class rank?<h2><?php echo $row["Q2"]; ?></h2></li>
          <li >What tests have you taken?<h2><?php echo $row["Q3"]; ?></h2></li>
          <li >What are your favorite classes? <h2><?php echo $row["Q4"]; ?></h2></li>
          <li >What extracurricular activities do you participate in?<h2><?php echo $row["Q5"]; ?></h2></li>
          <li >What areas are you interested in?<h2><?php echo $row["Q6"]; ?></h2></li>
          <li >Will you play sports in college<h2><?php echo $row["Q7"]; ?></h2></li>
          <li >What do you plan on doing after college?<h2><?php echo $row["Q8"]; ?></h2></li>
          <li >How important is low cost?<h2><?php echo $row["Q9"]; ?></h2></li>
          <li >What size school would you prefer<h2><?php echo $row["Q10"]; ?></h2></li>
          <li >What is your household income?<h2><?php echo $row["Q11"]; ?></h2></li>
          <li >How important is the school reputation?<h2><?php echo $row["Q12"]; ?></h2></li>
          <li >How much do you stud<h2><?php echo $row["Q13"]; ?></h2></li>
          <li >What type of area do you want to live in<h2><?php echo $row["Q14"]; ?></h2></li>
          <li><a href="New.php" style="color: white">Here is your prediction</a></li>
    
          </ul>
          <?php
         }
        echo "</table>";

     }?>
</body>
</html>