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
                    <li><a href="#adventure-arkanoid">Adventure Arkanoid</a></li>
                    <li><a href="#narrow-path">Narrow Path</a></li>
                    <li><a href="#island-crystal-miner">Island Crystal Miner<br>Clicker Strategy</a></li>
                    <li><a href="#nature-cybernetic-robots">Nature Cybernetic Robots</a></li>
                    <li><a href="#" class="disabled">Datová vzpoura</a></li>
                    <li><a href="#" class="disabled">Kossai</a></li>
                    <li><a href="#" class="disabled">Zintaki</a></li>
                    <li><hr></li>
                    <li class="menu-item-header">O mně</li>
                    <li><a href="?id=co-jsem-se-naucil">Co jsem se naučil?</a></li>
                    <li><a href="?id=jakou-praci-jsem-delal">Jakou práci jsem dělal?</a></li>
                    <li><a href="?id=ostatni-umelecka-tvorba">Ostatní umělecká tvorba</a></li>
                    <li><a href="?id=muj-osobni-lore">Můj osobní lore</a></li>
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
