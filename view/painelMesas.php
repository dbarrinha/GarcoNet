<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="../resources/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="../resources/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
        <script type="text/javascript" src="../resources/js/plugins/jquery.js"></script>
        <style>
            body {
                display: flex;
                min-height: 100vh;
                flex-direction: column;
                text-decoration: white;
            }

            main {
                flex: 1 0 auto;
            }
            
            @media only screen and (max-width : 992px) {
                header, main, footer {
                  padding-left: 0;
                }
              }
        </style>
    </head>

    <body>
        <!-- Dropdown Structure -->
        <ul id='dropdown1' class='dropdown-content deep-purple darken-4 '>
            <li><a class="white-text" href="#!">Perfil</a></li>
            <li class="divider" tabindex="-1"></li>
            <li><a class="white-text" href="#!">teste</a></li>
            <li><a class="white-text" href="#!"><i class="material-icons right">directions_run</i>Sair</a></li>
        </ul>
        <div class="navbar-fixed ">
            <nav class="z-depth-3 deep-purple darken-4 " >
                <div class="nav-wrapper container ">
                    <a href="../index.php" class="brand-logo">GarçoNet</a>
                    <ul class="right hide-on-med-and-down">

                        <li><a href="#">Painel</a></li>
                        <!-- Dropdown Trigger -->
                        <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Usuário<i class="material-icons right">person</i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- Fim Barra de Navegação-->

        <!-- DIALOGS DA PÁGINA -->
        <?php include './dialogs/acoesMesa.php'; ?>
        <?php include './dialogs/diretoNoBalcao.php'; ?>

        <div class="container" style="min-height: 700px; margin-top: 65px;">
            <div class="row">

                <div class="col s12 m4">
                    <div class="card hoverable deep-purple darken-4">
                        <div class="card-content  white-text">
                            <span class="card-title">Mesa 1</span>
                            <hr/>
                            <p>Atendente: Campo Maior</p>
                            <p>Status: Ocupada</p>
                            <p>Iniciada às: 21:30</p>
                        </div>
                        <div class="card-action">
                            <a class="waves-effect waves-light modal-trigger" href="#modal1">Ações</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card hoverable deep-purple darken-4">
                        <div class="card-content white-text">
                            <span class="card-title">Mesa 2</span>
                            <hr/>
                            <p>Atendente: Campo Maior</p>
                            <p>Status: Ocupada</p>
                            <p>Iniciada às: 21:30</p>
                        </div>
                        <div class="card-action">
                            <a class="waves-effect waves-light modal-trigger" href="#modal1">Ações</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card hoverable deep-purple darken-4">
                        <div class="card-content white-text">
                            <span class="card-title">Mesa 3</span>
                            <hr/>
                            <p>Atendente: Campo Maior</p>
                            <p>Status: Ocupada</p>
                            <p>Iniciada às: 21:30</p>
                        </div>
                        <div class="card-action ">
                            <a class="waves-effect waves-light modal-trigger" href="#modal1">Ações</a>
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
        <script>
            $(document).ready(function () {
                $('.modal').modal();
                $('.dropdown-trigger').dropdown();
            });
        </script>
        <script type="text/javascript" src="../resources/js/materialize.min.js"></script>
    </body>

</html>


