<?php 
   if ($obtener){
foreach ($obtener->result() as $obten) { 
    ?>

 <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title mb-3">Rutas</strong>
                            </div>
                            <div class="card-body">
                                <div class="mx-auto d-block">
                                   <div class="row">
                    <div class="col">
                        <section class="col">
                         
                          
                          
                        </section>
                    </div>
                    
                       

                    </div>
                  
<table class="table">
<?= form_open()?>


 <thead> <tr> <th>ID</th> <th>N° Plaza</th> <th>Origen</th>  <th>Detino</th> <th>Precio</th></tr> </thead> 
 <tbody> <tr> <th scope="row"><?=form_label($obten->IDV);?></th> <td><?=form_label($obten->N_plaza);?></td> <td>
     <?=form_label($obten->Origen);?>
 </td> <td><?=form_label($obten->Destino);?></td> 
<td><?=form_label($obten->precio);?> bs</td> 
<td><?=form_checkbox();?></td>
 </tr> </tbody>
 <?= form_close();?> </table>         
                                </div>
                                
                            </div>
                        </div>
                    </div>
                  
<?php  
} }else {


}

?>
