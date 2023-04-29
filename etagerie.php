<?php
// session_start();
// require("admin.php");
// if (Auth::islogged()){
// }else{
//     header('location:login.php');
// }
?>

<?php
//la connexion avec la base de données
include "cnx.php";



$NumE=$_POST['NumE'];
$NomR=$_POST['NomR'];
 

$sql=  "INSERT INTO `Etagere` (`NumE`, `NomR`) VALUES ('$NumE', '$NomR')";
if(mysqli_query($con, $sql)){
    include "Bravo.php";
   header("refresh:1;url=Etagerieh.php");
   }
else{  include "Erreur.php"; 

       header("refresh:1;url=Etagerieh.php");
   }

        ?>


