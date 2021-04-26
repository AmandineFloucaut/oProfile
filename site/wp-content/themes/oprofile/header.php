

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?=get_theme_file_uri('assets/dist/main.css');?>">
    <?php
        //BUG doit générer la balise title mais ne fonctionne pas
        wp_head();
    ?>
    <title> OProfile </title>
</head>
<body>