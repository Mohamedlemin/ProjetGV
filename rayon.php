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
$con=mysqli_connect("localhost","root","root","projet");
if(!$con){die("eurreur de type" .mysqli_connect_error()); }
else "OK";


$NomR=$_POST['nomr'];
$NomSF=$_POST['NomSF'];

//$datEx=$_POST['datEx']; 

$sql= "INSERT INTO `Rayon` (`NomR`, `NomSF`) VALUES ('$NomR', '$NomSF')";
if(mysqli_query($con, $sql)){
    include "Bravo.php";

      header("refresh:1;url=Rayonh.php");

   }
else {
	 include "Erreur.php";
       header("refresh:1;url=Rayonh.php");
   }
    
        ?>
