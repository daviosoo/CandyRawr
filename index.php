<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="public/img/Jimmy.png" type="image/x-png">
    <link rel="stylesheet" href="public/css/style.css">
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
                <a href="index.php"><img class="img-logo" src="public/img/Logo.png" alt="CandyRawr Logo"></a>
            </div>
            <ul class="items">
                <li><a href="index.php">Home</a></li>
                <li><a href="#products">Products</a></li>
                <li><a href="views/productRegister.php">Product Management</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="div-banner">
            <div id="carouselExampleIndicators" class="carousel slide w-100 img-fluid" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="public/img/Bann1.png" class="d-block img-banner" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="public/img/Bann2.png" class="d-block img-banner" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="public/img/Bann3.png" class="d-block img-banner" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="div-products" id="products">
            <div class="div-title">
                <div class="div-title-img">
                    <img src="public/img/Logo-title.png" alt="CandyRawr Logo Title">
                </div>
                <h1>Products</h1>
            </div>
        </div>

        <div class="div-items">
            <a href="">
                <div class="item">
                    <div class="item-img">
                        <img src="public/img/Aros.png" alt="img Item">
                    </div>
                    <div class="item-info">
                        <h3>Trululu Snacks Aros/Caja x 12 Bolsas</h3>
                        <h4>$ 16.200</h4>
                    </div>
                    <button>Add to cart</button>
                </div>
            </a>
            <a href="">
                <div class="item">
                    <div class="item-img">
                        <img src="public/img/Gusanos.png" alt="img Item">
                    </div>
                    <div class="item-info">
                        <h3>Trululu Snacks Gusanos Aceitados/Caja x 12 Bolsas</h3>
                        <h4>$ 16.200</h4>
                    </div>
                    <button>Add to cart</button>
                </div>
            </a>
            <a href="">
                <div class="item">
                    <div class="item-img">
                        <img src="public/img/Splash.png" alt="img Item">
                    </div>
                    <div class="item-info">
                        <h3>Trululu Snacks Splash/Caja x 12 Bolsas</h3>
                        <h4>$ 16.200</h4>
                    </div>
                    <button>Add to cart</button>
                </div>
            </a>
            <a href="">
                <div class="item">
                    <div class="item-img">
                        <img src="public/img/frankie.png" alt="img Item">
                    </div>
                    <div class="item-info">
                        <h3>Trululu Snacks Franki Halloween</h3>
                        <h4>$ 15.900</h4>
                    </div>
                    <button>Add to cart</button>
                </div>
            </a>
            <a href="">
                <div class="item">
                    <div class="item-img">
                        <img src="public/img/masmelos.png" alt="img Item">
                    </div>
                    <div class="item-info">
                        <h3>Trululu Masmelos Barrilete/Caja x 12 Bolsas</h3>
                        <h4>$ 16.200</h4>
                    </div>
                    <button>Add to cart</button>
                </div>
            </a>
        </div>
    </main>

<footer>
    
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>