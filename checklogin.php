<?php
/**
 * Created by PhpStorm.
 * User: 1405712
 * Date: 24/10/2016
 * Time: 15:40
 */
$username = $_POST["name"];
$password = $_POST["password"];

if($username=="username"&&$password=="password"){
    setcookie('access_level','standardUser');
}

header('Location: loggedIn.php');

?>