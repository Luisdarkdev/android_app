<?php
       require_once '../config/config.php';
       require_once '../config/clase_sql.php';
   $clase_par = new Clase_sql();
   $result_cli = $clase_cli-> ConsultaUcategoriaGeneral();
   while($fic = $result_cor->fetch_assoc()){
    $usu = $fic['NOM_USE'];
    $pass = $fic['PASS_USE'];
    $cor = $fic['COR_USE'];
   }
?>
