<?php
include "inc/config.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title><?= $title ?></title>
  <link rel="canonical" href="<?= $website ?>">
  <meta property="og:url" content="<?= $website ?>">
  <meta name="keywords" content="<? $keywords ?>">
  <meta name="description" content="<?= $content ?>">
  <meta property="og:locale" content="pt-BR">
  <meta property="og:type" content="website">
  <meta property="og:image:height" content="600">
  <meta property="og:image:width" content="800">
  <meta property="og:title" content="<?= $title ?>">
  <meta property="og:description" content="<?= $content ?>">
  <meta property="og:image" content="assets/img/logo-600-400.png">
  <meta property="og:url" content="<?= $website ?>">
  <meta property="og:site_name" content="<?= $title ?>">
  <meta name="generator" content="JMULTIMÍDIA Site Admin">
  <meta itemprop="image" content="assets/img/logo-600-400.png">
  <meta property="og:url" content="<?= $website ?>">
  <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="assets/img/180.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/16.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/32.png">
  <link rel="icon" type="image/png" sizes="180x180" href="assets/img/180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="assets/img/192.png">
  <link rel="icon" type="image/png" sizes="512x512" href="assets/img/512.png">
  <link href="assets/img/logo-600-400.png" rel="image_src">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel="manifest" href="manifest.json">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic&amp;display=swap">
  <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="72">
  <nav class="navbar navbar-light navbar-expand-lg fixed-top text-uppercase" id="mainNav">
    <div class="container"><a class="navbar-brand" href="#page-top"><img class="logo" alt="<?= $radio_name ?>" src="assets/img/logo.png"></a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler text-white bg-primary navbar-toggler-right text-uppercase rounded" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-auto">
          <!--<li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#noticias">notícias</a></li>-->
          <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#aradio">a rádio</a></li>
          <?php if ($app_android) { ?>
          <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#app">baixar o app</a></li>
          <?php } else { ?>
          <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="https://api.whatsapp.com/send?phone=55<?= limpaCelular($whatsapp) ?>&text=Olá <?= $copyright ?>,">Fale Conosco</a></li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </nav>
  <header class="text-center text-white master-player">
    <div class="container">
      <div id="jm-player" class="d-flex justify-content-center align-items-center">
        <!-- <img class="img-fluid d-block mx-auto mb-5" src="assets/img/profile.png">
            <h2 class="font-weight-light mb-0">Você está ouvindo: Jorge &amp; Matheus - Você vai sentir Saudade (ao vivo)</h2> -->

      </div>
  </header>
  <section class="text-white bg-primary mb-0" id="aradio">
    <div class="container">
      <h2 class="text-uppercase text-center text-white">a rádio</h2>
      <hr class="star-light mb-5">
      <div class="row">
        <div class="col-lg-6 ms-auto">
          <p><?= $radio_txt ?></p>
        </div>
        <div id="app" class="col-lg-6 me-auto">
          <p><?= $radio_txt2 ?></p>
        </div>
        <div class="col-lg-6 ms-auto">
          <p><?= $radio_txt3 ?></p>
        </div>
      </div>
      <?php if ($app_android) { ?>
      <div class="text-center mt-4"><a class="btn btn-outline-light btn-xl" role="button" href="<?= $app_android ?>" target="_blank">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor" class="me-2">
            <path d="M325.3 234.3L104.6 13l280.8 161.2-60.1 60.1zM47 0C34 6.8 25.3 19.2 25.3 35.3v441.3c0 16.1 8.7 28.5 21.7 35.3l256.6-256L47 0zm425.2 225.6l-58.9-34.1-65.7 64.5 65.7 64.5 60.1-34.1c18-14.3 18-46.5-1.2-60.8zM104.6 499l280.8-161.2-60.1-60.1L104.6 499z"></path>
        </svg><span>Baixar Aplicativo!</span></a>
      </div>
      <?php } ?>
    </div>
  </section>
  <div class="text-center text-white copyright py-4">
    <div class="container"><small>
        <p><i class="fa fa-copyright" aria-hidden="true"></i> <?= date("Y") > 2024 ? "2024-" . date("Y") . " " : "2024 " ?> <?= $copyright ?> </p><p class="mb-0">Desenvolvido por <a class="jmultimidia" target="_blank" href="https://www.jmultimidia.com.br"><img alt="JMultimídia - Applications Web &amp; Mobile" src="assets/img/jmultimidia-footer-white.svg"></a></p>
      </small></div>
  </div>
  <a href="https://api.whatsapp.com/send?phone=55<?= limpaCelular($whatsapp) ?>&text=Olá <?= $copyright ?>," class="btn-whatsapp-pulse"><i class="fa fa-whatsapp"></i></a>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/jmultimidia.js"></script>
  <script src="assets/js/jquery-3.2.1.min.js" type="3bc5e4e5245e387f3290c38f-text/javascript"></script>
  <script src="assets/js/lunaradio.min.js" type="3bc5e4e5245e387f3290c38f-text/javascript"></script>
  <script type="3bc5e4e5245e387f3290c38f-text/javascript">
      $("#jm-player").lunaradio({
        token: "ZVdkZlNgV1xTYmFiIFVhXyBUZA==",
        userinterface: "big",
        fontcolor: "#E9F8FF",
        hightlightcolor: "#ff7a2b",
        fontratio: "0.3",
        visualizeropacity: "1",
        multicolorvisualizer: "true",
        color1: "#05B808",
        color2: "#E1D70C",
        color3: "#F29603",
        color4: "#F40303",
        metadatatechnic: "directly",
        radioname: false,
        scroll: "true",
        coverimage: "assets/img/512.png",
        onlycoverimage: "false",
        coverstyle: "animated",
        usevisualizer: "real",
        visualizertype: "8",
        streamurl: "<?=$stream?>",
        streamtype: "shoutcast2",
        shoutcastpath: "/radio",
        shoutcastid: "1",
        icecastmountpoint: "/radio.mp3",
        displayvisualizericon: "true",
        autoplay: "true",
        volume: "95",
        metadatainterval: "20000",
        uselocalstorage: "true",
        <!-- displayliveicon: "false" -->
      });
      </script>
  <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="3bc5e4e5245e387f3290c38f-|49" defer=""></script>
  <!--<script language="php" type="text/php" src="https://www.radios.com.br/registra_visita_radios_iframe.php?radio=78125"></script>-->
</body>

</html>