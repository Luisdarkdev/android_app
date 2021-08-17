<?php
       require_once '../config/config.php';
       require_once '../config/clase_sql.php';
   $clase_par = new Clase_sql();
  /* if(isset($_POST['submit']))
   {
$usuario=$_POST['usuario'];
$categoria=$_POST['categoria'];
$titulo=$_POST['titulo'];
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$vimage1=$_FILES["img1"]["name"];
move_uploaded_file($_FILES["img1"]["tmp_name"],"img/vehicleimages/".$_FILES["img1"]["name"]);
$presio=$_POST['presio'];

$usuario="2";
$categoria= "1";
$titulo="titulo";
$nombre="nombre";
$descripcion= "descripcion";
$vimage1=$_FILES["img1"]["name"];
$archivo=$_FILES["img1"]["tmp_name"];
$ruta="../img/juegos";
$ruta=$ruta."/".$vimage1;
move_uploaded_file($archivo,$ruta);
$presio="presio";
$result = $clase_par-> InsertarProducto($usuario, $categoria, $titulo, $nombre, $descripcion, $ruta, $presio);

   }

 */
 if($_SERVER['REQUEST_METHOD']=='POST'){
$usuario=$_POST['usuario'];
$categoria=$_POST['categoria'];
$titulo=$_POST['titulo'];
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$imagen= $_POST['foto'];
$presio=$_POST['presio'];
 
 $sql ="SELECT COD_PRO FROM producto ORDER BY COD_PRO ASC";
 
 $res = mysqli_query($conexion,$sql);
 
 $id = 0;
 
 while($row = mysqli_fetch_array($res)){
 $id = $row['COD_PRO'];
 }
 
 $path = "uploads/$id.png";
 //Cambiar nombre de ip con el suyo.
 $actualpath = "https://192.168.100.7/tienda/img/juegos/$path";
 $sql = $clase_par-> InsertarProducto($usuario, $categoria, $titulo, $nombre, $descripcion, $actualpath, $presio);
 
 if(mysqli_query($conexion,$sql)){
 file_put_contents($path,base64_decode($imagen));
 echo "Subio imagen Correctamente";
 }
 
 mysqli_close($conexion);
 }else{
 echo "Error";
 }
 ?>