<div class="coordonneesHeader">
  <div class="container ">
    <address class="addressClient col-lg-6">
      <span class="street-address"><?= $configSite->address; ?></span>
      <span class="postal-code"><?= $configSite->cp; ?></span>
      <span class="city"><?= $configSite->city; ?></span>
      <span class="tel">Tél. : <?= $configSite->tel; ?></span>
    </address>


    <a class="btn btn-default col-xs-4 col-lg-4 " href="contact.html" role="button">
      <span class="icon-btn">
        <?php include 'assets/svg/base/icon-contact.svg' ?>
      </span>
      Nous contacter
    </a>

    <a href="tel:+33475494848" class="btn btn-primary " role="button">
        <span class="icon-btn">
          <?php include 'assets/svg/base/icon-phone.svg' ?>
        </span>
        <?= $configSite->tel; ?>
      </a>
  </div>
</div>
