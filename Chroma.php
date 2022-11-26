<?php

include 'config.php';

$selectquery = "select * from users";
$query = mysqli_query($cn,$selectquery);
$nums =  mysqli_stmt_num_rows($query);
while($res =mysqli_fetch_array($query)){
    echo $res[''] ."<br>";
}
?>
