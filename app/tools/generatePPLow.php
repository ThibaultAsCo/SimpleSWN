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


for ($i=0; $i<count($keyWords); $i++) {
    for ($ii=0; $ii<count($local); $ii++){

        $LOL = str_replace('-', ' ', $keyWords[$i]);
        $LOL .= ' '.ucfirst(str_replace('-', ' ', ucfirst($local[$ii])));

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
			}else if(isset($_GET["'.$keyWords[$i].'-'.$local[$ii].'"])){
			$type = $_GET["'.$keyWords[$i].'-'.$local[$ii].'"];
			?>';

        shuffle($textOut);
        foreach($textOut as $finalOut)
            $template .= $finalOut;

        $template .= '';
		?>
		<!doctype html>
			<html>
				<head>
				<meta charset="UTF-8">
				<title>Generate PP de la loose</title>
				</head>
				<body>

		<?php echo '<pre><xmp>'.$template.'</xmp></pre>';?>
		</body>
        	</html>
        <?php

    }
}



