<?php
    $title = 'Plan du site';
    $description = '';
    $keywords = '';
?>

<section class="sitemap">
  <div class="container">
    <div class="col-xs-12">
      <h1>Plan du site</h1>
      <ul>
        <li><a href="index.html" title="Accueil du site">Accueil</a></li>

        <li><a href="mapage.html" title="mon title">Ici j'ajoute mes pages </a></li>



        <li><a href="mentions-legales.html" title="Mentions légales">Mentions légales</a></li>
        <li><a href="contact.html" title="Contacter <?= $configSite->sitename; ?>">Contact</a></li>
        <li><a href="sitemap.html" title="Plan du site">Plan du site</a></li>

      </ul>
      <?php $pp = new PokerPage(); ?>
      <?= $pp->pokerSiteMap(); ?>
    </div>
  </div>
</section>
