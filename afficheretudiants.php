<?php
$conn=mysqli_connect("localhost","root","") or die (mysqli_connect_error());
mysqli_select_db($conn,"bd_scolarite") or die (mysqli_error($conn));


$req="SELECT * from etudiants" ;
$rs=mysqli_query($conn,$req) or die (mysqli_error($conn));
?>

<!DOCTYPE html>
<html lang="en">

<body>

<form action="chercheretudiant.php" method="post">
        Mot Clé: <input type="text" name="motcle">
        <input type="submit" value="Rechercher">
    </form>
    <table border="1">
        <tr>
        <th>APOGEE</th><th>NOM</th><th>PHOTO</th>
        </tr>
        <?php while($et=mysqli_fetch_assoc($rs)) { ?>
            <tr>
                <td> <?php echo $et['APOGEE'] ?> </td>
                <td><?php echo $et['NOM'] ?> </td>
                <td><img src="photo/<?php echo $et['PHOTO'] ?>" width=250px> </td>
                <td><a href="supprimeretudiant.php?APOGEE=<?php echo $et['APOGEE'] ?> "> Supprimer </a></td>
                <td><a href="editeretudiant.php?APOGEE=<?php echo $et['APOGEE'] ?> "> Editer </a></td>
            </tr>
        <?php } ?>
    </table>
    <a href="SAISIRETUDIANT.HTML"> Rajouter un nouveau étudiant</a>
</body>
</html>
