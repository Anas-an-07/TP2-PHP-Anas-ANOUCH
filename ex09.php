<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 09</title>
</head>
<body>
    <h1>Exercice 09</h1>
    
    <?php
    // ===== Données =====
    $notes = [
        "Amine"   => 12,
        "Sara"    => 16,
        "Youssef" => 8,
        "Lina"    => 14,
        "Adam"    => 10
    ];
    
    // ===== Initialisation =====
    $somme = 0;
    $nbValides = 0;
    $maxNote = 0;
    $meilleur = "";
    ?>
    
    <h2>Tableau des notes</h2>
    
    <table border="1" cellpadding="8">
        <tr>
            <th>Étudiant</th>
            <th>Note</th>
            <th>Statut</th>
        </tr>
        
        <?php
        foreach ($notes as $nom => $note) {
            // Accumulation
            $somme += $note;
            
            // Comptage des validés
            if ($note >= 10) {
                $nbValides++;
            }
            
            // Recherche du meilleur
            if ($note > $maxNote) {
                $maxNote = $note;
                $meilleur = $nom;
            }
            
            // Affichage
            echo "<tr>";
            echo "<td>" . $nom . "</td>";
            echo "<td>" . $note . "</td>";
            echo "<td>" . ($note >= 10 ? "Validé" : "Non validé") . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    
    <h2>Statistiques</h2>
    
    <?php
    $moyenne = $somme / count($notes);
    
    echo "<p>Somme des notes : " . $somme . "</p>";
    echo "<p>Moyenne de la classe : " . $moyenne . "</p>";
    echo "<p>Nombre d'étudiants validés : " . $nbValides . "</p>";
    echo "<p>Meilleure note : " . $maxNote . " (" . $meilleur . ")</p>";
    ?>
    
</body>
</html>