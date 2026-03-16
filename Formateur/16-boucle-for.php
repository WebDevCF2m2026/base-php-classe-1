<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4 exercices boucle for</title>
</head>
<body>
    <h1>4 exercices boucle for</h1>
    <p>La boucle for est basée sur le numérique, par convention on utilise une variable nommée $i (on peut l'appeler comme on veut). Si des boucles sont imbriquées, on utilise souvant les lettres qui suivent ($j, $k etc...)</p>
    <pre><code>
for(initialisation; condition; modifification){
    actions;
}
    </code></pre>
    <h4>Fonctionnement</h4>
    <p>1) initialisation n'est lue qu'une seule fois lors du premier tour de boucle</p>
    <p>2) condition est vérifiée avant chaque tour de boucle, si true (elle est vrai) on exécute la boucle, si false, arrêt de boucle</p>
    <p>3) modifification, se fait à la fin d'un tour de boucle (après l'action), elle modifie généralement la variable qui a été initialisée et qui est vérifiée dans la condition</p>
    <h2>a) Affichez les nombres de 1 à 100</h2>
    <pre><code>
    // $i++  => incrémentation    
    for($i=1; $i<=100; $i++){
        echo "$i ";
    }       
    </code></pre>
    <?php
    for($i=1; $i<=100; $i++){
        echo "$i ";
    }
    ?>
    <h3>Idem que a) mais les accolades ne sont plus nécessaire</h3>
    <p>Fréquent pour les boucles sur une ligne (compte à rebours par exemple), moins quand on a plus de lignes (risque de confusion, 1 seul ligne se finit par le ;)</p>
    <pre><code>
    // condition sans accolades 
    for($i=1; $i<=100; $i++)

        // ligne qui subit la boucle (le ; est la fin de ligne)
        echo "$i ";

        // n'est pas dans la boucle
        echo "&lt;br>Et moi ! $i&lt;hr>";

    // compte à rebours de 100 à 0
    // en partant du $i de la boucle précédente décrémentée ($i--)    
    for($i--; $i >=0; $i--) echo "$i ";     
    </code></pre>
    <?php
    // condition sans accolades 
    for($i=1; $i<=100; $i++)
        // ligne qui subit la boucle
        echo "$i ";
        // n'est pas dans la boucle
        echo "<br>Et moi ! $i<hr>";
    // compte à rebours de 100 à 0    
    for($i--; $i >=0; $i--) echo "$i ";
    
    ?>
    <h2>b) Affichez les nombres pairs de 0 à 50</h2>
    <p>Utilisation des for(): endfor; sont courant dans les template</p>
    <pre><code>
&lt;?php
    for($i=0; $i<=50; $i+=2):
?>
    &lt;span style="color: rgb(&lt;?= $i*3 ?>, &lt;?= $i*4 ?>, &lt;?= $i*5 ?>) ;">&lt;?= $i ?>&lt;/span>
&lt;?php
    endfor;
?> 
    </code></pre>
    <?php
    for($i=0; $i<=50; $i+=2):
    ?>
    <span style="color: rgb(<?= $i*3 ?>, <?= $i*4 ?>, <?= $i*5 ?>) ;"><?= $i ?></span>
    <?php
    endfor;
    ?>
    <h2>b2) Affichez les nombres pairs en bleu et les impairs en rouge de 0 à 50</h2>
    <p>Utilisation en raccourci de for: et endfor; ainsi que if: else: et endif;</p>
    <pre><code>
    &lt;?php    
    // on liste les nombre de 0 à 50
    for($i=0; $i <= 50; $i++):
        // si le nombre est pair
        if($i%2===0):
    ?>
        &lt;span style="color:blue">&lt;?= $i ?>&lt;/span>
    &lt;?php
        else:
    ?>
        &lt;span style="color:red">&lt;?= $i ?>&lt;/span>    
    &lt;?php
        endif;
    endfor;
    ?>

    </code></pre>
    <?php
    // on liste les nombre de 0 à 50
    for($i=0; $i <= 50; $i++):
        // si le nombre est pair
        if($i%2===0):
    ?>
        <span style="color:blue"><?= $i ?></span>
    <?php
        else:
    ?>
        <span style="color:red"><?= $i ?></span>    
    <?php
        endif;
    endfor;
    ?>
    <h2>c) Affichez un décompte de 10 à 0</h2>
    <pre><code>&lt;?php for($i=10; $i>=0;$i--) echo "$i " ?></code></pre>
    <?php for($i=10; $i>=0;$i--) echo "$i ";?>

    <h2>d) Affichez la table de multiplication de 7</h2>
    <pre><code>
    for($i=1; $i<11; $i++){
        echo "$i X 7 = ".($i*7)."&lt;br>";
    }    
    </code></pre>
    <?php
    for($i=1; $i<11; $i++){
        echo "$i X 7 = ".($i*7)."<br>";
    }
    ?>
    </table>
</body>
</html>