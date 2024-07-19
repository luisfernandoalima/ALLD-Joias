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
    <!-- Slick -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/menu/menu.css">
    <link rel="stylesheet" href="../assets/css/animations.css">
    <link rel="stylesheet" href="../assets/css/main/main-page.css">
</head>

<body>
    <aside class="extra-bar" id="top">
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
    <main>
        <!-- Carrossel de apresentação -->
        <div class="carousel-events" style="width: 100%;">
            <div id="carousel-events" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <picture>
                            <source media="(max-width: 818px)" srcset="../assets/img/objects/inicioMobile01.png" type="image/png">
                            <img src="../assets/img/objects/inicio01.jpg" class="d-block w-100" alt="Elegância em cada detalhe">
                        </picture>
                    </div>
                    <div class="carousel-item">
                        <picture>
                            <source media="(max-width: 818px)" srcset="../assets/img/objects/inicioMobile02.png" type="image/png">
                            <img src="../assets/img/objects/inicio02.jpg" class="d-block w-100" alt="Eternize seu sonho">
                        </picture>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-events" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel-events" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Categorias -->
        <section class="categoria-div">
            <h1 class="title-main">CATEGORIAS</h1>
            <p class="subtitle-main">Navegue pelas categorias</p>
            <div class="row" style="width: 80%;">
                <div class="col-6 col-sm-6 col-md-3">
                    <div class="item-categoria" style="background-image: url('../assets/img/objects/categoria-aneis.jpg');">
                        <h2>Aneis</h2>
                        <a href=""><button>Ver mais</button></a>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <div class="item-categoria" style="background-image: url('../assets/img/objects/categoria-brincos.jpg');">
                        <h2>Brincos</h2>
                        <a href=""><button>Ver mais</button></a>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <div class="item-categoria" style="background-image: url('../assets/img/objects/categoria-colares.jpg')">
                        <h2>Colares</h2>
                        <a href=""><button>Ver mais</button></a>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <div class="item-categoria" style="background-image: url('../assets/img/objects/categoria-pulseiras.jpg');">
                        <h2>Pulseiras</h2>
                        <a href=""><button>Ver mais</button></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Carrossel de categorias -->
        <div class="carousel-produtos" style="width: 100%;">
            <div id="carousel-produtos" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="">
                            <picture>
                                <source media="(max-width: 818px)" srcset="../assets/img/objects/inicioMobile03.png" type="image/png">
                                <img src="../assets/img/objects/inicio03.png" class="d-block w-100" alt="Presenteie que você ama">
                            </picture>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="">
                            <picture>
                                <source media="(max-width: 818px)" srcset="../assets/img/objects/inicioMobile04.png" type="image/png">
                                <img src="../assets/img/objects/inicio04.png" class="d-block w-100" alt="Para homens de personalidade">
                            </picture>
                        </a>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-produtos" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel-produtos" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Novidades -->
        <section class="novidades-div">
            <h1 class="title-main">CATEGORIAS</h1>
            <p class="subtitle-main">Navegue pelas categorias</p>
            <div class="carousel-novidades">
                <button type="button" class="slick-prev">Previous</button>
                <div class="slide-novidades">
                    <div class="item-card">
                        <a href="">
                            <div class="item-img">
                                <img src="../assets/img/produtos/aliancas.jpg" alt="">
                            </div>
                            <div class="item-info">
                                <p class="item-name">Aliança de Ouro 500 quilates</p>
                                <div class="item-rate">
                                </div>
                                <div class="item-price">
                                    <p>R$1.450,00</p>
                                    <p style="font-weight: 500;">ou 6X de R$10,00 sem juros</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item-card">
                        <a href="">
                            <div class="item-img">
                                <img src="../assets/img/produtos/aliancas.jpg" alt="">
                            </div>
                            <div class="item-info">
                                <p class="item-name">Aliança de Ouro 500 quilates</p>
                                <div class="item-rate">
                                </div>
                                <div class="item-price">
                                    <p>R$1.450,00</p>
                                    <p style="font-weight: 500;">ou 6X de R$10,00 sem juros</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item-card">
                        <a href="">
                            <div class="item-img">
                                <img src="../assets/img/produtos/aliancas.jpg" alt="">
                            </div>
                            <div class="item-info">
                                <p class="item-name">Aliança de Ouro 500 quilates</p>
                                <div class="item-rate">
                                </div>
                                <div class="item-price">
                                    <p>R$1.450,00</p>
                                    <p style="font-weight: 500;">ou 6X de R$10,00 sem juros</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item-card">
                        <a href="">
                            <div class="item-img">
                                <img src="../assets/img/produtos/aliancas.jpg" alt="">
                            </div>
                            <div class="item-info">
                                <p class="item-name">Aliança de Ouro 500 quilates</p>
                                <div class="item-rate">
                                </div>
                                <div class="item-price">
                                    <p>R$1.450,00</p>
                                    <p style="font-weight: 500;">ou 6X de R$10,00 sem juros</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item-card">
                        <a href="">
                            <div class="item-img">
                                <img src="../assets/img/produtos/aliancas.jpg" alt="">
                            </div>
                            <div class="item-info">
                                <p class="item-name">Aliança de Ouro 500 quilates</p>
                                <div class="item-rate">
                                </div>
                                <div class="item-price">
                                    <p>R$1.450,00</p>
                                    <p style="font-weight: 500;">ou 6X de R$10,00 sem juros</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item-card">
                        <a href="">
                            <div class="item-img">
                                <img src="../assets/img/produtos/aliancas.jpg" alt="">
                            </div>
                            <div class="item-info">
                                <p class="item-name">Aliança de Ouro 500 quilates</p>
                                <div class="item-rate">
                                </div>
                                <div class="item-price">
                                    <p>R$1.450,00</p>
                                    <p style="font-weight: 500;">ou 6X de R$10,00 sem juros</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="voltar-div">
                <a href="#top">
                    <div class="icon-back-area">
                        <i class="fa-solid fa-arrow-up" style="color: #000000;"></i>
                    </div>
                    <p class="pageUpText">VOLTAR AO TOPO</p>
                </a>
            </div>
        </section>
    </main>


    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js" integrity="sha512-h9kKZlwV1xrIcr2LwAPZhjlkx+x62mNwuQK5PAu9d3D+JXMNlGx8akZbqpXvp0vA54rz+DrqYVrzUGDMhwKmwQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.2.1/jquery-migrate.min.js" integrity="sha512-fDGBclS3HUysEBIKooKWFDEWWORoA20n60OwY7OSYgxGEew9s7NgDaPkj7gqQcVXnASPvZAiFW8DiytstdlGtQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- JS -->
    <script type="module" src="../assets/js/menu/menu.js"></script>
    <script type="text/javascript" src="../assets/js/main-page/slide.js"></script>
</body>

</html>