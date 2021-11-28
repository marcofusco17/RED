<?php

@$usuario = $_POST["nombre"];
@$password = md5($_POST["password"]);
$db = new mysqli("localhost","root", "", "red_social");
$query = "select count(1) from usuario where nombre='{$usuario}' and password='{$password}';";

$result = $db->query($query);
$row = $result->fetch_row();


if ($row[0]>0){
    header("location:http://elmundo.es/%22");
}
else {
    echo "USUARIO NO ENCONTRADO";
}
?>




    