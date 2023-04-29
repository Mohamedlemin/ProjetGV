<?php
// session_start();
// require("admin.php");
// if (Auth::islogged()){
// }else{
//     header('location:login.php');
// }
?>


    <!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="EtaR.css">
</head>

<?php
include "cnx.php";

include "menu_in.html";

//Affichage de données
echo "<h3>"."Liste des Etagére"."</h3>";
echo "<br><br>";

echo "<table border>";
echo "<tr>";
echo "<th>". "Numéro  ". "</th>" ;
echo "<th>". "Nom Rayon". "</th>" ;
//echo "<th>". "DateN". "</th>" ;
//echo "<th>". "Num Mobile". "</th>" ;
//echo "<th colspan='3'>". "Actions". "</th>"."</tr>" ;

$sql= "select * from Etagere ";
$resultat = mysqli_query($con,$sql);
if(mysqli_num_rows($resultat)>0){
while($lign=mysqli_fetch_row($resultat)){
	echo "<tr>";
	echo"<td>". $lign[1]."</td>"; 
		echo"<td>". $lign[2]."</td>"; 


	//echo"<td>". $lign[1]."</td>"; 
	//echo "<td>".$lign[2]."</td>";
  //  echo "<td>".$lign[3]."</td>";
	//echo "<td><a href=supp_emp.php?id=".$lign[0].">Supprimer</a></td>";
	//echo "<td><a href=modif_emp.php?id=".$lign[0].">Modifier</a></td>";
	echo "</tr>";
}	
	
	
	
} else 
{ 
echo  "<tr><td>aucun enregistrements</td></tr>";
}
//echo mysqli_num_rows($resultat);
echo "</table>";
?>