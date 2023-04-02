<?php

include_once('../config/config.php');
include('cliente.php');

 $p = new cliente();
 $data = $p->getALL();

 if ( isset ( $_GET ['id']) && !empty($_GET['id']) ){
   $remove = $p->delete( $_GET ['id']);
   if ($remove){
    header('Location: '.ROOT.'/cliente/index.php/');
   }
   else{
    $mensaje= '<div class="alert alert-danger" role="alert"> Error al eliminar </div>';
   }
 }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> Lista de Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container" >
        <H2 class="text-center mb-2" > Lista de Clientes </H2>
        <div class="row" >
            <?php
              while($cl = mysqli_fetch_object($data)){
                $date = $cl->Fecha;
                    echo"<div class='col text-center'>";
                        echo "<div class='border border-info p-5'>";
                              echo"<h4> Nit. $cl->Nit - $cl->NombreoRazonsocial
                               </h4>";
                              echo"<h6> Correo. $cl->email
                              </h6>";
                              echo"<h6> Telefono. $cl->Telefono
                               </h6>";
                               echo"<a> Ciudad. $cl->Ciudad 
                               </a>";
                               echo"<p><b>Fecha:</b>".date('D', strtotime($date))." ".date('M-Y H:i', strtotime($date))."</p>";
                            echo "<div class='text-center'>";
                                  echo "<a class='btn btn-success' href='" .ROOT. "/cliente/edit.php?id=$cl->id' > Modificar </a> - <a class= 'btn btn-danger' href =' ".ROOT."/cliente/index.php?id=$cl->id '> Eliminar </a>";
                            echo"</div>";  
                        echo"</div>";        
                            
                    echo"</div>";
            }

            ?>
        </div>


    </div>
    
</body>
</html>