 <?php  
 include '../modelo/conexion.php';
 session_start();
 $uActivo = $_SESSION['usuario'];
 $conectar=new conexion();
 ?> 
  <!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sistema de Apoyo a la Empresa TIS</title>

    <!-- JQuery -->
    <script type="text/javascript" src="../../lib/lib/jquery-2.1.0.min.js"></script>
    <!-- icheck -->
    <link href="../../lib/icheck/skins/square/green.css" rel="stylesheet">
    <script src="../../lib/lib/icheck.min.js"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../../lib/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="../../lib/lib/bootstrap.js"></script>
    <!-- Docs -->
    <link rel="stylesheet" type="text/css" href="../../lib/lib/css/docs.css">
    <!-- Font-Awesome -->
    <link rel="stylesheet" type="text/css" href="../../lib/font-awesome/css/font-awesome.css">
    <!-- Bootstrap-datetimepicker -->
    <link rel="stylesheet" type="text/css" href="../../lib/lib/css/bootstrap-datetimepicker.css">
    <script type="text/javascript" src="../../lib/lib/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="../../lib/lib/bootstrap-datetimepicker.es.js"></script>
    <!-- Bootstrap-multiselect -->
    <link rel="stylesheet" type="text/css" href="../../lib/lib/css/bootstrap-multiselect.css">
    <script type="text/javascript" src="../../lib/lib/bootstrap-multiselect.js"></script>
    <!-- Bootstrap-validator -->
    <link rel="stylesheet" type="text/css" href="../../lib/lib/css/bootstrapValidator.css">
    <script type="text/javascript" src="../../lib/lib/bootstrapValidator.js"></script>
    <!-- Validators -->
    <script type="text/javascript" src="../../lib/lib/validator/diferenteActividadPlanificacion.js"></script>
    <script type="text/javascript" src="../../lib/lib/validator/diferenteEntregable.js"></script>
    <script type="text/javascript" src="../../lib/lib/validator/stringLength.js"></script>
    <script type="text/javascript" src="../../lib/lib/validator/notEmpty.js"></script>
    <script type="text/javascript" src="../../lib/lib/validator/callback.js"></script>
    <script type="text/javascript" src="../../lib/lib/validator/date.js"></script>
    <script type="text/javascript" src="../../lib/lib/validator/numeric.js"></script>
    <script type="text/javascript" src="../../lib/lib/validator/porcentajeMax.js"></script>
    <script type="text/javascript" src="../../lib/lib/validator/porcentajeMin.js"></script>
    <!-- JS -->
    <script type="text/javascript" src="../../lib/lib/funcion.js"></script>
    <script type="text/javascript" src="../../lib/lib/funcionSeguimiento.js"></script>




    <link href="../../lib/css/plugins/timeline/timeline.css" rel="stylesheet">
    <!-- SB Admin CSS - Include with every page -->
    <link href="../../lib/css/sb-admin.css" rel="stylesheet">
    <link href="../../css/estilos-vista/style.css" rel="stylesheet" type="text/css" />
    
    
    <script>
        $(document).ready(function(){
            
            $('#btn-registrarUser').click(function(){

    
                               
                if($("form")[0].checkValidity()) 
                {
                    var url = "actualizar-registro-asesor.php"

                    $.ajax({
                        url: url,
                        type: 'POST',
                        data: $('#FormularioRegistroUsuario').serialize(),

                        success: function(data){

                            $('#panelResultado').html(data)

                        }
                    });

                        return false;
                }
       
            });      
        });
    </script>

</head>

<body>

   
<div id="wrapper">
     <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="inicio-asesor.php">Inicio </a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <li>
                <a href="lista-de-noticias.php"><i class="glyphicon glyphicon-comment"></i> Foro</a>
            </li>

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <?php echo $uActivo.' '; ?><i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">

                    <li>
                        <a href="modificar-asesor.php"><i class="fa fa-user fa-fw"></i> Modificar Datos personales</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="unlog.php"><i class="fa fa-sign-out fa-fw"></i>Salir</a>
                    </li>
                </ul>
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="administrar-grupo-empresa.php"><i class="glyphicon glyphicon-book"></i> Administrar Grupo Empresas</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-files-o "></i> Documentos <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="../vista/documentos-generados.php">Contratos Emitidos</a>
                            </li>
                            <li>
                                <a href="lista-doc-subidos.php">Documentos Subidos </a>  
                            </li>
                            <li>
                                <a href="documentos-recibidos.php">Documentos Recibidos</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-tasks fa-fw"></i> Tareas<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="inscripcion-proyecto.php">Registrar Proyecto</a>
                            </li>
                            <li>
                                <a href="../vista/subir-archivo-asesor.php">Subir Documentos</a>
                            </li>
                            <li>
                                <a href="../vista/registrar-documentos-requeridos.php">Registrar Documentos Requeridos</a>
                            </li>
                            
                            <li>
                                <a href="configuracion-fechas-recepcion.php" >Configurar Fechas para la Recepci&oacute;n de Documentos</a>
                            </li>
                            <li>
                                <a href="../vista/publicar-asesor.php">Crear Publicaci&oacute;n </a>
                            </li>
                            <li>
                                <a href="orden-de-cambio.php">Emitir Orden de Cambio</a>
                            </li>
                            <li>
                                <a href="notificacion-conformidad.php">Emitir Notificaci&oacute;n de Conformidad</a>
                            </li>
                            <li>
                                <a href="contrato.php">Emitir Contrato </a>
                            </li>
                            
                        </ul>
                    </li>

                    <li>
                        <a id="SeguimientoSemanal" href="#"><i class="glyphicon glyphicon-list-alt"></i> Seguimiento Semanal</a>
                    </li>

                    <li>
                        <a href="#"><i class="glyphicon glyphicon-th-list"></i> Evaluacion<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="lista-evaluacion.php">Evaluacion 2 Fase </a>                             
                            </li>
                            <li>
                                <a href="#">Evaluacion 3 Fase <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="crear-modalidad-evaluacion.php">Criterio de Evaluaci&oacute;n </a>                             
                                    </li>

                                    <li>
                                        <a href="#">Criterio de Calificaci&oacute;n<span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                            <li>
                                                <a href="crear-modalidad-calificacion.php"> Crear Criterio de Calificaci&oacute;n</a>
                                            </li>
                                            <li>
                                                <a href="eliminar-criterio-calificacion.php"> Eliminar Criterio de Calificaci&oacute;n</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="#">Formulario de Evaluacion<span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                            <li>
                                                <a href="crear-formulario.php">Crear Formulario de Evaluacion</a>
                                            </li>
                                            <li>
                                                <a href="seleccionar-formulario.php"> Habilitar Formulario de Evaluacion </a>   
                                            </li>
                                            <li>
                                                <a href="eliminar-formulario.php">Eliminar Formulario de Evaluacion</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="evaluar-grupo-empresa.php">Evaluar Grupo Empresa </a>   
                                    </li>                                    
                                    
                                </ul>    
                            </li>
                            <li>
                                <a href="../vista/evaluacion-general.php">Evaluacion Final </a>   
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="../vista/publicaciones.php"><i class="fa fa-book"></i> Publicaciones </a>
                    </li>
                </ul><!-- /#side-menu -->
            </div><!-- /.sidebar-collapse -->
        </div>
    </nav>       
        <div class="modal fade modalRegistroAsistencia" role="dialog" data-backdrop="static" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Asistencia</h4>
                    </div>
                    <div class="modal-body">
                        
                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade modalRegistroReportes" role="dialog" data-backdrop="static" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Reportes</h4>
                    </div>
                    <div class="modal-body">
                        
                    </div>
                </div>
            </div>
        </div>

        <div id="page-wrapper">
            <div class="row">
                <?php
                    $nombre;
                    $apellido;
                    $contrasena;
                    $telefono;
                    $correo;
            
                    //Peticion
                    $peticion = $conectar->consulta("SELECT u.PASSWORD_U,u.TELEFONO_U,u.CORREO_ELECTRONICO_U,a.NOMBRES_A,a.APELLIDOS_A FROM  usuario u, asesor a WHERE u.NOMBRE_U=a.NOMBRE_U  and u.NOMBRE_U='$uActivo'");
                    //cerrar conexion--------------------------
                   
                    
                    while($fila = mysql_fetch_array($peticion))
                    {
                        $nombre= $fila["NOMBRES_A"]; 
                        $apellido= $fila["APELLIDOS_A"]; 
                        $contrasena= $fila["PASSWORD_U"]; 
                        $telefono= $fila["TELEFONO_U"]; 
                        $correo= $fila["CORREO_ELECTRONICO_U"]; 
                    }
                ?>
                <div class="col-lg-12">
                    <h2 class="page-header"  >Modificar Informacion Personal</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default" id="configuracionFechas">
                        <div class="panel-body"> 
                                    <form method = "post" id="FormularioRegistroUsuario">
                                       
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                  <span class="glyphicon glyphicon-user"></span>
                                                </span>
                                                <input class="form-control" type="text" name="nombreUsuario" id="UserName" value=" <?php echo $uActivo ?>"  readonly='readonly' >
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                  <span class="glyphicon glyphicon-lock"></span>
                                                </span>
                                                <input class="form-control" type="text" name="password" id="UserPassword" value="Nuevo*123" minlength="5" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$" title="la contraseña debe contener mayusculas, minusculas, caracteres y numeros" required>
                                            </div>
                                        </div>
                                        <br> </br>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                  <span class="glyphicon glyphicon-user"></span>
                                                </span>
                                                <input class="form-control" type="text" name="nombreReal" id="RealName" value="<?php echo $nombre ?>" pattern="^[a-zA-Z\s]{3,25}" title="Ejm: Daniel Marcelo, Rolando" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                  <span class="glyphicon glyphicon-user"></span>
                                                </span>
                                                <input class="form-control" type="text" name="apellido" id="LastName" value="<?php echo $apellido ?>" pattern="^[a-zA-Z\s]{3,25}" title="Ejm: Quiroga Santivanez, Suarez" required>
                                            </div>
                                        </div>
                                        

                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                  <span class="glyphicon glyphicon-earphone"></span>
                                                </span>
                                                <input class="form-control" type="text" name="telefono" id="UserPhone" value="<?php echo $telefono ?>" title="Ejm: 4022371" pattern="\b[4][0-9]{6}" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                  <span class="glyphicon glyphicon-envelope"></span>
                                                </span>
                                                <input class="form-control" type="email" name="email" id="UserEmail" value="<?php echo $correo ?>" pattern="^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$" required>
                                            </div>
                                        </div>
             
                                        <div class="form-group">
                                            <button type="submit" name="submit" class="btn btn-primary" id="btn-registrarUser"> <span class="glyphicon glyphicon-ok"></span> Actualizar</button>
                                        </div>
                                    </form>   
                                    <div id="panelResultado">
      
                                    </div>  
                        </div><!-- /.panel -->
                    </div>
                <!-- /.col-lg-6 -->      
                </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                </div>
            </div><!-- /.row -->

            
        </div><!-- /#page-wrapper -->

    </div>

    <script src="../../lib/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../../lib/js/sb-admin.js"></script>
</body>

</html>
