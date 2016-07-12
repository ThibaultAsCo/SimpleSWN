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

echo'<xmp>';

for ($i=0; $i<count($keyWords); $i++) {
    for ($ii=0; $ii<count($local); $ii++){

        $jeanMoricePimpon = array('\'', 'é', 'É', 'È', 'è', 'ç', 'Ç', 'À', 'à', 'â', 'ê', 'î', 'ô', 'û', 'Â', 'Ô', 'Î', 'Ê', 'Û');
        $jeanMoriceChiuaua = array('-', 'e', 'E', 'E', 'e', 'c', 'C', 'A', 'a', 'a', 'e', 'i', 'o', 'u', 'A', 'O', 'I', 'E', 'U');



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

        /*$template = '
            <?php
                $title = "'.ucfirst($LOL).'";
                $keywords = "'.str_replace('-', ' ', $keyWords[$i]).', '.str_replace('-', ' ', $local[$ii]).'";
                $description = "'.$societe.' - '.ucfirst($LOL).' - '.$descMini.' '.str_replace('-', ' ', $local[$ii]).'";
            ?>';*/

        $template ='';

        shuffle($textOut);
        foreach($textOut as $finalOut)
            $template .= '<p>'.$finalOut.'</p>';

        $template .= '';

//////////////////////////////////////
//        Génération Pages          //
//////////////////////////////////////


        $open = fopen(strtolower(str_replace($jeanMoricePimpon, $jeanMoriceChiuaua, $keyWords[$i])).'-'.strtolower(str_replace($jeanMoricePimpon, $jeanMoriceChiuaua, $local[$ii])).".php", "w");
        fwrite($open, $template);
        fclose($open);

        //$template .= '';

        //echo '<li>Fichier <strong>'.$keyWords[$i].'-'.$local[$ii].'</strong>.php cr&eacute;&eacute;</li>';
        
        echo '<a href="'.strtolower(str_replace($jeanMoricePimpon, $jeanMoriceChiuaua, $keyWords[$i])).'-'.strtolower(str_replace($jeanMoricePimpon, $jeanMoriceChiuaua, $local[$ii])).'.php">'.str_replace('-', ' ', $keyWords[$i]).' '.str_replace('-', ' ', $local[$ii]).'</a>';
    }
}
echo'</xmp>';

