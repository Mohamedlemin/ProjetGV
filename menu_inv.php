<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta charset="utf-8">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >

</head>

<style type="text/css">
@import url("https://fonts.googleapis.com/css?family=Open+Sans");

* {
  margin: 0;
  padding: 0;

}

body {
  background: #fff;
    color: white;


}

 nav {
  width: 100%;
  height: 75px;
  background: #444759;
  border-bottom: 1px solid #3d3f50;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 999;
    font-family: arial;
    text-transform: uppercase;

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
  padding: 15px 15px;
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

body {
  background-color: #34495e;
  background-size: cover;
  width: 100%;
  min-height: 550px;
  margin-top: 15px;
 
}











</style>

<nav>
    <ul>
   <li> 
Ajouter   <i class="fa fa-plus-square" aria-hidden="true"></i>
        <ul class="menu">
        <style type="text/css">
  .a:link{
    color: white;
  }
  .a:visited{
color: #d4d4d4;
  }
  .a:hover{
    color: #ff3300;
  }
  a{
    text-decoration: none;
  }
</style>
      
        <li ><a href="Rayonh.php" class="a">Rayon</a></li>
          <li><a href="client_h.php" class="a">Client</a> </li>
        </ul>
      </li>
      <li> Stock   <i class="fa fa-store" aria-hidden="true"></i>
        <ul class="menu">
      
        <li ><a href="list_ra.php" class="a">Rayon</a></li>
          <li><a href="list_Et.php" class="a">Etagere </a></li>
          <li><a href="list_Cl.php" class="a">Client</a> </li>
        </ul>
      </li>
      <li>les achats   <i class="fa fa-money-check-alt" aria-hidden="true"></i>
        <ul class="menu">
      
       <li><a href="achate.php" class="a">Acheter</a></li>
     
         <li><a href="imprimer.php" class="a">Imprimer le ticket</a></li>
          <li><a href="rec.php" class="a">la recette du supermarcher </a></li>
        </ul>
      </li>
      <li>Statistique  <i class="fa fa-chart-pie" aria-hidden="true"></i> 
        <ul class="menu">
        
               <li><a href="nbr.php" class="a" >Nombre des Articles vendus</a></li>
                 <li><a href="vendeur.php" class="a">Home </a></li>
          
         
        </ul>
      </li>

    </ul>
 </nav>

   


  
  

<br><br><br><br><br><br>
</body>
</html>