<?php
include"menu_inl.html";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="box.css">

</head>
<?php
//Connexion avec la base
include "cnx.php";
echo "<center><h3 class='h3'>client</h3></center>";
//Récupéraion ID
$id=$_GET['id'];

//Récupération de données à modifier
echo "<div class='box'><form class='box' method='POST' action='modif.php'>";

$sql= "select * from client where id='$id'";
$resultat = mysqli_query($con,$sql);
if(mysqli_num_rows($resultat)>0){
while($lign=mysqli_fetch_row($resultat)){
	
echo"<label class='la'>Nom :</lable><input type='text' id='Nom' name='Nom' value='$lign[0]'>";
	echo"<label class='la'>.Prenom :<input type='text' id='prenom' name='prenom' value='$lign[1]'>";
	echo"<label class='la'>DateN</lable><input type='date' id='dateN' name='dateN' value='$lign[2]'>";
		echo"<label class='la'>Num Mobile</lable><input type='text' id='numM' name='numM' value='$lign[4]'>";

	echo"<center><input type='hidden' id='id' name='id' value='$lign[3]'></center><br><br>";
	echo "<input type='submit' value='Modifier'>";
}	echo "<br>";
	
} else 
{
echo  "aucun enregistrements";
echo
 "</div>";
}
?>
<style type="text/css">
	<style>
	 body{
	 margin: 0;
	 padding: 0;
	 
	  -webkit-background-size :cover;
	  background-size : cover;
	  font-family :Tahoma,Geneva, Vendara, sans-serif;
		 background:url(photo/imgg.jpg) no-repeat center;
  background-size: cover;
  width: 100%;
  min-height: 580px;
  margin-top: 55px;
 
}

	 }
	 #h3{
		 text-align : center;
		 color :#000000;
	 }
	 
	 
	 .box{
	width: 300px;
	background-color: #add8e6;
	height: 450px;
	 position: absolute;
	 top: 50%;
	 left: 50%;
	 transform: translate(-50%,-50%);
	 box-sizing: border-box;
	 background-color: ;
	 padding: 48px;
	 border-radius: 15px;

	 
	 
	 }
	 
	 .box h2{
	 margin: 0;
	 padding : 0 0 20px;
	 color:white;
	 text-align: center;
	 
	 }
	 .box a{
	 
	 text-decoration:none;
	 }
	 
	 .box{
	 color :black;
	 }
	 
	 .box input[type="submit"]
	 
	 {
	 border: none;
	 margin: 2px;
	 outline: none;
	 height: 40px;
	 width: 200px;
	 padding: 3px;
	 color: #fff;
	 font-size: 16px;
	 background: #ff267e;
	 cursor: pointer;
	 border-radius:20px;
	 }
	 
	 .box input[type="submit"]:hover{
	 background: #efed40;
	 color: #262626;
	 }
	 
	 .box input[type="reset"]
	 {
	 border: none;
	 margin: 2px;
	 outline: none;
	 height: 40px;
	 width: 200px;
	 padding: 3px;
	 color: #fff;
	 font-size: 16px;
	 background: #ff267e;
	 cursor: pointer;
	 border-radius:20px;
	 }
	 
	 .box input[type="reset"]:hover{
	 background: #efed40;
	 color: #262626;
	 }
	 
	 .box input{
	 width: 100%;
	 margin-top: 9px;
	 margin-bottom: 9px;
	 cursor: pointer;
	 border-radius:3px;
	 
	 
	 
	 }
	 .lab {
	 margin-top: 4px;
	 padding-top:3px;
	 font-weiht: bold;
	 
	 }
	 .box input[type="text"],
	 .box input[type="date"],
	 .box input[type="number"],
	 .box input[type="email"]
	 {
	  border: none;
	  border-bottom: 5px solide ;
	  background: transparant;
	  output: none;
	  height: 30px;
	  font-size: 16px;
	 }
	  .box input[type="button"]{
	  	width: 20%;
	  }
	 
</style>