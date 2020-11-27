<?php
include('config.php');


//Script Php para Botao 1
if (isset($_POST['submitv1'])) {
  $name1 = $_POST['submitv1'];
  $consulta = mysqli_query($connect, "SELECT qtd1vote FROM enquete WHERE name1 = '$name1'");

  $sqlv1 = "update enquete set qtd1vote = qtd1vote+1 where name1 = '$name1'";
  $resultado  = mysqli_query($connect, $sqlv1);


  header("Refresh: 0; url = ../home.php");
}
//Script Php para Botao 2
if (isset($_POST['submitv2'])) {
  $name2 = $_POST['submitv2'];
  $consulta2 = mysqli_query($connect, "SELECT qtd1vote FROM enquete WHERE name2 = '$name2'");

  $sqlv2 = "update enquete set qtd2vote = qtd2vote+1 where name2 = '$name2'";
  $resultado  = mysqli_query($connect, $sqlv2);


  header("Refresh: 0; url = ../home.php");
}
//Script Php para Botao 3
if (isset($_POST['submitv3'])) {
  $name3 = $_POST['submitv3'];
  $consulta3 = mysqli_query($connect, "SELECT qtd3vote FROM enquete WHERE name3 = '$name3'");

  $sqlv3 = "update enquete set qtd3vote = qtd3vote+1 where name3 = '$name3'";
  $resultado  = mysqli_query($connect, $sqlv3);


  header("Refresh: 0; url = ../home.php");
}
