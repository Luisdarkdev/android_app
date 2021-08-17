<?php
        require_once '../config/config.php';
        require_once '../config/clase_sql.php';
    $clase_par = new Clase_sql();


  
    $usu = $_POST['usuario'];
    $pss = $_POST['password'];
    $cor = $_POST['correo'];
/*
$usu = "Javier";
$pass = "123456789";
$cor ="Javiersacancela@gmail.com";*/
$result = $clase_par-> InsertarUsuario($usu,$pass,$cor);

if ($result==true){
    echo "se guardo";

}else{
    echo "nose pudo  mi so";
}

?>