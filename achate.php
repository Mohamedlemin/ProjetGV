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
$sql= "SELECT * FROM `projet`.`client`
";
$resultat = mysqli_query($con,$sql);
$option="";
while ($row = mysqli_fetch_array($resultat)) {

  $option = $option."<option>".$row[4]."</option>";
 //liste deroulante dynamique du client
}
?>

<?php
include "cnx.php";
$req= "SELECT * FROM Article ";
$sum = mysqli_query($con,$req);
$sel="";
while ($row = mysqli_fetch_array($sum)) {
 //liste deroulante dynamique des article

  $sel = $sel."<option>".$row[0]."</option>";

}
?>
<!DOCTYPE html>

<html>
<head>

	<title> Acheter </title>
	<meta charset="utf-8">
	<style>
	body{
	
	 margin: 0;
	 padding: 0;
	 
	 background: url(photo/mi2.jpg) no-repeat center;
	  
	  font-family :Tahoma,Geneva, Vendara, sans-serif;
 background-size: cover;
  width: 80%;
  min-height: 700px;
  
	}
	
	.eta{
	width: 340px;
	background-color: #b0c4de;
	height: 520px;
	 position: absolute;
	 top: 50%;
	 left: 50%;
	 transform: translate(-50%,-50%);
	 box-sizing: border-box;
	 padding: 48px;
	 border-radius: 15px;
	 margin-top: 50px;
	 
	 } 
	 .eta h2{
	 margin-bottom: 10px;
	 padding : 0 0 20px;
	 color:olive;
	 text-align: center;
	 font-size:25px;
	color: black;
	  color: black;
font-family: monospace;	
margin-top: 0px; }
	 
	 .eta input[type="date"]{
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
	 outline: none;
	height: 40px;
	 width: 150px;
	 padding: 5px;
	 margin: 5px;
	 color: #fff;
	 font-size: 16px;
	 background: #ff6347;
	 cursor: pointer;
	 border-radius:5px;
	 	 margin-bottom: 10px;

	 }
	 
	 .eta input[type="submit"]:hover{
	 background: #efed40;
	 color: #262626;
	 }
	 
	 .eta input[type="reset"]
	 {
	 border: none;
	 outline: none;
	height: 40px;
	 width: 150px;
	 padding: 2px;
	 margin: 1px;
	 color: #fff;
	 font-size: 16px;
	 background: #ff6347;
	 cursor: pointer;
	 border-radius:5px;
	 margin-bottom: 10px;
	 }
	 
	 .eta input[type="reset"]:hover{
	 background: #efed40;
	 color: white;
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
	  .selc{
	 width: 85%;
	 margin-top: 5px;
	 margin-bottom: 5px;
	 height: 30px;
	 }
	
	</style>
	
</head>

       <div class="eta">
	   <h2> Acheté un Article</h2>
			<form action="achateh.php"  method='POST'>
			
			 <font style="font-size: 18px;color: black;text-transform: none;">	<label>Sléctionné un client:</label></font><br>



			 
			<center>  <select class="sel" name="SC"><option name="SC"> <?php echo $option; ?></option></select><br></center>








			   <font style="font-size: 18px;color: black; text-transform: none;">	<label>Sléctionné un Article :</label><br></font><center>

			  	
			  <select class="selc" name="SA" ><option name="SA"> <?php echo $sel; ?></option></select><br></center>
			  <font style="font-size: 18px;color: black;text-transform: none;">   <label>Date du jour :</label><br></font>
             <center>  <input type="date" name="datj"  required ><br><br></center>
		   <center> <input type="submit" id="submit" name="submit" value="Acheter"> <input type="reset" value="Annuler"><br>
		   <!-- <a href="listEta.php"><input type="button" name="" value="list"></a>-->
		     <a href="menu.html"><input type="button" name="" value="Menu"> 
			
			
			</form>
	   
	   </div>



</html>