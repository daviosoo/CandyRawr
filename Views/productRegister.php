<?php
  if(!isset($_SESSION)){
    session_start();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/823f41097b.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../public/img/Jimmy.png" type="image/x-png">
    <link rel="stylesheet" href="../public/css/styleProductRegiter.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>CandyRawr</title>

</head>
<body>
    <header>
        <nav class="nav">
            <div class="div-logo">
                <a href="../index.php"><img class="img-logo" src="../public/img/Logo.png" alt="CandyRawr Logo"></a>
            </div>
            <ul class="items">
                <li><a href="../index.php">Home</a></li>
                <li><a href="../#products">Products</a></li>
                <li><a href="productRegister.php">Product Management</a></li>
            </ul>
        </nav>
    </header>

    <main>

        
        
        <div class="div-register">
            <div class="register-form">
                <div class="div-products">
                    <div class="div-title">
                        <div class="div-title-img">
                            <img src="../public/img/Logo-title.png" alt="CandyRawr Logo Title">
                        </div>
                        <h1>Product Management</h1>
                    </div>
                </div>
                <form action="../Controllers/prController.php" method="POST" class="form">

                    <input type="text" placeholder="Name" class="input-form" name="name">
                    <input type="text" placeholder="Brand" class="input-form" name="brand">
                    <input type="text" placeholder="Price" class="input-form" name="price">
                    <input type="text" placeholder="Photo" class="input-form" name="photo">
                    <textarea placeholder="Description" class="input-form area" name="description"></textarea>

                    <input type="submit" class="input-form submit" value="ADD" name="button">
                </form>
            </div>
            <div class="jimmy-img"><img src="../public/img/Jimmy.png" alt="Jimmy"></div>
            
        </div>

    </main>

    <section>
      <?php if(isset($_SESSION['mensaje'])):?>
        <div class="modal fade" id="modal" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header text-white" style="background-color:#4FC3B3">
                <h5 class="modal-title" id="exampleModalLabel">CandyRawr</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body text-dark" >
                <h5><?php echo($_SESSION['mensaje'])?></h5>
              </div>
            </div>
          </div>
        </div>
      <?php unset($_SESSION['mensaje'])?>
      <?php endif ?>
    </section>

    <footer>
    <div>
        <p>Copyright &#169 2021 CandyRawr - All Rights Reserved</p>
        <a href="https://cutt.ly/OQ6nOwa" target="_BLANK"><i class="fas fa-globe"></i></a>
        <a href="https://github.com/daviosoo" target="_BLANK"><i class="fab fa-github"></i></a>
    </div>
    </footer>

<script type="module" src="../public/js/showmodal.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>