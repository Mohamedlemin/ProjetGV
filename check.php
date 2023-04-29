 <?php /*
session_start();


$admins = array ("MedLemin","SidiMed","Emame","meimoune","Khadija");
$adminspass = array ("1234","0000","4321","5678","1000");
if ($_SERVER['REQUEST_METHOD'] =='POST') {

$user = $_POST['username'];
$pass = $_POST['password'];

if (in_array($user, $admins)&& in_array($pass, $adminspass)) {
   $_SESSION['user'] = $user;
      $_SESSION['pass'] = $pass;

  //header("location:menu.php");
 include 'menu.html';
}
else{
 include "Erreur.php";
	 header("refresh:1;url=concter.html");
}



}
else {
	echo "Erreur vous pouvez pas ac cette page directement";
	 header("refresh:1;url=concter.html");
}



 ?>*/