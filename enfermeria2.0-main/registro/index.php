<?php
 include "DBinsert.php"
 ?>
 
    <div class="col-12 col-md-12"> 
<form action="" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nombres">Nombres</label>
      <input name="nombres" type="text" class="form-control" placeholder="Nombres">
    </div>
    <div class="form-group col-md-6">
      <label for="edad">Apellidos</label>
      <input name="apellidos" type="text" class="form-control" id="edad" placeholder="Apellidos">
    </div>
  </div>
<div class="form-row">  
    <div class="form-group col-md-6">
      <label for="correo">correo</label>
      <input name="correo" type="email" class="form-control" id="correo" placeholder="correo">
    </div>
    <div class="form-row">  
    <div class="form-group col-md-6">
      <label for="contraseña">contraseña</label>
      <input name="contraseña" type="password" class="form-control" id="contraseña" placeholder="contraseña">
    </div>
  
</div>
<div class="form-group">
  <button name="insertar" type="submit" class="btn btn-primary  btn-block">Guardar</button>
</div>
</form>
    </div> 
<?php   ?>

