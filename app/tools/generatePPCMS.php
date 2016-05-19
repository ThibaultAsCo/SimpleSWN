<?php
//////////////////////////////////////
//            Mots clefs            //
//             (array)              //
//////////////////////////////////////

$keyWords = array('');

//////////////////////////////////////
//           Localisation           //
//             (array)              //
//////////////////////////////////////

$local = array('');

//////////////////////////////////////
//           Info Societe           //
//////////////////////////////////////

$societe = '';
$societeLoc = '';

echo'<ul>';

for ($i=0; $i<count($keyWords); $i++) {
    for ($ii=0; $ii<count($local); $ii++){

        $LOL = str_replace('-', ' ', $keyWords[$i]);
        $LOL .= ' '.ucfirst(str_replace('-', ' ', $local[$ii]));

//////////////////////////////////////
//               Texte              //
//              (array)             //
//    (<strong>'.$LOL.'</strong>)   //
//////////////////////////////////////


        $textOut = array(
            '(<strong>'.$LOL.'</strong>)'
        ,
            ''
        ,
            ''
        ,
            '');



//////////////////////////////////////
//           Template               //
//////////////////////////////////////

        $template = '
            <?php
                $title = \''.$societe.' - '.ucfirst($LOL).'\';
                $keywords = \''.str_replace('-', ' ', $keyWords[$i]).', '.str_replace('-', ' ', $local[$ii]).'\';
                $description = \''.$societe.' - '.ucfirst($LOL).'\';
            ?>';
        
        $template .='';

        shuffle($textOut);
        foreach($textOut as $finalOut)
            $template .= '<p>'.$finalOut.'</p>';

        $template .= '';

//////////////////////////////////////
//        Génération Pages          //
//////////////////////////////////////


        $open = fopen('page/'.$keyWords[$i].'-'.$local[$ii].".php", "w");
        fwrite($open, $template);
        fclose($open);

        echo '<li>Fichier <strong>'.$keyWords[$i].'-'.$local[$ii].'</strong>.php cr&eacute;&eacute;</li>';
    }
}
echo'</ul><br>';

for ($l=0; $l<count($keyWords); $l++) {
    for ($ll=0; $ll<count($local); $ll++){

        $footerSuperCool ='<a href="'.$keyWords[$l].'-'.$local[$ll].'.html">'.ucfirst(str_replace('-', ' ', $keyWords[$l])).' '.ucfirst(str_replace('-', ' ', $local[$ll])).'</a> ';
        echo '<pre><xmp>'.$footerSuperCool.'</xmp></pre>';

    }}