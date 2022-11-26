<?php
session_start();
$con = mysqli_connect("localhost","root","","phptutorials");

if(isset($_POST['update_stud_data']))
{
    $CllgName = $_POST['CllgName'];
    $Rank = $_POST['Rank'];
    $Cutoff = $_POST['Cutoff'];
    $Total_Fee = $_POST['Total_Fee'];
    $Total_Facultye = $_POST['Total_Faculty'];
    $Approval = $_POST['Approval'];
    $Estd_Year= $_POST[' Estd_Year'];

    $query = "UPDATE CollegeDataBase  SET CllgName ='$_POST[CllgName]' ,Rank ='$_POST[Rank]' , Cutoff = '$_POST[Cutoff]' , Total_Fee='$_POST[Total_Fee]' ,Total_Faculty= '$_POST[Total_Faculty]' , Approval='$_POST[Approval]' ,  Estd_Year ='$_POST[Estd_Year]'  where id ='$_POST[id]' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Data Updated Successfully";
        header("Location: Registration.php");
    }
    else
    {
        $_SESSION['status'] = "Not Updated";
        header("Location: Registration.php");
    }
}

?>