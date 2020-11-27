<?php

include("config.php");

$id = $_GET['id'];

$sql     = "delete from enquete where id ='$id'";

$qry2     = mysqli_query($connect, $sql);

if (mysqli_query($connect, $sql)) {
    header("refresh:0;url=../home.php");
}
?>