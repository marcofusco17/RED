<?php
$db = new mysqli("localhost","root","","red_social");

$sql = "SELECT * FROM post_marco";

$result = $db->query($sql);


while ($row = $result->fetch_assoc()){
         echo $row['Post'].'<br>';
}

$result->close();
$db->close();

?>