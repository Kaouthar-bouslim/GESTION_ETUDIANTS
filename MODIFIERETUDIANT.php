<?php
$conn=mysqli_connect("localhost","root","") or die (mysqli_connect_error());
mysqli_select_db($conn,"bd_scolarite") or die (mysqli_error($conn));

$code=$_POST['apogee'];
$nom=$_POST['name'];
$email=$_POST['email'];
$nomphoto=$_FILES['photo']['name'];
$file_tmp_name=$_FILES['photo']['tmp_name'];
move_uploaded_file($file_tmp_name,"./photo/$nomphoto");

$req="UPDATE  etudiants SET NOM='$nom',EMAIL='$email',PHOTO='$nomphoto' WHERE APOGEE=$code";
$rs=mysqli_query($conn,$req) or die (mysqli_error($conn));

header("location:afficheretudiants.php");
?>