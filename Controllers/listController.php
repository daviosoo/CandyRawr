<?php

    include("../Models/BaseDatos.php");
    include("../Models/Product.php");

    $product=new Product(null,null,null,null,null);

    $database=new DataBase();
    $products=$database->searchRecord($product->search());


?>