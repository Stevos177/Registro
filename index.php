<?php 

include('config/config.php');


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> Registro de Clientes </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark mb-6">
        <ul class='navbar-nav' >
            <li class="nav-item">
                <a class="nav-link" href="<?= ROOT ?>/cliente/add.php"> Registro Cliente</a>
            </li>
            <li class="nav-item" >
                <a class="nav-link" href="<?php echo ROOT ?>/cliente/index.php"> Clientes </a>
            </li>
        </ul>
    </nav>
    <div class="container" >
        <h1 class="text-center"> Registro de Clientes </h1>
    </div>
</body>
</html>