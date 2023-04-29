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
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >

</head>
<body bgcolor="d4d4d4">
<style type="text/css">
@import url("https://fonts.googleapis.com/css?family=Open+Sans");

* {
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  text-transform: uppercase;

}



.container nav {
  width: 100%;
  height: 75px;
  background: #444759;
  border-bottom: 1px solid #3d3f50;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 999;
}

nav ul {
  width: 65%;
  height: 100%;
  margin: 0 auto;
  list-style: none;
  transition: all 0.5s ease;
}

nav ul li {
  width: 20%;
  float: left;
  text-align: center;
  margin-top: 10px;
  padding: 15px 15px 10px;
  cursor: pointer;
  color: #ffffff;
  font-size: 19px;
  font-weight: bold;
  transition: all 0.5s ease;

  position: relative;
}

nav ul li:hover {
  color: #f5deb3;
  box-shadow: inset 0 5px #ea3b50;
}

/* sub-menu */

nav ul li ul.menu {
  position: absolute;
  top: 65px;
  left: 0;
  width: 100%;
  height: 250px;
  background: #444759;
  border-top: 1px solid #3d3f50;
  box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.14), -1px 0px 1px rgba(0, 0, 0, 0.14);
  visibility: hidden;
  opacity: 0;
}



nav ul li ul.menu li {
  color: #eee;
  font-size: 14px;
  width: 100%;
  padding: 15px 0;
}



nav ul li ul.menu li:hover {
  color: #ea3b50;
  box-shadow: 0 0;
}


nav ul li:hover ul.menu {
  visibility: visible;
  opacity: 1;
}

.header {
  background: url("photo/img6.jpg") no-repeat center;
  background-size: cover;
  width: 100%;
  min-height: 680px;
  margin-top: 55px;
  text-transform: uppercase;
}
.conti{
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  width: 100%;
}
.conti span{

text-transform: uppercase;
display: block;
}

.text1{
  color: white;
  font-size: 60px;
  font-weight: 700;
  letter-spacing: 8px;
  margin-bottom: 20px;
  background: black;
  position: relative;
  animation: text 3s 1 ;

}
.text2{
  font-size: 30px;
  color: black;
    font-family: monospace;

 }
@keyframes text{
  0%{
    color: black;
    margin-bottom: -40px;
  }
  30%{
    letter-spacing: 25px;
    margin-bottom: -40px;

  }
  85%{
    letter-spacing: 8px;
    margin-bottom: -40px;
  }
}













</style>

<div class="container">
<nav>
    <ul>
   <li> 
Ajouter   <i class="fa fa-plus-square" aria-hidden="true"></i>
        <ul class="menu">
        <style type="text/css">
  a:link{
    color: white;
  }
  a:visited{
color: #d4d4d4;
  }
  a:hover{
    color: #ff3300;
  }
  a{
    text-decoration: none;
  }
           
</style>
      
          <li><a href="client_h.php">Client</a> </li>
        </ul>
      </li>
      <li> Stock   <i class="fa fa-store" aria-hidden="true"></i>
        <ul class="menu">
      
        <li ><a href="list_ra.php" >Rayon</a></li>
          <li><a href="list_Et.php" >Etagere </a></li>
          <li><a href="list_Ar.php" >Article</a></li>
          <li><a href="list_Cl.php">Client</a> </li>
        </ul>
      </li>
      <li>les achats   <i class="fa fa-money-check-alt" aria-hidden="true"></i>
        <ul class="menu">
      
       <li><a href="achate.php">Acheter</a></li>
     
         <li><a href="imprimer.php">Imprimer le ticket</a></li>
          <li><a href="arAc.php">Les Article Acheté</a> </li>
        </ul>
      </li>
      <li>Statistique  <i class="fa fa-chart-pie" aria-hidden="true"></i> 
        <ul class="menu">
        
               <li><a href="nbr.php" >Nombre des Articles vendus</a></li>

                 <li><a href="logout.php">Déconnexion </a></li>
          
         
        </ul>
      </li>

    </ul>
 </nav>
  <h1 id="clock"></h1>
    <p id="color"></p>
  <div class="header"></div>
  <div class="conti">
    <span class="text1">Welcome in</span>
      <span class="text2"> Projet G-Vente</span>

  </div>
</div>

</body>
</html>

