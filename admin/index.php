<?php require'app/core.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Administration</title>
    <!-- include jquery -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>

    <!-- include libraries BS3 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">





    <!-- include summernote -->
    <link rel="stylesheet" href="lib/summernote/summernote.css">
    <script type="text/javascript" src="lib/summernote/summernote.js"></script>
    <script src="lib/summernote/lang/summernote-fr-FR.js"></script>

    <script type="text/javascript">
        $(function() {
            $('.summernote').summernote({
                height: 200,
                lang: 'fr-FR'
            });
        });
    </script>
</head>
<body>


<?= $data; ?>



</body>
</html>
