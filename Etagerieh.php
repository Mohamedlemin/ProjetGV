<?php
session_start();
require("admin.php");
if (Auth::islogged()){
}else{
    header('location:login.php');
}
?>


<?php
include "menu_inl.html";

include "cnx.php";
$sql= "SELECT * FROM Rayon ";
$resultat = mysqli_query($con,$sql);
$option="";
while ($row = mysqli_fetch_array($resultat)) {

  $option = $option."<option>".$row[0]."</option>";

}
?>
<!DOCTYPE html>

<html>
<head>

	<title> Etagerie </title>
	<meta charset="utf-8">
	<style>
	body{
	
	 margin: 0;
	 padding: 0;
	 
	 background: url(photo/mi7.jpg) no-repeat center;
	  
	  font-family :Tahoma,Geneva, Vendara, sans-serif;
 background-size: cover;
  width: 100%;
  min-height: 500px;
  
  text-transform: uppercase
	}
	
	.eta{
	width: 340px;
	background-color: #dcdcdc;
	height: 420px;
	 position: absolute;
	 top: 50%;
	 left: 50%;
	 transform: translate(-50%,-50%);
	 box-sizing: border-box;
	 padding: 48px;
	 border-radius: 15px;
	 
	 } 
	 .eta h2{
	 margin-bottom: 10px;
	 padding : 0 0 20px;
	 color:olive;
	 text-align: center;
	 font-size:25px;
	color: black;
	  color: black;
	 }
	 
	 .eta input[type="number"]{
	  border: none;
	   margin-bottom: 20px;
	   margin-top: 10px;
	  padding: 20px;
	  border-bottom: 5px solide ;
	  background: transparant;
	  output: none;
	  font-size: 16px;
	  height: 0;
	  cursor: pointer;
	 border-radius:7px;
	 }
	 
	 
	 .eta input[type="submit"]
	 
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
	 border-radius:20px;
	 }
	 
	 .eta input[type="submit"]:hover{
	 background: #efed40;
	 color: #262626;
	 }
	 
	 .eta input[type="reset"]
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
	 border-radius:20px;
	 }
	 
	 .eta input[type="reset"]:hover{
	 background: #efed40;
	 color: #262626;
	 }
	 .la {
	  color: black;
	 }
	 
	  .sel{
	 width: 85%;
	 margin-top: 5px;
	 margin-bottom: 5px;
	 height: 30px;
	 }
	
	</style>
	
</head>

       <div class="eta">
	   <h2> Etagére </h2>
			<form action="etagerie.php"  method='POST'>
			<center><label class="la" id="ne"> Numéro Etagére:  </label><br></center>
			<center><input type="number" name="NumE" placeholder=" " required ><br>
			 <font style="font-family: monospace;font-size: 18px;color: black;">	<label>Nom du Rayon :</label><br></font>
			  <select class="sel" name="NomR"><option> <?php echo $option; ?></option></select><br></center><br><br>
		   <center> <input type="submit" id="submit" name="submit" value="Ajouter"> <br><input type="reset" value="Annuler"><br>
		  <!--  <a href="listEta.php"><input type="button" name="" value="list"></a>-->
		     <a href="menu.html"><input type="button" name="" value="Menu"> </a></center>
			
			
			</form>
	   
	   </div>



</html>