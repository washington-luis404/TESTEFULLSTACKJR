<?php

include('config.php');
session_start();


$consulta = mysqli_query($connect, 'SELECT * FROM enquete');

$id_enq = $_GET['id'];
$titulo_enq = $_GET['titulo'];
$Data_inic = $_GET['dateinic'];
$Data_fim = $_GET['datefim'];
$op_1 = $_GET['op1'];
$op_2 = $_GET['op2'];
$op_3 = $_GET['op3'];
$Status_enq = $_GET['StatusEnq'];

$sql = "update enquete set titulo = '$titulo_enq', Datainic = '$Data_inic',Datafim='$Data_fim',StatusEnquete='$Status_enq',name1='$op_1',name2='$op_2',name3='$op_3' where id = '$id_enq'";
$resultado  = mysqli_query($connect, $sql);

header("Refresh: 0; url = ../home.php");
