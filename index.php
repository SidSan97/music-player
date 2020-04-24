<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css.map">
    <link rel="stylesheet" type="text/css" href="css/tema.css">
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/menu-navbar.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">

    <title>SidSan Music</title>
</head>

 <body style="background-color: black;">
     <section class="menu-principal">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"> SidSan Beats</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">                   
                    <div class="form-inline my-2 my-lg-0 ml-auto">
                        <span class="info-menu">
                            <a class="mr-3">Beats</a>
                            <a class="mr-3">Video</a>
                            <a>Contato</a>
                        </span>

                        <button class="my-2 my-sm-0 ml-3 btn-car"><i class="fas fa-shopping-cart"></i> R$ 0,00 </button>
                        <button class="my-2 my-sm-0 ml-3 mr-2 btn-login"></i>Login</button>
                    </div>                                 
                </div>
            </nav>
     </section>

     <section class="imgbg">
         <input class="input-principal" placeholder="O que você procura hoje?">
         <button type="submit" class="btnSearch-mainMenu"><i class="fas fa-search"></i></button>
        <img src="assets/grafite.jpg" width="100%" height="520px">
     </section>

     <div class="quadrado-play"> 
        <div class="btn" id="playBtn"></div>
        <div class="btn" id="pauseBtn"></div>
    </div>

     <div id="grafico-musica">
        <div id="waveform"></div>
        <div id="progress"></div>
     </div>

     <div>
         teste
     </div>
    
    <script src="js/music-wave.js"></script>
    <script src="js/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>
    <script src="js/bootstrap.min.js"></script>
 </body>
</html>