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



$SC=$_POST['SC'];
$SA=$_POST['SA'];

$datj=$_POST['datj']; 

$sql= "INSERT INTO `Ticket` (`numM`, `datej`, `codeA`) VALUES ('$SC', '$datj', '$SA')";
//insertion de donnes

if(mysqli_query($con, $sql)){
         include "succes.php";

     header("refresh:2;url=achate.php");

   }
else {
	 include "Erreur.php";
       header("refresh:2;url=achate.php");
   }
    
    /*
   $sqlm="SELECT SUM(prix) FROM Article ";
$res=mysqli_query($con,$sqlm);
//somme = SELECT SUM(prix) FROM Article


$rayon ="SELECT SUM(prix)  AS total FROM Article";
$sumR=mysqli_query($con,$rayon);
$valR =mysqli_fetch_assoc($sumR);
$num_rowsR =$valR['total'];
echo $num_rowsR;
*/
        ?>


