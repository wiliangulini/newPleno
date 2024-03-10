<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, user-scalable=0">
    <meta name="description" content="" />
    <meta name="robots" content="index, follow" />
    <meta name="author" content="Gabriel Oliveira, Guilherme Menegussi, Wilian Gulini" />
    <meta name="keywords" content="" />
    <title>EYHE - Conversas acolhedoras em minutos</title>
    <link rel="shortcut icon" href="assets/images/favico.webp">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/landing.css" />
</head>
<body>
<div id="fundo" class="fundo">
    <div class="container top">
        <div class="row d-flex justify-content-between">
            <div class="col-md-1">
              <svg class="desk" width="120" height="30" viewBox="0 0 120 30" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <rect width="120" height="30" fill="url(#pattern0)"></rect>
                <defs>
                  <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image0" transform="translate(0 -0.00176678) scale(0.00176678 0.00706714)"></use>
                  </pattern>
                  <image id="image0" width="566" height="142" xlink:href="data:image/png;base64,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"></image>
                </defs>
              </svg>
            </div>
            <div class="col-md-10 d-flex justify-content-end">
                <div class="menu">
                    <nav>
                        <div id="menuMobile" class="menuMobile">
                            <div class="mm_line"></div>
                            <div class="mm_line"></div>
                            <div class="mm_line"></div>
                        </div>
                        <ul class="ul desktop">
                            <li><a href="http://eyhe.com.br/areadoanjo/anjo-login.php">Conheça</a></li>
                            <li><a target="_blank" href="https://blog.eyhe.com.br/">Especialista</a></li>
                            <li><a href="https://www.eyhe.com.br/login.php">Blog</a></li>
                            <li><a href="https://www.eyhe.com.br/login.php"><strong>Plantão</strong></a></li>
                            <li class="login d-flex justify-content-center"><a class="cadastrar" id="c1" href="identificar.php"><strong>Entrar</strong></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <ul id="ulMob" class="ul mob">
            <li><a href="http://eyhe.com.br/areadoanjo/anjo-login.php">Conheça</a></li>
            <li><a target="_blank" href="https://blog.eyhe.com.br/">Especialista</a></li>
            <li><a href="https://www.eyhe.com.br/login.php">Blog</a></li>
            <li><a href="https://www.eyhe.com.br/login.php"><strong>Plantão</strong></a></li>
            <li class="login d-flex justify-content-center"><a class="cadastrar" id="c2" href="identificar.php"><strong>Entrar</strong></a></li>
        </ul>
    </div>
    <section class="background">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-md-4 col-lg-4" style="background-image: url('assets/images/small/img-1.jpg')">
            <div class="control">
              <p class="h1"><strong>
                Plantão
                <img src="assets/images/landing/plantao.webp" />              
              </strong></p>
              <p class="h5">Lorem Ipsum is simply dummy text of the nting and typesetting industry.</p>
            </div>
            <a class="btn btn-verde" href="#">A partir de R$24,90<img src="assets/images/landing/seta-desktop.webp" /> </a>
          </div>
          <div class="col-sm-4 col-md-4 col-lg-4" style="background-image: url('assets/images/small/img-2.jpg')">
            <div class="control">
              <p class="h1"><strong>
                Psicólogos
                <img src="assets/images/landing/prancheta.webp" />                  
              </strong></p>
              <p class="h5">Lorem Ipsum is simply dummy text of the nting and typesetting industry.</p>
            </div>
            <a class="btn btn-verde" href="#">A partir de R$24,90<img src="assets/images/landing/seta-desktop.webp" /> </a>
          </div>
          <div class="col-sm-4 col-md-4 col-lg-4" style="background-image: url('assets/images/small/img-3.jpg')">
            <div class="control">
              <p class="h1"><strong>
                Match!
                <img src="assets/images/nossos-psicologos/match.webp" />    
              </strong></p>
              <p class="h5">Lorem Ipsum is simply dummy text of the nting and typesetting industry.</p>
            </div>
            <a class="btn btn-verde" href="#">A partir de R$24,90<img src="assets/images/landing/seta-desktop.webp" /> </a>
          </div>
        </div>
      </div>
    </section>
</div>
    <section class="beneficios">
        <div class="container">
            <div class="txt d-flex flex-column align-items-center justify-content-center">
                <p class="h2"><strong>Benefícios de uma conversa Eyhe</strong></p>
            </div>
            <div class="row">
                <img loading="lazy" id="desktop" class="desktop" src="landing-page-new/image/desktop/autoestima.webp" />
            </div>
        </div>
    </section>

    
    <footer>
        <div class="container footer">
            <div class="row">
                <div id="f1" class="col-md-4 d-flex justify-content-center align-items-center">
                    <a href="conheca.php" class="footer-logo">
                        <img loading="lazy" src="landing-page-new/image/logo_azul.png">
                    </a>
                </div>
                <div id="f2" class="col-lg-4 col-md-4 d-flex justify-content-center align-items-center flex-column">
                    <div class="footer-widget about_widget">
                        <p>Conversas inspiradoras para <br> alegrar a sua alma.</p>
                        <a href="mailto:contato@eyhe.com.br"><p>contato@eyhe.com.br</p></a>
                        <ul class="social-icon">
                            <li id="li">
                                <a href="https://www.facebook.com/eyheoficial/" target="_blank">
                                    <img loading="lazy" src="landing-page-new/img/new/facebook.webp" />
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/eyheoficial/" target="_blank">
                                    <img loading="lazy" src="landing-page-new/img/new/instagram.webp" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="f3" class="col-lg-3 col-md-4 d-flex justify-content-center align-items-center flex-column">
                    <div class="footer-widget nav_menus_widget">
                        <h4 class="widget-title">Menu</h4>
                        <ul>
                            <li>
                                <a href="https://www.eyhe.com.br/areadoanjo/anjo-login.php"><img loading="lazy" src="landing-page-new/img/new/arrow_right.webp" /> Área do Anjo</a>
                            </li>
                            <li>
                                <a target="_blank" href="https://blog.eyhe.com.br/"><img loading="lazy" src="landing-page-new/img/new/arrow_right.webp" /> Blog</a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.eyhe.com.br/login.php"><img loading="lazy" src="landing-page-new/img/new/arrow_right.webp" /> Entrar</a>
                            </li>
                            <li>
                                <a target="_blank" href="conheca.php"><img loading="lazy" src="landing-page-new/img/new/arrow_right.webp" /> Conversar Agora</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script async src="assets/js/landing.js"></script>
</body>
</html>
