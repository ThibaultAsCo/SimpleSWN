<?php require'app/core/core.php';?>
<?php $pp = new PokerPage(); ?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="format-detection" content="telephone=no" />

        <meta name="description" content="<?= $configSite->descrip; ?>">
        <meta name="author" content="<?= $configSite->authorsite; ?>">
        <meta name="keywords" content="<?= $keywords ?>">
        <title><?= $title ?> - <?= $configSite->sitename; ?></title>

        <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="assets/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
        <link rel="manifest" href="assets/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

        <!-- CSS Editable-->
        <link rel="stylesheet" href="assets/css/style.css">


        <!-- Roboto + Noto Sans -->
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700|Roboto:300,400,500,700" rel="stylesheet">


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

      <header>
        <div class="container">
          <!-- Coordonnées header -->
          <?php include ('assets/template/coordonneesHeader.php'); ?>

          <!-- Menu  -->
          <?php include('assets/template/menu.php'); ?>
        </div>
      </header>


      <!-- Contenus des pages -->
      <div class="content">
        <?= $data; ?>
      </div>

      <a href="#" title="Haut de page" class="scrollup">
        <?php include 'assets/svg/base/icon-up.svg'; ?>
      </a>

      <!-- Footer -->
      <footer>
        <div class="container">
          <?php include('assets/template/footer.php'); ?>
        </div>
      </footer>

    </body>

    <!--  jQuery 1.7+  -->
    <!-- <script src="assets/js/jquery-1.9.1.min.js"></script> -->

    <!-- jQuery Version 1.11.1 -->
    <script src="assets/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Item menu actif -->
    <script src="assets/js/activeMenu.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="assets/js/jqBootstrapValidation.js"></script>
    <script src="assets/js/contact_me.js"></script>

    <!-- Owl carousel -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/gestionCarousel.js"></script>

    <!-- Lightbox -->
    <script src="assets/js/lightbox.js"></script>



</html>
