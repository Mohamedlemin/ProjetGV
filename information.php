<?php
// session_start();
// require("admin.php");
// if (Auth::islogged()){
// }else{
//     header('location:login.php');
// }
?>



<?php
?>
<?php include "menu_in.html";
include "cnx.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>
<style type="text/css">
	body {
	padding: 0;
	
	
}
.center{
	position: absolute;
margin-left: 450px;

text-align: center;
font-family: monospace;
}
.center ul{
	margin: 0;
	padding: 0;
	display: flex;
}
.center ul li {
	list-style: none;
	color: #fff;
	font-size: 3em;
	font-weight: bold;
	font-family: cursive;
	letter-spacing: 10px;
	filter: blur(1px);
	text-align: center;
	
}
.center ul:hover li{
	animation: animate 22s linear infinite;
}
@keyframes animate {
	0%{
		transform: rotate(0deg) translateY(0px);
		opacity: 1;
		filter: blur(1px);
	}
	100%{
		transform: rotate(45deg) translateY(-200px);
		opacity: 0;
		filter: blur(20px);
	}

}
.center ul li:nth-child(1)
{
	animation-delay: 0s;
}
.center ul li:nth-child(2)
{
	animation-delay: .4s;
}
.center ul li:nth-child(3)
{
	animation-delay: .8s;
}
.center ul li:nth-child(4)
{
	animation-delay: 1.2s;
}
.center ul li:nth-child(5)

{
	animation-delay: 2s;
}
 .center ul li:nth-child(6)
{
	animation-delay: 2.4s;
}
.center  ul li:nth-child(7)
{
	animation-delay: 2.8s;
}
.center  ul li:nth-child(8)
{
	animation-delay: 3.2s;
}
.center  ul li:nth-child(9)
{
	animation-delay: 3.6s;
}
 .center ul li:nth-child(10)
{
	animation-delay: 4s;
}
.center  ul li:nth-child(11)
{
	animation-delay: 4.4s;
}
 .center ul li:nth-child(12)
{
	animation-delay: 4.8s;
}
.dy{
	margin-top: 150px;
	font-size: 25px;
	font-family: verdana;
	color: white;
}
h4{
	font-family: monospace;
	color: white;
	font-size: 1.2em;
	text-transform: none;

}

</style>

<div class="center">
<br><br>
<ul>
   
	<li>i</li>
	<li>n</li>
	<li>f</li>
	<li>o</li>
	<li>r</li>
	<li>m</li>
	<li>a</li>
	<li>t</li>
	<li>i</li>
	<li>o</li>
	<li>n</li>
	<li>s</li>


</ul>



</div>
<br><br>
<div class="dy">
<ul> <h4> Nom: Emame Market<br> </h4>
<h4>Nombre des Rayons :  <?php


//somme = SELECT SUM(prix) FROM Article


$rayon ="SELECT COUNT('NomR') AS total FROM Rayon";
$resR=mysqli_query($con,$rayon);
$valR =mysqli_fetch_assoc($resR);
$num_rowsR =$valR['total'];
echo $num_rowsR;

?>
 <br></h4>
<h4> Nombre des Etageres :    <?php 

$Etageres ="SELECT COUNT('NumE') AS total FROM Etagere";
$resE=mysqli_query($con,$Etageres);
$val =mysqli_fetch_assoc($resE);
$num_rows =$val['total'];
echo $num_rows; ?>
  <br></h4>
<h4> Nombre des Articles   : <?php 

$Article ="SELECT COUNT('code') AS total FROM Article";
$resA=mysqli_query($con,$Article);
$valA =mysqli_fetch_assoc($resA);
$num_rowsA =$valA['total'];
echo $num_rowsA; ?> <br> </h4>
<h4> Nombre des Clients   :   <?php 

$client ="SELECT COUNT('numM') AS total FROM client";
$resC=mysqli_query($con,$client);
$valC =mysqli_fetch_assoc($resC);
$num_rowsC =$valC['total'];
echo $num_rowsC; ?><br> </h4>

<h4>Nombre des articles vendus :    <?php 

$nbrve ="SELECT COUNT('codeA') AS total FROM Ticket  ";
$resVe=mysqli_query($con, $nbrve);
$valVe =mysqli_fetch_assoc($resVe);
$num_rowsVe =$valVe['total'];
echo $num_rowsVe;

 ?></h4>
</ul>
</div>

</body>
</html>