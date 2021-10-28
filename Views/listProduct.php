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
    <link rel="shortcut icon" href="../public/img/Jimmy.png" type="image/x-png">
    <link rel="stylesheet" href="../public/css/styleListProduct.css">

    <title>Lista Productos</title>
</head>
<body>
    
    <header>
        <nav class="nav">
            <div class="div-logo">
                <a href="index.php"><img class="img-logo" src="../public/img/Logo.png" alt="CandyRawr Logo"></a>
            </div>
            <ul class="items">
                <li><a href="../index.php">Home</a></li>
                <li><a href="listProduct.php">Products</a></li>
                <li><a href="productRegister.php">Product Management</a></li>
            </ul>
        </nav>
    </header>

<main>

    <div class="container">
        <div class="row row-cols-1 row-cols-md-5 g-4">
                
            <?php foreach($products as $product):?>
                <div class="col">
                    <div class="card">
                        <img src="<?php echo($product["photo"]) ?>" class="card-img-top" alt="foto">
                        <div class="card-body">

                            <h5 class="card-title"><?php echo($product["name"])?></h5>
                            <p class="card-text"><?php echo($product["description"])?></p>

                            <a href="#" class="btn btn-primary"><i class="fas fa-trash-alt"></i></a>
                            <a href="#" class="btn btn-primary"><i class="fas fa-edit"></i></a>                            
                            
                        </div>
                    </div>
                </div>
            <?php endforeach ?>

        </div>
    </div>  
      
</main>

    <footer>
        <div>
            <p>Copyright &#169 2021 CandyRawr - All Rights Reserved</p>
            <a href="https://cutt.ly/OQ6nOwa" target="_BLANK"><i class="fas fa-globe"></i></a>
            <a href="https://github.com/daviosoo" target="_BLANK"><i class="fab fa-github"></i></a>
        </div>
    </footer>

</body>
</html>