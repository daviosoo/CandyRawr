<?php
 include ("../Controllers/listController.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ca69e44efc.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../public/img/Jimmy.png" type="image/x-png">
    <link rel="stylesheet" href="../public/css/styleListProduct.css">

    <title>Lista Productos</title>
</head>
<body>

    <header>
        <nav class="nav">
            <div class="div-logo">
                <a href="../index.php"><img class="img-logo" src="../public/img/Logo.png" alt="CandyRawr Logo"></a>
            </div>
            <ul class="items" id="list">
                <li><a href="../index.php">Home</a></li>
                <li><a href="listProduct.php">Products</a></li>
                <li><a href="productRegister.php">Product Management</a></li>
            </ul>
            <span class="bars" id="button"><i class="fas fa-bars"></i></span>
        </nav>
    </header>

    <main id="main">
        <div class="div-items">
            <?php foreach($products as $product):?>
                <div class="item">
                    <div class="item-img">
                        <img src="<?= $product["photo"] ?>" alt="img Item">
                    </div>
                    <div class="item-info">
                        <h3><?= $product["name"]?></h3>
                        <p><?= $product["description"]?></p>
                        <p>Marca <?= $product["brand"]?></p>
                        <h4>$ <?= $product["price"]?></h4>
                    </div>
                    
                    <button href="#" class=" btn btn-primary edit"><i class="fas fa-edit"></i></button>
                    <button href="#" class="delete" data-bs-toggle="modal" data-bs-target="#confirm<?= $product["id"] ?>"><i class="fas fa-trash-alt"></i></button>
                    
                </div>

                     <section>
                        <div class="modal fade" id="confirm<?= $product["id"] ?>" tabindex="-1"  >
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header text-white" style="background-color:#4FC3B3">
                                        <h5 class="modal-title" >Candy Rawr</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="p-modal"> ¿Estás seguro eliminar este producto? </p>
                                        <p class="p-modal"><?= $product["id"] ?></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <a href="../Controllers/deleteProductController.php?id=<?= $product["id"] ?>" class="btn btn-danger">Aceptar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                
            <?php endforeach ?>
        </div>
    </main>

    <footer>
        <div>
            <p>Copyright &#169 2021 CandyRawr - All Rights Reserved</p>
            <a href="https://cutt.ly/OQ6nOwa" target="_BLANK"><i class="fas fa-globe"></i></a>
            <a href="https://github.com/daviosoo" target="_BLANK"><i class="fab fa-github"></i></a>
        </div>
    </footer>
<script src="../public/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>