<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pruebas</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="<?= base_url('apple-icon.png')?>">
    <link rel="shortcut icon" href="<?= base_url('favicon.ico')?>">

    <link rel="stylesheet" href="<?=  base_url('bootstrap/css/normalize.css')?>">
 <link href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/font-awesome.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/themify-icons.css')?>">
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/flag-icon.min.css')?>">
    <link rel="stylesheet" href="<?=  base_url('bootstrap/css/cs-skin-elastic.css')?>">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="<?=  base_url('bootstrap/js/jquery.expander.js')?>"></script>
    <link rel="stylesheet" href="<?= base_url('bootstrap/scss/style.css')?>">
    <link href="<?=  base_url('bootstrap/css/lib/vector-map/jqvmap.min.css')?>" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
<script>
$(document).ready(function() {

  $('div.expandDiv').expander({
    slicePoint:30, //It is the number of characters at which the contents will be sliced into two parts.
    widow: 2,
    expandSpeed: 0, // It is the time in second to show and hide the content.
    userCollapseText: 'Leer Memos (-)' // Specify your desired word default is Less.
  });

  $('div.expandDiv').expander();
});


</script>



<script type="text/javascript">
window.onload = function() { //tras cargar la página ...
visor1=document.getElementById("visor"); //referencia al visor
//mititulo=document.getElementById("titulo"); //referencia al pie de foto
}
function mifoto(num) { //cambiar la imagen
         //f=""+"foto"+num+".jpg"+")"; ?>
          f="base_url('/bootstrap/img/"+"foto"+num+".jpg"+")"; //ruta de la nueva imagen
         document.images["fotoVisor"].src=f; //cambiar imagen
         t=document.images["fotos"+num].alt; //texto de pie de foto
         mititulo.innerHTML=t; //cambiar pie de foto
        
         }
</script>

</head>
<body>
<html>
  <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header"><!-- inicio control  de adaptacion  de  menu-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
            </div> <!--   fin control  de adaptacion  de  menu-->

            <div id="main-menu" class="main-menu collapse navbar-collapse"> <!--
            div   principal  de menu  de  navegacion -->
                <ul class="nav navbar-nav">
                    <li class="active">
                      
                    </li>

                    <h3 class="menu-title"><a href="<?= base_url();?>">VIAJEROS</a></h3><!-- /.menu-title -->
                    <li class="">
                        <a href="<?= base_url('/index.php/Welcome/createuser'); ?>" class="dropdown-toggle"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-plus"></i>Crear</a>
                    </li>
                    <li class="">
                        <a href="<?=  base_url('/index.php/Welcome/Historial'); ?>" class="dropdown-toggle"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon  fa fa-plus"></i>Consulta Simple Simple</a>
                    </li>
                    <li class="">
                        <a href="<?=  base_url('/index.php/Welcome/consulta')?>" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon  fa fa-envelope"></i>Actualizar</a>
                    </li>
                     <li class="">
                        <a href="<?=  base_url('/index.php/Welcome/Deleteuser')?>" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon  fa fa-envelope"></i>Eliminar</a>
                    </li>
                    <h3 class="menu-title">RUTAS</h3><!-- /.menu-title -->
                    <li class="">
                        <a href="<?= base_url('/index.php/Rutas/createrutas');?>"> <i class="menu-icon fa fa-th"></i>Crear</a>  
                    </li>
                     <li class="">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Consultar</a>
                        
                    </li>
                     <li class="">
                        <a href="<?= base_url('/index.php/Rutas/consulta');?>" class="dropdown-toggle"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Actualizar</a>
                        
                    </li>
                     <li class="">
                        <a href="<?=base_url('/index.php/Rutas/Deleterutas');?>" class="dropdown-toggle"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Eliminar</a>
                        
                    </li>
                  





                    

                    
                    
                    
              
                  
                </ul>
            </div> <!--   fin div   de  navegacion -->
        </nav>
    </aside>

    

    <div id="right-panel" class="right-panel">       
        <!-- Header-->
        <header id="header" class="header">

               
            <div class="header-menu">
            </div>

        </header>
     


