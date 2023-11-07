<table class="table table-bordered table-striped">
<thead class="thead-dark">
    <th width="18%">Nombres</th>
    <th width="22%">Apellidos</th>
    <th width="22%">correo</th>
    <th width="14%">contraseña</th>
    <th width="13%" colspan="2"></th>
</thead>
<tbody>
<?php
$sql = "SELECT * FROM tabla_per"; 
$query = $connect -> prepare($sql); 
$query -> execute(); 
$results = $query -> fetchAll(PDO::FETCH_OBJ); 

if($query -> rowCount() > 0)   { 
foreach($results as $result) { 
"<tr>
<td>".$result -> nombres."</td>
<td>".$result -> apellidos."</td>
<td>".$result -> correo."</td>
<td>".$result -> contraseña."</td>

<td>
<form method='POST' action='".$_SERVER['PHP_SELF']."'>
<input type='hidden' name='id' value='".$result -> id."'>
<button name='editar'>Editar</button>
</form>
</td>

<td>
<form  onsubmit=\"return confirm('Realmente desea eliminar el registro?');\" method='POST' action='".$_SERVER['PHP_SELF']."'>
<input type='hidden' name='id' value='".$result -> id."'>
<button name='eliminar'>Eliminar</button>
</form>
</td>
</tr>";

   }
 }
?>
</tbody>
</table>