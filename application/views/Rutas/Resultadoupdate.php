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
                            <?= form_open('/Rutas/updaterutas');  ?>
                            <?php 
                            $id=array('name'=>'id','type'=>'hidden','value'=>$obten->IDV);
               $Nplaza= array('name'=>'Nplaza','placeholder'=>'Numero de Plaza','type'=>'text','class'=>
                    'form-control','value'=>$obten->N_plaza);
                $Destino= array('name'=>'Destino','placeholder'=>'Destino','type'=>'text', 'class'=>'
                    form-control','value'=>$obten->Destino);
                $Origen=array('name'=>'Origen','placeholder'=>'Origen', 'type'=>'text','class'
                    =>'form-control', 'value'=>$obten->Origen);
                $Precio=array('name'=>'Precio','placeholder'=>'Precio',
                    'class'=>'form-control', 'type'=>'text', 'value'=>$obten->precio);
                $Boletos=array('name'=>'Boletos','placeholder'=>'Numero de Boletos',
                    'class'=>'form-control','value'=>$obten->Total_B);
                  
                  $sub=array('value'=>'Procesar','type'=>'submit',
                    'class'=>'btn btn-success btn-flat m-b-30 m-t-30');
               // $submit=array('type'=>'submit','value'=>'Guardar');

                             ?>

<div class="form-group">
                                    <label class=" form-control-label">Numero de Plaza</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa  fa-circle"></i></div>
                                        <?= form_input($id)?>
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
                                    <small class="form-text text-muted">ex.San Felix</small>
                                </div>



                          
                        </section>
                    </div>
                       <div class="col">
                        <section class="col">
                            

<div class="form-group">
                                    <label class=" form-control-label">Destino</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class=" fa  fa-circle"></i></div>
                                        <?=form_input($Destino)?>
                                    </div>
                                    <small class="form-text text-muted">ex. Poz Ordaz</small>
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
