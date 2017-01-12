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

        <link rel="icon" href="">

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
        <!-- OWL carroussel style -->
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        <!-- OWL carroussel Theme -->
        <link rel="stylesheet" href="assets/css/owl.theme.css">

        <!-- CSS Editable-->
        <link rel="stylesheet" href="assets/css/style.css">


        <!-- Roboto + Noto Sans -->
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700|Roboto:300,400,500,700" rel="stylesheet">


        <!--<link rel="stylesheet" href="assets/css/pp.css" />-->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

      <header>
        <?php include ('assets/template/coordonneesHeader.php'); ?>
        <div class="container">
          <!-- Menu  -->
          <?php include('assets/template/menu.php'); ?>
        </div>
      </header>


      <!-- Contenus des pages -->
      <?= $data; ?>


      <!-- Footer -->
      <footer>
        <div class="container no-padding">
          <?php include('assets/template/footer.php'); ?>
        </div>

        <!-- PP -->
        <div class="hidden-md hidden-sm hidden-xs text-center">

          <?= $pp->pokerFoo(); ?>
        </div>
      </footer>

    </body>

    <!--  jQuery 1.7+  -->
    <script src="assets/js/jquery-1.9.1.min.js"></script>

    <!-- jQuery Version 1.11.1 -->
    <script src="assets/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="assets/js/jqBootstrapValidation.js"></script>
    <script src="assets/js/contact_me.js"></script>

    <!-- Item menu actif -->
    <script src="assets/js/activeMenu.js"></script>



    <!-- Owl carroussel -->
    <script src="assets/js/owl.carousel.js"></script>
    <script type="assets/js/carousel.personnalisation.js"></script>

    <!-- WOW JS -->
    <script src="assets/js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>



</html>
