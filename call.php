<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/boot.css">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Solicitar Senha</title>
</head>

<body>
    <header class="container border-bottom">
        <div class="content">
            <div class="content_top">

                <div class="header_top_logo">
                    <a href="">
                        <h1>Gerar Senha</h1>
                    </a>
                </div>

                <div class="header_top_painel">
                    <a href="index.php">Chamar senha</a>
                </div>

                <div class="header_top_painel">
                    <a href="">Login</a>
                </div>

            </div>
        </div>
    </header>
    <main class="container">
        <div class="content">

            <div class="setKey">
                <div class="content">
                    <span id="msgAlert"></span>
                </div>
                <div class="setKeyHeader">
                    <button type="button" onclick="gerarSenha(1)">Convencional</button>
                    <button type="button" onclick="gerarSenha(2)">Preferencial</button>
                </div>

                <!-- SECTION CREATE KEY -->
                <div class="callSetKey">

                    <div class="callSetKeySection">

                        <div class="callSetKeySee">
                            <p class="one">Mesa 5</p>
                            <p class="one">Nome: Uiraquitan</p>
                            <p class="two"> <small>Senha</small> <b id="callSetKeySeeTwo"></b></p>
                            <p class="tree">15:15 09/11/2022</p>
                        </div>

                    </div>
                    <div class="callSetKeys" id="callSetKeys">
                    

                    </div>
                </div>
                <!-- END SECTION CREATE KEY -->

                <!-- SECTION CREATE KEY -->
                <div class="callSetKey">

                    <div class="callSetKeySection">

                        <div class="callSetKeySee">
                            <p class="one">Mesa 5</p>
                            <p class="two"> <small>Senha</small> <b id="callSetKeySeeTwo"></b></p>
                            <p class="tree">15:15 09/11/2022</p>
                        </div>

                    </div>
                    <div class="callSetKeys">
                        <div class="callSetKeysSee">
                            <div class="callSetKeysSees">
                                <p class="one">Mesa 7</p>
                            </div>
                            <div class="callSetKeysSeesTwo">

                                <p class="one"> <small>Senha</small> <b>J8</b></p>
                                <p class="two">15:15 09/11/2022</p>

                            </div>
                        </div>

                        <div class="callSetKeysSee">
                            <div class="callSetKeysSees">
                                <p class="one">Mesa 7</p>
                            </div>
                            <div class="callSetKeysSeesTwo">

                                <p class="one"> <small>Senha</small> <b id="callSetKeySeeTwo"></b></p>
                                <p class="two">15:15 09/11/2022</p>

                            </div>
                        </div>

                        <div class="callSetKeysSee">
                            <div class="callSetKeysSees">
                                <p class="one">Mesa 7</p>
                            </div>
                            <div class="callSetKeysSeesTwo">

                                <p class="one"> <small>Senha</small> <b>J8</b></p>
                                <p class="two">15:15 09/11/2022</p>

                            </div>
                        </div>

                        <div class="callSetKeysSee">
                            <div class="callSetKeysSees">
                                <p class="one">Mesa 7</p>
                            </div>
                            <div class="callSetKeysSeesTwo">

                                <p class="one"> <small>Senha</small> <b>J8</b></p>
                                <p class="two">15:15 09/11/2022</p>

                            </div>
                        </div>

                        <div class="callSetKeysSee">
                            <div class="callSetKeysSees">
                                <p class="one">Mesa 7</p>
                            </div>
                            <div class="callSetKeysSeesTwo">

                                <p class="one"> <small>Senha</small> <b>J8</b></p>
                                <p class="two">15:15 09/11/2022</p>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SECTION CREATE KEY -->

            </div>

        </div>
    </main>
    <footer></footer>
    <script src="./script.js"></script>

</body>

</html>