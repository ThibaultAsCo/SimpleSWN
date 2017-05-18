<?php
    $title = 'Realisation';
    $description = '';
    $keywords = '';
?>


<?php
  $dir = './assets/img/template/';
  $image_largeur = 300;
  $image_hauteur = 100;
  $valide_extensions = array('jpg', 'jpeg', 'gif', 'png');
  $files=array();

  $Ressource = opendir($dir);
  while($fichier = readdir($Ressource))
  {
    $berk = array('.', '..');

    $test_Fichier = $dir.$fichier;

    if(!in_array($fichier, $berk) && !is_dir($test_Fichier))
    {
      $ext = pathinfo($fichier,  PATHINFO_EXTENSION);

      if(in_array($ext, $valide_extensions))
      {
        $files[]=$test_Fichier;
      }
    }
  }
  sort($files);
?>



<section>
  <div class="container">

    <div class="col-xs-12">
      <h1>Page de réalisations :</h1>

      <p>Les images sont récupérées directement dans le dossier dossier ./assets/img/template/, l'ajout ou le retrait d'une image dans ce dossier entraine la MAJ automatique du carousel ou de la grille d'image</p>

    </div>


    <div class="col-xs-12">
      <h4>Owl carousel 2 :</h4>
      <a href="https://owlcarousel2.github.io/OwlCarousel2/" target="_blank">Doc technique </a>
      <p>La mise en place et la gestion des carousel se fait dans le fichier gestionCarousel.js se trouvant : <strong>assets/js/gestionCarousel.js</strong></p>

    </div>

    <!-- Carousel owl-carousel -->
    <div class="owl-carousel realisations col-lg-6">
      <?php
        for ($i = 0;$i < count($files) ; $i++) {
          $test_Fichier = $files[$i];
          $titre = pathinfo($test_Fichier,  PATHINFO_FILENAME);
          echo '
            <div class="item">
              <img src="'.$test_Fichier.'" title="'.$titre.'" alt="'.$titre.'" class="img-responsive" />
            </div>
          ';
        }
      ?>
    </div>


    <div class="col-lg-12 grilleImage">
      <h4>Grille image :</h4>
      <?php
        for ($i = 0;$i < count($files) ; $i++) {
          $test_Fichier = $files[$i];
          $titre = pathinfo($test_Fichier,  PATHINFO_FILENAME);
          echo '
            <a href="#" class="col-lg-4" data-toggle="modal" data-target="#lightbox">
              <img src="'.$test_Fichier.'" title="'.$titre.'" alt="'.$titre.'" class="thumbnail img-responsive" alt=""/>
            </a>
          ';
        }
      ?>
    </div> <!-- grilleImage -->



  </div> <!-- .container -->

  <div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
      <div class="modal-content">
          <div class="modal-body">
              <img src="" alt="" />
          </div>
      </div>
    </div>
  </div>

</section>
