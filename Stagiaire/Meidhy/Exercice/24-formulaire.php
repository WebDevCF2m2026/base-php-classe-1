<?php
$nom     = isset($_POST['nom'])     ? htmlspecialchars(trim($_POST['nom']))     : '';
$email   = isset($_POST['email'])   ? htmlspecialchars(trim($_POST['email']))   : '';
$message = isset($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : '';
$messageResultat = "";
$erreur  = "";
$isPost  = $_SERVER['REQUEST_METHOD'] === 'POST';

if ($isPost) {
    if (empty($nom)) {
        $erreur = "Veuillez saisir votre nom.";
    } elseif (empty($email)) {
        $erreur = "Veuillez saisir votre email.";
    } elseif (empty($message)) {
        $erreur = "Veuillez saisir votre message.";
    } else {
        $messageResultat = "Merci $nom, votre message a bien été transmis.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex.24 — Formulaire</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=JetBrains+Mono:wght@400;600&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">

    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --bg:       #0e0e0e;
            --surface:  #161616;
            --surface2: #1c1c1c;
            --border:   #2a2a2a;
            --accent:   #c8f060;
            --danger:   #ff5f57;
            --text:     #f0f0f0;
            --muted:    #555;
            --muted2:   #888;
        }

        body {
            background: var(--bg);
            color: var(--text);
            font-family: 'DM Sans', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
            position: relative;
        }

        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background-image:
                linear-gradient(rgba(200,240,96,0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(200,240,96,0.03) 1px, transparent 1px);
            background-size: 40px 40px;
            pointer-events: none;
        }

        .wrapper {
            position: relative;
            z-index: 1;
            width: 100%;
            max-width: 520px;
        }

        /* ── BADGE ── */
        .badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(200,240,96,0.07);
            border: 1px solid rgba(200,240,96,0.18);
            color: var(--accent);
            font-family: 'JetBrains Mono', monospace;
            font-size: 10px;
            letter-spacing: 0.14em;
            padding: 5px 12px;
            border-radius: 2px;
            margin-bottom: 20px;
            text-transform: uppercase;
        }
        .badge::before {
            content: '';
            width: 6px; height: 6px;
            background: var(--accent);
            border-radius: 50%;
            animation: pulse 2s ease-in-out infinite;
        }
        @keyframes pulse {
            0%,100%{ opacity:1; transform:scale(1); }
            50%{ opacity:.35; transform:scale(.65); }
        }

        /* ── HEADING ── */
        .ex-number {
            font-family: 'Bebas Neue', sans-serif;
            font-size: clamp(72px, 14vw, 110px);
            line-height: 0.88;
            color: var(--accent);
            letter-spacing: -2px;
            display: block;
            margin-bottom: 4px;
        }
        .ex-title {
            font-family: 'Bebas Neue', sans-serif;
            font-size: clamp(22px, 5vw, 32px);
            color: var(--text);
            letter-spacing: 0.04em;
            margin-bottom: 8px;
        }
        .ex-sub {
            font-family: 'JetBrains Mono', monospace;
            font-size: 11px;
            color: var(--muted2);
            letter-spacing: 0.12em;
            text-transform: uppercase;
            margin-bottom: 32px;
        }

        /* ── CARDS ── */
        .card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 4px;
            padding: 28px;
            margin-bottom: 12px;
        }
        .card-label {
            font-family: 'JetBrains Mono', monospace;
            font-size: 10px;
            letter-spacing: 0.18em;
            color: var(--muted);
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        /* ── FIELDS ── */
        .field { margin-bottom: 16px; }
        .field:last-of-type { margin-bottom: 20px; }

        .field label {
            display: block;
            font-family: 'JetBrains Mono', monospace;
            font-size: 10px;
            color: var(--muted2);
            letter-spacing: 0.12em;
            text-transform: uppercase;
            margin-bottom: 7px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            background: var(--surface2);
            border: 1px solid var(--border);
            color: var(--text);
            font-family: 'DM Sans', sans-serif;
            font-size: 14px;
            font-weight: 300;
            padding: 12px 14px;
            border-radius: 3px;
            outline: none;
            transition: border-color .2s;
            resize: none;
        }
        input[type="text"]:focus,
        input[type="email"]:focus,
        textarea:focus { border-color: var(--accent); }
        input::placeholder,
        textarea::placeholder { color: var(--muted); }

        textarea { height: 100px; }

        button[type="submit"]{
            width: 100%;
            background: var(--accent);
            color: #0e0e0e;
            font-family: 'Bebas Neue', sans-serif;
            font-size: 18px;
            letter-spacing: 0.12em;
            padding: 14px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: opacity .2s, transform .1s; 
        }
        button[type="submit"]:hover { opacity: .85; }
        button[type="submit"]:active { transform: scale(.98); }

        a {
            width: 100%;
            background: var(--accent);
            color: #0e0e0e;
            font-family: 'Bebas Neue', sans-serif;
            font-size: 18px;
            letter-spacing: 0.12em;
            padding: 14px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            text-align : center;
            text-decoration : none; 
            transition: opacity .2s, transform .1s; 
        }

        /* ── ERREUR ── */
        .error-card {
            background: var(--surface);
            border: 1px solid rgba(255,95,87,0.3);
            border-radius: 4px;
            padding: 16px 20px;
            margin-bottom: 12px;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .error-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 2px;
            background: var(--danger);
        }
        .error-icon {
            font-family: 'JetBrains Mono', monospace;
            font-size: 14px;
            color: var(--danger);
            flex-shrink: 0;
        }
        .error-text {
            font-size: 13.5px;
            color: #ff8a85;
            font-weight: 300;
        }

        /* ── SUCCÈS ── */
        .success-card {
            background: var(--surface);
            border: 1px solid rgba(200,240,96,0.22);
            border-radius: 4px;
            padding: 24px 28px;
            margin-bottom: 12px;
            position: relative;
            overflow: hidden;
        }
        .success-card::after {
            content: '';
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 2px;
            background: linear-gradient(90deg, var(--accent), transparent);
        }
        .success-msg {
            font-family: 'JetBrains Mono', monospace;
            font-size: 15px;
            color: var(--accent);
            margin-bottom: 20px;
        }

        /* Récap */
        .recap { display: flex; flex-direction: column; gap: 10px; }
        .recap-row {
            display: flex;
            gap: 16px;
            align-items: baseline;
            border-bottom: 1px solid var(--border);
            padding-bottom: 10px;
        }
        .recap-row:last-child { border-bottom: none; padding-bottom: 0; }
        .recap-key {
            font-family: 'JetBrains Mono', monospace;
            font-size: 10px;
            color: var(--muted2);
            letter-spacing: 0.12em;
            text-transform: uppercase;
            min-width: 70px;
            flex-shrink: 0;
        }
        .recap-val {
            font-size: 13.5px;
            color: var(--text);
            font-weight: 300;
            word-break: break-word;
        }

        /* ── FOOTER ── */
        .footer {
            margin-top: 28px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .footer-brand {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 13px;
            letter-spacing: 0.15em;
            color: var(--muted);
        }
        .footer-brand span { color: var(--accent); }
        .footer-meta {
            font-family: 'JetBrains Mono', monospace;
            font-size: 10px;
            color: var(--muted);
        }
    </style>
</head>
<body>

<div class="wrapper">

    <div class="badge">PHP · Formulaires & Validation</div>

    <span class="ex-number">24</span>
    <div class="ex-title">Formulaire de contact</div>
    <div class="ex-sub">// $_POST + validation + htmlspecialchars()</div>

    <?php if ($erreur): ?>
    <div class="error-card">
        <span class="error-icon">!</span>
        <span class="error-text"><?= $erreur ?></span>
    </div>
    <?php endif; ?>

    <?php if ($messageResultat): ?>
    <div class="success-card">
        <div class="success-msg"><?= $messageResultat ?></div>
        <div class="recap">
            <div class="recap-row">
                <span class="recap-key">Nom</span>
                <span class="recap-val"><?= $nom ?></span>
            </div>
            <div class="recap-row">
                <span class="recap-key">Email</span>
                <span class="recap-val"><?= $email ?></span>
            </div>
            <div class="recap-row">
                <span class="recap-key">Message</span>
                <span class="recap-val"><?= nl2br($message) ?></span>
            </div>
            <a href="24-formulaire.php">Envoyer un autre message</a>
        </div>
    </div>
    <?php else: ?>
    <div class="card">
        <div class="card-label">// Formulaire</div>
        <form action="24-formulaire.php" method="POST">
            <div class="field">
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom"
                       placeholder="Jean Dupont"
                       value="<?= $nom ?>">
            </div>
            <div class="field">
                <label for="email">Email</label>
                <input type="email" id="email" name="email"
                       placeholder="jean@exemple.com"
                       value="<?= $email ?>">
            </div>
            <div class="field">
                <label for="message">Message</label>
                <textarea id="message" name="message"
                          placeholder="Votre message…"><?= $message ?></textarea>
            </div>
            <button type="submit">Envoyer →</button>
        </form>
    </div>
    <?php endif; ?>

    <div class="footer">
        <div class="footer-brand"><span>TNK</span>-SEMPAI</div>
        <div class="footer-meta">Exercice 24 · Formation TI</div>
    </div>

</div>

</body>
</html>
