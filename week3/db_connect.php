<?php

define('DB_SERVER','ap-cdbr-azure-east-c.cloudapp.net');
define('DB_USERNAME','b18094a5a55464');
define('DB_PASSWORD','1dead662');
define('DB_DATABASE','d_database');

$db = mysqli_connect(DB_SERVER,DB_SERVER,DB_PASSWORD,DB_DATABASE);

$db = new mysqli(
    'ap-cdbr-azure-east-c.cloudapp.net',
    'b18094a5a55464',
    '1dead662',
    'd_database'
);

//test if a connection is established
if($db->connect_errno){
    die('Connect failed['.$db->connect_errno.']');
}
?>
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2.11.2016 г.
 * Time: 16:51
 */