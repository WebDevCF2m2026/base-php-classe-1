<?php 

function transformPrenom($nom){
    $nom = strtolower($nom); 
    $nomMaj = ucfirst($nom);
    return $nomMaj;
}

$prenomMaj = "";
if (isset($_GET['nom'])) {
    $prenomMaj = transformPrenom($_GET['nom']);
}

$hasResult = isset($_GET['nom']) && $_GET['nom'] !== "";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex.23 — Strings</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=JetBrains+Mono:wght@400;600&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">

    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --bg:       #0e0e0e;
            --surface:  #161616;
            --surface2: #1c1c1c;
            --border:   #2a2a2a;
            --accent:   #c8f060;
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
            max-width: 480px;
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

        /* ── CARD ── */
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
            margin-bottom: 14px;
        }
        .card p {
            font-size: 13.5px;
            color: #999;
            line-height: 1.7;
            font-weight: 300;
        }
        code {
            font-family: 'JetBrains Mono', monospace;
            font-size: 12px;
            background: var(--surface2);
            border: 1px solid var(--border);
            color: var(--accent);
            padding: 2px 7px;
            border-radius: 2px;
        }

        /* ── FORM ── */
        .input-row {
            display: flex;
            gap: 10px;
            align-items: stretch;
        }

        label[for="nom"] {
            display: block;
            font-family: 'JetBrains Mono', monospace;
            font-size: 10px;
            color: var(--muted2);
            letter-spacing: 0.12em;
            text-transform: uppercase;
            margin-bottom: 8px;
        }

        input[type="text"] {
            flex: 1;
            background: var(--surface2);
            border: 1px solid var(--border);
            color: var(--text);
            font-family: 'JetBrains Mono', monospace;
            font-size: 15px;
            padding: 12px 14px;
            border-radius: 3px;
            outline: none;
            transition: border-color .2s;
        }
        input[type="text"]:focus { border-color: var(--accent); }
        input[type="text"]::placeholder { color: var(--muted); }

        button[type="submit"] {
            background: var(--accent);
            color: #0e0e0e;
            font-family: 'Bebas Neue', sans-serif;
            font-size: 16px;
            letter-spacing: 0.1em;
            padding: 12px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            white-space: nowrap;
            transition: opacity .2s, transform .1s;
        }
        button[type="submit"]:hover { opacity: .85; }
        button[type="submit"]:active { transform: scale(.97); }

        /* ── RESULT ── */
        .result-card {
            background: var(--surface);
            border: 1px solid rgba(200,240,96,0.22);
            border-radius: 4px;
            padding: 24px 28px;
            position: relative;
            overflow: hidden;
        }
        .result-card::after {
            content: '';
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 2px;
            background: linear-gradient(90deg, var(--accent), transparent);
        }
        .result-label {
            font-family: 'JetBrains Mono', monospace;
            font-size: 10px;
            letter-spacing: 0.18em;
            color: var(--muted);
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .result-display {
            display: flex;
            align-items: baseline;
            gap: 14px;
            flex-wrap: wrap;
        }
        .result-raw {
            font-family: 'JetBrains Mono', monospace;
            font-size: 15px;
            color: var(--muted2);
            text-decoration: line-through;
        }
        .result-arrow {
            font-family: 'JetBrains Mono', monospace;
            font-size: 16px;
            color: var(--muted);
        }
        .result-value {
            font-family: 'JetBrains Mono', monospace;
            font-size: 28px;
            font-weight: 600;
            color: var(--accent);
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

    <div class="badge">PHP · Strings</div>

    <span class="ex-number">23</span>
    <div class="ex-title">Formater un prénom</div>
    <div class="ex-sub">// strtolower() + ucfirst() via $_GET</div>

    <!-- Consigne -->
    <div class="card" style="margin-bottom:12px">
        <div class="card-label">// Consigne</div>
        <p>
            Demandez un prénom via <code>$_GET</code> et affichez-le avec la première lettre 
            en majuscule et le reste en minuscule — même si l'utilisateur tape <code>"jEaN"</code>.
        </p>
    </div>

    <!-- Form -->
    <div class="card">
        <div class="card-label">// Input</div>
        <form action="23-strings.php" method="GET">
            <label for="nom">Prénom</label>
            <div class="input-row">
                <input type="text"
                       id="nom"
                       name="nom"
                       placeholder='ex: "jEaN", "mARIE"…'
                       value="<?= htmlspecialchars($_GET['nom'] ?? '') ?>">
                <button type="submit">Formater →</button>
            </div>
        </form>
    </div>

    <?php if ($hasResult): ?>
    <div class="result-card">
        <div class="result-label">// Output</div>
        <div class="result-display">
            <span class="result-raw"><?= htmlspecialchars($_GET['nom']) ?></span>
            <span class="result-arrow">→</span>
            <span class="result-value"><?= htmlspecialchars($prenomMaj) ?></span>
        </div>
    </div>
    <?php endif; ?>

    <div class="footer">
        <div class="footer-brand"><span>TNK</span>-SEMPAI</div>
        <div class="footer-meta">Exercice 23 · Formation TI</div>
    </div>

</div>

</body>
</html>