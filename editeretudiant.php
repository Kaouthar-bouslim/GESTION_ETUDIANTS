<?php

$conn=mysqli_connect("localhost","root","") or die (mysqli_connect_error());
mysqli_select_db($conn,"bd_scolarite") or die (mysqli_error($conn));

$code=$_GET['APOGEE'];
$req="SELECT * from etudiants where APOGEE=$code";

$rs=mysqli_query($conn,$req) or die (mysqli_error($conn));

$et=mysqli_fetch_assoc($rs)

?>

<body>
 

    <form action="MODIFIERETUDIANT.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>CODE APOGEE :</td>
                <td> <input type="text" name="apogee" value="<?php echo $et['APOGEE'] ?>" readonly></td>
            </tr>
            <tr>
                <td>Nom :</td>
                <td><input type="text" name="name" value="<?php echo $et['NOM'] ?>"></td>
            </tr>
            <tr>
                <td>Email :</td>
                <td> <input type="text" name="email" value="<?php echo $et['EMAIL'] ?>" > </td>
            </tr>
                
            <tr>
                <td>Photo :</td>
                <td> <input type="file" name="photo" > </td>
            </tr>
            
            <tr>
                <td></td>
                 <td><input type="submit"  value="Enregistrer" > </td>
                
            </tr>
        </table>
    </form>
</body>
</html>