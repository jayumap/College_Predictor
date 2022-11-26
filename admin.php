<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table With Database</title>
    <link rel="stylesheet" href="menustyle.css">
    <style type ="text/css">
.content-table {
  border-collapse: separate;
  border-spacing:0 0px;
  margin: 0px 0;
  font-size: 0.9em;
  width:100%;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: #00BFFF;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 30px 40px;
  font-size: 15px;
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
  font-weight: bolder;

  color: #009879;
} 
/* CSS */
.button-29 {
  align-items: center;
  appearance: none;
  background-image:#00BFFF ;
  border: 0;
  border-radius: 6px;
  box-shadow: rgba(45, 35, 66, .4) 0 2px 4px,rgba(45, 35, 66, .3) 0 7px 13px -3px,rgba(58, 65, 111, .5) 0 -3px 0 inset;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-flex;
  font-family: "JetBrains Mono",monospace;
  height: 48px;
  justify-content: center;
  line-height: 1;
  list-style: none;
  overflow: hidden;
  padding-left: 16px;
  padding-right: 16px;
  position: relative;
  text-align: left;
  text-decoration: none;
  transition: box-shadow .15s,transform .15s;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  white-space: nowrap;
  will-change: box-shadow,transform;
  font-size: 18px;
}
.button-29 a{
  text-decoration:none;
}

.button-29:focus {
  box-shadow: #3c4fe0 0 0 0 1.5px inset, rgba(45, 35, 66, .4) 0 2px 4px, rgba(45, 35, 66, .3) 0 7px 13px -3px, #3c4fe0 0 -3px 0 inset;
}

.button-29:hover {
  box-shadow: rgba(45, 35, 66, .4) 0 4px 8px, rgba(45, 35, 66, .3) 0 7px 13px -3px, #3c4fe0 0 -3px 0 inset;
  transform: translateY(-2px);
}

.button-29:active {
  box-shadow: #3c4fe0 0 3px 7px inset;
  transform: translateY(2px);
}
}
    </style>
</head>
<body>
<nav>
    <div class="logo">
       Graduhub
    </div>
    <input type="checkbox" id="click">
    <label for="click" class="menu-btn">
    <i class="fas fa-bars"></i>
    </label>
    <ul>
       <li><a class="active" href="index1.php">Home</a></li>
       <li><a href="login.php">Login</a></li>
       <li><a href="Registration.php">Add-Colleges</a></li>
       <li><a href="LIST1.php">View-Colleges</a></li>
       <li><a href="#">Feedback</a></li>
    </ul>
 </nav>
    <table class="content-table">
     <tr>
        <thead>
        <th>ID</th>
        <th>UserName</th>
        <th>Password</th>
        <th> &nbsp &nbsp Edit</th>
        <th>  &nbsp &nbsp Delete</th>
        </thead>
     </tr>
     <?php
     $conn = mysqli_connect("localhost","root","","login");
     if ($conn-> connect_error) {
         die("Connection Failed :". $conn-> connect_error);
     }

     $sql = "SELECT id, username, password from users";
     $result = $conn-> query($sql);

     if ($result-> num_rows > 0) {
         while ($row = $result-> fetch_assoc()) {
          ?>
          <td ><?php echo $row["id"]; ?></td>
          <td ><?php echo $row["username"]; ?></td>
          <td ><?php echo $row["password"]; ?></td>
          <td >
          <button class="button-29 "><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></button>
          </td>
          <td>
          <button class="button-29 "><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></button>
          </td>
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
