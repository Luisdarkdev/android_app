<?php
    class Clase_sql{
        # ATRIBUTOS |  privados
        private $bd;
        # CONSTRUCTOR - permite dar un valor inicial a los atributos
        public function __construct(){
            $this->bd = new mysqli(SERVIDOR,USUARIO,CLAVE,BDD);
            # Definir caracteres
            $this->bd -> set_charset('utf8');
        }

        # FUNCIONES
        # Funcion para consultar Usuario
        public function ConsultaUsuarioGeneral(){
            # Consultas Sql
            # query "es la consulta" ("consulta sql")
            $resultado = $this->bd->query("SELECT * FROM usuario");
            return $resultado;
        }
        # Funcion para validar loggin usuario
        public function ConsultaUsuarioUnico($usu,$pass){
            $resultado = $this->bd->query("SELECT * FROM usuario WHERE  NOM_USE = '$usu' AND PASS_USE ='$pass'");
            return $resultado;
        }
        # Funcion para Insertar Usuario
        public function InsertarUsuario($usu,$pass,$cor){
            $resultado = $this->bd->query("INSERT INTO  usuario ( NOM_USE, PASS_USE, COR_USE) VALUES ('$usu','$pass','$cor')");
            return true;
            }
        # Funcion para leerdatos  actualizar
        public function ConsultaEditUsuario($cod){
            $resultado = $this->bd->query("SELECT * FROM usuario WHERE  COD_USE = '$cod'");
            return $resultado;
      
        # Funcion para Actualizar Usuario
        public function ActualizarUsuario($cod,$usu,$pass,$cor){
            $resultado = $this->bd->query("UPDATE usuario set NOM_USE='$usu', PASS_USE='$pass', COR_USE='$cor' WHERE COD_USE = $cod");
            return true;
        }
        # Funcion para consultar categoria
        public function ConsultaCategoriaGeneral(){
            # Consultas Sql
            # query "es la consulta" ("consulta sql")
            $resultado = $this->bd->query("SELECT * FROM categoria");
            return $resultado;
        }

}