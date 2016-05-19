<?php
//////////////////////////////////////
//            Mots clefs            //
//             (array)              //
//////////////////////////////////////

$keyWords = array('photographe-business', 'corporate', 'bdp', 'seminaire');

//////////////////////////////////////
//           Localisation           //
//             (array)              //
//////////////////////////////////////

$local = array('bourgoin-jallieu', 'meyzieu', 'decines', 'bron', 'saint-priest');


for ($i=0; $i<count($keyWords); $i++) {
    for ($ii=0; $ii<count($local); $ii++){

        $LOL = str_replace('-', ' ', $keyWords[$i]);
        $LOL .= ' '.ucfirst(str_replace('-', ' ', ucfirst($local[$ii])));

//////////////////////////////////////
//               Texte              //
//              (array)             //
//////////////////////////////////////


        $textOut = array(
            '	 
     <div id="centre">
             	<div id="desc-section">
                
			
			<h2>Olivia Blanchin Photographe : (<strong>'.$LOL.'</strong>)</h2>

<p>Bienvenue chez Olivia Blanchin Photographe. Notre laboratoire photos vous accueille à Bourgoin Jallieu depuis de nombreuses années (<strong>'.$LOL.'</strong>).</p> 
<p>Forts d\'une longue expérience en matière de photographie, tant argentique que numérique, nous vous proposons des services de très haut niveau.</p>  <p>Olivia Blanchin Photographe est à votre disposition pour les prises de vue, le développement de photos, les retouches, les photos d\'identité et le transfert ou la duplication de vos films (<strong>'.$LOL.'</strong>).</p> <p>Olivia Blanchin Photographe est aussi un point de vente d\'appareil photo, d\'appareil vidéo et son. En tant que photographes nous réalisons des reportages photos pour les mariages, les cérémonies, les cocktails...</p> <p>Que vous soyez un particulier ou un professionnel, nos photographes restent à votre entière disposition. Retrouvez le laboratoire Olivia Blanchin Photographe sur le boulevard à Bourgoin Jallieu (<strong>'.$LOL.'</strong>). Nous réalisons des reportages photos dans tout le département du Rhône ainsi que dans l\'Ain, l\'Isère et la Drôme.</p>
<h2>Créateur de photos : (<strong>'.$LOL.'</strong>)</h2>
<p>La création d\'une photographie peut se limiter à la prise de vue ou engager la totalité du processus de fabrication de l\'image jusqu\'à sa présentation définitive, quel que soit le support (<strong>'.$LOL.'</strong>). Une photographie peut être l\'œuvre d\'une seule personne ou d\'une équipe.</p>
<p>Le travail de laboratoire (tirage argentique), ou, depuis l\'avènement de la photographie numérique, de post- les photographes et de nombreux savoirs et pratiques ont interagi entre ces deux activités (<strong>'.$LOL.'</strong>). Si le photographe s\'est construit sur le peintre dont il a « usurpé » historiquement l\'exclusivité du domaine de l\'image, le peintre a été profondément influencé par la technique photographique, l\'obligeant à affirmer sa spécificité, l\'objet de ses images et la souplesse humaine de sa technique. Mais certains peintres ont réduit leur art à celui d\'un technicien de laboratoire photographique (<strong>'.$LOL.'</strong>), utilisant une autre technique pour recopier à la main une photographie. <a href="http://oliviablanchin.com">oliviablanchin.com</a></p>
');



//////////////////////////////////////
//           Template               //
//////////////////////////////////////

        $template = '
<?php
}else if(isset($_GET["'.$keyWords[$i].'-'.$local[$ii].'"])){
$type = $_GET["'.$keyWords[$i].'-'.$local[$ii].'"];
?>
';
        shuffle($textOut);
        foreach($textOut as $finalOut)
            $template .= $finalOut;

        $template .= '</div> </div>';
		?>
		<!doctype html>
			<html>
				<head>
				<meta charset="UTF-8">
				<title>Generate PP de la loose</title>
				</head>
				<body>

		<?php
		echo '<pre><xmp>'.$template.'</xmp></pre>';
		?>
		</body>
        	</html>
        <?php

    }
}

