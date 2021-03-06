<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>House of Burger</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="./style.css">
    <script src="custom.js" defer></script>
</head>

<body>
    <div class="container mx-auto bg-light mt-1 w-90">
        <header class="row">

            <div id="barra_acessibilidade" class="col-12 d-none">
                <ul id="atalhos">
                    <li><a href="#menu" accesskey="1">Ir para menu [1]</a></li>
                    <li><a href="#formulario" accesskey="2">Ir para formulário [2]</a></li>
                </ul>
            </div>


            <div class="col-sm-3">
                <img src="imagens/logo.jpg" width="200" height="200" alt="logotipo house of Burger colorido. ">
            </div>

            <div class="col-sm-9">
                <h1>House of Burger</h1>
            </div>

        </header>

        <section class="row">
            <div class="col-12">
                <h2 class="d-none" id="menu">Menu</h2>
            </div>
            <div class="col-sm-4"></div>

            <div class="col-sm-4">
                <nav class="navbar navbar-expand-lg navbar-light justify-contenty-between">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                        aria-label="Alterna navegação">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Home <span class="sr-only">(Página
                                        atual)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="cardapio.html">Cardápio</a>
                            <li class="nav-item">
                                <a class="nav-link" href="sobre.html">Sobre nós</a>
                            <li class="nav-item">
                                <a class="nav-link" href="formulario.html">Contato</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </section>

        <div class="conteiner">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-ms-6 col-lg-6">
                    <h2>Conteúdo do título</h2>
                    <p>O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo
                        a ser o texto padrão usado por estas indústrias desde o ano de 1500, quando uma misturou os
                        caracteres de um texto para criar um espécime de livro. Este texto não só sobreviveu 5 séculos,
                        mas também o salto para a tipografia electrónica. </p>
                </div>
            
            </div>
        </div>

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imagens/hamburger.jpg" class="d-block w-100" alt="Foto hamburguer de costela artesanal">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Hamburguer Artesanal</h5>
                        <p>Hamburgueres artesanais de Costela.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="imagens/hamburgervegetariano.jpg" class="d-block w-100" alt="Foto hamburguer de Vegetariano ">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Hamburguer Vegetariano </h5>
                        <p>Opção Vegetariano com hamburgueres de soja.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="imagens/combo.jpg" class="d-block w-100" alt="Foto hamburhuer, batata e refrigerante">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Combo</h5>
                        <p>Monte seu combo com batata e refri ou suco.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
  

        <footer class=" row">
            <div class="col-12">
                <p>Copyright © 2022</p>
            </div>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <noscript>Atualize seu navegador</noscript>

</body>

</html>
