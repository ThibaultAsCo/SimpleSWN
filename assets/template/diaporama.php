<?php
  $dir = './assets/img/template/';

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

<div class="owl-carousel diaporama">
  <?php
    for ($i = 0;$i < count($files) ; $i++) {
      $test_Fichier = $files[$i];
      echo '
        <div class="item">
          <img src="'.$test_Fichier.'" title="ICI le titre de mon image" class="img-responsive" />
        </div>
      ';
    }
  ?>
</div>
