<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 08</title>
</head>
<body>
    <h1>Exercice 08</h1>
    
    <!-- ===================== PARTIE 1 ===================== -->
    <h2>Partie 1 : Nombres pairs de 0 à 20</h2>
    
    <?php
    $i = 0;
    while ($i <= 20) {
        if ($i == 10) {
            echo "<strong>" . $i . "</strong> ";
        } else {
            echo $i . " ";
        }
        $i += 2;   
    }
    ?>
    
    <!-- ===================== PARTIE 2 ===================== -->
    <h2>Partie 2 : while vs do-while</h2>
    
    <?php
    // ---- while ----
    $compteur = 5;
    $executionsWhile = 0;
    
    while ($compteur < 5) {
        $executionsWhile++;
        $compteur++;
    }
    echo "<p>while : " . $executionsWhile . " exécution(s)</p>";
    
    
    $compteur = 5;
    $executionsDo = 0;
    
    do {
        $executionsDo++;
        $compteur++;
    } while ($compteur < 5);
    echo "<p>do-while : " . $executionsDo . " exécution(s)</p>";
    ?>
    
    <!-- ===================== PARTIE 3 ===================== -->
    <h2>Partie 3 : continue et break</h2>
    
    <?php
    for ($i = 1; $i <= 20; $i++) {
        
        if ($i % 3 == 0) {
            continue;
        }
        
        if ($i >= 16) {
            break;
        }
        echo $i . " ";
    }
    ?>
    
</body>
</html>