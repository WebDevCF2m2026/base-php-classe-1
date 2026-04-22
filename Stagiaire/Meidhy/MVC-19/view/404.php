<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Développeur PHP/React | erreur 404</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
        <?php include __DIR__.'/../inc/navbar.php';?>
    </header>

    <main>
        <section style="text-align: center; margin-top: 10vh;">
            <h1>ERREUR <span>404</span></h1>
            <p style="font-size: 1.2rem; max-width: 600px; margin: 0 auto 2rem; color: var(--text-light);">
               Page inexistance ou déplacée: d'autres articles passionants à cette adresse <a href="./">ici</a>
            </p>
            <a href="?page=projets" class="btn btn-primary">Explorer mes projets</a>
        </section>
    </main>

    <footer>
<?php include __DIR__.'/../inc/footer.php';?>
</footer>
    <script src="js/script.js"></script>
</body>
</html>