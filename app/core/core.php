<?php
/*
 *
 *  ex : <?= $configSite->sitename; ?>
 *
 * sitename
 * address
 * cp
 * city
 * mail
 * siret
 * weblinkhref
 * weblink
 * 
*/

$configSite = simplexml_load_file('app/config.xml');

ob_start();

if(isset($_GET['p'])){
    if(file_exists('page/'.$_GET['p'].'.php')) {
        require_once'page/'.$_GET['p'].'.php';
    }
    elseif(file_exists('poker/'.$_GET['p'].'.php')) {
        require_once'poker/'.$_GET['p'].'.php';
    }
    else
        require_once'page/'.$configSite->defaultpage.'.php';
}
else
    require_once'page/'.$configSite->defaultpage.'.php';


$data = ob_get_clean();