<!--Start Page Content -->
			<div class="page-content" style="    margin-top: 65px;">
			
				<div class="shop-area shop-page bg-white-2">
					<div class="container">
						<div class="row">
							<!--Start Left Side -->
							<div class="col-md-8 left-side-wrap-v1" id="profile-info-container">
							
								<div class="shop-content-area">
									<div class="row">
										<div class="clear">
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 profesor-description">
												<button type="button" class="btn btn-primary edit-proffesor-item" data-toggle="modal" data-target="#profesor_descripcion">
                 									<i class="fa fa-pencil"></i>
												</button>
												<?php 
													if($info_profesor[0]->profesor['descripcion']==null)
													{
														?>
														<p>Contános mas de vos</p>
														<?php
													}
													else
													{
														echo '<h3>'.$info_profesor[0]->profesor['descripcion'].'</h3>';
													}
												?>
												<?php 
													if($info_profesor[0]->profesor['video_presentacion']!=null || $info_profesor[0]->profesor['video_presentacion']!=' ')
													{
														?>
														<iframe width="560" height="315" src="https://www.youtube.com/embed/v2AC41dglnM"  allowfullscreen></iframe>
														<?php
													}
													
												?>
												</div>
											
										</div>
									</div>
									<hr>
									<div class="row">
										<div class="clear">
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
												<button type="button" class="btn btn-primary edit-proffesor-item" data-toggle="modal" data-target="#profesor_formacion">
                 									<i class="fa fa-pencil"></i>
            									</button>
												<h3>Formación</h3>
												<?php 
													if($formacionacademica == null)
													{
														echo '<p>Contános mas de vos</p>';
													}
													else
													{
														?>
														<ul class="item-list-profile">
															<?php
																foreach($formacionacademica as $row)
																{
																	?>
																	<li><?php echo $row['descripcion']; ?></li>
																	<?php
																}
															?>
														</ul>
														<?php
													}
												?>
												
											</div>
											
										</div>
									</div>
									<hr>
									<div class="row">
										<div class="clear">
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
												<button type="button" class="btn btn-primary edit-proffesor-item" data-toggle="modal" data-target="#profesor_trayectoria">
                 									<i class="fa fa-pencil"></i>
            									</button>
												<h3>Trayectoría</h3>
												<?php 
													if($trayectoria == null)
													{
														echo '<p>Contános mas de vos</p>';
													}
													else
													{
														?>
														<ul class="item-list-profile">
															<?php
																foreach($trayectoria as $row)
																{
																	?>
																	<li><?php echo $row['descripcion']; ?></li>
																	<?php
																}
															?>
														</ul>
														<?php
													}
												?>
											</div>	
										</div>
									</div>
									<hr>
									<div class="row">
										<div class="clear">
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
												<h3>Mi horario</h3>
												<p>Aún no posees comentarios</p>
											</div>	
										</div>
									</div>
									<hr>
									<div class="row">
										<div class="clear">
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
												<h3>Comentarios</h3>
												<p>Aún no posees comentarios</p>
											</div>	
										</div>
									</div>
									<hr>
								</div>
		
							</div>
							<!--End Left Side -->
							<!--Start Right Side -->
							<div class="col-md-4 right-side-wrap-v1" style="margin-top: 1em;">
								<div class="widget-wrap">
									<aside class="widget widget-categories">
                                        <div style="text-align:center;">
                                    <?= 
											$this->Html->image(
												"user.png", 
												["alt" => "imagen de usuario",
												"style" => "width: 250px; height: 250px;"]
											);
                                        ?>
                                        </div>
										<h3 class="widget-title-v2"><?php echo $info_profesor[0]->profesor['nombres'].' '.$info_profesor[0]->profesor['apellidos']; ?></h3>
										<div class="widget-content professor-profile">
											<div class="pro-rating star professor-profile	">
																<span class="yes"><i class="fa fa-star"></i></span>
																<span class="yes"><i class="fa fa-star"></i></span>
																<span class="yes"><i class="fa fa-star"></i></span>
																<span class="yes"><i class="fa fa-star"></i></span>
																<span class="yes"><i class="fa fa-star-half-o"></i></span>
											</div>
											<h3>Categoria</h3>
											<h3>ciudad - provincia</h3>
											<p class="professor-social-icons">
												<a target="_blank" href="#" class="facebook"><i class="fa fa-facebook-square"></i></a>
												<a target="_blank" href="#" class="twitter"><i class="fa fa-twitter-square"></i></a>
												<a target="_blank" href="#" class="google-plus"><i class="fa fa-google-plus-square"></i></a>
												<a target="_blank" href="#" class="dribbble"><i class="fa fa-dribbble"></i></a>
												<a target="_blank" href="#" class="behance"><i class="fa fa-behance-square"></i></a>
											</p>
										</div>
									</aside>
									
								</div>
							</div>
							<!--End Right Side -->
						</div>
					</div>
				</div>
				<!-- End Small image blog Post area -->
			</div>
		</div>
		<!-- End wrapper --> 


		
<!-- Modal Description -->
<div class="modal fade" id="profesor_descripcion" tabindex="-1" role="dialog" aria-labelledby="profesor_descripcion" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <?= $this->Form->create() ?>
    <div class="modal-content">

      <div class="modal-body">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h2 style="text-align: center;">Mi descripción</h2>
        <div class="row" id="formulario_profesor">
  <div class="col-md-12">
  
  <div class="form-group">
	  <textarea class="form-control" rows="5" id="descripcion" name="profesor_descripcion">
		  <?php 
			 if($info_profesor[0]->profesor['descripcion']!=null || $info_profesor[0]->profesor['descripcion']!=' ') 
			 {
				 echo $info_profesor[0]->profesor['descripcion'];
			 }
		  ?>
	  </textarea>
  </div>
  <div class="form-group">
	 <label for="descripcion">Video URL</label>
	 <small>Deja en blanco si no lo deseas modificar</small>
 	 <input type="text" class="form-control" name="video_url">
  </div>
  <input type="hidden" name="id_profesor" value="<?php echo $info_profesor[0]->profesor['idprofesor']; ?>">
  
  <div class="form-group" style="text-align: right;">
	  <input type="submit" class="btn btn-primary" value="Actualizar">
  </div>
  </div>
</div>
<?= $this->Form->end() ?>
                
      </div>
    </div>
  </div>
</div>

<!-- Modal formacion -->
<div class="modal fade" id="profesor_formacion" tabindex="-1" role="dialog" aria-labelledby="profesor_formacion" aria-hidden="true">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-body">
      			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        		</button>
				<h2 style="text-align: center;">Mi Formación</h2>
				<?php if($formacionacademica!=null) { ?>
					<label for="profesor">Mi Formación Academica</label>
				
				<?php foreach ($formacionacademica as $row) { ?>
					<?= $this->Form->create() ?>
					<div class="row" id="formulario_profesor">
  						<div class="col-md-9">
  							<div class="form-group">
  								<input type="text" class="form-control" name="profesor_formacionedit" value="<?php echo $row['descripcion']; ?>" disabled	>
							</div>
							<input type="hidden" name="idprofesor" value="<?php echo $info_profesor[0]->profesor['idprofesor']; ?>"> 
							<input type="hidden" name="idformacionacademica" value="<?php echo $row['idformacionacademica']; ?>">  
  						
					  	</div>
					  	<div class="col-md-3">
							<button type="submit" class="btn btn-primary">
                 				<i class="fa fa-trash"></i>
            				</button>	  
						</div>
					</div>
					<?= $this->Form->end() ?>  
				<?php } ?>
				  
				<?php } ?>
				<?= $this->Form->create() ?>
				<div class="row" id="formulario_profesor">
  					<div class="col-md-12">
  						<div class="form-group">
							<label for="profesor">Nueva Formación</label>
  							<input type="text" class="form-control" name="profesor_formacion">
						</div>
						<input type="hidden" name="idprofesor" value="<?php echo $info_profesor[0]->profesor['idprofesor']; ?>">  
  						<div class="form-group" style="text-align: right;">
							<input type="submit" class="btn btn-primary" value="Agregar">
  						</div>
  					</div>
				</div>  
				<?= $this->Form->end() ?>  
      		</div>
    	</div>
  	</div>
</div>



<!-- Modal trayectoria -->
<div class="modal fade" id="profesor_trayectoria" tabindex="-1" role="dialog" aria-labelledby="profesor_trayectoria" aria-hidden="true">
<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-body">
      			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        		</button>
				<h2 style="text-align: center;">Mi Formación</h2>
				<?php if($trayectoria!=null) { ?>
					<label for="profesor">Mi Trayectoria</label>
				
				<?php foreach ($trayectoria as $row) { ?>
					<?= $this->Form->create() ?>
					<div class="row" id="formulario_profesor">
  						<div class="col-md-9">
  							<div class="form-group">
  								<input type="text" class="form-control" name="profesor_trayectoriaedit" value="<?php echo $row['descripcion']; ?>" disabled	>
							</div>
							<input type="hidden" name="idprofesor" value="<?php echo $info_profesor[0]->profesor['idprofesor']; ?>"> 
							<input type="hidden" name="idtrayectoria" value="<?php echo $row['idtrayectoria']; ?>">  
  						
					  	</div>
					  	<div class="col-md-3">
							<button type="submit" class="btn btn-primary">
                 				<i class="fa fa-trash"></i>
            				</button>	  
						</div>
					</div>
					<?= $this->Form->end() ?>  
				<?php } ?>
				  
				<?php } ?>
				<?= $this->Form->create() ?>
				<div class="row" id="formulario_profesor">
  					<div class="col-md-12">
  						<div class="form-group">
							<label for="profesor">Nueva Trayectoria</label>
  							<input type="text" class="form-control" name="profesor_trayectoria">
						</div>
						<input type="hidden" name="idprofesor" value="<?php echo $info_profesor[0]->profesor['idprofesor']; ?>">  
  						<div class="form-group" style="text-align: right;">
							<input type="submit" class="btn btn-primary" value="Agregar">
  						</div>
  					</div>
				</div>  
				<?= $this->Form->end() ?>  
      		</div>
    	</div>
  	</div>
</div>