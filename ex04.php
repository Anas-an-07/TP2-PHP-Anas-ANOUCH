<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 04 </title>
</head>
<body>
    <h1>exercice 03</h1>

    <?php
    //1. Déclarer les valeurs suivantes : `42`, `"42"`, `15.8`, `true`, `false`, `null` dans six variables.

    $a = 42 ;
    $b = "42" ;
    $c = 15.8 ;
    $d = true ;
    $e = false ;
    $f = null ;

    ?>

    <pre>
        <?php
        //2. Examiner leurs types et leurs valeurs avec `var_dump()`, dans une balise HTML `<pre>`

        var_dump($a) ;
        var_dump($b) ;
        var_dump($c) ;
        var_dump($d) ;
        var_dump($e) ;
        var_dump($f) ;
        ?>
    </pre>
    <pre>
        <?php
        //3. Convertir `"42"` en entier, `15.8` en entier et `42` en chaîne ; afficher les résultats avec leurs types.

        $b_int = (int) $b ;
        var_dump($b_int) ;

        $c_int = (int) $c ;
        var_dump($c) ;

        $a_str = (string) $a ;
        var_dump($a_str) ;

        ?>
    </pre>

    <pre>
        <?php
        //Afficher `true` et `false` avec `echo`, puis avec `var_dump()`.

        echo true ;
        echo false :

        var_dump(true) ;
        var_dump(false) ;
        ?>
    </pre>

    <pre>
        <?php
        //5. Convertir `0`, `"0"`, `"PHP"` et un tableau vide en booléens

        $bool_0 = (bool) 0 ;
        var_dump($bool_0) ;

        $stringg_0 = "0" ;
        $bool_stringg_0 = (bool) $stringg_0 ;
        var_dump($bool_stringg_0) ;

        $bool_php = (bool) "php" ;
        var_dump($bool_php) ;
        ?>
    </pre>
</body>
</html>