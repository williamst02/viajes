     <div>
     <?php  
foreach ($obtener->result() as $obten) { ?>



     <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title mb-3"><?= $obten->Titulo;?></strong>
                            </div>

                            <div class="card-body">
                            <a href="<?=base_url('index.php/inmuebles/Viewinmuebles')?>">
                                <div class="mx-auto d-block" style="with:400px; height:100px;">
                                    <img class="rounded-circle mx-auto d-block"  src="<?= base_url($obten->img1);?>">
                                    <h5 class="text-sm-center mt-2 mb-1"></h5>
                                </div>
                                </a>
                                <br><br><br><hr>
                                <div class="card-text text-sm-jistific expandDiv">
                            <p>
                                  <?= 
                                  $obten->Descripcion;
                                  ?></p>
                               
                                </div>
                        
                                   <footer class="twt">
                             <i class="fa fa-camera"></i>
                              <i class="fa fa-map-marker"></i>
                             Delta Amacuro
                            </footer>
                            </div>

                        </div>

                    </div>
                    </a>
                    
                   

                 

<?php   
}
     ?>










     

     