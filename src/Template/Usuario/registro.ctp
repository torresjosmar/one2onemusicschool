<h1>Registro de usuario</h1>
<?php echo $this->Form->create();  ?>
<div class="form-group">
    <label for="exampleSelect1">Tipo de usuario</label>
    <select class="form-control" id="tipousuario" name="tipo_usuario" onchange="segmentarformulario()">
      <option value = "1">Alumno</option>
      <option value = "2">Profesor</option>
    </select>
  </div>


<!-- formulario de alumno -->
<div class="row" id="formulario_alumno">
  <div class="col-md-12">
  
  <div class="form-group">
    <label for="exampleInputEmail1">Nombres</label>
    <input type="text" class="form-control" id="alum_nombres" name="alum_nombres"  placeholder="Nombres">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Apellidos</label>
    <input type="text" class="form-control" id="alum_apellidos" name="alum_apellidos"  placeholder="Apellidos">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Edad</label>
    <input type="number" min="3" class="form-control" id="alum_edad" name="alum_edad" placeholder="Edad">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nombres de Responsable</label>
    <input type="text" class="form-control" id="alum_nombresresponsable" name="alum_nombresresponsable"  placeholder="Nombres">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Apellidos de Responsable</label>
    <input type="text" class="form-control" id="alum_apellidosresponsable" name="alum_apellidosresponsable" placeholder="Nombres">
  </div> 
  <div class="form-group">
    <label for="exampleInputEmail1">Telefono movil</label>
    <input type="text" class="form-control" id="alum_telefonomovil" name="alum_telefonomovil"  placeholder="telefono movil" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Telefono fijo</label>
    <input type="text" class="form-control" id="alum_telefonofijo" name="alum_telefonofijo" placeholder="telefono fijo">
  </div>
  </div>
</div>

<!-- formulario de profesor -->
<div class="row" id="formulario_profesor" style = "display: none;">
<div class="col-md-12">
  
  <div class="form-group">
    <label for="exampleInputEmail1">Nombres</label>
    <input type="text" class="form-control" id="prof_nombres" name="prof_nombres"  placeholder="Nombres">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Apellidos</label>
    <input type="text" class="form-control" id="prof_apellidos" name="prof_apellidos"  placeholder="Apellidos">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Edad</label>
    <input type="number" min="3" class="form-control" id="prof_edad" name="prof_edad" placeholder="Edad">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Telefono movil</label>
    <input type="text" class="form-control" id="prof_telefonomovil" name="prof_telefonomovil"  placeholder="telefono movil">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Telefono fijo</label>
    <input type="text" class="form-control" id="prof_telefonofijo" name="prof_telefonofijo"  placeholder="telefono fijo">
  </div>
  
</div>
</div>
 <div class="form-group">
    <label for="exampleInputEmail1">Correo Electronico</label>
    <input type="email" class="form-control" id="email" name="email"  placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Clave</label>
    <input type="password" class="form-control" id="clave" name="clave" placeholder="Password">
  </div>

  
  <button type="submit" class="btn btn-primary">Submit</button>

<?php echo $this->Form->end(); ?>

<script type="text/javascript" >
 
 function segmentarformulario()
 {
   var tipodeusuario;

   tipodeusuario = document.getElementById("tipousuario").value;

   console.log("tipo de usuario: "+tipodeusuario);

  if(tipodeusuario == 1) //es alumno
  {
     document.getElementById("formulario_alumno").style.display = "block";
     document.getElementById("formulario_profesor").style.display = "none";
  }

  if(tipodeusuario == 2) // es profesor
  {
    document.getElementById("formulario_alumno").style.display = "none";
     document.getElementById("formulario_profesor").style.display = "block";
  }

 }

</script>