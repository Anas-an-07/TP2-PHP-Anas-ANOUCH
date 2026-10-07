<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 04 </title>
</head>
<body>
    <h1>exercice 05</h1>

    <?php
    //1. Déclarer une variable `$moyenne`
    $moyenne = -1 ;

    //2. Vérifier que sa valeur est comprise entre 0 et 20 ; sinon afficher « Note invalide »
    if ($moyenne < 0 || $moyenne > 20 ) {
        echo "note invalide" ;
    } else {
        if($moyenne < 10) {
            echo "note valide" ;
        } elseif ($moyenne < 12) {
            echo "note passable" ;
        } elseif($moyenne <14){
            echo "assez bien" ;
        } elseif($moyenne <16){
            echo "bien" ;
        } else {
            echo "tres bien" ;
        }
    }
    ?>

</body>