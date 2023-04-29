<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="Arlist.css">
</head>
<body>
<h1 id="clock"></h1>
<script src="js.js"></script>
<?php
include "cnx.php";

$numM=$_POST['numM'];
$date=$_POST['datej'];
//Montant

$req="SELECT SUM(prix) AS total FROM Ticket, Article WHERE Ticket.codeA = Article.code AND numM = '$numM'
";

$resVe=mysqli_query($con, $req);
$valVe =mysqli_fetch_assoc($resVe);
$num_rowsVe =$valVe['total'];

//Nom
$reqtn="SELECT `Nom` AS nom FROM `client` WHERE numM ='$numM'";
$rnom=mysqli_query($con, $reqtn);
$nm =mysqli_fetch_assoc($rnom);
$noom =$nm['nom'];

//PRENOM
$reqtp="SELECT `prenom` AS pre FROM `client` WHERE numM ='$numM'";
$resnom=mysqli_query($con, $reqtp);
$pre =mysqli_fetch_assoc($resnom);
$prenom =$pre['pre'];



//Affichage de données
echo "<h3>"."Ticket du Client"."</h3>"."<br>";
echo "<center><h4> Nom :  ".$noom."<br>prenom:    ".$prenom."<br> Num téléphone:   ".$numM." <br> le :  ".$date. " </h4></center>";


echo "<br><br>";

echo "<table border>";
echo "<tr>";
echo "<th>". "les Article Acheté". "</th>" ;
//echo "<th>". "Montant". "</th>" ;


echo "</tr>" ;

//liste des article

$sql= "SELECT * FROM Ticket WHERE numM='$numM' and datej='$date'";
$resultat = mysqli_query($con,$sql);
if(mysqli_num_rows($resultat)>0){
while($lign=mysqli_fetch_row($resultat)){
	echo "<tr>";
	echo"<td>". $lign[2]."</td>"; 
		//echo"<td>". ."</td>"; 

  echo "</tr>";
	

	
}	
	
	
} else 
{
	
echo  "<tr><td>aucun enregistrements</td></tr>";
}
echo "</table>";
echo "<center><h2><br> Montant :".$num_rowsVe."<br></h2></center>";
?>

<br><br><br>
<style type="text/css">
	a{
		text-decoration: none;
		text-align: center;
		font-size: 1.25em;
		text-transform: none;
		font-family: cursive;
		color: black;
		text-transform: none;

	}
	a:hover{
		color: red;

	}
	body{
		text-transform: uppercase;
		background-color: #d4d4d4;
	}
</style>

<center><a href="" class="imprimer" onclick="window.print();">Imprimer</a><br><br>

<a href="imprimer.php">retourn</a>

</center></body></html>