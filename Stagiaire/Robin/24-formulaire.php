<?php
$messageResultat = "";
$statut          = "";
$nom             = "";
$email           = "";
$message         = "";

if (isset($_POST["nom"], $_POST["email"], $_POST["message"])) {
    $nom     = htmlspecialchars(trim($_POST["nom"]));
    $email   = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    if (empty($nom) || empty($email) || empty($message)) {
        $messageResultat = "Tous les champs doivent être remplis.";
        $statut          = "error";
    } else {
        $messageResultat = "Merci $nom, votre message a bien été reçu.";
        $statut          = "success";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de contact</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f5f4f0;
            font-family: 'DM Sans', sans-serif;
            padding: 24px;
        }

        .card {
            background: #fff;
            border: 1px solid #e0ddd6;
            border-radius: 16px;
            padding: 40px 36px;
            width: 100%;
            max-width: 440px;
            box-shadow: 0 4px 24px rgba(0,0,0,.06);
        }

        h1 {
            font-family: 'DM Mono', monospace;
            font-size: 1.1rem;
            font-weight: 500;
            letter-spacing: .04em;
            color: #1a1a1a;
            margin-bottom: 28px;
        }

        .field {
            display: flex;
            flex-direction: column;
            gap: 6px;
            margin-bottom: 16px;
        }

        label {
            font-size: .72rem;
            font-weight: 500;
            letter-spacing: .08em;
            text-transform: uppercase;
            color: #888;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #e0ddd6;
            border-radius: 8px;
            font-family: 'DM Sans', sans-serif;
            font-size: .95rem;
            color: #1a1a1a;
            background: #fafaf8;
            transition: border-color .2s;
            resize: vertical;
        }

        input:focus, textarea:focus {
            outline: none;
            border-color: #1a1a1a;
            background: #fff;
        }

        textarea { min-height: 110px; }

        button {
            width: 100%;
            padding: 12px;
            background: #1a1a1a;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-family: 'DM Sans', sans-serif;
            font-size: .9rem;
            font-weight: 500;
            cursor: pointer;
            letter-spacing: .03em;
            transition: background .2s, transform .1s;
            margin-top: 4px;
        }

        button:hover  { background: #333; }
        button:active { transform: scale(.98); }

        .alert {
            margin-top: 22px;
            padding: 13px 16px;
            border-radius: 8px;
            font-size: .88rem;
            font-weight: 500;
        }

        .alert.success {
            background: #edf7f0;
            color: #1f7a42;
            border: 1px solid #b8e6c8;
        }

        .alert.error {
            background: #fdf2f2;
            color: #c0392b;
            border: 1px solid #f5c0bb;
        }

        .recap {
            margin-top: 18px;
            padding: 16px;
            background: #f5f4f0;
            border-radius: 8px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .recap-row {
            display: flex;
            flex-direction: column;
            gap: 2px;
        }

        .recap-row .recap-label {
            font-size: .68rem;
            font-weight: 500;
            letter-spacing: .08em;
            text-transform: uppercase;
            color: #aaa;
        }

        .recap-row .recap-value {
            font-family: 'DM Mono', monospace;
            font-size: .88rem;
            color: #1a1a1a;
            word-break: break-word;
            white-space: pre-wrap;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>formulaire-contact.php</h1>

        <form method="POST" action="">
            <div class="field">
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom"
                       value="<?= htmlspecialchars($nom) ?>"
                       placeholder="Jean Dupont">
            </div>

            <div class="field">
                <label for="email">Email</label>
                <input type="email" id="email" name="email"
                       value="<?= htmlspecialchars($email) ?>"
                       placeholder="jean@exemple.com">
            </div>

            <div class="field">
                <label for="message">Message</label>
                <textarea id="message" name="message"
                          placeholder="Votre message…"><?= htmlspecialchars($message) ?></textarea>
            </div>

            <button type="submit">Envoyer</button>
        </form>

        <?php if ($messageResultat !== ""): ?>
            <div class="alert <?= $statut ?>">
                <?= $messageResultat ?>
            </div>

            <?php if ($statut === "success"): ?>
                <div class="recap">
                    <div class="recap-row">
                        <span class="recap-label">Nom</span>
                        <span class="recap-value"><?= $nom ?></span>
                    </div>
                    <div class="recap-row">
                        <span class="recap-label">Email</span>
                        <span class="recap-value"><?= $email ?></span>
                    </div>
                    <div class="recap-row">
                        <span class="recap-label">Message</span>
                        <span class="recap-value"><?= $message ?></span>
                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</body>
</html>