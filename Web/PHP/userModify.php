<?php
include_once './Classes/Class_Usuaris.php';

//include_once './global.php';

$usermail = $_POST['usermail'];
$password = $_POST['password'];
#$ID = $_POST['userid'];
$ID = 17; #hardcoded


$usuari = new Usuari($ID);

if(!empty($usermail)){
    $object = $usuari->change_mail($usermail);
    }

if(!empty($password)){
    $object = $usuari->change_password($password);
    }

?>