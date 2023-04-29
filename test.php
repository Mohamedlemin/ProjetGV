<?php   session_start();

if (isset($_POST) && !empty($_POST['username']) && !empty($_POST['password'])) {
  extract($_POST);
  $pass= md5($_POST['password']);
include "cnx.php";
$sql="SELECT * FROM utilisateurs WHERE login ='$username' AND pass='$pass'";
$myreq="SELECT `role` FROM `utilisateurs`
";
$myres=mysqli_query($con, $myreq);

$req=mysqli_query($con, $sql);

if (mysqli_num_rows($req)>0) {

    $_SESSION['Auth'] = Array(
        'login' => $username,
        'pass' => $pass
    );


    $lign =mysqli_fetch_row($myres) ;
    echo $lign[0];
        if ($lign[0]== 'Admin') {

        //    header('location:menu.php');
   header("refresh:0;url=menu.php");

        } elseif ($login[0]=='Vendeur') {
          # code...
         
   header("refresh:0;url=vendeur.php");
        }
    }

   // header('location:menu.php');

else{
   //include "Erreur.php";
   header("refresh:0;url=vendeur.php");
   //header("refresh:1;url=login.php");

}

}

 ?>