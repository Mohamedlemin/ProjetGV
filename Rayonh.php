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
$sql= "SELECT * FROM Supermarch ";
$resultat = mysqli_query($con,$sql);
$option="";
while ($row = mysqli_fetch_array($resultat)) {

  $option = $option."<option>".$row[0]."</option>";

}
?>
<!DOCTYPE html>

<html>


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >

	<title> Rayon </title>
	<meta charset="utf-8">
	<style>
	body{
	
	
	 margin: 0;
	 padding: 0;
	 
	 background: url(photo/mi2.jpg) no-repeat center;
	  
	  font-family :Tahoma,Geneva, Vendara, sans-serif;
 background-size: cover;
  width: 100%;
  min-height: 680px;
  
  text-transform: uppercase
	}
	
	.ra{
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
	 .ra h2{
	 margin-bottom: 10px;
	 padding : 0 0 20px;
	 color:olive;
	 text-align: center;
	 font-size:25px;
	color: black;
	  color: black;
	  	 }
	 
	 .ra input[type="text"]{
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
	 border-radius:7px
	 }
	 
	 
	 .ra input[type="submit"]
	 
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
	 
	 .ra input[type="submit"]:hover{
	 background: #efed40;
	 color: #262626;	 }
	 
	 .ra input[type="reset"]
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
	 
	 .ra input[type="reset"]:hover{
	 background: #efed40;
	 color: #262626;	 }
	 .ray {
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

       <div class="ra">
	   <h2> Rayon </h2>
			<form method='POST' action="rayon.php">
			<center><label class="ray"> <i class="fa fa-bars" aria-hidden="true"></i>   Nom Rayon : </label><br>
			<input type="text" name="nomr" id="nomr" placeholder="*" required ><br>
		 <font style="font-size: 18px;color: black;">	<label><i class="fa fa-store" aria-hidden="true"></i>      Nom du superMarché :</label><br></font>
			  <select class="sel" name="NomSF"><option> <?php echo $option; ?></option></select><br><br><br>
		    <input type="submit" name="submit"  value="Ajouter"><br><input type="reset" value="Annuler"><br>
		   <!-- <a href="list_ra.php"><input type="button" name="" value="list"> -->
		    <a href="menu.html"><input type="button" name="" value="Menu"> 
		      
		 
		  

			</center>
			
			</form>
	   
	   </div> 

</html>
