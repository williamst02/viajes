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
                            <?= form_open('/Welcome/procedelete');  ?>
                            <?php 
                $Cedula= array('name'=>'Cedula','placeholder'=>'cedula','type'=>'hidden','class'=>
                    'form-control' , 'value'=>$obten->Cedula);
                
                  $sub=array('value'=>'Eliminar','type'=>'submit',
                    'class'=>'btn btn-success btn-flat m-b-30 m-t-30');
               // $submit=array('type'=>'submit','value'=>'Guardar');

                             ?>
                          
                        </section>
                    </div>
                    
                       

                    </div>
                  
<table class="table">
<?=form_input($Cedula);?>
 <thead> <tr> <th>Cedula</th> <th>Nombre</th> <th>Telefono</th>  <th>Direccion</th></tr> </thead> 
 <tbody> <tr> <th scope="row"><?=form_label($obten->Cedula);?></th> <td><?=form_label($obten->Nombre);?></td> <td>
     <?=form_label($obten->Telefono);?>
 </td> <td><?=form_label($obten->Direcion);?></td> 

<td><?=form_input($sub);?></td>
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
