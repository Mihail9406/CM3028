<?php
/**
 * Created by PhpStorm.
 * User: 1405712
 * Date: 24/10/2016
 * Time: 14:53
 */
session_start();
$accesslevel = $_COOKIE['access_level'];

displayAccessLevelInformation($accesslevel);

function displayaccessLevelInformation($accessLevel){
    if($accessLevel=="standardUser"){
        echo '<p style = \"background-color: lightgreen\">You are currently logged in as a standard user</p>';
    }
    elseif ($accessLevel=="root"){
        echo "<p<p style = \"background-color: red\">You are currently logged in as a root user</p>";
        echo "<p<p style = \"background-color: red\">You now have access to additional administrative features</p>";
    }
}
?>