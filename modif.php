
<?php
session_start();
require("admin.php");
if (Auth::islogged()){
}else{
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="emp.css">
</head>

<?php

//Connexion avec la base
include "cnx.php";


//Récupération de données 
$nom=$_POST['Nom'];
$pr=$_POST['prenom'];
$date=$_POST['dateN'];
$numM=$_POST['numM'];
$id=$_POST['id'];
//Modification de données
$sql= "UPDATE client set Nom='$nom',prenom='$pr',dateN='$date' ,numM='$numM' where id='$id'
";
$resultat = mysqli_query($con,$sql);
if($resultat){
 include "succes.php";
header("refresh:1;url=list_Cl.php");
}		
 else 
{
 include "Erreur.php";
header("refresh:1;url=list_Cl.php");
}

?>