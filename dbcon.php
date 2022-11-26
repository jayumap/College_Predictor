<?php
$server="localhost";
$user="root";
$password="";
$db="login";

$con=mysqli_connect($server,$user,$password,$db);
if($con)
{
    echo "connection succesfull";
}
else{
    echo "NO connection";

}