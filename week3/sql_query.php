<?php

include("db_connect.php");
$sql_query = "SELECT * FROM marvelmovies";
$result = $db->query($sql_query);

while($row = $result->fetch_array()){
    echo"<p>.$row[superheroName].</p>";
}
?>
