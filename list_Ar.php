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
<link rel="stylesheet" type="text/css" href="Arlist.css">
</head>

<?php
include "cnx.php";

include "menu_in.html";

//Affichage de données
echo "<h3>"."Liste des Article"."</h3>";
echo "<br><br>";

echo "<table border>";
echo "<tr>";
echo "<th>". "code". "</th>" ;
echo "<th>". "NomA". "</th>" ;

echo "<th>". "prix". "</th>" ;
echo "<th>". "datEx". "</th>" ;
echo "<th>". "Num Etagére". "</th>" ;

echo "</tr>" ;

$sql= "select * from Article ";
$resultat = mysqli_query($con,$sql);
if(mysqli_num_rows($resultat)>0){
while($lign=mysqli_fetch_row($resultat)){
	echo "<tr>";
	echo"<td>". $lign[1]."</td>"; 
	    echo"<td>". $lign[5]."</td>"; 

    echo"<td>". $lign[2]."</td>"; 
	echo "<td>".$lign[3]."</td>";
		echo "<td>".$lign[4]."</td>";


	echo "</tr>";
}	
	
	
	
} else 
{
	
echo  "<tr><td>aucun enregistrements</td></tr>";
}
//echo mysqli_num_rows($resultat);
echo "</table>";
?>