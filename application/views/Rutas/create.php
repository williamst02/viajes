<div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title mb-3">Registro de Rutas</strong>
                            </div>
                            <div class="card-body">
                                <div class="mx-auto d-block">
                                   <div class="row">
                    <div class="col">
                        <section class="col">
                            <?= form_open('/Rutas/insertar');  ?>
                            <?php 
                $Nplaza= array('name'=>'Nplaza','placeholder'=>'Numero de Plaza','type'=>'text','class'=>
                    'form-control');
                $Destino= array('name'=>'Destino','placeholder'=>'Destino','type'=>'text', 'class'=>'
                    form-control');
                $Origen=array('name'=>'Origen','placeholder'=>'Origen', 'type'=>'text','class'
                    =>'form-control');
                $Precio=array('name'=>'Precio','placeholder'=>'Precio',
                    'class'=>'form-control', 'type'=>'text');
                $Boletos=array('name'=>'Boletos','placeholder'=>'Numero de Boletos',
                    'class'=>'form-control','rows'=>'2','cols'=>'100');
                  
                  $sub=array('value'=>'Procesar','type'=>'submit',
                    'class'=>'btn btn-success btn-flat m-b-30 m-t-30');
               // $submit=array('type'=>'submit','value'=>'Guardar');

                             ?>

<div class="form-group">
                                    <label class=" form-control-label">Numero de Plaza</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa  fa-tasks"></i></div>
                                        <?= form_input($Nplaza)?>
                                    </div>
                                    <small class="form-text text-muted">ex.88888888</small>
                                </div>



                          
                        </section>
                    </div>
                     <div class="col">
                        <section class="col">
                            

<div class="form-group">
                                    <label class=" form-control-label">Origen</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa  fa-circle"></i></div>
                                       <?= form_input($Origen); ?>
                                    </div>
                                    <small class="form-text text-muted">ex. Puerto Ordaz</small>
                                </div>



                          
                        </section>
                    </div>
                       <div class="col">
                        <section class="col">
                            

<div class="form-group">
                                    <label class=" form-control-label">Destino</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class=" fa  fa-circle"></i></div>
                                        <?=form_input($Destino);?>
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
                                    <label class=" form-control-label">Precio</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa  fa-circle"></i></div>
                                       <?=form_input($Precio)?>
                                    
                                    </div>
                                    <small class="form-text text-muted">ex.10000 bs</small>
                                </div><!--fin campo   direccion -->



                          
                        </section>

                    </div>

                             <section class="col">
                            

<div class="form-group">
                                    <label class=" form-control-label">Cantidad  de Boletos</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa  fa-circle"></i></div>
                                       <?=form_input($Boletos)?>
                                       <?=form_input($sub)?>
                                    </div>
                                    <small class="form-text text-muted">ex.1000 </small>
                                </div><!--fin campo   direccion -->



                          
                        </section>
                        
                    </div>

<?= form_close();?>

                    </div>
                                 
                                    
                                </div>
                              
                            </div>
                        </div>
                    </div>
                  