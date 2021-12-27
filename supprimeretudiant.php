<?php

$conn=mysqli_connect("localhost","root","") or die (mysqli_connect_error());
mysqli_select_db($conn,"bd_scolarite") or die (mysqli_error($conn));

$code=$_GET['APOGEE'];
$req="DELETE from etudiants where APOGEE=$code";

$rs=mysqli_query($conn,$req) or die (mysqli_error($conn));
header("location:afficheretudiants.php");
?>