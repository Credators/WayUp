<?php 

define("LOGIN" , "admin");
define("PSW" , "secret123");

$tmp_login = 'admim';
$tmp_psw = 'secret123';

if ($tmp_login === LOGIN && $tmp_psw !== PSW){ 
        echo "Check correct your password";
    }elseif ($tmp_login !== LOGIN) {
        echo "User not found";
    }elseif ($tmp_login === LOGIN && $tmp_psw === PSW) {
        echo "Auth success";
};

?>
