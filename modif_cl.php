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
</head>
<?php
//Connexion avec la base
include "cnx.php";

//Récupéraion ID
//$id_emp=$_GET['id'];
session_start();
$id=$_SESSION['id'];
//Récupération de données à modifier
echo"<div class='container'><h3>Modifier Employé(e)</h3>";
echo "<form method='post' action='modif.php'>";
$sql= "select * from client where id='$id_emp' ";
$resultat = mysqli_query($con,$sql);
if(mysqli_num_rows($resultat)>0){
while($lign=mysqli_fetch_row($resultat)){
	
	echo"<label>.Nom.</lable><input type='text' id='nom' name='nom' value='$lign[1]'>"; 
	echo"<label>.Prenom.</lable><input type='text' id='pr' name='pr' value='$lign[2]'>"; 
	echo"<label>.datej.</lable><input type='date' id='adr' name='adr' value='$lign[3]'>"; 
	echo"<input type='hidden' id='id' name='id' value='$lign[0]'>"; 
	echo "<input type='submit' value='Modifier'>";
	echo "";
}	
		
} else 
{
echo  "aucun enregistrements";
}
echo "</div>";
?>