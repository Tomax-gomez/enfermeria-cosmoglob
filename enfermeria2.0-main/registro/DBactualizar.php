<?php
    
if(isset($_POST['actualizar'])){
///////////// Informacion enviada por el formulario /////////////
$id=trim($_POST['id']);
$nombres=trim($_POST['nombres']);
$apellidos=trim($_POST['apellidos']);
$correo=trim($_POST['correo']);
$contraseña=trim($_POST['contraseña']);
///////// Fin informacion enviada por el formulario ///    

////////////// Actualizar la tabla /////////
$consulta = "UPDATE tabla_per 
SET `nombres`= :nombres, `apellidos` = :apellidos, `correo` = :correo, `contraseña` = :contraseña, 
WHERE `id` = :id";
$sql = $connect->prepare($consulta);
$sql->bindParam(':nombres',$nombres,PDO::PARAM_STR, 25);
$sql->bindParam(':apellidos',$apellidos,PDO::PARAM_STR, 25);
$sql->bindParam(':correo',$correo,PDO::PARAM_STR,25);
$sql->bindParam(':contraseña',$contraseña,PDO::PARAM_STR,25);


$sql->execute();    

if($sql->rowCount() > 0)
{
$count = $sql -> rowCount();
echo "<div class='content alert alert-primary' > 

Gracias: $count registro ha sido actualizado  </div>";
}
else{
    echo "<div class='content alert alert-danger'> No se pudo actulizar el registro  </div>";

print_r($sql->errorInfo()); 
}
}// Cierra envio de guardado
?>
