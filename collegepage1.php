<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table With Database</title>
    <link rel="stylesheet" href="menustyle.css">
    <style type ="text/css">
* {
  font-family: sans-serif; /* Change your font family */
}
.content-table {
  border-collapse: separate;
  border-spacing:0 15px;
  margin: 30px 0;
  font-size: 0.9em;
  
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
  
  /* background-repeat:no-repeat; */
  width:100%;

}

.content-table thead tr {
  background-color: #009879;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
  /* box-shadow: 5px 10px 10px 100px */
}

.highlight :hover{
  box-shadow:5px 10px 8px 10px #888888;
}
.content-table th,
.content-table td {
  padding: 30px 40px;
  font-size: 25px;
}

.content-table tbody tr {
  border-bottom: 1px solid #dddddd;
  border:1px solid black;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #02b8f0;
  color:white;
}
.content-table tbody tr:nth-of-type(odd){
  /* background-color:grey;   */

}
.content-table tbody tr:last-of-type {
  border-bottom: 2px solid #009879;
}

.content-table tbody tr.active-row {
  font-weight: bold;

  color: #009879;
} 
.button-27 {
  appearance: none;
  background-color: linear-gradient(135deg, #71b7e6, #9b59b6);
  border: 2px solid #1A1A1A;
  border-radius: 15px;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: Roobert,-apple-system,BlinkMacSystemFont,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
  font-size: 16px;
  font-weight: 600;
  line-height: normal;
  margin: 0;
  min-height: 30px;
  min-width: 15px;
  outline: none;
  padding: 15px 10px;
  text-align: center;
  text-decoration: none;
  transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  width: 70%;
  will-change: transform;
}

.button-27:disabled {
  pointer-events: none;
}

.button-27:hover {
  box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px;
  transform: translateY(-2px);
}

.button-27:active {
  box-shadow: none;
  transform: translateY(0);
}  
}
    </style>
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
           <li><a href="logout.php">Log-Out</a></li>
           <li><a href="#">Feedback</a></li>
        </ul>
     </nav>
 
 </nav>

 <table class="content-table"  cellspacing="50" > 
     <?php
     $conn = mysqli_connect("localhost","root","","login");
     if ($conn-> connect_error) {
         die("Connection Failed :". $conn-> connect_error);
     }
     $sql = " SELECT CllgName,Rank,Cutoff,Estd_Year,Approval,filename,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14 from  CollegeDataBase where Q1 = Q1 || Q2 = Q2 || Q3 = Q3 || Q4 = Q4 ||Q5 = Q5 || Q6 = Q6 || Q7 = Q7 ||Q8 = Q8 ||Q9 = Q9 || Q10 = Q10 ||Q11 = Q11 || Q12 = Q12 || Q13 = Q13 ||Q14 = Q14 ";

     $sql1 = " SELECT CllgName,Rank,Cutoff,Estd_Year,Approval,filename,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14 from  CollegeDataBase where Q1 = Q1 and Q2 = Q2 and Q3 = Q3 and Q4 = Q4 and Q5 = Q5 and Q6 = Q6 and Q7 = Q7 and Q8 = Q8 and Q9 = Q9 and Q10 = Q10 and Q11 = Q11 and Q12 = Q12 and Q13 = Q13 and Q14 = Q14 ";

     $sql2 = " SELECT CllgName,Rank,Cutoff,Estd_Year,Approval,filename,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14 from  CollegeDataBase where Q1 = Q1 and Q2 = Q2 || Q3 = Q3 || Q4 = Q4 ||Q5 = Q5 || Q6 = Q6 || Q7 = Q7 ||Q8 = Q8 ||Q9 = Q9 || Q10 = Q10 ||Q11 = Q11 || Q12 = Q12 || Q13 = Q13 ||Q14 = Q14 ";

     $sql3 = " SELECT CllgName,Rank,Cutoff,Estd_Year,Approval,filename,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14 from  CollegeDataBase where Q1 = Q1 and Q2 = Q2 and Q3 = Q3 || Q4 = Q4 ||Q5 = Q5 || Q6 = Q6 || Q7 = Q7 ||Q8 = Q8 ||Q9 = Q9 || Q10 = Q10 ||Q11 = Q11 || Q12 = Q12 || Q13 = Q13 ||Q14 = Q14 "; 

     $sql4 = " SELECT CllgName,Rank,Cutoff,Estd_Year,Approval,filename,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14 from  CollegeDataBase where Q1 = Q1 and Q2 = Q2 and Q3 = Q3 and Q4 = Q4 ||Q5 = Q5 || Q6 = Q6 || Q7 = Q7 ||Q8 = Q8 ||Q9 = Q9 || Q10 = Q10 ||Q11 = Q11 || Q12 = Q12 || Q13 = Q13 ||Q14 = Q14 ";

     $sql5 = " SELECT CllgName,Rank,Cutoff,Estd_Year,Approval,filename,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14 from  CollegeDataBase where Q1 = Q1 and Q2 = Q2 and Q3 = Q3 and Q4 = Q4 and Q5 = Q5 || Q6 = Q6 || Q7 = Q7 ||Q8 = Q8 ||Q9 = Q9 || Q10 = Q10 ||Q11 = Q11 || Q12 = Q12 || Q13 = Q13 ||Q14 = Q14 ";

     $sql6 = " SELECT CllgName,Rank,Cutoff,Estd_Year,Approval,filename,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14 from  CollegeDataBase where Q1 = Q1 and Q2 = Q2 and Q3 = Q3 and Q4 = Q4 and Q5 = Q5 and Q6 = Q6 || Q7 = Q7 ||Q8 = Q8 ||Q9 = Q9 || Q10 = Q10 ||Q11 = Q11 || Q12 = Q12 || Q13 = Q13 ||Q14 = Q14 ";  

     $sql7 = " SELECT CllgName,Rank,Cutoff,Estd_Year,Approval,filename,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14 from  CollegeDataBase where Q1 = Q1 and Q2 = Q2 and Q3 = Q3 and Q4 = Q4 and Q5 = Q5 and Q6 = Q6 and Q7 = Q7 ||Q8 = Q8 ||Q9 = Q9 || Q10 = Q10 ||Q11 = Q11 || Q12 = Q12 || Q13 = Q13 ||Q14 = Q14 "; 

     $sql8 = " SELECT CllgName,Rank,Cutoff,Estd_Year,Approval,filename,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14 from  CollegeDataBase where Q1 = Q1 and Q2 = Q2 and Q3 = Q3 and Q4 = Q4 and Q5 = Q5 and Q6 = Q6 and Q7 = Q7 and Q8 = Q8 ||Q9 = Q9 || Q10 = Q10 ||Q11 = Q11 || Q12 = Q12 || Q13 = Q13 ||Q14 = Q14 "; 

     $sql9 = " SELECT CllgName,Rank,Cutoff,Estd_Year,Approval,filename,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14 from  CollegeDataBase where Q1 = Q1 and Q2 = Q2 and Q3 = Q3 and Q4 = Q4 and Q5 = Q5 and Q6 = Q6 and Q7 = Q7 and Q8 = Q8 ||Q9 = Q9 || Q10 = Q10 ||Q11 = Q11 || Q12 = Q12 || Q13 = Q13 ||Q14 = Q14 "; 

     $sql10 = " SELECT CllgName,Rank,Cutoff,Estd_Year,Approval,filename,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14 from  CollegeDataBase where Q1 = Q1 and Q2 = Q2 and Q3 = Q3 and Q4 = Q4 and Q5 = Q5 and Q6 = Q6 and Q7 = Q7 and Q8 = Q8 and Q9 = Q9 || Q10 = Q10 ||Q11 = Q11 || Q12 = Q12 || Q13 = Q13 ||Q14 = Q14 ";   
     $sql11 = " SELECT CllgName,Rank,Cutoff,Estd_Year,Approval,filename,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14 from  CollegeDataBase where Q1 = Q1 and Q2 = Q2 and Q3 = Q3 and Q4 = Q4 and Q5 = Q5 and Q6 = Q6 and Q7 = Q7 and Q8 = Q8 and Q9 = Q9 and Q10 = Q10 ||Q11 = Q11 || Q12 = Q12 || Q13 = Q13 ||Q14 = Q14 ";         
     $sql12 = " SELECT CllgName,Rank,Cutoff,Estd_Year,Approval,filename,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14 from  CollegeDataBase where Q1 = Q1 and Q2 = Q2 and Q3 = Q3 and Q4 = Q4 and Q5 = Q5 and Q6 = Q6 and Q7 = Q7 and Q8 = Q8 and Q9 = Q9 and Q10 = Q10 and Q11 = Q11 || Q12 = Q12 || Q13 = Q13 ||Q14 = Q14 ";   
     $sql13 = " SELECT CllgName,Rank,Cutoff,Estd_Year,Approval,filename,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14 from  CollegeDataBase where Q1 = Q1 and Q2 = Q2 and Q3 = Q3 and Q4 = Q4 and Q5 = Q5 and Q6 = Q6 and Q7 = Q7 and Q8 = Q8 and Q9 = Q9 and Q10 = Q10 and Q11 = Q11 and Q12 = Q12 || Q13 = Q13 ||Q14 = Q14 ";   
     $sql14 = " SELECT CllgName,Rank,Cutoff,Estd_Year,Approval,filename,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14 from  CollegeDataBase where Q1 = Q1 and Q2 = Q2 and Q3 = Q3 and Q4 = Q4 and Q5 = Q5 and Q6 = Q6 and Q7 = Q7 and Q8 = Q8 and  Q9 = Q9 and Q10 = Q10 and Q11 = Q11 and Q12 = Q12 and Q13 = Q13 ||Q14 = Q14 ";   
     $sql15 = " SELECT CllgName,Rank,Cutoff,Estd_Year,Approval,filename,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14 from  CollegeDataBase where Q1 = Q1 and Q2 = Q2 and Q3 = Q3 and Q4 = Q4 and Q5 = Q5 and Q6 = Q6 and Q7 = Q7 and Q8 = Q8 and  Q9 = Q9 and Q10 = Q10 and Q11 = Q11 and Q12 = Q12 and Q13 = Q13 and Q14 = Q14 "; 
     $sql16 =" SELECT CllgName,Rank,Cutoff,Estd_Year,Approval,filename,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14 from  CollegeDataBase where Q1 = Q1 || Q2 = Q2 and Q3 = Q3 and Q4 = Q4 and Q5 = Q5 and Q6 = Q6 and Q7 = Q7 and Q8 = Q8 and  Q9 = Q9 and Q10 = Q10 and Q11 = Q11 and Q12 = Q12 and Q13 = Q13 and Q14 = Q14 "; 
     $sql17 =" SELECT CllgName,Rank,Cutoff,Estd_Year,Approval,filename,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14 from  CollegeDataBase where Q1 = Q1 || Q2 = Q2 || Q3 = Q3 and Q4 = Q4 and Q5 = Q5 and Q6 = Q6 and Q7 = Q7 and Q8 = Q8 and  Q9 = Q9 and Q10 = Q10 and Q11 = Q11 and Q12 = Q12 and Q13 = Q13 and Q14 = Q14 ";
     $sql18 =" SELECT CllgName,Rank,Cutoff,Estd_Year,Approval,filename,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14 from  CollegeDataBase where Q1 = Q1 || Q2 = Q2 || Q3 = Q3 || Q4 = Q4 and Q5 = Q5 and Q6 = Q6 and Q7 = Q7 and Q8 = Q8 and  Q9 = Q9 and Q10 = Q10 and Q11 = Q11 and Q12 = Q12 and Q13 = Q13 and Q14 = Q14 ";  
     $sql19 =" SELECT CllgName,Rank,Cutoff,Estd_Year,Approval,filename,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14 from  CollegeDataBase where Q1 = Q1 || Q2 = Q2 || Q3 = Q3 || Q4 = Q4 || Q5 = Q5 and Q6 = Q6 and Q7 = Q7 and Q8 = Q8 and  Q9 = Q9 and Q10 = Q10 and Q11 = Q11 and Q12 = Q12 and Q13 = Q13 and Q14 = Q14 "; 
     $sql20 =" SELECT CllgName,Rank,Cutoff,Estd_Year,Approval,filename,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14 from  CollegeDataBase where Q1 = Q1 || Q2 = Q2 || Q3 = Q3 || Q4 = Q4 || Q5 = Q5 || Q6 = Q6 and Q7 = Q7 and Q8 = Q8 and  Q9 = Q9 and Q10 = Q10 and Q11 = Q11 and Q12 = Q12 and Q13 = Q13 and Q14 = Q14 "; 
     $sql21 =" SELECT CllgName,Rank,Cutoff,Estd_Year,Approval,filename,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14 from  CollegeDataBase where Q1 = Q1 || Q2 = Q2 || Q3 = Q3 || Q4 = Q4 || Q5 = Q5 || Q6 = Q6 || Q7 = Q7 and Q8 = Q8 and  Q9 = Q9 and Q10 = Q10 and Q11 = Q11 and Q12 = Q12 and Q13 = Q13 and Q14 = Q14 "; 

     $sql22 =" SELECT CllgName,Rank,Cutoff,Estd_Year,Approval,filename,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14 from  CollegeDataBase where Q1 = Q1 || Q2 = Q2 || Q3 = Q3 || Q4 = Q4 || Q5 = Q5 || Q6 = Q6 || Q7 = Q7 || Q8 = Q8 and  Q9 = Q9 and Q10 = Q10 and Q11 = Q11 and Q12 = Q12 and Q13 = Q13 and Q14 = Q14 ";  

     $sql23 =" SELECT CllgName,Rank,Cutoff,Estd_Year,Approval,filename,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14 from  CollegeDataBase where Q1 = Q1 || Q2 = Q2 || Q3 = Q3 || Q4 = Q4 || Q5 = Q5 || Q6 = Q6 || Q7 = Q7 || Q8 = Q8 ||  Q9 = Q9 and Q10 = Q10 and Q11 = Q11 and Q12 = Q12 and Q13 = Q13 and Q14 = Q14 "; 

     $sql24 =" SELECT CllgName,Rank,Cutoff,Estd_Year,Approval,filename,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14 from  CollegeDataBase where Q1 = Q1 || Q2 = Q2 || Q3 = Q3 || Q4 = Q4 || Q5 = Q5 || Q6 = Q6 || Q7 = Q7 || Q8 = Q8 ||  Q9 = Q9 and Q10 = Q10 and Q11 = Q11 and Q12 = Q12 and Q13 = Q13 and Q14 = Q14 "; 

     $sql25 =" SELECT CllgName,Rank,Cutoff,Estd_Year,Approval,filename,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14 from  CollegeDataBase where Q1 = Q1 || Q2 = Q2 || Q3 = Q3 || Q4 = Q4 || Q5 = Q5 || Q6 = Q6 || Q7 = Q7 || Q8 = Q8 ||  Q9 = Q9 || Q10 = Q10 and Q11 = Q11 and Q12 = Q12 and Q13 = Q13 and Q14 = Q14 "; 

     $sql26 =" SELECT CllgName,Rank,Cutoff,Estd_Year,Approval,filename,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14 from  CollegeDataBase where Q1 = Q1 || Q2 = Q2 || Q3 = Q3 || Q4 = Q4 || Q5 = Q5 || Q6 = Q6 || Q7 = Q7 || Q8 = Q8 ||  Q9 = Q9 || Q10 = Q10 || Q11 = Q11 and Q12 = Q12 and Q13 = Q13 and Q14 = Q14 ";  

     $sql27 =" SELECT CllgName,Rank,Cutoff,Estd_Year,Approval,filename,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14 from  CollegeDataBase where Q1 = Q1 || Q2 = Q2 || Q3 = Q3 || Q4 = Q4 || Q5 = Q5 || Q6 = Q6 || Q7 = Q7 || Q8 = Q8 ||  Q9 = Q9 || Q10 = Q10 || Q11 = Q11 || Q12 = Q12 and Q13 = Q13 and Q14 = Q14 "; 

     $sql28 =" SELECT CllgName,Rank,Cutoff,Estd_Year,Approval,filename,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14 from  CollegeDataBase where Q1 = Q1 || Q2 = Q2 || Q3 = Q3 || Q4 = Q4 || Q5 = Q5 || Q6 = Q6 || Q7 = Q7 || Q8 = Q8 ||  Q9 = Q9 || Q10 = Q10 || Q11 = Q11 || Q12 = Q12 || Q13 = Q13 and Q14 = Q14 "; 

     $sql29 =" SELECT CllgName,Rank,Cutoff,Estd_Year,Approval,filename,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14 from  CollegeDataBase where Q1 = Q1 and Q2 = Q2 || Q3 = Q3 || Q4 = Q4 || Q5 = Q5 || Q6 = Q6 || Q7 = Q7 || Q8 = Q8 ||  Q9 = Q9 || Q10 = Q10 || Q11 = Q11 || Q12 = Q12 || Q13 = Q13 || Q14 = Q14 "; 

     $sql30 =" SELECT CllgName,Rank,Cutoff,Estd_Year,Approval,filename,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14 from  CollegeDataBase where Q1 = Q1 || Q2 = Q2 and Q3 = Q3 || Q4 = Q4 || Q5 = Q5 || Q6 = Q6 || Q7 = Q7 || Q8 = Q8 ||  Q9 = Q9 || Q10 = Q10 || Q11 = Q11 || Q12 = Q12 || Q13 = Q13 || Q14 = Q14 "; 

     $sql31 =" SELECT CllgName,Rank,Cutoff,Estd_Year,Approval,filename,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14 from  CollegeDataBase where Q1 = Q1 || Q2 = Q2 || Q3 = Q3 and Q4 = Q4 || Q5 = Q5 || Q6 = Q6 || Q7 = Q7 || Q8 = Q8 ||  Q9 = Q9 || Q10 = Q10 || Q11 = Q11 || Q12 = Q12 || Q13 = Q13 || Q14 = Q14 ";  

     $sql32 =" SELECT CllgName,Rank,Cutoff,Estd_Year,Approval,filename,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14 from  CollegeDataBase where Q1 = Q1 || Q2 = Q2 || Q3 = Q3 || Q4 = Q4 and Q5 = Q5 || Q6 = Q6 || Q7 = Q7 || Q8 = Q8 ||  Q9 = Q9 || Q10 = Q10 || Q11 = Q11 || Q12 = Q12 || Q13 = Q13 || Q14 = Q14 ";  

     $sql33 =" SELECT CllgName,Rank,Cutoff,Estd_Year,Approval,filename,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14 from  CollegeDataBase where Q1 = Q1 || Q2 = Q2 || Q3 = Q3 || Q4 = Q4 || Q5 = Q5 and Q6 = Q6 || Q7 = Q7 || Q8 = Q8 ||  Q9 = Q9 || Q10 = Q10 || Q11 = Q11 || Q12 = Q12 || Q13 = Q13 || Q14 = Q14 "; 

     $sql34 =" SELECT CllgName,Rank,Cutoff,Estd_Year,Approval,filename,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14 from  CollegeDataBase where Q1 = Q1 || Q2 = Q2 || Q3 = Q3 || Q4 = Q4 || Q5 = Q5 || Q6 = Q6 and Q7 = Q7 || Q8 = Q8 ||  Q9 = Q9 || Q10 = Q10 || Q11 = Q11 || Q12 = Q12 || Q13 = Q13 || Q14 = Q14 "; 

     $sql35 =" SELECT CllgName,Rank,Cutoff,Estd_Year,Approval,filename,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14 from  CollegeDataBase where Q1 = Q1 || Q2 = Q2 || Q3 = Q3 || Q4 = Q4 || Q5 = Q5 || Q6 = Q6 || Q7 = Q7 and Q8 = Q8 ||  Q9 = Q9 || Q10 = Q10 || Q11 = Q11 || Q12 = Q12 || Q13 = Q13 || Q14 = Q14 ";

     $sql36 =" SELECT CllgName,Rank,Cutoff,Estd_Year,Approval,filename,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14 from  CollegeDataBase where Q1 = Q1 || Q2 = Q2 || Q3 = Q3 || Q4 = Q4 || Q5 = Q5 || Q6 = Q6 || Q7 = Q7 || Q8 = Q8 and  Q9 = Q9 || Q10 = Q10 || Q11 = Q11 || Q12 = Q12 || Q13 = Q13 || Q14 = Q14 "; 

     $sql37 =" SELECT CllgName,Rank,Cutoff,Estd_Year,Approval,filename,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14 from  CollegeDataBase where Q1 = Q1 || Q2 = Q2 || Q3 = Q3 || Q4 = Q4 || Q5 = Q5 || Q6 = Q6 || Q7 = Q7 || Q8 = Q8 ||  Q9 = Q9 and Q10 = Q10 || Q11 = Q11 || Q12 = Q12 || Q13 = Q13 || Q14 = Q14 ";

     $sql38 =" SELECT CllgName,Rank,Cutoff,Estd_Year,Approval,filename,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14 from  CollegeDataBase where Q1 = Q1 || Q2 = Q2 || Q3 = Q3 || Q4 = Q4 || Q5 = Q5 || Q6 = Q6 || Q7 = Q7 || Q8 = Q8 ||  Q9 = Q9 || Q10 = Q10 and Q11 = Q11 || Q12 = Q12 || Q13 = Q13 || Q14 = Q14 ";

     $sql39 =" SELECT CllgName,Rank,Cutoff,Estd_Year,Approval,filename,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14 from  CollegeDataBase where Q1 = Q1 || Q2 = Q2 || Q3 = Q3 || Q4 = Q4 || Q5 = Q5 || Q6 = Q6 || Q7 = Q7 || Q8 = Q8 ||  Q9 = Q9 || Q10 = Q10 || Q11 = Q11 and Q12 = Q12 || Q13 = Q13 || Q14 = Q14 ";

     $sql40 =" SELECT CllgName,Rank,Cutoff,Estd_Year,Approval,filename,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14 from  CollegeDataBase where Q1 = Q1 || Q2 = Q2 || Q3 = Q3 || Q4 = Q4 || Q5 = Q5 || Q6 = Q6 || Q7 = Q7 || Q8 = Q8 ||  Q9 = Q9 || Q10 = Q10 || Q11 = Q11 || Q12 = Q12 and Q13 = Q13 || Q14 = Q14 ";

     $sql41 =" SELECT CllgName,Rank,Cutoff,Estd_Year,Approval,filename,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14 from  CollegeDataBase where Q1 = Q1 || Q2 = Q2 || Q3 = Q3 || Q4 = Q4 || Q5 = Q5 || Q6 = Q6 || Q7 = Q7 || Q8 = Q8 ||  Q9 = Q9 || Q10 = Q10 || Q11 = Q11 || Q12 = Q12 || Q13 = Q13 and Q14 = Q14 ";

     $result = $conn-> query($sql);
     $result1 = $conn-> query($sql1);
     $result2 = $conn-> query($sql2);
     $result3 = $conn-> query($sql3);
     $result4 = $conn-> query($sql4);
     $result5 = $conn-> query($sql5);
     $result6 = $conn-> query($sql6);
     $result7 = $conn-> query($sql7);
     $result8 = $conn-> query($sql8);
     $result9 = $conn-> query($sql9);
     $result10 = $conn-> query($sql10);
     $result11 = $conn-> query($sql11); 
     $result12 = $conn-> query($sql12);
     $result13 = $conn-> query($sql13);
     $result14 = $conn-> query($sql14);
     $result15 = $conn-> query($sql15);
     $result16 = $conn-> query($sql16);
     $result17 = $conn-> query($sql17);
     $result18 = $conn-> query($sql18);
     $result19 = $conn-> query($sql19);
     $result20 = $conn-> query($sql20);
     $result21 = $conn-> query($sql21);
     $result22 = $conn-> query($sql22);
     $result23 = $conn-> query($sql23);
     $result24 = $conn-> query($sql24);
     $result25 = $conn-> query($sql25);
     $result26 = $conn-> query($sql26);
     $result27 = $conn-> query($sql27);
     $result28 = $conn-> query($sql28);
     $result29 = $conn-> query($sql29);
     $result30 = $conn-> query($sql30);
     $result31 = $conn-> query($sql31);
     $result32 = $conn-> query($sql32);
     $result33 = $conn-> query($sql33);
     $result34 = $conn-> query($sql34);
     $result35 = $conn-> query($sql35);
     $result36 = $conn-> query($sql36);
     $result37 = $conn-> query($sql37);
     $result38 = $conn-> query($sql38);
     $result39 = $conn-> query($sql39);
     $result40 = $conn-> query($sql40);
     $result41 = $conn-> query($sql41);
     if (!empty($result) && $result->num_rows > 0) {
         while ($row = $result-> fetch_assoc()) {
          ?>
          <div class="container"><tr>
          <td><?php echo "<img src='image/".$row['filename']."'style='width:100px; height: 100px' >"; ?></td>
          <td >College<h2><?php echo $row["CllgName"];?>  </td>
            <td >Ranking<h2><?php echo $row["Rank"]; ?></h2> </td>
            <td >Cutoff<h2><?php echo $row["Cutoff"]; ?></h2></td>
            <td >Established <h2><?php echo $row["Estd_Year"]; ?></h2></td>
            <td >Approval<h2><?php echo $row["Approval"]; ?></h2></td></tr>
         </div>
          <?php
         }
        echo "</table>";
     }?><?php
     echo "<table class= content-table  cellspacing=50> ";
     if (!empty($result1) && $result1->num_rows > 0) {
        while ($row = $result1-> fetch_assoc()) {
            ?>
            <div class="container"><tr>
            <td><?php echo "<img src='image/".$row['filename']."'style='width:100px; height: 100px' >"; ?></td>
            <td >College<h2><?php echo $row["CllgName"];?>  </td>
              <td >Ranking<h2><?php echo $row["Rank"]; ?></h2> </td>
              <td >Cutoff<h2><?php echo $row["Cutoff"]; ?></h2></td>
              <td >Established <h2><?php echo $row["Estd_Year"]; ?></h2></td>
              <td >Approval<h2><?php echo $row["Approval"]; ?></h2></td></tr>
           </div>
            <?php
           }
          echo "</table>";
     }echo "<table class= content-table  cellspacing=50> ";
     if (!empty($result2) && $result2->num_rows > 0) {
        while ($row = $result2-> fetch_assoc()) {
            ?>
            <div class="container"><tr>
            <td><?php echo "<img src='image/".$row['filename']."'style='width:100px; height: 100px' >"; ?></td>
            <td >College<h2><?php echo $row["CllgName"];?>  </td>
              <td >Ranking<h2><?php echo $row["Rank"]; ?></h2> </td>
              <td >Cutoff<h2><?php echo $row["Cutoff"]; ?></h2></td>
              <td >Established <h2><?php echo $row["Estd_Year"]; ?></h2></td>
              <td >Approval<h2><?php echo $row["Approval"]; ?></h2></td></tr>
           </div>
            <?php
           }
          echo "</table>";
     }echo "<table class= content-table  cellspacing=50> ";
     if (!empty($result3) && $result3->num_rows > 0) {
        while ($row = $result3-> fetch_assoc()) {
            ?>
            <div class="container"><tr>
            <td><?php echo "<img src='image/".$row['filename']."'style='width:100px; height: 100px' >"; ?></td>
            <td >College<h2><?php echo $row["CllgName"];?>  </td>
              <td >Ranking<h2><?php echo $row["Rank"]; ?></h2> </td>
              <td >Cutoff<h2><?php echo $row["Cutoff"]; ?></h2></td>
              <td >Established <h2><?php echo $row["Estd_Year"]; ?></h2></td>
              <td >Approval<h2><?php echo $row["Approval"]; ?></h2></td></tr>
           </div>
            <?php
           }
          echo "</table>";
     
     }echo "<table class= content-table  cellspacing=50> ";
     if (!empty($result4) && $result4->num_rows > 0) {
        while ($row = $result4-> fetch_assoc()) {
            ?>
            <div class="container"><tr>
            <td><?php echo "<img src='image/".$row['filename']."'style='width:100px; height: 100px' >"; ?></td>
            <td >College<h2><?php echo $row["CllgName"];?>  </td>
              <td >Ranking<h2><?php echo $row["Rank"]; ?></h2> </td>
              <td >Cutoff<h2><?php echo $row["Cutoff"]; ?></h2></td>
              <td >Established <h2><?php echo $row["Estd_Year"]; ?></h2></td>
              <td >Approval<h2><?php echo $row["Approval"]; ?></h2></td>
           </div></tr>
            <?php
           }
          echo "</table>";
     }echo "<table class= content-table  cellspacing=50> ";
     if (!empty($result4) && $result4->num_rows > 0) {
        while ($row = $result4-> fetch_assoc()) {
            ?>
            <div class="container"><tr>
            <td><?php echo "<img src='image/".$row['filename']."'style='width:100px; height: 100px' >"; ?></td>
            <td >College<h2><?php echo $row["CllgName"];?>  </td>
              <td >Ranking<h2><?php echo $row["Rank"]; ?></h2> </td>
              <td >Cutoff<h2><?php echo $row["Cutoff"]; ?></h2></td>
              <td >Established <h2><?php echo $row["Estd_Year"]; ?></h2></td>
              <td >Approval<h2><?php echo $row["Approval"]; ?></h2></td>
           </div></tr>
            <?php
           }
          echo "</table>";
     }echo "<table class= content-table  cellspacing=50> ";
     if (!empty($result5) && $result5->num_rows > 0) {
        while ($row = $result5-> fetch_assoc()) {
            ?>
            <div class="container"><tr>
        <td><?php echo "<img src='image/".$row['filename']."'style='width:100px; height: 100px' >"; ?></td>
            <td >College<h2><?php echo $row["CllgName"];?>  </td>
              <td >Ranking<h2><?php echo $row["Rank"]; ?></h2> </td>
              <td >Cutoff<h2><?php echo $row["Cutoff"]; ?></h2></td>
              <td >Established <h2><?php echo $row["Estd_Year"]; ?></h2></td>
              <td >Approval<h2><?php echo $row["Approval"]; ?></h2></td></tr>
           </div>
            <?php
           }
          echo "</table>";
     }echo "<table class= content-table  cellspacing=50> ";
     if (!empty($result6) && $result6->num_rows > 0) {
        while ($row = $result6-> fetch_assoc()) {
            ?>
            <div class="container"><tr>
            <td><?php echo "<img src='image/".$row['filename']."'style='width:100px; height: 100px' >"; ?></td>
            <td >College<h2><?php echo $row["CllgName"];?>  </td>
              <td >Ranking<h2><?php echo $row["Rank"]; ?></h2> </td>
              <td >Cutoff<h2><?php echo $row["Cutoff"]; ?></h2></td>
              <td >Established <h2><?php echo $row["Estd_Year"]; ?></h2></td>
              <td >Approval<h2><?php echo $row["Approval"]; ?></h2></td></tr>
           </div>
            <?php
           }
          echo "</table>";
     }echo "<table class= content-table  cellspacing=50> ";
     if (!empty($result7) && $result7->num_rows > 0) {
        while ($row = $result7-> fetch_assoc()) {
            ?>
            <div class="container"><tr>
            <td><?php echo "<img src='image/".$row['filename']."'style='width:100px; height: 100px' >"; ?></td>
            <td >College<h2><?php echo $row["CllgName"];?>  </td>
              <td >Ranking<h2><?php echo $row["Rank"]; ?></h2> </td>
              <td >Cutoff<h2><?php echo $row["Cutoff"]; ?></h2></td>
              <td >Established <h2><?php echo $row["Estd_Year"]; ?></h2></td>
              <td >Approval<h2><?php echo $row["Approval"]; ?></h2></td></tr>
           </div>
            <?php
           }
          echo "</table>";
     }echo "<table class= content-table  cellspacing=50> ";
     if (!empty($result8) && $result8->num_rows > 0) {
        while ($row = $result8-> fetch_assoc()) {
            ?>
            <div class="container"><tr>
            <td><?php echo "<img src='image/".$row['filename']."'style='width:100px; height: 100px' >"; ?></td>
            <td >College<h2><?php echo $row["CllgName"];?>  </td>
              <td >Ranking<h2><?php echo $row["Rank"]; ?></h2> </td>
              <td >Cutoff<h2><?php echo $row["Cutoff"]; ?></h2></td>
              <td >Established <h2><?php echo $row["Estd_Year"]; ?></h2></td>
              <td >Approval<h2><?php echo $row["Approval"]; ?></h2></td></tr>
           </div>
            <?php
           }
          echo "</table>";
     }echo "<table class= content-table  cellspacing=50> ";
     if (!empty($result9) && $result9->num_rows > 0) {
        while ($row = $result9-> fetch_assoc()) {
            ?>
            <div class="container"><tr>
            <td><?php echo "<img src='image/".$row['filename']."'style='width:100px; height: 100px' >"; ?></td>
            <td >College<h2><?php echo $row["CllgName"];?>  </td>
              <td >Ranking<h2><?php echo $row["Rank"]; ?></h2> </td>
              <td >Cutoff<h2><?php echo $row["Cutoff"]; ?></h2></td>
              <td >Established <h2><?php echo $row["Estd_Year"]; ?></h2></td>
              <td >Approval<h2><?php echo $row["Approval"]; ?></h2></td></tr>
           </div>
            <?php
           }
          echo "</table>";
     }echo "<table class= content-table  cellspacing=50> ";
     if (!empty($result10) && $result10->num_rows > 0) {
        while ($row = $result10-> fetch_assoc()) {
            ?>
            <div class="container"><tr>
            <td><?php echo "<img src='image/".$row['filename']."'style='width:100px; height: 100px' >"; ?></td>
            <td >College<h2><?php echo $row["CllgName"];?>  </td>
              <td >Ranking<h2><?php echo $row["Rank"]; ?></h2> </td>
              <td >Cutoff<h2><?php echo $row["Cutoff"]; ?></h2></td>
              <td >Established <h2><?php echo $row["Estd_Year"]; ?></h2></td>
              <td >Approval<h2><?php echo $row["Approval"]; ?></h2></td></tr>
           </div>
            <?php
           }
          echo "</table>";
     }echo "<table class= content-table  cellspacing=50> ";
     if (!empty($result11) && $result11->num_rows > 0) {
        while ($row = $result11-> fetch_assoc()) {
            ?>
            <div class="container"><tr>
            <td><?php echo "<img src='image/".$row['filename']."'style='width:100px; height: 100px' >"; ?></td>
            <td >College<h2><?php echo $row["CllgName"];?>  </td>
              <td >Ranking<h2><?php echo $row["Rank"]; ?></h2> </td>
              <td >Cutoff<h2><?php echo $row["Cutoff"]; ?></h2></td>
              <td >Established <h2><?php echo $row["Estd_Year"]; ?></h2></td>
              <td >Approval<h2><?php echo $row["Approval"]; ?></h2></td></tr>
           </div>
            <?php
           }
          echo "</table>";
     }echo "<table class= content-table  cellspacing=50> ";
     if (!empty($result12) && $result12->num_rows > 0) {
        while ($row = $result12-> fetch_assoc()) {
            ?>
            <div class="container"><tr>
            <td><?php echo "<img src='image/".$row['filename']."'style='width:100px; height: 100px' >"; ?></td>
            <td >College<h2><?php echo $row["CllgName"];?>  </td>
              <td >Ranking<h2><?php echo $row["Rank"]; ?></h2> </td>
              <td >Cutoff<h2><?php echo $row["Cutoff"]; ?></h2></td>
              <td >Established <h2><?php echo $row["Estd_Year"]; ?></h2></td>
              <td >Approval<h2><?php echo $row["Approval"]; ?></h2></td></tr>
           </div>
            <?php
           }
          echo "</table>";
     }echo "<table class= content-table  cellspacing=50> ";
     if (!empty($result13) && $result13->num_rows > 0) {
        while ($row = $result13-> fetch_assoc()) {
            ?>
            <div class="container"><tr>
            <td><?php echo "<img src='image/".$row['filename']."'style='width:100px; height: 100px' >"; ?></td>
            <td >College<h2><?php echo $row["CllgName"];?>  </td>
              <td >Ranking<h2><?php echo $row["Rank"]; ?></h2> </td>
              <td >Cutoff<h2><?php echo $row["Cutoff"]; ?></h2></td>
              <td >Established <h2><?php echo $row["Estd_Year"]; ?></h2></td>
              <td >Approval<h2><?php echo $row["Approval"]; ?></h2></td></tr>
           </div>
            <?php
           }
          echo "</table>";
     }echo "<table class= content-table  cellspacing=50> ";
     if (!empty($result14) && $result14->num_rows > 0) {
        while ($row = $result14-> fetch_assoc()) {
            ?>
            <div class="container"><tr>
            <td><?php echo "<img src='image/".$row['filename']."'style='width:100px; height: 100px' >"; ?></td>
            <td >College<h2><?php echo $row["CllgName"];?>  </td>
              <td >Ranking<h2><?php echo $row["Rank"]; ?></h2> </td>
              <td >Cutoff<h2><?php echo $row["Cutoff"]; ?></h2></td>
              <td >Established <h2><?php echo $row["Estd_Year"]; ?></h2></td>
              <td >Approval<h2><?php echo $row["Approval"]; ?></h2></td></tr>
           </div>
            <?php
           }
          echo "</table>";
     }echo "<table class= content-table  cellspacing=50> ";
     if (!empty($result15) && $result15->num_rows > 0) {
        while ($row = $result15-> fetch_assoc()) {
            ?>
            <div class="container">
            <td><?php echo "<img src='image/".$row['filename']."'style='width:100px; height: 100px' >"; ?></td>
            <td >College<h2><?php echo $row["CllgName"];?>  </td>
              <td >Ranking<h2><?php echo $row["Rank"]; ?></h2> </td>
              <td >Cutoff<h2><?php echo $row["Cutoff"]; ?></h2></td>
              <td >Established <h2><?php echo $row["Estd_Year"]; ?></h2></td>
              <td >Approval<h2><?php echo $row["Approval"]; ?></h2></td>
           </div>
            <?php
           }
          echo "</table>";
     }echo "<table class= content-table  cellspacing=50> ";
     if (!empty($result16) && $result16->num_rows > 0) {
        while ($row = $result16-> fetch_assoc()) {
            ?>
            <div class="container"><tr>
            <td><?php echo "<img src='image/".$row['filename']."'style='width:100px; height: 100px' >"; ?></td>
            <td >College<h2><?php echo $row["CllgName"];?>  </td>
              <td >Ranking<h2><?php echo $row["Rank"]; ?></h2> </td>
              <td >Cutoff<h2><?php echo $row["Cutoff"]; ?></h2></td>
              <td >Established <h2><?php echo $row["Estd_Year"]; ?></h2></td>
              <td >Approval<h2><?php echo $row["Approval"]; ?></h2></td></tr>
           </div>
            <?php
           }
          echo "</table>";
     }echo "<table class= content-table  cellspacing=50> ";
     if (!empty($result17) && $result17->num_rows > 0) {
        while ($row = $result17-> fetch_assoc()) {
            ?>
            <div class="container"><tr>
            <td><?php echo "<img src='image/".$row['filename']."'style='width:100px; height: 100px' >"; ?></td>
            <td >College<h2><?php echo $row["CllgName"];?>  </td>
              <td >Ranking<h2><?php echo $row["Rank"]; ?></h2> </td>
              <td >Cutoff<h2><?php echo $row["Cutoff"]; ?></h2></td>
              <td >Established <h2><?php echo $row["Estd_Year"]; ?></h2></td>
              <td >Approval<h2><?php echo $row["Approval"]; ?></h2></td></tr>
           </div>
            <?php
           }
          echo "</table>";
     }echo "<table class= content-table  cellspacing=50> ";
     if (!empty($result18) && $result18->num_rows > 0) {
        while ($row = $result18-> fetch_assoc()) {
            ?>
            <div class="container"><tr>
            <td><?php echo "<img src='image/".$row['filename']."'style='width:100px; height: 100px' >"; ?></td>
            <td >College<h2><?php echo $row["CllgName"];?>  </td>
              <td >Ranking<h2><?php echo $row["Rank"]; ?></h2> </td>
              <td >Cutoff<h2><?php echo $row["Cutoff"]; ?></h2></td>
              <td >Established <h2><?php echo $row["Estd_Year"]; ?></h2></td>
              <td >Approval<h2><?php echo $row["Approval"]; ?></h2></td></tr>
           </div>
            <?php
           }
          echo "</table>";
     }echo "<table class= content-table  cellspacing=50> ";
     if (!empty($result19) && $result19->num_rows > 0) {
        while ($row = $result19-> fetch_assoc()) {
            ?>
            <div class="container"><tr>
            <td><?php echo "<img src='image/".$row['filename']."'style='width:100px; height: 100px' >"; ?></td>
            <td >College<h2><?php echo $row["CllgName"];?>  </td>
              <td >Ranking<h2><?php echo $row["Rank"]; ?></h2> </td>
              <td >Cutoff<h2><?php echo $row["Cutoff"]; ?></h2></td>
              <td >Established <h2><?php echo $row["Estd_Year"]; ?></h2></td>
              <td >Approval<h2><?php echo $row["Approval"]; ?></h2></td></tr>
           </div>
            <?php
           }
          echo "</table>";
     }echo "<table class= content-table  cellspacing=50> ";
     if (!empty($result20) && $result20->num_rows > 0) {
        while ($row = $result20-> fetch_assoc()) {
            ?>
            <div class="container"><tr>
            <td><?php echo "<img src='image/".$row['filename']."'style='width:100px; height: 100px' >"; ?></td>
            <td >College<h2><?php echo $row["CllgName"];?>  </td>
              <td >Ranking<h2><?php echo $row["Rank"]; ?></h2> </td>
              <td >Cutoff<h2><?php echo $row["Cutoff"]; ?></h2></td>
              <td >Established <h2><?php echo $row["Estd_Year"]; ?></h2></td>
              <td >Approval<h2><?php echo $row["Approval"]; ?></h2></td></tr>
           </div>
            <?php
           }
          echo "</table>";
     }echo "<table class= content-table  cellspacing=50> ";
     if (!empty($result20) && $result20->num_rows > 0) {
        while ($row = $result3-> fetch_assoc()) {
            ?>
            <div class="container"><tr>
            <td><?php echo "<img src='image/".$row['filename']."'style='width:100px; height: 100px' >"; ?></td>
            <td >College<h2><?php echo $row["CllgName"];?>  </td>
              <td >Ranking<h2><?php echo $row["Rank"]; ?></h2> </td>
              <td >Cutoff<h2><?php echo $row["Cutoff"]; ?></h2></td>
              <td >Established <h2><?php echo $row["Estd_Year"]; ?></h2></td>
              <td >Approval<h2><?php echo $row["Approval"]; ?></h2></td></tr>
           </div>
            <?php
           }
          echo "</table>";
     }echo "<table class= content-table  cellspacing=50> ";
     if (!empty($result21) && $result21->num_rows > 0) {
        while ($row = $result21-> fetch_assoc()) {
            ?>
            <div class="container"><tr>
            <td><?php echo "<img src='image/".$row['filename']."'style='width:100px; height: 100px' >"; ?></td>
            <td >College<h2><?php echo $row["CllgName"];?>  </td>
              <td >Ranking<h2><?php echo $row["Rank"]; ?></h2> </td>
              <td >Cutoff<h2><?php echo $row["Cutoff"]; ?></h2></td>
              <td >Established <h2><?php echo $row["Estd_Year"]; ?></h2></td>
              <td >Approval<h2><?php echo $row["Approval"]; ?></h2></td></tr>
           </div>
            <?php
           }
          echo "</table>";
     }echo "<table class= content-table  cellspacing=50> ";
     if (!empty($result22) && $result22->num_rows > 0) {
        while ($row = $result22-> fetch_assoc()) {
     ?>
            <div class="container"><tr>
            <td><?php echo "<img src='image/".$row['filename']."'style='width:100px; height: 100px' >"; ?></td>
            <td >College<h2><?php echo $row["CllgName"];?>  </td>
              <td >Ranking<h2><?php echo $row["Rank"]; ?></h2> </td>
              <td >Cutoff<h2><?php echo $row["Cutoff"]; ?></h2></td>
              <td >Established <h2><?php echo $row["Estd_Year"]; ?></h2></td>
              <td >Approval<h2><?php echo $row["Approval"]; ?></h2></td></tr>
           </div>
            <?php
           }
          echo "</table>";
     }echo "<table class= content-table  cellspacing=50> ";
     if (!empty($result23) && $result23->num_rows > 0) {
        while ($row = $result23-> fetch_assoc()) {
            ?>
            <div class="container"><tr>
            <td><?php echo "<img src='image/".$row['filename']."'style='width:100px; height: 100px' >"; ?></td>
            <td >College<h2><?php echo $row["CllgName"];?>  </td>
              <td >Ranking<h2><?php echo $row["Rank"]; ?></h2> </td>
              <td >Cutoff<h2><?php echo $row["Cutoff"]; ?></h2></td>
              <td >Established <h2><?php echo $row["Estd_Year"]; ?></h2></td>
              <td >Approval<h2><?php echo $row["Approval"]; ?></h2></td></tr>
           </div>
            <?php
           }
          echo "</table>";
     }echo "<table class= content-table  cellspacing=50> ";

     if (!empty($result24) && $result24->num_rows > 0) {
        while ($row = $result24-> fetch_assoc()) {
            ?>
            <div class="container"><tr>
            <td><?php echo "<img src='24mage/".$row['filename']."'style='width:100px; height: 100px' >"; ?></td>
            <td >College<h2><?php echo $row["CllgName"];?>  </td>
              <td >Ranking<h2><?php echo $row["Rank"]; ?></h2> </td>
              <td >Cutoff<h2><?php echo $row["Cutoff"]; ?></h2></td>
              <td >Established <h2><?php echo $row["Estd_Year"]; ?></h2></td>
              <td >Approval<h2><?php echo $row["Approval"]; ?></h2></td></tr>
           </div>
            <?php
           }
          echo "</table>";
     }echo "<table class= content-table  cellspacing=50> ";
     if (!empty($result25) && $result25->num_rows > 0) {
        while ($row = $result25-> fetch_assoc()) {
            ?>
            <div class="container"><tr>
            <td><?php echo "<img src='image/".$row['filename']."'style='width:100px; height: 100px' >"; ?></td>
            <td >College<h2><?php echo $row["CllgName"];?>  </td>
              <td >Ranking<h2><?php echo $row["Rank"]; ?></h2> </td>
              <td >Cutoff<h2><?php echo $row["Cutoff"]; ?></h2></td>
              <td >Established <h2><?php echo $row["Estd_Year"]; ?></h2></td>
              <td >Approval<h2><?php echo $row["Approval"]; ?></h2></td></tr>
           </div>
            <?php
           }
          echo "</table>";
     }
     else {
         echo " 0 result";
         echo mysqli_error($conn);
     }
     $conn-> close();
?>
</table>   
</body>
</html>
