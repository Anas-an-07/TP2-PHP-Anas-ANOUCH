<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 02 </title>
</head>
<body>
    <h1>Exercice 02</h1>
    <?php 
    // declarer les variables 
    $nom = "ANAOUCH" ;
    $prenom = "Anas" ;
    $age = 19 ;
    $formation = "programation we2" ;

    //concatenation 
    $presentation = "je m'appelle" . $prenom . "" . $nom . "j'ai" . $age . "ans" . "et je suis en " . $formation ;
    
    // ajout
    $presentation =". j'apprends PHP" ;

    //affichier les deux variable
    $note = 12 ;
    $Note = 16

    echo "valeur de note " . $note ;
    echo "valeur de Note " . $Note ;

    ?>
</body>
</html>