<div class="container">
    <?= $this->Form->create() ?>

    <div class="row">
    
        <div class="col-md-12">
            <?= $this->Form->input('username',['label' => false, 'placeholder' => 'correo electronico', 'required' => 'required']) ?>
            <?= $this->Form->input('password',['label' => false, 'placeholder' => 'clave', 'required' => 'required']) ?>
            
            <?php echo $this->Form->button('Iniciar Sesion',['class' => 'btn btn-success']); ?>
        
        </div>
    
    </div>

    <?= $this->Form->end() ?>
</div>