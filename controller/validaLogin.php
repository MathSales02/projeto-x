<?php
session_start();


$login = $_POST['user'];
$pass = $_POST['pass'];

 if (isset($login) && empty($login)) {
  echo "ErroUser";
  die();
} 
if (isset($pass) && empty($pass)) {
    echo "ErroPass";
    die();
}

include "../model/loginModel.php";
 
    

?>