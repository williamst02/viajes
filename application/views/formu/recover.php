<div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                       Logo
                    </a>
                </div>
                <div class="login-form">
                <?= form_open('Welcome/Recovery')?>
                <?php  
                $email = array('name'=>'emauil', 'type'=>'email','placeholder'=>'Email',
                    'required'=>'required', 'class'=>'form-control');
                $submit=array('value'=>'enviar', 'class'=>'btn btn-primary btn-flat m-b-15');
                ?>
                        <div class="form-group">
                            <?= form_label('CORREO   DE   RECUPERACIÓN') ;?>
                            <?= form_input($email)?>
                        </div>
                        <?=  form_submit($submit); ?>
                      

                   <?= form_close();?>
                </div>
            </div>
        </div>
    </div>