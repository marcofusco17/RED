<?php
#obtener datos formulario
$post = $_POST["comentario"];

#conectarse a la base de datos
$db = new mysqli("localhost","root","","red_social");

$sql = "INSERT INTO `post_marco` (`id`,`post`) VALUES ('','$post')";
echo $sql;
$db->query($sql);


if (@$sql == true){
    header("Location: http://localhost:3000/perfil.html");
    }
        else
        {
            
        }
$db->close();
    
?>