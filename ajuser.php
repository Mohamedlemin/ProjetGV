

<?php
// session_start();
// require("admin.php");
// if (Auth::islogged()){
// }else{
//     header('location:login.php');
// }
?>

<?php include "menu_inl.html";?>
<!DOCTYPE html>

<html>
	<head>
	<title> user </title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >

	<meta charset="utf-8">
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
  margin-top: 70px;
 
}

	 }
	 h2{
		 text-align : center;
		 color :#000000;
	 }
	 
	 
	 .form{
	width: 340px;
	background-color: #add8e6;
	height: 500px;
	 position: absolute;
	 top: 50%;
	 left: 50%;
	 transform: translate(-50%,-50%);
	 box-sizing: border-box;
	 background-color: ;
	 padding: 48px;
	 border-radius: 15px;

	 margin-top: 55px;
	 
	 }
	 
	 .form h2{
	 margin: 0;
	 padding : 0 0 20px;
	 color:black;
	 text-align: center;
	 
	 }
	 .form a{
	 
	 text-decoration:none;
	 }
	 
	 .lab{
	 color :black;
	 }
	 
	 .form input[type="submit"]
	 
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
	 
	 .form input[type="submit"]:hover{
	 background: #efed40;
	 color: #262626;
	 }
	 
	 .form input[type="reset"]
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
	 
	 .form input[type="reset"]:hover{
	 background: #efed40;
	 color: #262626;
	 }
	 
	 .form input{
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
	 .form input[type="text"],
	 .form input[type="password"]
	 {
	  border: none;
	  border-bottom: 5px solide ;
	  background: transparant;
	  output: none;
	  height: 30px;
	  font-size: 16px;
	 }
	  .form input[type="button"]{
	  	width: 20%;
	  }
	 #selc {
	 width: 100%;
	 margin-top: 5px;
	 margin-bottom: 5px;
	 height: 30px;	 }

	</style>
	</head>
	
		<body >
		
		 
		 <div class="form">
		 
			<a href="#nm"><h2> Ajouter un utilisateur</h2> </a>
			<form action="adusr.php"  method="POST">
		   <font style="color: black;">	<i class="fa fa-user" aria-hidden="true"></i></font>
			<label class="lab"> Nom :</label>
			

			 <input type="text" name="Nom" id="nm"  required ><br>
			  <font style="color: black;"> 	<i class="fa fa-lock" aria-hidden="true"></i>
</font>
			 <label class="lab"> Mot de passe :</label>
			
			 <input type="password" name="pass" id="pass"   ><br>

			 <label class="lab"> role :</label><br>
<center><select id="selc" name="option">
	<option>Admin</option>
	<option>Vendeur</option>
</select></center>

			

			 
<br><br><br><br>
			 
				<center> <input type="submit" value="Ajout"><br> <input type="reset" value="Annuler"><br>
				  <!--<a href="list_Cl.php"><input type="button" name="" value="list"> -->
				   <a href="menu.html"><input type="button" name="" value="Menu">  </center>

			  </form>

			  </div>

		</body>





</html>