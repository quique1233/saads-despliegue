
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sistema de Apoyo a la Empresa TIS</title>

    <!-- Core CSS - Include with every page -->
    <link href="../../lib/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../lib/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Dashboard -->
    <link href="../../lib/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <link href="../../lib/css/plugins/timeline/timeline.css" rel="stylesheet">
   

    <!-- SB Admin CSS - Include with every page -->
    <link href="../../lib/css/sb-admin.css" rel="stylesheet">
    
    
    
    

</head>

<body>

   
    <div id="wrapper">
       
        
		<!--<h2>design by <a href="#" title="flash templates">flash-templates-today.com</a></h2>-->
        
	
        
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../../index.php">Inicio </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-files-o "></i> Documentos <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                            <a href="../vista/subir-archivo-asesor.php">Subir Documentos</a>
                                </li>
                                <li>
                                    <a href="../vista/registrar-documentos-requeridos.php">Registrar Documentos</a>
                                </li>
                                
                                <li>
                                    <a href="#">Publicaci&oacute;n Documentos <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        
                                        <li>
                                            <a href="publicar-asesor.php">Nueva Publicaci&oacute;n </a>
                                        </li>
                                        <li>
                                            <a href="publicacion-form.php">Publicaciones </a>
                                        </li>
                                       
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                                <li>
                                    <a href="#">Recepci&oacute;n Documentos <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="documentos-recibidos.php">Documentos Recibidos</a>
                                        </li>
                                        <li>
                                            <a href="configuracion-fechas-recepcion.php" ><span class="fa fa-calendar-o"></span> Configuraci&oacute;n de Fechas para la Recepci&oacute;n de Documentos</a>
                                            
                                        </li>
         
                                    </ul>
                                </li>
                               
                            </ul>
                            
                            <!-- /.nav-second-level -->
                        </li>
                        
                         <li>
                            <a href="#"><i class="fa fa-tasks fa-fw"></i> Tareas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="orden-de-cambio.php">Emitir Orden de Cambio</a>
                                </li>
                                <li>
                                    <a href="notificacion-conformidad.php">Emitir Notificaci&oacute;n de Conformidad</a>
                                </li>
                                <li>
                                    <a href="#">Seguimiento Grupo Empresa <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        
  
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                                <li>
                                        <a href="#">Evaluacion Grupo Empresa<span class="fa arrow"></span></a>
                                            <ul class="nav nav-third-level">
                                                <li>
                                                    <a href="crear-modalidad-evaluacion.php">Criterio de Evaluaci&oacute;n </a>                             
                                                </li>
                                                <li>
                                                    <a href="crear-modalidad-calificacion.php"> Criterio de Calificaci&oacute;n</a>
                                                </li>
                                                 <li>
                                                    <a href="eliminar-criterio-calificacion.php"> Eliminar Criterio de Calificaci&oacute;n</a>
                                                </li>
                                                <li>
                                                    <a href="crear-formulario.php">Crear Formulario de Evaluacion</a>
                                                </li>
                                                <li>
                                                    <a href="eliminar-formulario.php">Eliminar Formulario de Evaluacion</a>
                                                </li>
                                                <li>
                                                    <a href="seleccionar-formulario.php"> Seleccionar Formulario de Evaluacion </a>   
                                                </li>
                                                <li>
                                                    <a href="evaluar-grupo-empresa.php">Evaluar Grupo Empresa </a>   
                                                </li>
                                            </ul>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-warning fa-fw"></i> Notificaciones</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-building-o fa-fw"></i> Actividades<span class="fa arrow"></span></a>
                            
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-question-circle fa-fw"></i> Ayuda <span class="fa arrow"></span></a>
                            
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Recepci&oacute;n de propuestas </h2>
                    <div class="col-lg-6" >
                        
                            <div class="form-group">
                                <?php
                                   include './copiar-contenido-carpeta.php';
                                   

                                //primero creamos la función que hace la magia
                                      //esta funcion recorre carpetas y subcarpetas
                                      //añadiendo todo archivo que encuentre a su paso
                                      //recibe el directorio y el zip a utilizar
                                      function agregar_zip($dir, $zip){
                                        //verificamos si $dir es un directorio
                                        if (is_dir($dir)) {
                                          //abrimos el directorio y lo asignamos a $da
                                          if ($da = opendir($dir)) {          
                                            //leemos del directorio hasta que termine
                                            while (($archivo = readdir($da))!== false) {  
                                              //Si es un directorio imprimimos la ruta
                                              //y llamamos recursivamente esta función
                                              //para que verifique dentro del nuevo directorio
                                              //por mas directorios o archivos
                                              if (is_dir($dir . $archivo) && $archivo!="." && $archivo!=".."){
                                                //echo "<strong>Creando directorio: $dir$archivo</strong><br/>";                
                                                agregar_zip($dir.$archivo . "/", $zip);  

                                              //si encuentra un archivo imprimimos la ruta donde se encuentra
                                              //y agregamos el archivo al zip junto con su ruta
                                              }elseif(is_file($dir.$archivo) && $archivo!="." && $archivo!=".."){
                                                //echo "Agregando archivo: $dir$archivo <br/>";                                    
                                                $zip->addFile($dir.$archivo, $dir.$archivo);                    
                                              }            
                                            }
                                            //cerramos el directorio abierto en el momento
                                            closedir($da);
                                          }
                                        }      
                                      } //fin de la función

                                      //creamos una instancia de ZipArchive      
                                      $zip = new ZipArchive();
                                      
                                      
                                      copiar($_POST['idAsesor']);

                                      //directorio a comprimir
                                      //la barra inclinada al final es importante
                                      //la ruta debe ser relativa no absoluta      
                                      $dir = '../documentos-cargados/temporal/';

                                      //ruta donde guardar los archivos zip, ya debe existir
                                      
                                      $rutaFinal="../documentos-cargados/";

                                      $archivoZip = "Zip_dir_documentos.zip";  

                                      if($zip->open($archivoZip,ZIPARCHIVE::CREATE)===true) {  
                                        agregar_zip($dir, $zip);
                                        $zip->close();

                                        //Muevo el archivo a una ruta
                                        //donde no se mezcle los zip con los demas archivos
                                        @rename($archivoZip, "$rutaFinal$archivoZip");

                                        //Hasta aqui el archivo zip ya esta creado

                                        //Verifico si el archivo ha sido creado
                                        if (file_exists($rutaFinal.$archivoZip)){
                                          echo "Sus documentos estan comprimidos y listos para su descarga... <br><br>
                                               Descargar: <a class='btn btn-primary' btn-default btn-lg btn-block' href='$rutaFinal$archivoZip'>$archivoZip</a>";  
                                        }else{
                                          echo "Error, archivo zip no ha sido creado!!";
                                        }                    
                                      }
                                      eliminarDir("../documentos-cargados/temporal")
                                ?>
                            </div>
                        
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="../../lib/js/jquery-1.10.2.js"></script>
    <script src="../../lib/js/bootstrap.min.js"></script>
    <script src="../../lib/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Dashboard -->
    <script src="../../lib/js/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="../../lib/js/plugins/morris/morris.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="../../lib/js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
    <script src="../../lib/js/demo/dashboard-demo.js"></script>

</body>

</html>