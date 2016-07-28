<?php require'app/core/core.php';?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="<?= $description ?>">
        <meta name="author" content="<?= $configSite->authorsite; ?>">
        <meta name="keywords" content="<?= $keywords ?>">
        <title><?= $title ?> - <?= $configSite->sitename; ?></title>

        <link rel="icon" href="">
        <link rel="stylesheet" href="assets/css/pp.css" />

        <!-- Bootstrap Core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- CSS -->
        <link href="assets/css/style.css" rel="stylesheet" media="screen" title="no title" charset="utf-8">

        <!-- Open Sans -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
        <!--<link rel="stylesheet" href="assets/css/pp.css" />-->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

      <header>
        <div class="container">
          <!-- Menu  -->
          <?php include('assets/template/menu.php'); ?>
        </div>
      </header>

      <div class="row">
        <!-- Diaporama -->
        <?php include('assets/template/diaporama.php'); ?>
      </div>

      <!-- Contenus des pages -->
      <section>
        <div class="container">
          <?= $data; ?>
        </div>
      </section>

      <!-- Footer -->
      <footer>
        <div class="container no-padding">
          <?php include('assets/template/footer.php'); ?>
        </div>

        <!-- PP -->
        <div class="hidden-md hidden-sm hidden-xs text-center">
          <?php $pp = new PokerPage(); ?>
          <?= $pp->pokerFoo(); ?>
        </div>
      </footer>

    </body>

    <!-- jQuery Version 1.11.1 -->
    <script src="assets/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="assets/js/jqBootstrapValidation.js"></script>
    <script src="assets/js/contact_me.js"></script>

    <!-- Item menu actif -->
    <script src="assets/js/activeMenu.js"></script>



</html>
