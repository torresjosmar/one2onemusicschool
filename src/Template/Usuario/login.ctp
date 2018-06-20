

  

<div class="container" style="background-color: #fff;border-radius: 2px;padding: 10%; margin-top: 1.7em;    box-shadow: 2px 0px 4px 0px #737373; text-align: center;display: block;">

    <h2 style="margin-top: 30px;color: #0d8dc0;">Inicia Sesión</h2>
    <hr style="    width: 60%;
    text-align: center;
    display: inline-flex;
    margin: 0;">
    <?= $this->Form->create() ?>

    <div class="row" style="margin-top: 40px;text-align: center;
    display: block;">
    
        <div class="col-md-12">
            <div class="form-group">
            <?= $this->Form->input('username',['label' => false, 'placeholder' => 'Correo electrónico', 'required' => 'required' , 'class' => 'form-control-1']) ?>
            </div>
            <div class="form-group">
            <?= $this->Form->input('password',['label' => false, 'placeholder' => 'Contraseña', 'required' => 'required', 'class' => 'form-control-1']) ?>
            </div>
        <span class="txt2">
                       <a class="link" href="#" style="text-decoration: none;">Olvidaste tu contraseña?</a>
                    </span>
                    <br>
            <?php echo $this->Form->button('Iniciar Sesion',['class' => 'btn btn-success entrar']); ?>

        </div><br><br>
    
                    
                    <br>

                      <span class="txt1">
                       <a class="link" href="#" style="text-decoration: none;">no tienes una cuenta?<strong> Registrate!</strong></a>
                    </span>

    </div>

    <?= $this->Form->end() ?>
</div>
