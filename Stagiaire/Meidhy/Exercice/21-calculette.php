<?php
function calculSimple($a, $operateur, $b) {
    if ($operateur === "+") return $a + $b;
    if ($operateur === "-") return $a - $b;
    if ($operateur === "*") return $a * $b;
    if ($operateur === "/") {
        if ($b == 0) return "Division par zéro impossible";
        return $a / $b;
    }
    return "Opérateur invalide";
}

$resultat   = "";
$hasResult  = false;
$isError    = false;
$a_val = $op_val = $b_val = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $a_val  = $_POST["a"];
    $op_val = $_POST["op"];
    $b_val  = $_POST["b"];

    $calc = calculSimple((float)$a_val, $op_val, (float)$b_val);
    $isError   = !is_numeric($calc);
    $resultat  = "{$a_val} {$op_val} {$b_val} = " . ($isError ? $calc : $calc);
    $hasResult = true;
}

$opLabels = ["+" => "Addition", "-" => "Soustraction", "*" => "Multiplication", "/" => "Division"];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex. — Calculatrice Simple</title>
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
        .ex-title {
            font-family: 'Bebas Neue', sans-serif;
            font-size: clamp(48px, 12vw, 80px);
            line-height: 0.88;
            letter-spacing: -1px;
            margin-bottom: 6px;
        }
        .ex-title span { color: var(--accent); }

        .ex-sub {
            font-family: 'JetBrains Mono', monospace;
            font-size: 11px;
            color: var(--muted2);
            letter-spacing: 0.12em;
            text-transform: uppercase;
            margin-bottom: 32px;
        }

        /* ── FORM CARD ── */
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

        /* ── INPUTS ── */
        .field-group {
            display: grid;
            grid-template-columns: 1fr auto 1fr;
            gap: 10px;
            align-items: end;
            margin-bottom: 16px;
        }

        .field label {
            display: block;
            font-family: 'JetBrains Mono', monospace;
            font-size: 10px;
            color: var(--muted2);
            letter-spacing: 0.12em;
            text-transform: uppercase;
            margin-bottom: 7px;
        }

        input[type="number"],
        select {
            width: 100%;
            background: var(--surface2);
            border: 1px solid var(--border);
            color: var(--text);
            font-family: 'JetBrains Mono', monospace;
            font-size: 15px;
            padding: 11px 14px;
            border-radius: 3px;
            outline: none;
            transition: border-color .2s;
            appearance: none;
        }
        input[type="number"]:focus,
        select:focus {
            border-color: var(--accent);
        }
        input[type="number"]::placeholder { color: var(--muted); }

        /* Operator select — centered big symbol */
        .op-wrap { text-align: center; }
        .op-wrap label { text-align: center; }
        select#op {
            text-align: center;
            font-size: 18px;
            padding: 10px 8px;
            cursor: pointer;
            color: var(--accent);
            font-weight: 600;
        }
        select#op option { background: #1c1c1c; color: var(--text); font-size: 14px; }

        /* Operator full-width select below */
        .op-full {
            margin-bottom: 16px;
        }
        .op-full select {
            width: 100%;
            font-size: 13px;
            color: var(--muted2);
            padding: 10px 14px;
        }

        /* ── BUTTON ── */
        button[type="submit"] {
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
        button[type="submit"]:hover { opacity: .88; }
        button[type="submit"]:active { transform: scale(.98); }

        /* ── RESULT ── */
        .result-card {
            background: var(--surface);
            border-radius: 4px;
            padding: 24px 28px;
            position: relative;
            overflow: hidden;
            border: 1px solid <?php echo $isError ? 'rgba(255,95,87,0.3)' : 'rgba(200,240,96,0.22)'; ?>;
        }
        .result-card::after {
            content: '';
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 2px;
            background: <?php echo $isError ? 'var(--danger)' : 'linear-gradient(90deg, var(--accent), transparent)'; ?>;
        }
        .result-label {
            font-family: 'JetBrains Mono', monospace;
            font-size: 10px;
            letter-spacing: 0.18em;
            color: var(--muted);
            text-transform: uppercase;
            margin-bottom: 12px;
        }
        .result-value {
            font-family: 'JetBrains Mono', monospace;
            font-size: 22px;
            font-weight: 600;
            color: <?php echo $isError ? 'var(--danger)' : 'var(--accent)'; ?>;
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

    <div class="badge">PHP · Fonctions & Formulaires</div>

    <div class="ex-title">Calcula<span>trice</span></div>
    <div class="ex-sub">// calculSimple($a, $op, $b)</div>

    <div class="card">
        <div class="card-label">// Paramètres</div>

        <form method="post">

            <div class="field-group">
                <div class="field">
                    <label for="a">Valeur A</label>
                    <input type="number" id="a" name="a"
                           value="<?= htmlspecialchars($a_val) ?>"
                           placeholder="0" required step="any">
                </div>

                <div class="field op-wrap">
                    <label for="op">Op</label>
                    <select id="op" name="op">
                        <?php foreach ($opLabels as $sym => $lbl): ?>
                            <option value="<?= $sym ?>" <?= ($op_val === $sym) ? 'selected' : '' ?>>
                                <?= $sym ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="field">
                    <label for="b">Valeur B</label>
                    <input type="number" id="b" name="b"
                           value="<?= htmlspecialchars($b_val) ?>"
                           placeholder="0" required step="any">
                </div>
            </div>

            <button type="submit">Calculer →</button>
        </form>
    </div>

    <?php if ($hasResult): ?>
    <div class="result-card">
        <div class="result-label"><?= $isError ? '// Erreur' : '// Résultat' ?></div>
        <div class="result-value"><?= htmlspecialchars($resultat) ?></div>
    </div>
    <?php endif; ?>

    <div class="footer">
        <div class="footer-brand"><span>TNK</span>-SEMPAI</div>
        <div class="footer-meta">Formation TI · PHP</div>
    </div>

</div>

</body>
</html>