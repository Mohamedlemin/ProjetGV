<?php
// session_start();
// require("admin.php");
// if (Auth::islogged()){
// }else{
//     header('location:login.php');
// }
?>




<?php
include "menu_inl.html";
include "cnx.php";
$sql= "SELECT * FROM Etagere ";
$resultat = mysqli_query($con,$sql);
$option="";
while ($row = mysqli_fetch_array($resultat)) {

  $option = $option."<option>".$row[0]."</option>";

}
?>


<!DOCTYPE html>

  <html>
<head>
<title> article </title>
<style>
		body { font-family : Arial;
          margin: 0;
	 padding: 0;
	 
	  -webkit-background-size :cover;
	  background-size : cover;
	  font-family : sans-serif;
           background: url(st.jpeg) no-repeat center;
            background-size: cover;
  width: 100%;
  min-height: 680px;
  margin-top: 70px;
  
	}
	.ast h3{
     text-align : center;
	 color :black;
	 margin: 0;
	 padding : 0 0 20px;
	 color:white;
	 text-align: center;
	
	}
	

	  input[type=numbre]:hover {
	  background-color: #d4d4d4;

	}
	input[type=date]:hover {
	  background-color: #d4d3d3;
	  }
	  
	  
	input[type="numbre"]{
	border: none;
	 margin: 2px;
	 outline: none;
	 height: 20px;
	 width: 200px;
	 padding: 5px;

	 font-size: 14px;
	
	 cursor: pointer;
	 border-radius:5px;}
	
	input[type=text]:active {
	  color: green;
	}
	input[type=date]:active {
	  background-color: green;
	}
	input[type=number]:active {
	  background-color: green;
	}
	input[type=date] {
	border: none;
	 margin: 2px;
	 outline: none;
	 height: 20px;
	 width: 200px;
	 padding: 5px;

	 font-size: 14px;
	
	 cursor: pointer;
	 border-radius:5px;;
	}
	  input[type="submit"]
	 
	 {
	border: none;
	 margin: 2px;
	 outline: none;
	 height: 30px;
	 width: 50%;
	 padding: 3px;
	 color: #fff;
	 font-size: 16px;
	 background: #ff267e;
border-radius:10px;
	 cursor: pointer;
	 size: 300px;
	
	 }
	 
	  input[type="submit"]:hover{
	 background: #efed40;
	 color: #262626;
	 }
	 
	 input[type="reset"]
	 {
	 border: none;
	 margin: 2px;
	 outline: none;
	 height: 30px;
	 width: 50%;
	 padding: 3px;
	 color: #fff;
	 font-size: 16px;
	 background: #ff267e;

	 cursor: pointer;
	 border-radius:10px;
	 }
	 
	  input[type="reset"]:hover{
	 background: #efed40;
	 color: #262626;
	 }
	
	
	.ast{
	width: 300px;
	padding :15px;
	position: absolute;
	height: 500px;
	border-radius: 15px;
	background-color :#add8e6;
	left: 33%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50% ,-50%)  ;
margin-top: 50px;
	}
   .ast a{
	 
	 text-decoration:none;
	 color: black;}
	  .sel{
	 width: 200px;
	 margin-top: 5px;
	 margin-bottom: 5px;
	 height: 30px;
	 }
	 
	

</style>
</head>
<body>

   <div class="ast">
   
  <a href="#cde"> <h3 class="ar"><font style="color: black;"> Article </font></h3></a>
   <form action="Article.php" method='POST'>
   <font style="font-family: monospace;font-size: 18px;color: black;"> <label > Code :</label><br></font>
 <center>  <input type="numbre" name="code"   required ><br><br></center>
  <font style="font-family: monospace;font-size: 18px;color: black;"> <label > Nom :</label><br></font>
 <center>  <input type="numbre" name="NomA"   required ><br><br></center>
    <font style="font-family: monospace;font-size: 18px;color: black;"> <label> prix :</label><br></font>
 <center>  <input type="numbre" name="prix"   required ><br><br></center>
    <font style="font-family: monospace; font-size: 18px; color: black;">  <label>Date d'expiration :</label><br></font>
  <center> <input type="date" name="datEx"  required ><br><br></center>
  <font style="font-family: monospace;font-size: 18px;color: black;">  <center> <label>Etagére Num :</label><br></font>
			  <select class="sel" name="NumE"><option> <?php echo $option; ?> </option></select><br><br></center>
   <center><input type="submit" value="Ajouter"> <br><input type="reset" value="Annuler"><br> 
  <!--  <a href="list_Ar.php"><input type="button" name="" value="list">-->
     <!-- <a href="menu.html"><input type="button" name="" value="Menu">   -->
			
   </form>

  <div>

  </body>
  </html>