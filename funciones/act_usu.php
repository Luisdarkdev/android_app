<?php
    require_once '../config/config.php';
    require_once '../config/clase_sql.php';
$clase_par = new Clase_sql();
   
if(isset($_GET['COD_USE'])){
    $cod = $_GET['COD_USE'];
    $result = $clase_par-> ConsultaEditUsuario($cod);
    $row =mysqli_fetch_array($result);
    $usu = $row['NOM_USE'];
    $pass = $row['PASS_USE'];
    $cor = $row['COR_USE'];
    
}
if(isset($_POST['actualizar'])){
    $cod = $_GET['codigo'];
    $usu=$_POST['usuario'];
    $pass=$_POST['password'];
    $cor=$_POST['correo'];
    $result = $clase_par-> ActualizarUsuario($cod, $usu, $pass, $cor);
 
}
?>