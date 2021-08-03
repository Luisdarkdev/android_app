<?php
        require_once '../config/config.php';
        require_once '../config/clase_sql.php';
    $clase_par = new Clase_sql();

   
    //$usu = $_POST['usuario'];
    
    //$pass = $_POST['password'];
    $usu = "Luis";
    $pass = "12345";


    $result = $clase_par-> ConsultaUsuarioUnico($usu,$pass);
    if($result->num_rows >0){
        echo "ingresaste corrrectamente";
    }
    else{
        echo"no pudo ingresar";

    }

?>