<?php
include '../../modelo/conexion.php';
//header('Location: ../../crear-modalidad-evaluacion.php');
$textDescripcionD=$_POST["descripcionDocumento"];

$Agregar=$_POST["btnCrearModalidad"];
$co=new conexion();
$idCrit=1;
$idReg=1;

$existeCampo="vacio";
session_start();
$usuarioActivo=$_SESSION['usuario'];


if(isset($Agregar))
{
                
  
                
                 $SQL= "SELECT NOMBRE_CRITERIO_E".
                          " FROM criterio_evaluacion". 
                          " WHERE NOMBRE_CRITERIO_E =  '$textDescripcionD' AND NOMBRE_U = '$usuarioActivo'";
                  $registros=$co->consulta("$SQL",$co);

                    while ($row = mysql_fetch_row($registros)) 
                    {
                        $existeCampo = $row[0];

                    }

                
                if ($existeCampo == "vacio")
                {    
                   
                    if($textDescripcionD !="" )
                    {    


                        $SQL= "insert into criterio_evaluacion values('','$usuarioActivo','$textDescripcionD')"; 

                        $registros=$co->consulta("$SQL",$co);



                        echo "<SCRIPT LANGUAGE='javascript'>". 
                            " alert('Se ha registrado satisfactoriamente el criterio_evaluacion');".
                            " document.location=('../../crear-modalidad-evaluacion.php');</SCRIPT>";
                    }
                    else 
                        
                    {
                          echo "<SCRIPT LANGUAGE='javascript'>". 
                            " alert('Llene un campo valido no puede registrar un espacio en blanco.');".
                            " document.location=('../../crear-modalidad-evaluacion.php');</SCRIPT>";
                    }    
                    
                }
                else 
                {
                    echo "<SCRIPT LANGUAGE='javascript'>". 
                        " alert('EL criterio que ingreso ya se encuentra registrado. ');".
                        " document.location=('../../crear-modalidad-evaluacion.php');</SCRIPT>";
                }
}
?>

