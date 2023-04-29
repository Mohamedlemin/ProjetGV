<?php
// session_start();
// require("admin.php");
// if (Auth::islogged()){
// }else{
//     header('location:login.php');
// }
?>


<?php
session_start();
include "menu_in.html";
include "cnx.php";
	
//Affichage de données
echo "<h3>"."Liste des Client"."</h3>";
echo "<br><br>";

echo "<table border>";
echo "<tr>";
echo "<th>". "Nom". "</th>" ;
echo "<th>". "Prenom". "</th>" ;
echo "<th>". "DateN". "</th>" ;
echo "<th>". "Num Mobile". "</th>" ;
//echo "<th colspan='1'>". "Actions". "</th>"."</tr>" ;

$sql= "select * from client ";
$resultat = mysqli_query($con,$sql);
if(mysqli_num_rows($resultat)>0){
while($lign=mysqli_fetch_row($resultat)){
	echo "<tr>";
	echo"<td>". $lign[0]."</td>"; 

	echo"<td>". $lign[1]."</td>"; 
	echo "<td>".$lign[2]."</td>";
    echo "<td>".$lign[4]."</td>";
	//echo "<td><a href=clientM.php?id=".$lign[3].">Modifier</a></td>";

	echo "</tr>";
}	
	       
	
	
} else 
{  
echo  "<tr><td>aucun enregistrements</td></tr>";
}
//echo mysqli_num_rows($resultat);
echo "</table>";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="Arlist.css">
</head>


