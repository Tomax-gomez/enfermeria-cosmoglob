<?php
include "DBconnect.php";

if(isset($_POST['insertar'])){
///////////// Informacion enviada por el formulario /////////////
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];
$contrasena=$_POST['contraseña'];
///////// Fin informacion enviada por el formulario ///
echo $apellidos;
echo $correo;
echo $contrasena;
////////////// Insertar a la tabla la informacion generada ///////
$sql=("insert into tabla_per (nombre,apellido,correo,contraseña) values(?, ? , ?, ?)");
echo $sql;
$sql = $connect->prepare($sql);

$sql->bindParam(1,$nombres);
$sql->bindParam(2,$apellidos);
$sql->bindParam(3,$correo);
$sql->bindParam(4,$contrasena);
$sql->execute();

$lastInsertId = $connect->lastInsertId();
if($lastInsertId>0){

echo "<div class='content alert alert-primary' > Gracias .. Tu Nombre es : $nombres </div>";
}
else{
echo "<div class='content alert alert-danger'> No se pueden agregar datos, comuníquese con el administrador </div>";

print_r($sql->errorInfo()); 
}
}// Cierra envio de guardado
?>