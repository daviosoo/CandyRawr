<?php

    if(!isset($_SESSION)){
        session_start();
    }

    include("../Models/BaseDatos.php");
    include("../Models/Product.php");

    /* if(isset($_POST["button"])){

        $name=$_POST["name"];
        $brand=$_POST["brand"];
        $price=$_POST["price"];
        $description=$_POST["description"];
        $photo=$_POST["photo"];

        $product=new Product($name,$brand,$price,$description,$photo);

        $database=new DataBase();
        $result=$database->insertRecord($product->register());

        if($result){

            $_SESSION['mensaje']="Exito en el registro";
            header("Location:../views/productRegister.php");

        }else{

            echo("Tenemos Problemas al registar datos");
        }

    }else{

        echo("No deberias estar aqui");
    }
     */

    $name=$_POST["name"];
    $brand=$_POST["brand"];
    $price=$_POST["price"];
    $description=$_POST["description"];
    $photo=$_POST["photo"];

    $product=new Product($name,$brand,$price,$description,$photo);

    $database=new DataBase();
    $result=$database->insertRecord($product->register());

    if($result){

        $_SESSION['mensaje']="Exito en el registro";
        header("Location:../views/productRegister.php");

    }else{

        echo("Tenemos Problemas al registar datos");
    }

?>
