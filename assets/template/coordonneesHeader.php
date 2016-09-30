<div class="coordonneesHeader">
  <div class="container ">
    <address class="addressClient col-lg-8 no-padding">
      <span class="street-address"><?= $configSite->address; ?></span>
      <span class="postal-code"><?= $configSite->cp; ?></span>
      <span class="city"><?= $configSite->city; ?></span>
      <span class="tel">Tél. : <?= $configSite->tel; ?></span>
    </address>


    <a href="contact.html" class="btn btn-primary btn-lg active btn-contact flex col-lg-2" title="Nous contacter">
      <span class="icon-button flex">
        <?php include('assets/svg/base/icon_contact.svg'); ?>
      </span>
      <span class="content-bouton">Nous contacter</span>
    </a>
  </div>
</div>
