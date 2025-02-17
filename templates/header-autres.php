<!DOCTYPE html>
<meta lang="fr-FR" <html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CV</title>
    <link rel="stylesheet" href="./CSS/style-autres.css">
</head>

<body>
    <div class="flux">
        <header>
            <section class="carre-header">

                <div class="container-header-sm">
                    <div class="square1-header"></div>
                    <div class="square2-header">
                        <p><a class="police" <?php
                                                $page = $_SERVER['PHP_SELF'];
                                                if (basename($page) == "about.php") {
                                                    echo "style='color: white'";
                                                } ?> href="about.php">Qui suis-je ?</a></p>
                    </div>
                    <div class="square1-header"></div>
                </div>

                <div class="container-header-md">
                    <div class="square2-header">
                        <p><a class="police" <?php
                                                $page = $_SERVER['PHP_SELF'];
                                                if (basename($page) == "career.php") {
                                                    echo "style='color: white'";
                                                } ?> href="career.php">Mon parcours</a></p>
                    </div>
                    <div class="square1-header"></div>
                    <div class="square2-header">
                        <p><a class="police" <?php
                                                $page = $_SERVER['PHP_SELF'];
                                                if (basename($page) == "skills.php") {
                                                    echo "style='color: white'";
                                                } ?> href="skills.php">Mes compétences</a></p>
                    </div>
                </div>

                <div class="container-header">
                    <div class="square1-header"></div>
                    <div class="square2-header">
                        <p><a class="police" <?php
                                                $page = $_SERVER['PHP_SELF'];
                                                if (basename($page) == "portfolio.php") {
                                                    echo "style='color: white'";
                                                } ?> href="portfolio.php">Mon portfolio</a></p>
                    </div>
                    <div class="square1-header"></div>
                </div>

            </section>

        </header>