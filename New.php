<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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

    
<form  action="connectQuiz.php" method="POST">
<div class="Container">

<p class="Font-Size">Enter Your username ? </p>
<br>
  <input class="Direct1" type="text" id="name" name="name"  placeholder="Enter Your Username" >
<br>
        <div class="button">
        <input type="submit" name="submit" value="save">
        </div>
    </form>
</body>
</html>