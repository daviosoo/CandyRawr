<?php

    if(!isset($_SESSION)){
        session_start();
    }

    include("../Models/BaseDatos.php");
    include("../Models/Product.php");

    $id=$_GET["id"];
    
    $product=new Product(null,null,null,null,null);

    $database=new DataBase();
    $result=$database->insertRecord($product->remove($id));

    if($result){

        $_SESSION['mensaje']="Exito eliminando el producto";
        header("Location:../views/productRegister.php");

    }else{

        echo("Tenemos Problemas al eliminar datos");
    }



?>