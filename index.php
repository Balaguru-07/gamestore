<!doctype html>
<html lang="pt-br">

    <head>
        <!-- meta tags requeridos -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <title>Bem-vindo(a) ao Maets</title>

        <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="node_modules/bootstrap/compiler/style.css">

        <!-- Meus Css -->
        <link rel="stylesheet" href="public/styles/main.css">
        <link rel="stylesheet" href="public/styles/index.css">
        <link rel="stylesheet" href="public/styles/responsive.css">


        <!-- Icone CSS -->
        <link rel="icon" href="public/img/Icone-novo.png">

    </head>

    <body>

        <?php
            if(isset($_GET['sucess'])){

                if($_GET['sucess'] == 'true'){
                        echo "
                        <script>  
                            setTimeout(() => {
                                alert('Cadastrado com sucesso')
                            }, 500)
                        </script>";
                    }
            }

            require_once('src/global.php');
            require_once('functions/client_functions.php');
            //caminho para o public/
            $path = '';
            
            
        ?>

        <div class="login">
            <a href="register.php">Iniciar sessão</a>
        </div>


        <?php
            header_client($path, true);
        ?>


        <!-- Carrosel -->
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="public/img/death.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>DESTAQUES DA SEMANA</h3>
                            <p>De graça após a compra</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="public/img/lastofus.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>DESTAQUES DA SEMANA </h3>
                            <p>"I've struggled a long time with survivin', but no matter what you have to find something to
                                fight for" -Joel</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="public/img/thewitcher.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="porfora">

            <div class="container pordentro">

                <br>
                <ul class="nav nav-tabs ">
                    <li class="nav-item">
                        <a class="nav-link disabled active" href="#" >Novos e Populares</a>
                    </li>
                </ul>


                <br>

               <?php
                    $products = new Product();
                    listProducts($path, $products->list());
               ?>


            </div>

        </div>


        <div class="trasicion"></div>


        <!-- Footer Register -->
        <footer class="page-footer font-small unique-color-dark">

            <div class="footer-content">
                <div class="container">

                    <!-- Grid row-->
                    <div class="row py-4 d-flex align-items-center">

                        <!-- Grid column -->
                        <div
                            class="col-md-12 col-lg-12 text-center text-md-left mb-4 mb-md-0 d-flex align-items-center justify-content-center form-register">

                            <h3>
                                CRIE SUA CONTA E JOGUE AGORA MESMO!
                            </h3>

                            <form class="register" action="src/controller/register-client.php" method='post'>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nome</label>
                                    <input type="text" name="nome" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Digite seu nome" required>

                                </div>
                                <!-- Email -->
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Endereço de E-mail</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Digite seu E-mail" required>

                                </div>

                                <!-- Senha -->
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Senha</label>
                                    <input type="password" name="senha" class="form-control" id="exampleInputPassword1"
                                        placeholder="Digite sua senha" required>
                                </div>


                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                    <label class="form-check-label" for="exampleCheck1">Você concorda com nossos
                                        termos?</label>
                                </div>

                                <button type="submit" class="btn btn-default-color">Registre-se</button>
                            </form>

                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid column -->

                </div>
        </footer>


        <?php
            footer_client();
            contact_modal();
        ?>

     


        <!-- Optional JavaScript -->
        
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
       <?php
        scripts($path)
       ?>

    </body>
</html>