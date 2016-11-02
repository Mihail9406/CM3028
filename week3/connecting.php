<?php
//connecting to the web server and selecting the database
$db = new mysqli(
    'hostname',
    'username',
    'password',
    'db_name'
);

//test if a connection is established
if($db->connect_errno){
    die('Connect failed['.$db->connect_errno.']');
}
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2.11.2016 г.
 * Time: 17:09
 */