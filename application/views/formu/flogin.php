  <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                   LOGO DE LA  MARCA
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                  <?= form_open('/Welcome/recibirdatos') ?>

                  <?php
                  $email= array('name'=>'email','placeholder'=>'email','type'=>'email','class'=>
                    'form-control');
                  $pass= array('name'=>'Password','placeholder'=>'password','type'=>
                    'password','class'=>'form-control');
                  $sub=array('value'=>'Ingresar','type'=>'submit', 
                    'class'=>'btn btn-success btn-flat m-b-30 m-t-30', 'title'=>'Ingresar');
                  $face=array('type'=>'submit','value'=>'Ingresa   con facebook','class'=>'btn social facebook btn-flat btn-addon mb-3 ti-facebook')
                  ;
               

?>

                        <div class="form-group">
                            <label>Email o usuario</label>
                            <?= form_input($email)?>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                           <?= form_input($pass);?>
                        </div>
                        <div class="checkbox">
                            <label>
                                
                            </label>
                            <label class="pull-right">
                                <a href="<?= base_url('/index.php/Welcome/recover'); ?>">Olvide mi Password?</a>
                            </label>

                        </div>
                        <?= form_submit($sub);?>
                        <div class="social-login-content">
                            <div class="social-button">

                                <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Sign in with facebook</button>
                                <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-twitter"></i>Sign in with twitter</button>
                            </div>
                        </div>
                        <div class="register-link m-t-15 text-center">
                            <p>¿No Tienes Cuenta ? <a href="#"> Registrate aquí</a></p>
                        </div>
                   <?= form_close();?>
                </div>
            </div>
        </div>
    </div>