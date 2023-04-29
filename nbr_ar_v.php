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
</head>

<body>
<style type="text/css">
	body{
		color: white;
		;
	}
</style>

<?php 
 include "menu_in.html";

include ("cnx.php");


$date=$_POST['datej'];


$nbrve ="SELECT COUNT('codeA') AS total FROM Ticket WHERE '$date'=datej";

$resVe=mysqli_query($con, $nbrve);
$valVe =mysqli_fetch_assoc($resVe);
$num_rowsVe =$valVe['total'];
echo "<center>"."<h1>"."Les nombre des Article vendus le  ".$date."   est:   ". $num_rowsVe."</h1>"."</center>";
?>
</body>
</html>