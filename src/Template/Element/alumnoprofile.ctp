<div class="contenido">

    <div class="row fullwidth">
        <div class="col-sm-8 col-md-8 col-lg-8">
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ProfileModal">
                 <i class="fa fa-pencil"></i>
            </button>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 center-text">
        <?= 
											$this->Html->image(
												"user.png", 
												["alt" => "imagen de usuario",
												"style" => "width: 250px; height: 250px;"]
											);
										?>
            <h3><?php echo $info_alumno[0]->alumno['nombres'].' '.$info_alumno[0]->alumno['apellidos']; ?></h3>
            <h5>Mi Categoria Favorita</h5>
            <h5>Mi Direccion</h5>
            <h5><?php echo $info_alumno[0]->alumno['telefono_celular'].' - '.$info_alumno[0]->alumno['telefono_fijo']; ?></h5>
            <?php
                if($info_alumno[0]->alumno['edad'] <= 18)
                {
                ?>
                <h5>Responsable:</h5>
                <h5><?php echo $info_alumno[0]->alumno['nombre_responsable'].' '.$info_alumno[0]->alumno['apellido_responsable']; ?></h5>
                <?php    
                }
            ?>
        </div>
    </div>
    <hr>
    <div class ="row fullwidth">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 center-text">
            <h3>Mis Clases</h3>
            <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati corrupti sunt dolore quisquam fuga numquam blanditiis at debitis maxime, quaerat laboriosam</h5>
            <button class="btn btn-success">Buscar  un Curso</button>
        </div> 
    </div>
    <hr>
    <div class ="row fullwidth">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 center-text">
            <h3>Nueva Sección</h3>
            <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati corrupti sunt dolore quisquam fuga numquam blanditiis at debitis maxime, quaerat laboriosam</h5>
        </div> 
    </div>



</div>


<!-- Modal -->
<div class="modal fade" id="ProfileModal" tabindex="-1" role="dialog" aria-labelledby="ProfileModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-body">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h2 style="text-align: center;">Mi Información Personal</h2>
        <div class="row" id="formulario_alumno">
  <div class="col-md-12">
  
  <div class="form-group">
  <label for="sel1">Tu información personal:</label>
    <input type="text" class="form-control" id="alum_nombres" name="alum_nombres"  placeholder="Nombres" value="<?php echo $info_alumno[0]->alumno['nombres']; ?>">
  </div>
  <div class="form-group">

    <input type="text" class="form-control" id="alum_apellidos" name="alum_apellidos"  placeholder="Apellidos" value="<?php echo $info_alumno[0]->alumno['apellidos']; ?>">
  </div>
  <div class="form-group">
   
    <input type="number" min="3" class="form-control" id="alum_edad" name="alum_edad" placeholder="Edad" value="<?php echo $info_alumno[0]->alumno['edad']; ?>">
  </div>
  <div class="form-group">

    <input type="text" class="form-control" id="alum_nombresresponsable" name="alum_nombresresponsable"  placeholder="Nombre-responsable" value="<?php echo $info_alumno[0]->alumno['nombre_responsable']; ?>">
  </div>
  <div class="form-group">

    <input type="text" class="form-control" id="alum_apellidosresponsable" name="alum_apellidosresponsable" placeholder="Apellido-responsable" value="<?php echo $info_alumno[0]->alumno['apellido_responsable']; ?>">
  </div> 
  <div class="form-group">
    <input type="text" class="form-control" id="alum_telefonomovil" name="alum_telefonomovil"  placeholder="telefono movil" value="<?php echo $info_alumno[0]->alumno['telefono_celular']; ?>" >
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="alum_telefonofijo" name="alum_telefonofijo" placeholder="telefono fijo" value="<?php echo $info_alumno[0]->alumno['telefono_fijo']; ?>">
  </div>

  <div class="form-group">
    <label for="sel1">Selecciona tu disciplina favorita:</label>
    <select class="form-control" id="alum_categoria">
      <?php
        foreach($infocategorias as $rowcategoria)
        {
          ?>
          <option value="<?php echo $rowcategoria->subcategoria['idsubcategoria'] ?>"><?php echo $rowcategoria['nombre'].' - '.$rowcategoria->subcategoria['nombre']; ?></option>
          <?php
        }
      ?>
    </select>
  </div>

  <div class="form-group">
    <label for="sel1">Tu Ubicación:</label>
    <select class="form-control" id="alum_categoria">
      <option value="0">Ciudad</option>
    </select>
    <br>
    <select class="form-control" id="alum_categoria">
      <option value="0">Provincia</option>
    </select>
 
  </div>

  <div class="form-group">
  <label for="sel1">Tu Coontraseña:</label>
    <input type="password" class="form-control" id="alum_calve" name="alum_clave" placeholder="Contraseña">
    <small>Deja en Blanco si no deseas cambiarla.</small>
  </div>

  <div class="form-group">
    <input type="password" class="form-control" id="alum_calve_confirmar" name="alum_clave_confirmar" placeholder="Confrima tu Contraseña">
  </div>

  <div class="form-group" style="text-align: right;">
    <button type="button" class="btn btn-primary">Actualizar</button>
  </div>
  </div>
</div>

                
      </div>
    </div>
  </div>
</div>