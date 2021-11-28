<?php
    @$login= $_POST["nombre"];
    @$password = $_POST["password"];

    $db = new mysqli ("localhost","root","","red_social");

    #convertir la contraeña en md5 que es un hash
    $password_md5 = md5($password);

    #comprobación de si: el usuario ya existe que no añadamos el registro.
    $existeSql = "select * from usuario where nombre='".$login. "' and password='".$password_md5."';";
    $result = $db->query($existeSql);
   
    if (mysqli_num_rows ( $result )==0) {
        insertar_usuario_password($login,$password_md5,$db);       
    } else {
        #echo "YA EXISTE EL USUARIO";
        header('location: http://localhost:3000/index.html');
    }

    # esta función inserta el usuario y el pass en md5 en la base de datos    
    function insertar_usuario_password ($login, $password_md5, $db) {
        $sql = "insert into usuario values ('".$login."','".$password_md5."');";
        # ejecuta la query
        if (!$db->query($sql)){
            echo "error al insertar (" . $db->errno . ") " . $db->error;
        } else {
            echo "USUARIO REGISTRADO EN LA BASE DE DATOS";
            header('location: http://localhost:3000/post.php');
        }
    }


?>