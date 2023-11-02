<?php
    date_default_timezone_set('Asia/Manila');
    $servername="sql102.epizy.com";
    $username="epiz_31751051";
    $password="6P5RcN5Sa0DNjI";
    $databasename="epiz_31751051_EscobarDB";
    $connection = mysqli_connect($servername, $username, $password, $databasename);
    if(!$connection)
    die("Can't connect to database ". mysqli_connect_error());s
?>
