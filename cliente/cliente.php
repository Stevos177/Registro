<?php

include_once('../config/config.php');
include('../config/database.php');



 class cliente{

    public $conexion;

    function __construct()
    {
        $db = new Database();
        $this->conexion = $db->connectToDatabase();
    }

    function save($params){
        $Nit = $params['Nit'];
        $NombreoRazonsocial = $params['NombreoRazonsocial'];
        $Tipodepersona = $params['Tipodepersona'];
        $Responsabilidad = $params['Responsabilidad'];
        $Direccion = $params['Direccion'];
        $Telefono = $params['Telefono'];
        $Personadecontacto = $params['Personadecontacto'];
        $Ciudad = $params['Ciudad'];
        $imagen = $params['imagen'];
        $email = $params['email'];

        $insert = "INSERT INTO clientes VALUES (NULL, '$Nit', '$NombreoRazonsocial', '$Tipodepersona', '$Responsabilidad', '$Direccion', '$Telefono', '$Personadecontacto', '$Ciudad', '$imagen', '$email')";
        return mysqli_query($this->conexion, $insert);
    }

    function getAll(){

        $sql = "SELECT * FROM clientes";
        return mysqli_query($this->conexion, $sql);
    }

    function getOne($id)
    {
        $sql = "SELECT * FROM clientes WHERE id=$id";
        return mysqli_query($this->conexion, $sql);
    }

    function update($params){
       
        $Nit=$params['Nit'];
        $NombreoRazonsocial=$params['NombreoRazonsocial'];
        $Tipodepersona=$params['Tipodepersona'];
        $Responsabilidad=$params['Responsabilidad'];
        $Direccion=$params['Direccion'];
        $Telefono=$params['Telefono'];
        $Personadecontacto=$params['Personadecontacto'];
        $Ciudad=$params['Ciudad'];
        $imagen=$params['imagen'];
        $email=$params['email'];
        $id=$params['id'];

        $update=" UPDATE clientes SET  Nit='$Nit', NombreoRazonsocial='$NombreoRazonsocial' , Tipodepersona= '$Tipodepersona' , Responsabilidad= '$Responsabilidad' , Direccion= '$Direccion' , Telefono= $Telefono , Personadecontacto= '$Personadecontacto' , Ciudad= '$Ciudad' , imagen= '$imagen' , email= '$email' WHERE id= $id ";

        return mysqli_query ($this->conexion, $update);
    }

    function delete($id){
        $delete = " DELETE FROM clientes WHERE id = $id ";
        return mysqli_query($this->conexion, $delete);

    }


  }
 
?>