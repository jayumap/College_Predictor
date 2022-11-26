<?php
session_start();
$connect = mysqli_connect("localhost", "root", "","login");
// get the post records

$myusername = $_POST['name'];
$Q1 =$_POST['Q1'];
$Q2 =$_POST['Q2'];
$Q3 =$_POST['Q3'];
$Q4 =$_POST['Q4'];
$Q5 =$_POST['Q5'];
$Q6 =$_POST['Q6'];
$Q7 =$_POST['Q7'];
$Q8 =$_POST['Q8'];
$Q9 =$_POST['Q9'];
$Q10 =$_POST['Q10'];
$Q11 =$_POST['Q11'];
$Q12 =$_POST['Q12'];
$Q13 =$_POST['Q13'];
$Q14 =$_POST['Q14'];


$sql = "SELECT id, username, password FROM users WHERE username = ? ";
$stmt = mysqli_prepare($connect, $sql);
mysqli_query($connect,"UPDATE users SET Q1='$Q1',Q2='$Q2',Q3='$Q3',Q4='$Q4',Q5='$Q5',Q6='$Q6',Q7='$Q7',Q8='$Q8',Q9='$Q9',Q10='$Q10',Q11='$Q11',Q12='$Q12',Q13='$Q13',Q14='$Q14' WHERE  username = '$myusername' ");
	  if(mysqli_affected_rows($connect) > 0){
		echo "Quiz Taken ";
	  header("location: SelectedList.php");
	}
	  else {
		echo "Quiz Already Taken!! <br />";
		echo mysqli_error($connect);
    }
?>



