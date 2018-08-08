<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="../resources/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="../resources/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">

        <style>
            body {
                display: flex;
                min-height: 100vh;
                flex-direction: column;
            }

            main {
                flex: 1 0 auto;
            }
        </style>
    </head>

    <body >

        <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="#!">Perfil</a></li>
            <li><a href="#!">Configurações</a></li>
            <li class="divider"></li>
            <li><a href="../controller/logout.php">Sair</a></li>
        </ul>
        <div class="navbar-fixed ">
            <nav class="z-depth-3 deep-purple darken-4 " >
                <div class="nav-wrapper container ">
                    <a href="../index.html" class="brand-logo">Share Info</a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="newQuest.php">Novo Questionário</a></li>
                        <li><a href="painelUser.php">Painel</a></li>
                        <!-- Dropdown Trigger -->
                        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Usuario<i class="material-icons right">arrow_drop_down</i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- Fim Barra de Navegação-->



        <div class="container"   style="min-height: 700px; margin-top: 65px;">
            

            <div class="row">
                <div class="col s12 m6">
                    <div class="card deep-purple darken-4">
                        <div class="card-content white-text">
                            <span class="card-title">Mesa 1</span>
                            <p>Atendente: Campo Maior</p>
                            <p>Status: Ocupada</p>
                            <p>Iniciada às: 21:30</p>
                        </div>
                        <div class="card-action">
                            <a href="#">Ações</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6">
                    <div class="card deep-purple darken-4">
                        <div class="card-content white-text">
                            <span class="card-title">Mesa 2</span>
                            <p>Atendente: Campo Maior</p>
                            <p>Status: Ocupada</p>
                            <p>Iniciada às: 21:30</p>
                        </div>
                        <div class="card-action">
                            <a href="#">Ações</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6">
                    <div class="card deep-purple darken-4">
                        <div class="card-content white-text">
                            <span class="card-title">Mesa 3</span>
                            <p>Atendente: Campo Maior</p>
                            <p>Status: Ocupada</p>
                            <p>Iniciada às: 21:30</p>
                        </div>
                        <div class="card-action ">
                            <a href="#">Ações</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer class="page-footer deep-purple darken-4">
            <div class="container" >
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Rodapé</h5>
                        <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Links</h5>

                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2018 Copyright Text
                    <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
                </div>
            </div>
        </footer>

        <script src="../resources/js/plugins/init.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
        <script type="text/javascript" src="../resources/js/plugins/jquery.js"></script>
        <script type="text/javascript" src="../resources/js/materialize.min.js"></script>
    </body>

</html>


