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
        <script src="resources/js/plugins/jquery.maskedinput-1.1.4.pack.js" type="text/javascript" /></script>
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

        <div class="navbar-fixed ">
            <nav class="z-depth-3 deep-purple darken-4 " >
                <div class="nav-wrapper container ">
                    <a href="../index.html" class="brand-logo">Share Info</a>

                </div>
            </nav>
        </div>
        <!-- Fim Barra de Navegação-->

        <div class="container"   style="min-height: 700px; margin-top: 65px;">
            <h5>Dados Gerais</h5>
            <div class="row">
                <div class="input-field col s6">
                    <input  id="first_name" type="text" class="validate">
                    <label for="first_name">Nome da Empresa</label>
                </div>
                <div class="input-field col s6">
                    <input  id="razao_social" type="text" class="validate">
                    <label for="razao_social">Razão Social</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s4">
                    <select>
                        <option value="" disabled selected>Segmento da empresa</option>
                        <option value="1">Pizzaria</option>
                        <option value="2">Pub</option>
                        <option value="3">Loja de Conveniência</option>
                    </select>
                </div>
                <div class="input-field col s4">
                    <input  id="cnpj" type="text" class="validate">
                    <label for="cnpj">CNPJ</label>
                </div>
                
                <div class="input-field col s4">
                    <input id="cep" type="text" class="validate">
                    <label for="cep">CEP</label>
                </div>
                
            </div>
            <h5>Dados de Contato</h5>
            <div class="row">
                
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
        <script src="resources/js/plugins/init.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
        
        <script>
             $(document).ready(function(){
                $('select').formSelect();
                $("#cnpj").mask("99.999.999/9999-99");
                $("#cep").mask("99999-999");
              });
        </script>
        <script type="text/javascript" src="../resources/js/materialize.min.js"></script>
    </body>

</html>


