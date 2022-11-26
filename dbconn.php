<?php

$db = mysqli_connect("localhost","root","","login");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>