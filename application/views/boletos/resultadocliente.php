<?php 
   if ($obtener){
foreach ($obtener->result() as $obten) { 
    ?>

 <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title mb-3">Datos Del cliente</strong>
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

 <thead> <tr> <th>Cedula</th> <th>Nombre</th> <th>Telefono</th>  <th>Direccion</th></tr> </thead> 
 <tbody> <tr> <th scope="row"><?=form_label($obten->Cedula);?></th> <td><?=form_label($obten->Nombre);?></td> <td>
     <?=form_label($obten->Telefono);?>
 </td> <td><?=form_label($obten->Direcion);?></td> 

<td></td>
 </tr> </tbody> </table>










                   
                                 
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                  
<?php  
} }else {
echo "<script>alert('Na  hay  datos  que Mostrar');</script>";

}

?>