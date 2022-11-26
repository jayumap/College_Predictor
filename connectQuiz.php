<?php
session_start();
$connect = mysqli_connect("localhost", "root", "","login");
// get the post records

$myusername= $_POST['name'];
$username = $_POST['username'];
?>
<?php
$sql = "SELECT * from  users where  username = $myusername ";
if($myusername =='Aayush'){
    header("location: QuizColleges1.php");
}
if($myusername == '12345'){
    header("location: QuizColleges2.php"); 
}
if($myusername == 'Jura123'){
    header("location: QuizColleges3.php"); 
}
if($myusername == 'Kabir1234567890'){
    header("location: QuizColleges4.php"); 
}
if ($myusername == 'Kabir123456789'){
    header("location: QuizColleges5.php"); 
}
if ($myusername == 'Chroma1'){
    header("location: QuizColleges6.php"); 
}
if ($myusername == 'Chandani1'){
    header("location: QuizColleges8.php"); 
}
if($myusername == 'Joshua1'){
    header("location: QuizColleges9.php");
}

?>
