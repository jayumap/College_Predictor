<?php
session_start();
$con = mysqli_connect("localhost","root","","login");

if(isset($_POST['save_radio']))
{
    $name  = $_POST['name'];
    $gender  = $_POST['gender'];

    $query = "INSERT INTO demo (name,gender) VALUES ('$name','$gender')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: code.php");
    }
    else{
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: code.php");
    }
}
?>