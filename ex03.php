<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 03 </title>
</head>
<body>
    <h1>exercice 03</h1>

    <?php
    
    define("TAUX_TVA" , 20) ;
    define("DEVISE" , "MAD") ;

    $prixunitaireHT = 60 ;
    $quantite = 3 ;

    $totalht = $prixunitaireHT * $quantite
    $montantTVA = $totalht * TAUX_TVA / 100 ;
    $totalTTC = $totalht + $montantTVA

    $totalTTC += 15 ;
    ?>

    <h2>Recapitulatif</h2>
    
    <table border="1" cellpadding="8">
        <tr>
            <th>description</th>
            <th>montant</th>
        </tr>
        <tr>
            <td>prix unitaire HT</td>
            <td><?= $prixUnitaireHT ?> <?= DEVISE ?></td>
        </tr>
        <tr>
            <td>quantite</td>
            <td><?= $quantite ?></td>
        </tr>
        <tr>
            <td>Total HT</td>
            <td><?= $totalHT ?> <?= DEVISE ?></td>
        </tr>
        <tr>
            <td>TVA (<?= TAUX_TVA ?>%)</td>
            <td><?= $montantTVA ?> <?= DEVISE ?></td>
        </tr>
        <tr>
            <td>Total TTC (avant livraison)</td>
            <td><?= $totalTTC - 15 ?> <?= DEVISE ?></td>
        </tr>
        <tr>
            <td>Frais de livraison</td>
            <td>15 <?= DEVISE ?></td>
        </tr>
        <tr>
            <td><strong>Montant final</strong></td>
            <td><strong><?= $totalTTC ?> <?= DEVISE ?></strong></td>
        </tr>
    </table>
    
    <?php
    if (defined("TAUX_TVA")) {
        echo "<p>La constante TAUX_TVA existe : " . TAUX_TVA . "%</p>";
    }
    ?>
    
</body>
</html>


