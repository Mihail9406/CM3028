<?php

include("db_connect.php");
$sql_query = "SELECT * FROM superheroes WHERE superpower LIKE '%laser%'";
$result = $db->query($sd_query);

while($row = $result->fetch_array()){
    echno"<p>".$row['superheroName'].'</p>';
}
?>
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2.11.2016 г.
 * Time: 17:34
 */