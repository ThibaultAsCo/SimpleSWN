<?php
    $title = 'Mentions légales';
    $description = '';
    $keywords = '';
?>

<div class="title">
  <div class="container">
    <h1>Mentions légales</h1>
  </div>
</div>

<section>

      <div class="container">

        <div class="col-xs-12 col-sm-6">

          <p>
            <b>Raison sociale : </b><?= $configSite->sitename; ?><br/>
            <b>Siège social :</b> <?= $configSite->address; ?> <?= $configSite->cp; ?> <?= $configSite->city; ?><br/>
            <b>Tél. : </b><?= $configSite->tel; ?> <br/>
            <b>E-mail :</b> <a href="mailto:<?= $configSite->mail; ?>" title="Contactez-nous par mail"><?= $configSite->mail; ?></a><br/>
            <b>Siret :</b> <?= $configSite->siret; ?>
          </p>

          <p>
             <b>Hébergeur :</b> OVH<br/>
             <b>Siège social :</b> 2 rue Kellermann - 59100 ROUBAIX - FRANCE<br/>
             <b>RCS Lille Métropole :</b> 424 761 419 00045<br/>
             <b>Code APE :</b> 6202A<br/>
           </p>
        </div> <!-- Fin colonne gauche -->

        <div class="col-xs-12 col-sm-6">
          <p>
            Le présent site est la propriété de <strong><?= $configSite->sitename; ?></strong> établissement situé : <br/>
            <b>Siège social :</b> <?= $configSite->address; ?> <?= $configSite->cp; ?> <?= $configSite->city; ?><br/>
          </p>
           <p>
               La création graphique est réalisé par :<br/>
               <b>As & Co Consulting - Agence de Communication Nord Isère</b> <br/>
               <b>Siège social :</b> 18 rue Joseph Cugnot - 38300 BOURGOIN-JALLIEU</b><br/>
               <b>Tél. :</b> 04 74 28 28 85 -
               <a href="http://ascoconsulting.com/" title="As & Co Consulting - Agence de Communication Nord Isère" target="_blank">Visitez notre site internet</a><br/>
           </p>
        </div>

      </div>


    </div> <!-- Fin row -->

    <div class="row">
      <div class="container">

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> <!--Colonne gauche-->
          <h3>1 - Conditions d'utilisation du site</h3>

          <p><b><?= $configSite->sitename; ?></b> fournit ses services sous réserve que vous vous engagiez à respecter les présentes conditions d'utilisation que <b><?= $configSite->sitename; ?></b> sera libre de modifier à tout moment.</p>


          <h3>2 - Propriété intellectuelle</h3>

          <p>En accord avec les lois régissant la propriété intellectuelle, la reproduction ou l'utilisation des éléments se trouvant dans ce site Internet, en totalité ou en partie est strictement interdite. Seules sont maintenues les exceptions légales dont notamment la représentation dans le cadre du cercle de famille, la copie privée ou le droit de courte citation.

          Ainsi, tous les textes, photos, logos, marques et autres éléments reproduits sur ce site sont réservés et protégés par le droit de la propriété intellectuelle. (Droit auteur, droit voisin, droit des marques…).</p>

          <p>Toute représentation totale ou partielle de ce site par quelque procédé que ce soit, sans l'autorisation expresse de l'exploitant du site Internet est interdite et constituerait une contrefaçon sanctionnée par les articles L 335-2 et suivants du Code de la propriété intellectuelle.</p>

          <p>Il en est de même des éventuelles bases de données figurant sur le site Internet qui sont protégées par les dispositions de la loi du 11 juillet 1998 portant transposition dans le Code de la propriété intellectuelle (CPI) de la directive européenne du 11 mars 1996 relative à la protection juridique des bases de données.</p>
        </div> <!-- Fin colonne gauche -->

        <!-- Colonne droite -->
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <h3>3 - Données personnelles</h3>

          <p><b><?= $configSite->sitename; ?></b> s'engage à maintenir confidentielles les données personnelles fournies par l'utilisateur du site et à ne pas les transférer à d'autres sociétés ou organismes. <b><?= $configSite->sitename; ?></b> s'engage à assurer à toute personne qui en fera la demande un droit d'accès, de rectification et de suppression des données la concernant.</p>



          <h3>4 - Responsabilité</h3>

          <p> <b><?= $configSite->sitename; ?></b> décline toute responsabilité pour les difficultés rencontrées lors de l'accès à son site ou pour toute défaillance de communication.<br/>

          <b><?= $configSite->sitename; ?></b> se réserve la possibilité de modifier, d'interrompre temporairement ou de façon permanente, toute ou une partie du site, sans préavis. <b><?= $configSite->sitename; ?></b> ne pourra en aucun cas être tenu pour responsable à votre encontre ou à l'encontre d'un tiers de toute modification, interruption ou suspension du site.</p>


          <h3>5 - Liens hypertextes</h3>

          <p>Vous êtes libres d'établir des liens vers ce site dans la mesure où ils ne portent pas atteinte à l'image de son éditeur. Vous êtes autorisés à établir des liens vers les pages du site au format : html, php, xml.<br/>

          La pratique du framing est interdite de même que toute autre pratique ou technique susceptible d'engendrer une confusion dans l'esprit du public.<br/>

          Sont prohibés les liens profonds vers les documents aux formats pdf, Doc, ou rtf. En effet, ce type de document ne permet pas de prendre connaissance des présentes conditions d'utilisation.<br/>

          <b><?= $configSite->sitename; ?></b> n'est en aucun cas responsable du contenu des sites Internet accessibles à travers son site web. </p>
        </div> <!-- Fin colonne droite -->

      </div> <!-- Fin container -->



</section>
