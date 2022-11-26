<?php
include 'dbcon.php';
 
if (isset($_POST["submit"])) {
    $CllgName = $_POST["CllgName"];
$Rank = $_POST["Rank"];
$Cutoff = $_POST['Cutoff'];
$Total_Faculty = $_POST["Total_Faculty"];
$Total_Fee = $_POST["Total_Fee"];
$Estd_Year = $_POST["Estd_Year"];
$Approval = $_POST["Approval"];
$file =$_FILES["photo"];

$filename = $file['name'];
$fileerror = $file['error'];
$filetemp = $file['tmp_name'];
}
