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
$con=mysqli_connect("localhost","root","root","projet");
if(!$con){die("eurreur de type" .mysqli_connect_error()); }
else "OK";

$NomA=$_POST['NomA'];
$code=$_POST['code'];
$prix=$_POST['prix'];
$NumE=$_POST['NumE'];
$datEx=$_POST['datEx']; 

$sql= "INSERT INTO `Article` (`code`, `prix`, `datEx`, `NumE`, `NomA`) VALUES ('$code', '$prix', '$datEx', '$NumE' ,'$NomA')";
if(mysqli_query($con, $sql)){
    include "Bravo.php";
      header("refresh:1;url=Articleh.php");

   }
else {
	 include "Erreur.php"; 
       header("refresh:1;url=Articleh.php");
   }
    
        ?>
