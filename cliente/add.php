<?php

include_once('../config/config.php');
include('cliente.php');

if ( isset($_POST) && !empty($_POST) ){
  $p= new cliente();

  $save = $p->save($_POST);
  if ($save){
    $mensaje = '<div class="alert alert-succes" > Cliente registrado </div>';
    } else {
    $mensaje = '<div class="alert alert-danger"> Error al registrar! </div>';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registrar cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container" >
        <?php
         if(isset($mensaje)){
            echo $mensaje;
         }
         ?>
        <h2 class="text-center mb-2" > Registrar Cliente </h2>
        <form method="POST" enctype="multipart/form-data" >

            <div class="row mb-2" >
                <div class="col">
                    <input type="number" name="Nit" id="Nit" placeholder="Nit del cliente" class="form-control"/>
                </div>                    
                <div  class="col">
                    <input type="text" name="NombreoRazonsocial" id="NombreoRazonsocial" placeholder="Nombre o Razon social" class="form-control" />
                </div>
            </div>

            <div class="row mb-2" >
                <div class="col">
                    <input type="text" name="Tipodepersona" id="Tipodepersona" placeholder="Tipo de persona" class="form-control" />
                </div>                    
                <div  class="col">
                    <input type="text" name="Responsabilidad" id="Responsabilidad" placeholder="Responsabilidad" class="form-control" />
                </div>
            </div>

            <div class="row mb-2" >
                <div class="col">
                    <input type="text" name="Direccion" id="Direccion" placeholder="Direccion del cliente" class="form-control" />
                </div>                    
                <div  class="col">
                    <input type="number" name="Telefono" id="Telefono" placeholder="Telefono del cliente" class="form-control" />
                </div>
            </div>

            <div class="row mb-2" >
                <div class="col">
                    <input type="text" name="Personadecontacto" id="Personadecontacto" placeholder="Persona de contacto del cliente" class="form-control" />
                </div>                    
                <div  class="col">
                    <input type="text" name="Ciudad" id="Ciudad" placeholder="Ciudad del cliente" class="form-control" />
                </div>
            </div>

            <div class="row mb-2" >
                <div class="col">
                    <input type="datetime-local" name="Fecha" id="Fecha" class="form-control" />
                </div>                    
                <div  class="col">
                    <input type="email" name="email" id="email" placeholder="email del cliente" class="form-control" />
                </div>
            </div>
            <button class="btn btn-success" > Registrar </button>

        </form>

    </div>
    
</body>
</html>