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



$nom=$_POST['Nom'];
$option=$_POST['option'];

$pass=md5($_POST['password']); 


$sql= "INSERT INTO `utilisateurs` (`login`, `pass`, `role`) VALUES ('$nom', '$pass', '$option')";
if(mysqli_query($con, $sql)){
    include "Bravo.php";
	  header("refresh:1;url=ajuser.php");

   }
else {
	 include "Erreur.php";
	  header("refresh:1;url=ajuser.php");
}  

    
        ?>