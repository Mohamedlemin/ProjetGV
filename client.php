<?php
session_start();
require("admin.php");
if (Auth::islogged()){
}else{
    header('location:login.php');
}
?>

<?php
//la connexion avec la base de données
include "cnx.php";



$nom=$_POST['Nom'];
$prenom=$_POST['prenom'];

$date=$_POST['dateN'];
$Num=$_POST['numM']; 

$sql= "INSERT INTO `client` (`Nom`, `prenom`, `dateN`, `numM`) VALUES ('$nom', '$prenom', '$date', '$Num')";
if(mysqli_query($con, $sql)){
    include "Bravo.php";
	  header("refresh:1;url=client_h.php");

   }
else {
	 include "Erreur.php";
	  header("refresh:1;url=client_h.php");
}  

    
        ?>

         
