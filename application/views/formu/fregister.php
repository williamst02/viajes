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
                $email= array('name'=>'email', 'type'=>'email','placeholder'=>'email'
                    ,'class'=>'form-control', 'required'=>'required');
                $pass=array('name'=>'pass', 'type'=>'password','placeholder'=>'password',
                    'required'=>'required', 'class'=>'form-control');

                $sub=array('value'=>'Regístrate','type'=>'submit', 
                    'class'=>'btn btn-primary btn-flat m-b-30 m-t-30', 'title'=>'Regístrate');
                ?>
                      
                        <div class="form-group">
                            <label>Email</label>
                            <?= form_input($email); ?>
                            
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <?=  form_input($pass);  ?>
                        </div>
                        <div class="checkbox">
                            <label>

                                <input type="checkbox" required="required"> Acepto  terminos  y politicas
                            </label>
                        </div>
                          <?= form_submit($sub);?>
                        <div class="register-link m-t-15 text-center">
                            <p>¿ Ya tienes un
 cuenta? <a href="<?= base_url('/index.php/Welcome/login')?>"> Ingresar</a></p>
                        </div>
                 <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
