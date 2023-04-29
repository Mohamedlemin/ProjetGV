<?php
//la connexion avec la base de données
$con=mysqli_connect("localhost","root","root","projet");
if(!$con){die("eurreur de type" .mysqli_connect_error()); }
else "OK";
?>