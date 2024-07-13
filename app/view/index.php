<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALLD Joias - Página Inicial</title>
    <link rel="shortcut icon" href="../assets/img/objects/ALLDLogoRedondo.png" type="image/x-icon">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/b95d68622e.js" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/header/header.css">
    <link rel="stylesheet" href="../assets/css/animations.css">
</head>

<body>
    <aside class="extra-bar">
        <div><i class="fa-solid fa-truck-fast" style="color: #000000;"></i> Frete grátis</div>
        <div><i class="fa-solid fa-credit-card" style="color: #000000;"></i> Até 12X sem juros</div>
        <div><i class="fa-solid fa-phone" style="color: #000000;"></i> Ligue: (00) 0000-0000</div>
        <div><i class="fa-brands fa-whatsapp" style="color: #000000;"></i> Chame no WhatsApp</div>
    </aside>
    <header>
        <div class="container-fluid">
            <div class="row">
                <!-- Logo -->
                <div class="col-2 col-sm-2" style="display: flex; align-items: center;">
                    <div class="logo-img-area">
                        <a href="" class="logo-img">
                            <img src="../assets/img/objects/ALLDLogoSmall.png" alt="Logo ALLD">
                        </a>
                    </div>
                </div>
                <!-- Barra de pesquisa -->
                <div class="col-8 col-sm-8" style="display: flex; align-items: center; justify-content: center;">
                    <div class="search-bar-div">
                        <form action="" method="get" class="search-bar-forms">
                            <input type="text" name="pesquisa" id="search-bar" placeholder="Busque por joias, alianças...">
                            <button class="search-bar-button">Buscar <i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i></button>
                        </form>
                    </div>
                </div>
                <!-- Área de serviços -->
                <div class="col-2 col-sm-2" style="display: flex; align-items: center; justify-content: center;">
                    <div class="service-div">
                        <div class="user-div">
                            <a href="">
                                <div class="user-icon">
                                    <i class="fa-solid fa-user" style="color: #000000;"></i>
                                </div>
                                <div class="user-text">Minha Conta</div>
                            </a>
                        </div>
                        <div class="cart-div">
                            <div class="cart-icon">
                                <i class="fa-solid fa-bag-shopping" style="color: #000000;"></i>
                            </div>
                            <div class="cart-text">
                                Carrinho
                            </div>
                        </div>
                    </div>
                    <!-- Menu hamburgue -->
                    <input type="checkbox" name="" id="checkbox-menu">
                    <label for="checkbox-menu" class="label-menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </label>
                </div>
            </div>
        </div>
        <!-- Links de Navegação -->
        <nav>
            <ul class="links">
                <li><a href="">Novidades</a></li>
                <li><a href="">Joias</a></li>
                <li><a href="">Acessórios</a></li>
                <li><a href="">Casamento</a></li>
                <li><a href="">Anéis</a></li>
                <li><a href="">Brincos</a></li>
                <li><a href="">Correntes</a></li>
            </ul>
        </nav>
        <div class="mobile-nav">
            <div class="container-fluid">
                <div class="row">
                    <!-- Barra de pesquisa mobile -->
                    <div class="col-10">
                        <div class="search-bar-mobile-div">
                            <form action="" method="get" class="search-bar-mobile-forms">
                                <input type="text" name="pesquisa" id="search-bar-mobile" placeholder="Busque por joias, alianças...">
                                <button class="search-bar-mobile-button"><i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-2">
                        <i class="fa-solid fa-bag-shopping shopping-cart-mobile" style="color: #000000; font-size: 1.8em;"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carrinho -->
        <div class="shop-cart disable">
            <div class="shop-cart-header">
                <div class="row">
                    <div class="col-10" style="display: flex; align-items: center; justify-content: start;">
                        <p class="shop-cart-title">
                            <i class="fa-solid fa-bag-shopping" style="color: #000000;"></i>
                            <strong>Carrinho</strong>
                        </p>
                    </div>
                    <div class="col-2" style="display: flex; align-items: center; justify-content: center;">
                        <i class="fa-solid fa-x close-button" style="color: #000000;"></i>
                    </div>
                </div>
            </div>
            <div class="shop-cart-content">
                <div class="shop-cart-item">
                    <div class="row">
                        <div class="col-3">
                            <div class="shop-cart-item-img">
                                <img src="../assets/img/objects/ALLDLogo.png" alt="">
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="shop-cart-item-info">
                                <p>Nome do produto</p>
                                <div class="row">
                                    <div class="col-9 shop-cart-quant-area">
                                        <div class="shop-cart-minus">-</div>
                                        <input type="text" class="shop-cart-quant-input">
                                        <div class="shop-cart-plus">+</div>
                                    </div>
                                    <div class="col-3 shop-cart-trash">
                                        <i class="fa-solid fa-trash" style="color: #ff4747;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shop-cart-bottom">
                <div class="shop-cart-price">
                    <p>Valor total:</p>
                    <p>R$<span>0,00</span></p>
                </div>
                <a href="">
                    <button>
                        FINALIZAR
                    </button>
                </a>
            </div>
        </div>
        <!-- Menu mobile -->
        <div class="menu-mobile disable">
            <div class="close-button-area">
                <i class="fa-solid fa-x close-button-menu" style="color: #000000;"></i>
            </div>
            <div class="menu-mobile-header">
                <a href="">
                    <div class="user-img">
                        <img src="../assets/img/users/user.png" alt="">
                    </div>
                    <div class="texts">
                        <p class="user-name">Luisdddddddddddddddddddddddddd</p>
                        <p class="user-email">luis@gmail.com</p>
                    </div>
                </a>
            </div>
            <hr>
            <div class="nav-links-mobile">
                <nav>
                    <ul class="links-mobile">
                        <li><a href="">Novidades</a></li>
                        <li><a href="">Joias</a></li>
                        <li><a href="">Acessórios</a></li>
                        <li><a href="">Casamento</a></li>
                        <li><a href="">Anéis</a></li>
                        <li><a href="">Brincos</a></li>
                        <li><a href="">Correntes</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>



    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- JS -->
    <script type="module" src="../assets/js/menu.js"></script>
    <script type="module" src="../assets/js/header/header.js"></script>
</body>

</html>