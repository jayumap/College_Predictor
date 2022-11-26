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
  width:100%;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: #009879;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 30px 40px;
  font-size: 25px;
}

.content-table tbody tr {
  border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
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
 <!-- <center><H1>************************* Your Top Priority Must be !! *************************</H1></center> -->
    <table class="content-table"  cellspacing="50" >
     <?php
     $conn = mysqli_connect("localhost","root","","login");
     if ($conn-> connect_error) {
         die("Connection Failed :". $conn-> connect_error);
     }

     $sql = " SELECT id, CllgName,Rank,Cutoff,Total_Faculty,Estd_Year,Approval,filename from  CollegeDataBase  WHERE Rank BETWEEN 60 AND 150  ";
     $result = $conn-> query($sql);

     if ($result-> num_rows > 0) {
         while ($row = $result-> fetch_assoc()) {
          ?>
          <td><?php echo "<img src='image/".$row['filename']."'style='width:100px; height: 100px' >"; ?></td>
          <td >College<h2><?php echo $row["CllgName"]; ?></h2></td>
          <td >Ranking<h2><?php echo $row["Rank"]; ?></h2></td>
          <td >Cutoff<h2><?php echo $row["Cutoff"]; ?></h2></td>
          <td >Established <h2><?php echo $row["Estd_Year"]; ?></h2></td>
          <td >Approval<h2><?php echo $row["Approval"]; ?></h2></td>
          </tr>
          <?php
         }
        echo "</table>";
     }
     else {
         echo " 0 result";
     }
     $conn-> close();
?>
</table>    
</body>
</html>
