<?php
    # Conexion
    define ('SERVIDOR','b6nygbyu6r0f2ll0rn8s-mysql.services.clever-cloud.com');
    define ('USUARIO','ucwdwyuay8szwcgl');
    define ('CLAVE','5pCLO69sBcb0hTSmF4yF');
    define ('BDD','b6nygbyu6r0f2ll0rn8s');

    # Conexion para errores de conectividad
    $conexion = mysqli_connect(SERVIDOR,USUARIO,CLAVE,BDD) or die ('Hay un error de conexion');
?>