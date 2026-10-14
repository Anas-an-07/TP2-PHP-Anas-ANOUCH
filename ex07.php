<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 07</title>
</head>
<body>
    <h1>Exercice 07</h1>
    
    <?php
    $nombre = 7;
    ?>
    
    <h2>1. Table de multiplication de <?= $nombre ?></h2>
    
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo $nombre . " × " . $i . " = " . ($nombre * $i) . "<br>";
    }
    ?>
    
    <h2>2. Pyramide de 6 lignes</h2>
    
    <pre>
<?php
for ($ligne = 1; $ligne <= 6; $ligne++) {
    for ($etoile = 1; $etoile <= $ligne; $etoile++) {
        echo "*";
    }
    echo "\n";
}
?>
    </pre>
    
</body>
</html>