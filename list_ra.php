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
<link rel="stylesheet" type="text/css" href="EtaR.css">
</head>
<?php include "menu_in.html";?>

<?php
include "cnx.php";

echo "<h3>"."Liste des Rayon"."</h3>";
echo "<br><br>";

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

echo "</table>";
            echo "<br><br><Br>";

            
?>
    
              
              
<br><br><br>
