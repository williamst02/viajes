<?php 
   if ($obtener){
foreach ($obtener->result() as $obten) { 
    ?>

 <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title mb-3">Eliminar Datos</strong>
                            </div>
                            <div class="card-body">
                                <div class="mx-auto d-block">
                                   <div class="row">
                    <div class="col">
                        <section class="col">
                            <?= form_open('/Rutas/procedelete');  ?>
                            <?php 
                $id= array('name'=>'Idr','type'=>'hidden' , 'value'=>$obten->IDV);
                
                  $sub=array('value'=>'Eliminar','type'=>'submit',
                    'class'=>'btn btn-success btn-flat m-b-30 m-t-30');
               // $submit=array('type'=>'submit','value'=>'Guardar');

                             ?>
                          
                        </section>
                    </div>
                    
                       

                    </div>
                  
<table class="table">
<?=form_input($id);?>
 <thead> <tr> <th>ID</th> <th>N° Plaza</th> <th>Origen</th>  <th>Detino</th> <th>Precio</th></tr> </thead> 
 <tbody> <tr> <th scope="row"><?=form_label($obten->IDB);?></th> <td><?=form_label($obten->ID_viajes);?></td> <td>
     <?=form_label($obten->fecha);?>
 </td> 


 </tr> </tbody> </table>








<?= form_close();?>

                   
                                 
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                  
<?php  
} }else {

echo "<script>alert('No  hay  datos  a Mostrar');</script>";
}

?>
