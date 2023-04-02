<?php
 include('../config/config.php');
 include('cliente.php');

 $p = new cliente();
 $cl=$p->getOne($_GET['id']);

if( isset($_POST) && !empty($_POST)){
    $_POST['Nit'] = $cl->Nit;
    if($_FILES['Nit']['NombreoRazonsocial'] !== ''){
        $_POST['Nit'] = saveNit($_FILES);
    }

    $update = $p-> update ($_POST);
    if($update){
      $mensaje = '<div class="alert alert-succes" role="alert"> Cliente modificado con exito. </div>';
    } else {
       $mensaje = '<div class="alert alert-danger" role="alert"> Error. </div>';
   
    } 
} 



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Modificar cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container" >
        <?php
         if(isset($mensaje)){
            echo $mensaje;
         }
         ?>
        <h2 class="text-center mb-2" > Modificar Cliente </h2>
        <form method= "POST" enctype="multipart/form-data" >

            <div class="row mb-2" >
                <div class="col">
                    <input type="number" name="Nit" id="Nit" plac+e
                    holder="Nit del cliente" class="form-control" value="<?=$cl->Nit?>" />
                    <input type="hidden" name="id" value="<?= $cl->id ?>" />
                </div>                    
                <div  class="col">
                    <input type="text" name="NombreoRazonsocial" id="NombreoRazonsocial" placeholder="Nombre o Razon social" class="form-control" value="<?= $cl-> NombreoRazonsocial ?>" />
                </div>
            </div>

            <div class="row mb-2" >
                <div class="col">
                    <input type="text" name="Tipodepersona" id="Tipodepersona" placeholder="Tipo de persona" class="form-control" value="<?= $cl->Tipodepersona ?>"/>
                </div>                    
                <div  class="col">
                    <input type="text" name="Responsabilidad" id="Responsabilidad" placeholder="Responsabilidad" class="form-control" value="<?= $cl->Responsabilidad ?>" />
                </div>
            </div>

            <div class="row mb-2" >
                <div class="col">
                    <input type="text" name="Direccion" id="Direccion" placeholder="Direccion del cliente" class="form-control" value="<?= $cl->Direccion ?>" />
                </div>                    
                <div  class="col">
                    <input type="number" name="Telefono" id="Telefono" placeholder="Telefono del cliente" class="form-control" value="<?= $cl->Telefono ?>" />
                </div>
            </div>

            <div class="row mb-2" >
                <div class="col">
                    <input type="text" name="Personadecontacto" id="Personadecontacto" placeholder="Persona de contacto del cliente" class="form-control" value="<?= $cl->Personadecontacto ?>" />
                </div>                    
                <div  class="col">
                    <input type="text" name="Ciudad" id="Ciudad" placeholder="Ciudad del cliente" class="form-control" value="<?= $cl->Ciudad ?>" />
                </div>
            </div>

            <div class="row mb-2" >
                <div class="col">
                    <input type="datetime-local" name="Fecha" id="Fecha" class="form-control"/>
                </div>                    
                <div  class="col">
                    <input type="email" name="email" id="email" placeholder="email del cliente" class="form-control" value="<?= $cl->email ?>" />
                </div>
            </div>
            <button class="btn btn-success" > Modificar </button>

        </form>

    </div>
    
</body>
</html>