<?php
//////////////////////////////////////
//            Mots clefs            //
//             (array)              //
//////////////////////////////////////

$keyWords = array('travaux-isolation', 'travaux-de-renovation', 'entreprise-de-menuiserie', 'entreprise-de-platrerie', 'entreprise-de-maconnerie', 'pose-revetement-de-sol', 'chape');

//////////////////////////////////////
//           Localisation           //
//             (array)              //
//////////////////////////////////////

$local = array('Bourgoin-Jallieu', 'St-Jean-de-Bournay', 'La-Tour-du-Pin', 'Nivolas-Vermelle', 'Villefontaine', 'La-Verpillere', 'Isle-Abeau', 'St-Quentin-Fallavier', 'Cremieu', 'Morestel');

//////////////////////////////////////
//           Info Societe           //
//////////////////////////////////////

$societe = 'ACM Augusto';
$societeLoc = 'Meyrié';

echo'<ul>';

for ($i=0; $i<count($keyWords); $i++) {
    for ($ii=0; $ii<count($local); $ii++){

        $LOL = str_replace('-', ' ', $keyWords[$i]);
        $LOL .= ' '.ucfirst(str_replace('-', ' ', $local[$ii]));

//////////////////////////////////////
//               Texte              //
//              (array)             //
//////////////////////////////////////


        $textOut = array(
            '
<a href="http://www.acm-augusto.com/">ACM AUGUSTO</a> (<strong>'.$LOL.'</strong>)  situé à Meyrié dans le nord Isère, possède plus de 20 ans d\'expérience en tant qu\'applicateur agréé pour les chapes fluides Vicat.
'
        ,
            '
Notre équipe de professionnels (<strong>'.$LOL.'</strong>)  met son expérience et son savoir-faire à votre disposition afin de réaliser vos travaux et de vous apporter satisfaction. Du personnel qualifié est à votre écoute pour vous conseiller et vous guider dans la réalisation de vos projets.'
        ,
            '
Nous (<strong>'.$LOL.'</strong>) vous proposons des prestations de qualité en rénovation ou en neuf pour des travaux d\'isolation intérieure (murs, combles...), fenêtres, volets, plâtrerie (plafonds, doublage, cloisons en plaques de plâtre), maçonnerie (agrandissements, ouvertures dans le pisé, terrasses, cours en béton désactivé), rénovation immobilière, revêtement de sols (industriel, béton ciré, carrelage, faïence...).'
        ,
            '
Si vous avez besoin de plus amples informations, de faire réaliser un devis, contactez l\'entreprise <a href="http://www.acm-augusto.com/">ACM AUGUSTO</a>

');



//////////////////////////////////////
//           Template               //
//////////////////////////////////////

        $template = '
<?php
    $title= \''.$societe.' - '.ucfirst($LOL).'\';
    $keywords = \''.str_replace('-', ' ', $keyWords[$i]).', '.str_replace('-', ' ', $local[$ii]).'\';
?>
';
        $template .='<div class="slider-2-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 slider-2-text wow fadeInUp">
                <h1><span class="violet">ACM</span> Le goût du travail bien fait.</h1>
                <p>L\'entreprise ACM Augusto, maçonnerie, menuiserie, isolation, intervient dans les départements de l\'Isère et du Rhône..</p>
            </div>
        </div>
    </div>
</div>

<!-- Services -->
<div class="services-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 services-title wow fadeIn">
                <h2>Nos prestations</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="service wow fadeInUp">
                    <div class="service-icon"><i class="fa fa-shield"></i></div>
                    <h3>Travaux isolation</h3>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="service wow fadeInUp">
                    <div class="service-icon"><i class="fa fa-cubes"></i></div>
                    <h3>Maçonnerie</h3>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="service wow fadeInDown">
                    <div class="service-icon"><i class="fa fa-magic"></i></div>
                    <h3>Rénovation immobilière</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4">
                <div class="service wow fadeInUp">
                    <div class="service-icon"><i class="fa fa-eye"></i></div>
                    <h3>Revêtements sols et murs</h3>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="service wow fadeInDown">
                    <div class="service-icon"><i class="fa fa-cube"></i></div>
                    <h3>Plâtrerie</h3>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="service wow fadeInUp">
                    <div class="service-icon"><i class="fa fa-wrench"></i></div>
                    <h3>Menuiserie générale</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Testimonials -->
<div class="testimonials-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 testimonials-title wow fadeIn">
                <h2>A propos</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 testimonial-list">
                <div role="tabpanel">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="tab1">
                            <div class="testimonial-text">
';

        shuffle($textOut);
        foreach($textOut as $finalOut)
            $template .= '<p>'.$finalOut.'</p>';

        $template .= '
                             </div>
                        </div>
                    </div>
                    <!-- Nav tabs -->
                    <!--<ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"></a>
                        </li>
                    </ul>-->
                </div>
            </div>
        </div>
    </div>
</div>
	';

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