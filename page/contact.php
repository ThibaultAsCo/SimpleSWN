<?php
    $title = 'Contact';
    $description = '';
    $keywords = '';
?>



<section>

  <div class="container">

    <div class="col-xs-12">
      <h1>Contact</h1>
    </div>

    <!-- Colonne gauche -->
    <div class="col-xs-12 col-lg-6">
      <div id="success"></div>

      <form name="sentMessage" id="contactForm" novalidate>
          <div class="row control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                  <label>Nom</label>
                  <p class="help-block text-danger"></p>
                  <input type="text" class="form-control" placeholder="Nom" id="name" required data-validation-required-message="Merci de renseigner votre nom">
              </div>
          </div>
          <div class="row control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                  <label>Email</label>
                  <p class="help-block text-danger"></p>
                  <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Merci de renseigner votre email">
              </div>
          </div>
          <div class="row control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                  <label>Numéro de téléphone</label>
                  <p class="help-block text-danger"></p>
                  <input type="tel" class="form-control" placeholder="Numéro de téléphone" id="phone" required data-validation-required-message="Merci de renseigner votre numéro de téléphone"></input>
              </div>
          </div>
          <div class="row control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                  <label>Votre message</label>
                  <p class="help-block text-danger"></p>
                  <textarea rows="5" class="form-control" placeholder="Votre message" id="message" required data-validation-required-message="Merci de saisir un message"></textarea>
              </div>
          </div>

          <div class="row control-group">

            <input type="text" name="leaveblank"  class="form-control captcha" placeholder="Merci de ne pas renseigner ce champ" ></input>
            <?php
            if ( !empty( $_POST['leaveblank'] ) ) {
            die();
            }?>

          </div>

          <br>

          <div class="row">
              <div class="form-group col-xs-12">
                  <button type="submit" class="btn btn-success btn-lg">Envoyer</button>
              </div>
          </div>
      </form>
      <p class="loi-informatique">
        Conformément à la loi Informatique et Libertés en date du 6 janvier 1978, vous disposez d'un droit d'accès, de rectification, de modification et de suppression des données qui vous concernent. Vous pouvez exercer ce droit en nous envoyant un courrier électronique ou postal.
      </p>
    </div>


    <!-- Colonne droite -->
    <div class="col-xs-12 col-lg-6">
      <h4><?= $configSite->sitename; ?></h4>

      <address class="adresse">
        <span class="street-address"><?= $configSite->address; ?></span><br/>
        <span class="postal-code"><?= $configSite->cp; ?></span>
        <span class="city"><?= $configSite->city; ?></span><br/>

        <span class="mobile">Tél. : <?= $configSite->tel; ?></span>
      </address>

      <!-- Google Maps -->
      <div class="map-container" id="maps">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11168.625241629095!2d5.2605367!3d45.5874024!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf1187bf8252bb96f!2sAs%26Co+Consulting!5e0!3m2!1sfr!2sfr!4v1468852344870"  frameborder="0" style="width:100%; height:450px; border:0" allowfullscreen>
        </iframe>
      </div>

    </div>


  </div> <!-- Fin container -->

</section>
