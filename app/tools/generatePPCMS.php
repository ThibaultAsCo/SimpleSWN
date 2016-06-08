<?php
//////////////////////////////////////
//            Mots clefs            //
//             (array)              //
//////////////////////////////////////

$keyWords = array('L\'ÉTÉ-de', 'B', 'C', 'D');

//////////////////////////////////////
//           Localisation           //
//             (array)              //
//////////////////////////////////////

$local = array('L\'ÉTANG-ici', '2', '3', '4', '5');

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
                $keywords = "'.str_replace('-', ' ', $keyWords[$i]).', '.str_replace('-', ' ', $local[$ii]).'";
                $description = "'.$societe.' - '.ucfirst($LOL).' - '.$descMini.' '.str_replace('-', ' ', $local[$ii]).'";
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
$xml = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><mydoc></mydoc>');
$person = $xml->addChild('linkablePokerPage');

for ($l=0; $l<count($keyWords); $l++) {
    for ($ll=0; $ll<count($local); $ll++){
        
        $person->addChild('url', strtolower(str_replace($jeanMoricePimpon, $jeanMoriceChiuauaForIsa, $keyWords[$l])).'-'.strtolower(str_replace($jeanMoricePimpon, $jeanMoriceChiuauaForIsa, $local[$ll])).'.html');
        $person->addChild('name', str_replace('-', ' ', $keyWords[$l]).' '.str_replace('-', ' ', $local[$l]));



    }}

echo $xml->asXML();

$xml->saveXML('../poker.xml');
