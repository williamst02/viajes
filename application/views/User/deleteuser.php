 <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title mb-3">Consultar/Eliminar</strong>
                            </div>
                            <div class="card-body">
                                <div class="mx-auto d-block">
                                   <div class="row">
                    <div class="col">
                        <section class="col">
                            <?= form_open('/Welcome/showdelete');  ?>
                            <?php 
                $Cedula= array('name'=>'Cedula','placeholder'=>'cedula','type'=>'text','class'=>
                    'form-control');
                 $sub=array('value'=>'Consultar','type'=>'submit',
                    'class'=>'btn btn-success btn-flat m-b-30 m-t-30');
               
                             ?>

<div class="form-group">
                                    <label class=" form-control-label">Cedula</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa  fa-tasks"></i></div>
                                        <?= form_input($Cedula)?>
                                        <?=form_input($sub)?>
                                    </div>
                                    <small class="form-text text-muted">ex.88888888</small>
                                </div>



                          
                        </section>
                    </div>
                  
                     <?= form_close();?>

                    </div>
                        
                                    
                                </div>
                            
                               
                            </div>
                        </div>
                    </div>
                  
