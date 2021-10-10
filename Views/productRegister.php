<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/styleProductRegiter.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Document</title>
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
                <form action="" method="POST" class="form">
                    <input type="text" placeholder="Name" class="input-form">
                    <input type="text" placeholder="Brand" class="input-form">
                    <input type="text" placeholder="Price" class="input-form">
                    <textarea placeholder="Description" class="input-form area"></textarea>

                    <input type="submit" class="input-form submit" value="ADD">
                </form>
            </div>
            <div class="jimmy-img"><img src="../public/img/Jimmy.png" alt="Jimmy"></div>
        </div>

    </main>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>