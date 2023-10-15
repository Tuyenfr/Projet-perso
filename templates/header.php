<!DOCTYPE html>
<meta lang="fr-FR"
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CV</title>
        <link rel="stylesheet" href="./CSS/style-autres.css">
    </head>

    <body>
    <header>
    <section class="carre-header">

        <div class="container-header-sm">
            <div class="square1-header"></div>
            <div class="square2-header">
                <p><a class="police"<?php 
                $page = $_SERVER['PHP_SELF'];
                if (basename($page) == "qui-suis-je.php")
                    {echo "style='color: white'"; } ?>               
                href="qui-suis-je.php">Qui suis-je ?</a></p>
            </div>
            <div class="square1-header"></div>
        </div>
        
        <div class="container-header-md">
            <div class="square2-header"> 
                <p><a class="police"<?php 
                    $page = $_SERVER['PHP_SELF'];
                    if (basename($page) == "mon-parcours.php")
                        {echo "style='color: white'"; } ?>               
                    href="mon-parcours.php">Mon parcours</a></p>
            </div>
            <div class="square1-header"></div>
            <div class="square2-header">
                <p><a class="police"<?php 
                        $page = $_SERVER['PHP_SELF'];
                        if (basename($page) == "mes-competences.php")
                            {echo "style='color: white'"; } ?>               
                        href="mes-competences.php">Mes compétences</a></p>
            </div>
        </div>

        <div class="container-header">
            <div class="square1-header"></div>
            <div class="square2-header"> 
                <p><a class="police"<?php 
                    $page = $_SERVER['PHP_SELF'];
                    if (basename($page) == "mon-portfolio.php")
                        {echo "style='color: white'"; } ?>               
                    href="mon-portfolio.php">Mon portfolio</a></p>
            </div>
            <div class="square1-header"></div>
        </div>

    </section>
    
</header>
