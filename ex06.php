<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 06</title>
</head>
<body>
    <h1>Exercice 06</h1>
    
    <?php
    
    $numeroMois = 3;  
    
    echo "<h3>Mois numéro : " . $numeroMois . "</h3>";
    
    switch ($numeroMois) {
        case 1:
            echo "<p>Janvier</p>";
            break;
        case 2:
            echo "<p>Février</p>";
            break;
        case 3:
            echo "<p>Mars</p>";
            break;
        case 4:
            echo "<p>Avril</p>";
            break;
        case 5:
            echo "<p>Mai</p>";
            break;
        case 6:
            echo "<p>Juin</p>";
            break;
        case 7:
            echo "<p>Juillet</p>";
            break;
        case 8:
            echo "<p>Août</p>";
            break;
        case 9:
            echo "<p>Septembre</p>";
            break;
        case 10:
            echo "<p>Octobre</p>";
            break;
        case 11:
            echo "<p>Novembre</p>";
            break;
        case 12:
            echo "<p>Décembre</p>";
            break;
        default:
            echo "<p>Numéro de mois invalide</p>";
    }
    
 
    $moisCourant = (int) date("m");
    
    echo "<hr>";
    echo "<h3>Mois courant : " . $moisCourant . "</h3>";
    
    switch ($moisCourant) {
        case 1:  echo "<p>Janvier</p>";   break;
        case 2:  echo "<p>Février</p>";   break;
        case 3:  echo "<p>Mars</p>";      break;
        case 4:  echo "<p>Avril</p>";     break;
        case 5:  echo "<p>Mai</p>";       break;
        case 6:  echo "<p>Juin</p>";      break;
        case 7:  echo "<p>Juillet</p>";   break;
        case 8:  echo "<p>Août</p>";      break;
        case 9:  echo "<p>Septembre</p>"; break;
        case 10: echo "<p>Octobre</p>";   break;
        case 11: echo "<p>Novembre</p>";  break;
        case 12: echo "<p>Décembre</p>";  break;
        default: echo "<p>Numéro invalide</p>";
    }
    ?>
    
</body>
</html>