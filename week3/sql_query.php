<?php

include("db_connect.php");
$sql_query = "SELECT * FROM marvelmovies";
$result = $db->query($sd_query);

while($row = $result->fetch_array()){
    echo"<p>".$row['superheroName'].'</p>';
}
?>
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2.11.2016 г.
 * Time: 17:34
 */