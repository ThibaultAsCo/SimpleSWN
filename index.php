<?php
    require'app/core/core.php';
    require'app/core/init.php';
    require'app/core/TemplateTools.php';
?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="keywords" content="">
        <title>$titlePage - <?= $configSite->sitename; ?></title>
    
        <link rel="icon" href="">
    
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <body>
    
        <?= $data; ?>
    
    </body>



<i class="fa fa-cogs" aria-hidden="true"></i>
