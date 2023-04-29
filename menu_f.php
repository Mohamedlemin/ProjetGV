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
	<title></title>
	   <link rel="stylesheet" href="css/style.css">
</head>
<body ><div class="aling">
<ul class="menu cf">

    <li><a href="index.html"><b><img src="images_home/deconnx.png" style="height:20px;  width:20px; margin-right:6px;">Déconnexion </b></a></li>
   <li><a href="menu.html"><b><img src="images_home/acceuil.ico" style="height:20px;  width:20px; margin-right:6px;">Home </b></a></li>
    <li>
        <a href="clients.php"><b><img src="images_home/clientn.png" style="height:20px;  width:20px; margin-right:10px;" />Ajouter</b></a>
        <ul class="submenu">
            <li><a href="Rayonh.php"><b>Rayon</b></a></li>
            <li><a href="Articleh.php"><b>Article</b></a></li>
            <li><a href="etagerieh.php"><b>Etagere</b></a></li>
            <li><a href="client.php"><b>Client</b></a></li>
        </ul>         
    </li>
    
    <li>
        <a href="produits.php"><b><img src="images_home/produits.png" style="height:20px;  width:20px; margin-right:2px;" />Produits</b></a>
        <ul class="submenu">
            <li><a href="achate.php"><b>Acheter</b></a></li>
            <li><a href="arAc.html"><b>Les Article Acheté</b></a></li>
            <li><a href=" "><b>Imprimer</b></a></li>
            <!--<li><a href="Fonctions/modifier_produit.php"><b>Modifier</b></a></li>-->
        </ul>         
    </li>

 
  
<li>
        <a href="statistiques.php"><b><img src="images_home/statistiques.gif" style="height:20px;  width:30px; margin-right:6px;" />Statistiques</b></a>
        <ul class="submenu">
            <li><a href="ensemble.php"><b>Stock</b></a></li>
            <li><a href="nbr.html"><b>Nombre des produits vendus </b></a></li>
            <li><a href="information.php"><b>Les information</b></a></li>
            <li><a href=""><b>La Recette</b></a></li>
        </ul>

    </li>
  
</ul><br><br><br><br><br></div>
<div class="header">

</div>
<style type="text/css">
		body {
  background: url("photo/imm.png") no-repeat center;
  background-size: cover;
  width: 100%;
  min-height: 680px;
  margin-top: 55px;
  text-transform: uppercase;
  font-family: verdana;
}


.cf:before,
.cf:after {
    content: " ";
    display: table;
}

.cf:after {
    clear: both;
}

.cf {
    *zoom: 1;
}

.menu,
    .submenu {
        margin: 0;
        padding: 0;
        list-style: none;
    }

/* Main level */
.menu {   /      
   
    width: 100%;
  position: absolute;
  top: 0px;
  left: 193px;
  
   

}

.menu > li {
    background: #34495e;
    float: left;
    position: relative;
  
}

.menu a {
    display: block;
    color: #fff;
    text-transform: uppercase;
    text-decoration: none;
    font-family: Arial, Helvetica;
    font-size: 16.5px;
}


.menu li:hover {
    background:#48D1CC;
}        

.menu > li > a {
    
    padding: 1.25em 1.75em;
}

/* Dropdown level*/
.submenu {
    position: absolute;
    width: 170px;
     font-size: 16.5px;

}

.submenu li {
    background-color: #34495e;
    position: relative;
    overflow: hidden;       
}                        

.submenu > li > a {
    padding: 1em 1em;
}

        

/* Odd stuff */

/* Show dropdown */
.submenu,
.submenu li {
    opacity: 0;
    visibility: hidden;         
}



.menu > li:hover .submenu,
.menu > li:hover .submenu li {
    opacity: 1;
    visibility: visible;
}        












</style>

</body>
</html>