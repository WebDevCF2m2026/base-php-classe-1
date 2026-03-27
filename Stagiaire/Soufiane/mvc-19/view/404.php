<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Développeur PHP/React | Erreur 404</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<p><?=__DIR__?></p>
    <header>
        <?php
        include 'inc/navbar.php';
        ?>
    </header>

    <main>
        <section style="text-align: center; margin-top: 10vh;">
            <h1>Erreur_404</h1>
            <p>retour a lacceuil <a href="./">cliquer ici</a></p>
        </section>
    </main>

    <footer>
        <?php 
        include 'inc/footer.php';
        ?>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>