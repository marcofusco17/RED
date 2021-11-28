<?php
@$usuario = $_POST["Nombre"];
@$password = $_POST["Password"];

#echo $usuario;
#echo $password;

$db = new mysqli("localhost", "root", "", "red_social");

$sql = "SELECT * from usuario;";
$result = $db->query($sql);
$encontrado = false;
while ($row = $result->fetch_assoc()) {
 #echo "la contraseña de <b>: {$row['Nombre']} </b> es: {$row['Password']}<br />";

 if (($usuario == $row['Nombre']) and (md5($password) == $row['Password'])){
    $encontrado = true;
    
}
}

if ($encontrado){
    header ('location:http://localhost:3000/marcas.html');
    
    
}
else {
    header('location:http://localhost:3000/index.html');
}

$result->close();
$db->close();

?>