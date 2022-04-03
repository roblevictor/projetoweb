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
                                <a class="nav-link" href="index.php">Home <span class="sr-only">(Página
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
                <div class="col-xs-8 col-sm-4 col-ms-4 col-lg-4">
                    <h2>Hamburgueres Artesanais de Costela</h2>
                    <p>O Lorem Ipsum: é um texto modelo, da indústria, tipográfica . . . . . . R$ 25,90</p>
                    <p> O Lorem Ipsum: é um texto modelo, da indústria, tipográfica . . . . . . R$ 34,90</p>
                    <p> O Lorem Ipsum: é um texto modelo, da indústria, tipográfica . . . . . . R$ 35,90</p>
                    <p> O Lorem Ipsum: é um texto modelo, da indústria, tipográfica . . . . . . R$ 34,90</p>
                </div>

                <div class="col-xs-4 col-sm-2 col-ms-2 col-lg-2">
                    <img src="imagens/hamburger.jpg" class="conteiner">

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-10 col-sm-4 col-ms-4 col-lg-4">
                <h2>Hamburgueres Vegetarianos</h2>
                <p>O Lorem Ipsum: é um texto modelo, da indústria, tipográfica . . . . . . R$ 26,90< <p> O Lorem
                        Ipsum: é um texto modelo, da indústria, tipográfica . . . . . . R$ 30,90</p>
                <p> O Lorem Ipsum: é um texto modelo, da indústria, tipográfica . . . . . . R$ 35,00</p>
                <p>O Lorem Ipsum: é um texto modelo, da indústria, tipográfica . . . . . . R$ 38,90 </p>
            </div>
            <div class="col-xs-2 col-sm-2 col-ms-2 col-lg-2">
                <img src="imagens/hamburgervegetariano.jpg" class="row w-200">

            </div>
        </div>

        <div class="conteiner">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-ms-6 col-lg-6">
                    <h2>Monte seu combo</h2>
                    <p>Da casa: Hamburguer de Costela bacon,batata frita, rerigerante/suco . . . . . . R$ 55,90
                        <p>Verdinho: Hamburguer Vegetariano de soja, batata frita, refrigerante/suco . . . . . . R$
                            58,90</p>
                        <p>Pé na jaca: Hamburguer de jaca, batata frita, refrigerante/suco. . . . . . R$ 52,90</p>
                        <p>O Lorem Ipsum: é um texto modelo, da indústria, tipográfica . . . . . . R$ 34,90</p>
                </div>
                <div class="col-xs-4 col-sm-2 col-ms-2 col-lg-2">
                    <img src="imagens/combo.jpg" class="conteiner">

                </div>
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
