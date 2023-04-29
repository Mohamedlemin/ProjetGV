<?php
session_start();
require("admin.php");
if (Auth::islogged()){
}else{
    header('location:login.php');
}
?>


<!DOCTYPE html>
<?php include "menu_inl.html";?>
<html>
<head>

	<title> nbr </title>
	<meta charset="utf-8">
	<style>
	body{
	
	 margin: 0;
	 padding: 0;
	 
	 background: url(imp.png) no-repeat center;
	  
	  font-family :Tahoma,Geneva, Vendara, sans-serif;
 background-size: cover;
  width: 80%;
  min-height: 800px;
  margin-left: 100px;
  text-transform: uppercase
	}
	
	
	.eta{
	width: 300px;
	background-color: #5F9EA0;
	height: 420px;
	 position: absolute;
	 top: 50%;
	 left: 50%;
	 transform: translate(-50%,-50%);
	 box-sizing: border-box;
	 padding: 48px;
	 border-radius: 10px;
	 
	 } 
	 .eta h2{
	 margin-bottom: 10px;
	 padding : 0 0 20px;
	 color:olive;
	 text-align: center;
	 font-size:25px;
	color: white;
	  
	 }
	 
	 .eta input[type="number"]{
	  border: none;
	   margin-bottom: 20px;
	   margin-top: 10px;
	  padding: 20px;
	  border-bottom: 5px solide ;
	 
	  output: none;
	  font-size: 16px;
	  height: 0;
	  cursor: pointer;
	 border-radius:4px;
	 }
	 .eta input[type="date"]{
	  border: none;
	   margin-bottom: 20px;
	   margin-top: 10px;
	  padding: 20px;
	  border-bottom: 5px solide ;
	 
	  output: none;
	  font-size: 16px;
	  height: 0;
	  cursor: pointer;
	 border-radius:4px;
	 }
	 
	 
	 
	 .eta input[type="submit"]
	 
	 {
	 border: none;
	 outline: none;
	 height: 40px;
	 width: 200px;
	 padding: 15px;
	 margin: 14px;
	 color: #fff;
	 font-size: 16px;
	 background: #f8f8f8;
	 cursor: pointer;
	 border-radius:20px;
	 	 color: black;

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
	 height: 40px;
	 width: 200px;
	 padding: 3px;
	 color: black;
	 font-size: 16px;
	 background: #f8f8f8;
	 cursor: pointer;
	 border-radius:20px;
	 }
	 
	 .eta input[type="reset"]:hover{
	 background: #efed40;
	 color: #262626;
	 }
	 .la {
	  color: white;
	 }
	 
	
	 .la {
	  color: black;
	 }
	
	 }
	 
	
	
	</style>
	
</head>

       <div class="eta">
	   <h2 id="te"> Imprimer le Ticket</h2>
			<form action="Inmprimer.php"  method='POST'>
			<center><label class="la" id="ne">du client Num?  </label><br></center>

			<center><input type="number" name="numM" placeholder=" " required ></center>
			<center><label class="la" id="ne">Dans le jour?  </label><br></center><br>

			<center><input type="date" name="datej" placeholder=" " required ></center>
			
		   <center> <input type="submit" id="submit" name="submit" value="Imprimer"> 
			
			</form>
	   
	   </div>



</html>