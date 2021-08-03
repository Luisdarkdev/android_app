<?php
        require_once '../config/config.php';
        require_once '../config/clase_sql.php';
    $clase_par = new Clase_sql();

   
    /*$usu = $_POST['usuario'];
    $pss = $_POST['password'];
    $cor = $_POST['correo'];*/
    $usu = "Carlos";
    $pass = "123456";
    $cor = "Carlos@outlook.es";



    $result = $clase_par-> InsertarUsuario($usu,$pass,$cor);

?>