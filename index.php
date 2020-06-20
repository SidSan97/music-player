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
    <!link rel="stylesheet" href="css/styles.css">

    <title>SidSan Music</title>
</head>

 <body>
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
         <h3 id="songTitle2" class="titleSongMain"></h3>
        <img src="assets/grafite.jpg" width="100%" height="520px">
     </section>

     <div class="quadrado-play"> 
        <img id="bg2" class="bg2" src="foto-albuns/Poster1.jpg">
       
        <button  class="btn_play1" id="play2" onclick="playOrPauseSong()">
            <img src="Play.png" width="80px" height="80px">
        </button>
     </div>

     <div id="grafico-musica">
          <div id="waveform"></div>
          <div id="bar"></div>
          <div id="progress"></div>
     </div>

     <div class="container">
        <section id="menu-musicas-titulos">      
            <ul>
                <li>
                    <article>TÍTULO</article>
                    <article>DURAÇÃO</article>
                    <article>GENÊRO</article>
                    <article>OPÇÕES</article>
                </li>
            </ul>
        </section>

        <section id="menu-musicas-playlist">
            <ul>
                <li> 
                    <article>                 
                        <img src="foto-albuns/Poster1.jpg" width="44px" height="44px">
                        Sabotage - Canal foi tão bom
                    </article>
                    <article>03:25</article>
                    <article>Rap</article>
                    <article>
                        <i class="fas fa-share-alt"></i>
                        <i class="fas fa-download"></i>
                        <button class="btn-car-add">
                            ADD <i class="fas fa-shopping-cart"></i>
                        </button>
                    </article>
                </li>

                <li> 
                    <article>                 
                        <img src="foto-albuns/Poster2.jpg" width="44px" height="44px">
                        Xxxtentacion - Look at me
                    </article>
                    <article>03:25</article>
                    <article>Hip-Hop</article>
                    <article>
                        <i class="fas fa-share-alt"></i>
                        <i class="fas fa-download"></i>
                        <button class="btn-car-add">
                            ADD <i class="fas fa-shopping-cart"></i>
                        </button>
                    </article>
                </li>

                <li> 
                    <article>                 
                        <img src="foto-albuns/Poster3.jpg" width="44px" height="44px">
                        Ali Bomaye (Instrumental)
                    </article>
                    <article>03:25</article>
                    <article>Hip-Hop</article>
                    <article>
                        <i class="fas fa-share-alt"></i>
                        <i class="fas fa-download"></i>
                        <button class="btn-car-add">
                            ADD <i class="fas fa-shopping-cart"></i>
                        </button>
                    </article>
                </li>

                <li> 
                    <article>                 
                        <img src="foto-albuns/Poster4.jpg" width="44px" height="44px">
                        TOER - Build 7600 
                    </article>
                    <article>03:25</article>
                    <article>Eletronica</article>
                    <article>
                        <i class="fas fa-share-alt"></i>
                        <i class="fas fa-download"></i>
                        <button class="btn-car-add">
                            ADD <i class="fas fa-shopping-cart"></i>
                        </button>
                    </article>
                </li>

                <li> 
                    <article>                 
                        <img src="foto-albuns/Poster5.jpg" width="44px" height="44px">
                        DRE - Still
                    </article>
                    <article>03:25</article>
                    <article>Hip-Hop</article>
                    <article>
                        <i class="fas fa-share-alt"></i>
                        <i class="fas fa-download"></i>
                        <button class="btn-car-add">
                            ADD <i class="fas fa-shopping-cart"></i>
                        </button>
                    </article>
                </li>
            </ul>
        </section>     
     </div>

     <div style="display: flex; justify-content: center; margin-bottom: 5%;">
        <button id="btn-AllAudio">
            TODOS OS BEATS
        </button>
     </div>

     <section id="informacao">
         <h2 class="tit-info">Licenciamento</h2>

         <div class="container">
            <div class="row mb-5">
                <div class="col-lg mb-4 div-info">
                    <article>
                       <h5>Licença MP3</h5> 
                       <h2>R$ 90,00</h2>
                       <h6>POR UNIDADE</h6>
                    </article>

                    <article>
                        <p><i class="fas fa-circle"></i> <span>MP3 sem etiqueta </span></p> 
                        <p><i class="fas fa-circle"></i> <span>Venda até 3.000 unidades</span></p> 
                        <p><i class="fas fa-circle"></i> <span>Use para streaming, mixtapes e álbuns</span></p> 
                        <p><i class="fas fa-circle"></i> <span>SidSan Music mantém a propriedade total do instrumental</span></p>
                        <div class="div-licenca"><button class="btn-licenca">Ler Licença</button></div>                           
                    </article>

                    <article>
                        <span><i class="fas fa-tag text-light"></i>OFERTA DO DIA</span> <br>
                        <h3 class="texto-promo mt-3">COMPRE 1, OUTRO É GRÁTIS</h3>                      
                    </article>
                </div>

                <div class="col-lg mb-4 div-info">
                    <article>
                       <h5>Licença MP3</h5>
                       <h2>R$ 90,00</h2>
                       <h6>POR UNIDADE</h6>
                    </article>

                    <article>
                        <p><i class="fas fa-circle"></i> <span>MP3 sem etiqueta </span></p> 
                        <p><i class="fas fa-circle"></i> <span>Venda até 3.000 unidades</span></p> 
                        <p><i class="fas fa-circle"></i> <span>Use para streaming, mixtapes e álbuns</span></p> 
                        <p><i class="fas fa-circle"></i> <span>SidSan Music mantém a propriedade total do instrumental</span></p>
                        <div class="div-licenca"><button class="btn-licenca">Ler Licença</button></div>                          
                    </article>

                    <article>
                        <span><i class="fas fa-tag text-light"></i>OFERTA DO DIA</span> <br>
                        <h3 class="texto-promo mt-3">COMPRE 1, OUTRO É GRÁTIS</h3>                      
                    </article>
                </div>

                <div class="col-lg mb-4 div-info">
                    <article>
                       <h5>Licença MP3</h5>
                       <h2>R$ 90,00</h2>
                       <h6>POR UNIDADE</h6>
                    </article>

                    <article>
                        <p><i class="fas fa-circle"></i> <span>MP3 sem etiqueta </span></p> 
                        <p><i class="fas fa-circle"></i> <span>Venda até 3.000 unidades</span></p> 
                        <p><i class="fas fa-circle"></i> <span>Use para streaming, mixtapes e álbuns</span></p> 
                        <p><i class="fas fa-circle"></i> <span>SidSan Music mantém a propriedade total do instrumental</span></p>
                        <div class="div-licenca"><button class="btn-licenca">Ler Licença</button></div>                           
                    </article>

                    <article>
                        <span><i class="fas fa-tag text-light"></i>OFERTA DO DIA</span> <br>
                        <h3 class="texto-promo mt-3">COMPRE 1, OUTRO É GRÁTIS</h3>                      
                    </article>
                </div>

                <div class="col-lg mb-4 div-info">
                    <article>
                       <h5>Licença MP3</h5>
                       <h2>R$ 90,00</h2>
                       <h6>POR UNIDADE</h6>
                    </article>

                    <article>
                        <p><i class="fas fa-circle"></i> <span>MP3 sem etiqueta </span></p> 
                        <p><i class="fas fa-circle"></i> <span>Venda até 3.000 unidades</span></p> 
                        <p><i class="fas fa-circle"></i> <span>Use para streaming, mixtapes e álbuns</span></p> 
                        <p><i class="fas fa-circle"></i> <span>SidSan Music mantém a propriedade total do instrumental</span></p>
                        <div class="div-licenca"><button class="btn-licenca">Ler Licença</button></div>                           
                    </article>

                    <article>
                        <span><i class="fas fa-tag text-light"></i>OFERTA DO DIA</span> <br>
                        <h3 class="texto-promo mt-3">COMPRE 1, OUTRO É GRÁTIS</h3>                      
                    </article>
                </div>
            </div>

            <div id="contato">
                <div class="row">  
                    <div class="col-lg-4 mb-5"><h3 align="left">Contato</h3></div>
                    <div class="col-lg">             
                        <form action="" method="POST" name="contato-form">
                            <div class="row mb-3">
                                <div class="col-lg-6 mb-3">
                                    <label for="email">Informe seu nome</label>
                                    <input type="text" name="nome" id="nome" class="col">
                                </div> 

                                <div class="col-lg-6">                      
                                    <label for="email">Informe seu email</label> 
                                    <input type="email" name="email" id="email"class="col">
                                </div>
                            </div> 
                            
                            <div class="row mb-3">
                                <div class="col-lg">
                                    <label for="assunto">Assunto</label>
                                    <input type="text" name="assunto" id="assunto">
                               </div>
                            </div>  
                            
                            <div class="row mb-3">
                                <div class="col-lg">
                                    <label for="msg">Menssagem</label>
                                    <textarea name="msg" id="msg" cols="" rows="5"></textarea>
                                </div>
                            </div> 
                            
                            <button id="btn-AllAudio" class="mb-3">
                                ENVIAR
                            </button>
                        </form>
                    </div>
                </div>
            </div>
         </div>
     </section>

    <div id="seek-bar">
        <div id="fill"></div>
        <div id="handle"></div>
    </div>
    
    <div id="painel-player">
        <ul>
          <li>  
            <img id="bg" src="foto-albuns/Poster1.jpg"> 
            <span> 
                <h5 id="songTitle"></h5> 
                <h6 id="subSongTitle">SABOTAGE</h6>
            </span>
          </li>

          <li>
            <button id="btn-shareSong"><i class="fas fa-share-alt"></i></button>
            <button id="btn_repeat"><i class="fas fa-redo"></i></button>    
          </li>

          <li>
            <input type="image" value="" onclick="previousSong()" src="assets/som-anterior.png" width="30px" height="30px" class="pass-song" id="prev">
            
            <button class="btn_play" id="play" onclick="playOrPauseSong()">
                <img src="Play1.png">
            </button>

            <input type="image" value="" onclick="nextSong()" src="assets/proximo-som.png" width="30px" height="30px" class="pass-song" id="next">            
          </li>

          <li>
            <div id="currentTime">00:00 / 00:00</div>
          </li>
          
          <div id="volume">
            <button id="decrease" class="btnVol" onclick="decreaseVolume()">-</button>
			<button id="volumeIcon" onclick="mute()"><img src="Mute.png" width="90%"></button>
			<button id="increase" class="btnVol" onclick="increaseVolume()">+</button>
          </div>    
    </div>

    <script src="src/howler.core.js"></script>
    <script src="siriwave.js"></script>
    <script src="js/player.js"></script>
    <script src="js/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>
    <script src="js/bootstrap.min.js"></script>
 </body>
</html>