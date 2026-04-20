<?php
 
function calculSimple($a, $b, $operateur) {
    if ($operateur === "+") {
        return $a + $b;
    } elseif ($operateur === "-") {
        return $a - $b;
    } elseif ($operateur === "*") {
        return $a * $b;
    } elseif ($operateur === "/") {
        if ($b == 0)
            return "Division par 0 impossible";
        return $a / $b;
    } else {
        return "Opérateur invalide";
    }
}
 
$res = null;
$premiereValeur = "";
$deuxiemeValeur = "";
$operateur = "+";
 
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $premiereValeur = $_POST["valeur1"] ?? "";
    $deuxiemeValeur = $_POST["valeur2"] ?? "";
    $operateur      = $_POST["operateur"] ?? "+";
 
    if (is_numeric($premiereValeur) && is_numeric($deuxiemeValeur)) {
        $res = calculSimple((float)$premiereValeur, (float)$deuxiemeValeur, $operateur);
    } else {
        $res = "Veuillez entrer des nombres valides";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=DM+Sans:wght@300;400;500&display=swap%22 rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
 
        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f5f4f0;
            font-family: 'DM Sans', sans-serif;
        }
 
        .card {
            background: #fff;
            border: 1px solid #e0ddd6;
            border-radius: 16px;
            padding: 40px 36px;
            width: 100%;
            max-width: 400px;
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
 
        .row {
            display: flex;
            gap: 10px;
            align-items: flex-end;
            margin-bottom: 18px;
        }
 
        .field {
            display: flex;
            flex-direction: column;
            gap: 6px;
            flex: 1;
        }
 
        label {
            font-size: .72rem;
            font-weight: 500;
            letter-spacing: .08em;
            text-transform: uppercase;
            color: #888;
        }
 
        input[type="number"],
        select {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #e0ddd6;
            border-radius: 8px;
            font-family: 'DM Mono', monospace;
            font-size: .95rem;
            color: #1a1a1a;
            background: #fafaf8;
            transition: border-color .2s;
            appearance: none;
        }
 
        input[type="number"]:focus,
        select:focus {
            outline: none;
            border-color: #1a1a1a;
            background: #fff;
        }
 
        .field-op {
            flex: 0 0 64px;
        }
 
        select {
            text-align: center;
            cursor: pointer;
        }
 
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
 
        .result {
            margin-top: 22px;
            padding: 16px;
            background: #f5f4f0;
            border-radius: 8px;
            text-align: center;
        }
 
        .result .expr {
            font-family: 'DM Mono', monospace;
            font-size: .82rem;
            color: #888;
            margin-bottom: 4px;
        }
 
        .result .value {
            font-family: 'DM Mono', monospace;
            font-size: 1.6rem;
            font-weight: 500;
            color: #1a1a1a;
        }
 
        .result .value.error {
            font-size: 1rem;
            color: #c0392b;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>calculatrice.php</h1>
 
        <form method="POST">
            <div class="row">
                <div class="field">
                    <label>Valeur A</label>
                    <input type="number" name="valeur1" step="any"
                           value="<?= htmlspecialchars($premiereValeur) ?>"
                           placeholder="4" required>
                </div>
 
                <div class="field field-op">
                    <label>Op.</label>
                    <select name="operateur">
                        <?php foreach (['+', '-', '*', '/'] as $op): ?>
                            <option value="<?= $op ?>" <?= $operateur === $op ? 'selected' : '' ?>>
                                <?= $op ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
 
                <div class="field">
                    <label>Valeur B</label>
                    <input type="number" name="valeur2" step="any"
                           value="<?= htmlspecialchars($deuxiemeValeur) ?>"
                           placeholder="6" required>
                </div>
            </div>
 
            <button type="submit">Calculer</button>
        </form>
 
        <?php if ($res !== null): ?>
            <div class="result">
                <div class="expr">
                    <?= htmlspecialchars($premiereValeur) ?>
                    <?= htmlspecialchars($operateur) ?>
                    <?= htmlspecialchars($deuxiemeValeur) ?>
                </div>
                <div class="value <?= is_string($res) ? 'error' : '' ?>">
                    <?= htmlspecialchars((string)$res) ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>