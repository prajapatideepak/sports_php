<?php

$server ="localhost";
$username = "root";
$password = "";
$db = "sports";

$conn = mysqli_connect($server,$username,$password,$db);

if(!$conn)
{
    echo "Connection fail...";
}

?>