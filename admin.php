<?php


class Auth{
    static function islogged(){
        if(isset($_SESSION['Auth']) && isset($_SESSION['Auth']['login']) && isset($_SESSION['Auth']['pass']) ){
           extract($_SESSION['Auth']);


            return true;
            }

    else{
        return false;
    }

}
}