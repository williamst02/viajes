<div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">

                    <a href="index.html">
                    LOGO
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                <?= form_open('/Welcome/nuevo');  ?>

                <?php
                $Nombre= array('name'=>'Nombre', 'type'=>'text','placeholder'=>'Nombre'
                    ,'class'=>'form-control', 'required'=>'required');
                $Telefono=array('name'=>'Telfono', 'type'=>'text','placeholder'=>'Telefono',
                    'required'=>'required', 'class'=>'form-control');
                $email=array('name'=>'email','type'=>'email','placeholder'=>'Correo Electronico',
                    'required'=>'required', 'class'=>'form-control');
                $ciudad=array('name'=>'ciudad', 'type'=>'text','placeholder'=>'Ciudad','class'=>'form-control'
                    ,'required'=>'required');
                $mensaje=array('name'=>'mensaje','class'=>'form-control','rows'=>'2');

                $sub=array('value'=>'Enviar','type'=>'submit', 
                    'class'=>'btn btn-primary btn-flat m-b-30 m-t-30', 'title'=>'Regístrate');
                ?>
                      
                        <div class="form-group">
                            <label>Nombre</label>
                            <?= form_input($Nombre); ?>
                            
                        </div>
                        <div class="form-group">
                            <label>Telefono</label>
                            <?=  form_input($Telefono);  ?>
                        </div>
                           <div class="form-group">
                            <label>Email</label>
                            <?=  form_input($email);  ?>
                        </div>
                           <div class="form-group">
                            <label>Ciudad</label>
                            <?=  form_input($ciudad);  ?>
                        </div>
                         <div class="form-group">
                            <label>Mensaje</label>
                            <?=  form_textarea($mensaje);  ?>
                        </div>
                        <?= form_submit($sub);?>
                        </div>
                          
                     
                 <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
