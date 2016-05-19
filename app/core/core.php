<?php

ob_start();

if(isset($_GET['p'])){
    if(file_exists('page/'.$_GET['p'].'.php'))
    {
        require_once'page/'.$_GET['p'].'.php';
    }
    else
        require_once'page/accueil.php';
}
else
    require_once'page/accueil.php';


$data = ob_get_clean();