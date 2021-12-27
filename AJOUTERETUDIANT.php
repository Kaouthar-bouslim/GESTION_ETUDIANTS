<?php
$conn=mysqli_connect("localhost","root","") or die (mysqli_connect_error());
mysqli_select_db($conn,"bd_scolarite") or die (mysqli_error($conn));

$nom=$_POST['name'];
$email=$_POST['email'];
$nomphoto=$_FILES['photo']['name'];
$file_tmp_name=$_FILES['photo']['tmp_name'];
move_uploaded_file($file_tmp_name,"./photo/$nomphoto");

$req="INSERT into etudiants(NOM,EMAIL,PHOTO) values ('$nom','$email','$nomphoto')";
$rs=mysqli_query($conn,$req) or die (mysqli_error($conn));
?>
<!DOCTYPE html>
<html lang="en">

<body>
    <table border="1">
    <tr>
                <td>Nom :</td>
                <td><?php echo $nom ?></td>
            </tr>
            <tr>
                <td>Email :</td>
                <td> <?php echo $email ?> </td>
            </tr>
                
            <tr>
                <td>Photo :</td>
                <td> <img src="photo/<?php echo $nomphoto; ?> " width="250px"> </td>
            </tr>
            
    
    </table>
    <a href="afficheretudiants.php">Afficher la liste de tous les étudiants</a>
    <br>
    <a href="SAISIRETUDIANT.HTML"> Rajouter un nouveau étudiant</a>
</body>
</html>
