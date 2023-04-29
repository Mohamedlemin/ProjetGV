<?php
// session_start();
// require("admin.php");
// if (Auth::islogged()){
// }else{
//  header('location:login.php');
// }
?>

<?php
include "menu_in.html";
include "cnx.php";
$date=$_POST['datej'];
//recette
$nbrve ="SELECT SUM(prix) AS total FROM Ticket,Article WHERE Ticket.codeA=Article.code AND datej='$date'";

$resVe=mysqli_query($con, $nbrve);
$valVe =mysqli_fetch_assoc($resVe);
$num_rowsVe =$valVe['total'];
echo "<center>"."<h1>"."La recette du supermarché le  ".$date."   est:   ". $num_rowsVe."</h1>"."</center>";

 ?> 