

<!DOCTYPE html>
<html>
<head>
	<title>formilaire</title>
	<meta charset="utf-8">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
</head>
<body>
 
<style type="text/css">
	body{
	margin: 0;
	padding: 0;
	
	background-size: 700px;
	background-repeat: no-repeat;
	background-color: #f5f5f5;

}
.login-box{
	width: 280px;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50% ,-50%);
	color: black;
}
.login-box h1 {
	float: left;
	
	border-bottom: 6px solid #4caf50;
	margin-bottom: 40px;
	padding: 10px 0;
}
.textbox{
	width: 100%;
	overflow: hidden;
	font-size: 20px;
	padding: 8px 0;
	border-bottom: 1px solid #4caf50;
}
.textbox i{
	width: 26px;
	float: left;
	text-align: center;
}
.textbox input {
	border: none;
	outline: none;
	background: none;
	color: black;
	font-size: 19px;
	width: 50%;
	float: left;
	margin: 0 10px;
}
.btn{
	width: 100%;
	background: none;
	border: 2px solid #4caf50;
	color: black;
	padding: 5px;
	font-size: 18px;
	cursor: pointer;
	margin: 12px 0

}
</style>


<form action='test.php' method='POST'><center><div class="login-box">
	<h1>Login</h1>
	<div class="textbox">
	<i class="fa fa-user" aria-hidden="true"></i>
	<input type="text" name="username" placeholder="Username" required="">
		
	</div>
	<div class="textbox">
	<i class="fa fa-lock" aria-hidden="true"></i>
	<input type="password" name="password" placeholder="password" required="">
	</div>

	<input type="submit" name="submit" class="btn" >


</div>
</center></form>
</body>
</html>