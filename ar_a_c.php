<?php/*
session_start();
require("admin.php");
if (Auth::islogged()){
}else{
    header('location:login.php');
}*/
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
//Affichage de donnes
echo "<h3>"."Liste des Article Acheté"."</h3>";
echo "<br>";
echo "<table border>";
echo "<tr>";
echo "<th>". "NumM". "</th>" ;
echo "<th>". "Datej". "</th>" ;
echo "<th>". "CodeA". "</th>" ;
echo "</tr>" ;
$numM=$_POST['numM'];
$sql ="SELECT * FROM Ticket WHERE '$numM'=numM";
$resultat = mysqli_query($con,$sql);
if(mysqli_num_rows($resultat)>0){
while($lign=mysqli_fetch_row($resultat)){
	echo "<tr>";
	echo"<td>". $lign[1]."</td>"; 
    echo"<td>". $lign[3]."</td>"; 
	echo "<td>".$lign[2]."</td>";

	echo "</tr>";
}	
	

} else 
{
echo  "<tr><td>aucun enregistrements</td></tr>";
}

echo "</table>";
?>