 <?php 
   if ($obtener){
foreach ($obtener->result() as $obten) { 
    ?>

 <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title mb-3">Actualizar Datos</strong>
                            </div>
                            <div class="card-body">
                                <div class="mx-auto d-block">
                                   <div class="row">
                    <div class="col">
                        <section class="col">
                            <?= form_open('/Welcome/updatecliente');  ?>
                            <?php 
                $Cedula= array('name'=>'Cedula','placeholder'=>'cedula','type'=>'text','class'=>
                    'form-control' , 'value'=>$obten->Cedula);
                $nombre= array('name'=>'nombre','placeholder'=>'Nombre','type'=>'text', 'class'=>'
                    form-control','value'=>$obten->Nombre);
                $telefono=array('name'=>'telefono','placeholder'=>'telefono', 'type'=>'text','class'
                    =>'form-control','value'=>$obten->Telefono);
                $direccion=array('name'=>'direccion','placeholder'=>'Direccion',
                    'class'=>'form-control','rows'=>'2','cols'=>'100',
                    'value'=>$obten->Direcion);
                  $sub=array('value'=>'Procesar','type'=>'submit',
                    'class'=>'btn btn-success btn-flat m-b-30 m-t-30');
               // $submit=array('type'=>'submit','value'=>'Guardar');

                             ?>

<div class="form-group">
                                    <label class=" form-control-label">Cedula</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa  fa-tasks"></i></div>
                                        <?= form_input($Cedula)?>
                                    </div>
                                    <small class="form-text text-muted">ex.88888888</small>
                                </div>



                          
                        </section>
                    </div>
                     <div class="col">
                        <section class="col">
                            

<div class="form-group">
                                    <label class=" form-control-label">Nombre</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa  fa-circle"></i></div>
                                       <?= form_input($nombre); ?>
                                    </div>
                                    <small class="form-text text-muted">ex. Williams</small>
                                </div>



                          
                        </section>
                    </div>
                       <div class="col">
                        <section class="col">
                            

<div class="form-group">
                                    <label class=" form-control-label">Telefono</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class=" fa  fa-phone"></i></div>
                                        <?=form_input($telefono);?>
                                    </div>
                                    <small class="form-text text-muted">ex. 0426808080</small>
                                </div>



                          
                        </section>
                    </div>


                    </div>
                  <div class="row">

     <div class="col">
                        <section class="col">
                            

<div class="form-group">
                                    <label class=" form-control-label">Dirección</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa  fa-tasks"></i></div>
                                       <?=form_textarea($direccion)?>
                                       <?=form_input($sub)?>
                                    </div>
                                    <small class="form-text text-muted">ex.Colegio Jose Luis Rodriguez</small>
                                </div><!--fin campo   direccion -->



                          
                        </section>
                    </div>

<?= form_close();?>

                    </div>
                                 
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                  
<?php  
} }else {

echo "<script>alert('No  hay  datos  a Mostrar');</script>";
}

?>



