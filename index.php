<!DOCTYPE html>
<html lang="cs">
<?php
    $ids = [
        'co-jsem-se-naucil' => "Co jsem se naučil"
    ];

    $file = isset($_GET['id']) && isset($ids[$_GET['id']]) ? $_GET['id'] : "co-jsem-se-naucil";
    $title = $ids[$file];
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title ?> &ndash; Zbyněk Rybička.cz</title>
    <link rel="stylesheet" href="styles.css?9">
</head>
<body>
    <header>
        <nav>
            <div class="menu-item"><?=$title; ?> &ndash; Zbyněk Rybička.cz
                <ul class="dropdown">
                    <li class="menu-item-header">Hry</li>
                    <li><a href="#">Adventure Arkanoid</a></li>
                    <li><a href="#">Narrow Path</a></li>
                    <li><a href="#">Island Crystal Miner<br>Clicker Strategy</a></li>
                    <li><a href="#">Nature Cybernetic Robots</a></li>
                    <li><hr></li>
                    <li class="menu-item-header">O mně</li>
                    <li><a href="?id=co-jsem-se-naucil">Co jsem se naučil?</a></li>
                    <li><hr></li>
                    <li class="menu-item-header">Recenze her</li>
                    <li><a href="#">Age of Empires I</a></li>
                    <li><a href="#">Little Big Adventure</a></li>
                    <li><a href="#">Need for Speed Underground II</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <?php 
        include("$file.php"); 
    ?>

    <div id="fullscreen-overlay">
        <img id="fullscreen-image" src="dummy.png" alt="Fullscreen">
    </div>

    <script src="script.js?1"></script>
</body>
</html>
