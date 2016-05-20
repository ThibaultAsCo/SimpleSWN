<?php

if(empty($_FILES['file']))
{
    exit();
}
$errorImgFile = "../asset/img/img_upload_error.jpg";
$destinationFilePath = '../../../imgUpload/editor/'.$_FILES['file']['name'];
$plopDest = '../../../imgUpload/editor/'.$_FILES['file']['name'];
if(!move_uploaded_file($_FILES['file']['tmp_name'], $destinationFilePath)){
    echo $errorImgFile;
}
else{
    echo $plopDest;
}
?>