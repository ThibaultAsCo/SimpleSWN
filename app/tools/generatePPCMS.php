<?php
//////////////////////////////////////
//            Mots clefs            //
//             (array)              //
//////////////////////////////////////

$keyWords = array('L\'ÉTÉ', 'B', 'C', 'D');

//////////////////////////////////////
//           Localisation           //
//             (array)              //
//////////////////////////////////////

$local = array('L\'ÉTANG', '2', '3', '4', '5');

//////////////////////////////////////
//           Info Societe           //
//////////////////////////////////////

$societe = 'Name';
$societeLoc = 'Ville';

//////////////////////////////////////
//            Description           //
//                                  //
//////////////////////////////////////


$descMini = 'l\'été il fait chaud';

//////////////////////////////////////

echo'<ul>';

for ($i=0; $i<count($keyWords); $i++) {
    for ($ii=0; $ii<count($local); $ii++){

        $jeanMoricePimpon = array('\'', 'é', 'É', 'È', 'è', 'ç', 'Ç', 'À', 'à', 'â', 'ê', 'î', 'ô', 'û', 'Â', 'Ô', 'Î', 'Ê', 'Û');
        $jeanMoriceChiuauaForIsa = array('-', 'e', 'E', 'E', 'e', 'c', 'C', 'A', 'a', 'a', 'e', 'i', 'o', 'u', 'A', 'O', 'I', 'E', 'U');



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
            '(<strong>'.$LOL.'</strong>)'
        ,
            '(<strong>'.$LOL.'</strong>)'
        ,
            '(<strong>'.$LOL.'</strong>)');



//////////////////////////////////////
//           Template               //
//////////////////////////////////////

        $template = '
            <?php
                $title = "'.$societe.' - '.ucfirst($LOL).'";
                $keywords = "'.$keyWords[$i].', '.$local[$ii].'";
                $description = "'.$societe.' - '.ucfirst($LOL).' - '.$descMini.' '.$local[$ii].'";
            ?>';
        
        $template .='';

        shuffle($textOut);
        foreach($textOut as $finalOut)
            $template .= '<p>'.$finalOut.'</p>';

        $template .= '';

//////////////////////////////////////
//        Génération Pages          //
//////////////////////////////////////


        $open = fopen('../../pp/'.strtolower(str_replace($jeanMoricePimpon, $jeanMoriceChiuauaForIsa, $keyWords[$i])).'-'.strtolower(str_replace($jeanMoricePimpon, $jeanMoriceChiuauaForIsa, $local[$ii])).".php", "w");
        fwrite($open, $template);
        fclose($open);

        $template .= '';

        echo '<li>Fichier <strong>'.$keyWords[$i].'-'.$local[$ii].'</strong>.php cr&eacute;&eacute;</li>';
    }
}
echo'</ul><br>';

//////////////////////////////////////
//         Génération XML           //
//////////////////////////////////////


$xml = simplexml_load_file('pokerSRC.xml');

for ($l=0; $l<count($keyWords); $l++) {
    for ($ll=0; $ll<count($local); $ll++){

        $xml->addChild('link', strtolower(str_replace($jeanMoricePimpon, $jeanMoriceChiuauaForIsa, $keyWords[$l])).'-'.strtolower(str_replace($jeanMoricePimpon, $jeanMoriceChiuauaForIsa, $local[$ll])).'.html');
        $footerSuperCool ='<a href="'.strtolower(str_replace($jeanMoricePimpon, $jeanMoriceChiuauaForIsa, $keyWords[$l])).'-'.strtolower(str_replace($jeanMoricePimpon, $jeanMoriceChiuauaForIsa, $local[$ll])).'.html">'.$keyWords[$l].' '.ucfirst($local[$ll]).'</a> ';
        echo '<pre><xmp>'.$footerSuperCool.'</xmp></pre>';

    }}

$xml->saveXML('../poker.xml');
