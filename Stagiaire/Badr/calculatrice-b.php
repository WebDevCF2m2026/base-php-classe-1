
<?php

function calculSimple($a, $b, $operateur) {
    if ($operateur === "+") {
        return $a + $b;
    } elseif ($operateur === "-") {
        return $a - $b;
    } elseif ($operateur === "*") {
        return $a * $b;
    } elseif ($operateur === "/") {
        if ($b == 0) {
            return "Division par 0 impossible";
        }
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
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">

    <style>
        *, *::before, *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: radial-gradient(circle at top, #1e1e2f, #0a0a12);
            font-family: 'DM Sans', sans-serif;
            color: #eaeaf0;
        }

        .card {
            background: rgba(20, 20, 35, 0.9);
            border-radius: 18px;
            padding: 36px;
            max-width: 420px;
            width: 100%;
            box-shadow:
                0 0 0 1px rgba(98, 92, 255, 0.25),
                0 20px 40px rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(6px);
        }

        h1 {
            text-align: center;
            font-family: 'DM Mono', monospace;
            font-size: 1.2rem;
            letter-spacing: .08em;
            color: #9c9cff;
            margin-bottom: 28px;
        }

        .row {
            display: flex;
            gap: 12px;
            margin-bottom: 20px;
            align-items: flex-end;
        }

        .field {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        label {
            font-size: .7rem;
            text-transform: uppercase;
            letter-spacing: .1em;
            color: #9999cc;
        }

        input[type="number"],
        select {
            padding: 12px;
            border-radius: 10px;
            background: #0f1020;
            border: 1px solid #2b2b55;
            color: #ffffff;
            font-family: 'DM Mono', monospace;
            font-size: .95rem;
            transition: all .25s ease;
        }

        input::placeholder {
            color: #666699;
        }

        input:focus,
        select:focus {
            outline: none;
            border-color: #625cff;
            box-shadow: 0 0 0 2px rgba(98, 92, 255, 0.25);
            background: #13142a;
        }

        .field-op {
            flex: 0 0 68px;
        }

        select {
            cursor: pointer;
            text-align: center;
        }

        button {
            width: 100%;
            padding: 14px;
            margin-top: 6px;
            background: linear-gradient(135deg, #625cff, #8f8bff);
            color: #fff;
            border: none;
            border-radius: 12px;
            font-weight: 600;
            letter-spacing: .04em;
            font-size: .9rem;
            cursor: pointer;
            transition: transform .1s ease, box-shadow .2s ease;
        }

        button:hover {
            box-shadow: 0 8px 24px rgba(98, 92, 255, .35);
        }

        button:active {
            transform: scale(.97);
        }

        .result {
            margin-top: 26px;
            padding: 18px;
            border-radius: 12px;
            background: #0f1020;
            box-shadow: inset 0 0 0 1px #2b2b55;
            text-align: center;
        }

        .result .expr {
            font-family: 'DM Mono', monospace;
            font-size: .8rem;
            color: #7f7fdc;
            margin-bottom: 6px;
        }

        .result .value {
            font-family: 'DM Mono', monospace;
            font-size: 1.8rem;
            font-weight: 600;
            color: #ffffff;
        }

        .result .value.error {
            color: #ff5c5c;
            font-size: 1.1rem;
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
