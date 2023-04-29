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
<link rel="stylesheet" type="text/css" href="Arliste.css">
</head>
<?php include "menu_in.html";?>
<?php
include "cnx.php";
echo "<h3>"."Liste des Rayon :"."</h3>";
echo "<br>"."<br>";
echo "<table border>";
echo "<tr>";
echo "<th>". "Nom:  ". "</th>" ;
$sql= "select * from Rayon ";
$resultat = mysqli_query($con,$sql);
if(mysqli_num_rows($resultat)>0){
while($lign=mysqli_fetch_row($resultat)){
	echo "<tr>";
	echo"<td>". $lign[0]."</td>"; 
	echo "</tr>"; 


}
				
} else 

{
echo  "<tr><td>aucun enregistrements</td></tr>";
}
//echo mysqli_num_rows($resultat);
echo "</table>";
	echo "<br>";
?>

<br><br><br>







<?php
include "cnx.php";

echo "<h3>"."Liste des Article :"."</h3>";
echo "<br>"."<br>";

echo "<table border>";
echo "<tr>";
echo "<th>". "code". "</th>" ;
echo "<th>". "prix". "</th>" ;
echo "<th>". "datEx". "</th>" ;
echo "</tr>" ;

$sql= "select * from Article ";
$resultat = mysqli_query($con,$sql);
if(mysqli_num_rows($resultat)>0){
while($lign=mysqli_fetch_row($resultat)){
	echo "<tr>";
	echo"<td>". $lign[0]."</td>"; 
    echo"<td>". $lign[1]."</td>"; 
	echo "<td>".$lign[2]."</td>";

	echo "</tr>";
	

}	
	

} else 
{
echo  "<tr><td>aucun enregistrements</td></tr>";
}

echo "</table>";
	echo "<br>";
?>




<?php
include "cnx.php";


echo "<h3>"."Liste des Etagére :"."</h3>";
echo "<br>"."<br>";

echo "<table border>";
echo "<tr>";
echo "<th>". "Numéro  ". "</th>" ;


$sql= "select * from Etagere ";
$resultat = mysqli_query($con,$sql);
if(mysqli_num_rows($resultat)>0){
while($lign=mysqli_fetch_row($resultat)){
	echo "<tr>";
	echo"<td>". $lign[0]."</td>"; 

	
	echo "</tr>";


}	
	
	
	
} else 
{
echo  "<tr><td>aucun enregistrements</td></tr>";
}

echo "</table>";
	echo "<br>";
?>
<br><br><br>
