<?php

    if(!isset($_SESSION)){
        session_start();
    }

    include("../Models/BaseDatos.php");
    include("../Models/Product.php");

    if(isset($_POST['editButton'])){

        $id=$_GET["id"];

        $name = $_POST['name'];
        $brand = $_POST['brand'];
        $price = $_POST['price'];
        $description = $_POST['description'];

        $product=new Product($name,$brand,$price,$description,null);

        $dataBase = new DataBase();

        $result = $dataBase->insertRecord($product->edit($id));

        if($result){

            $_SESSION['mensaje']="Exito editando el producto";
            header("Location:../views/productRegister.php");

        }
        else{
            echo('Upss...Tuvimos un problema');
        }

    }
    else{
        echo('No deberías estár aquí');
    }
?>