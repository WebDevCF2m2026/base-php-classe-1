<?php

$nombres = [];
for ($i = 0; $i < 10; $i++) {
    $nombres[] = rand(1, 99);
}

$original = $nombres;

$nombresSansDoublons = array_unique($nombres);

sort($nombresSansDoublons);

$resultatFinal = $nombresSansDoublons;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableaux Avancés PHP</title>
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
            max-width: 500px;
            box-shadow: 0 4px 24px rgba(0,0,0,.06);
        }

        h1 {
            font-family: 'DM Mono', monospace;
            font-size: 1.1rem;
            font-weight: 500;
            letter-spacing: .04em;
            color: #1a1a1a;
            margin-bottom: 28px;
            border-bottom: 1px solid #f5f4f0;
            padding-bottom: 15px;
        }

        .section-title {
            font-size: .72rem;
            font-weight: 500;
            letter-spacing: .08em;
            text-transform: uppercase;
            color: #888;
            margin-bottom: 12px;
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            font-family: 'DM Mono', monospace;
        }

        th, td {
            text-align: left;
            padding: 12px;
            border: 1px solid #e0ddd6;
            font-size: 0.9rem;
        }

        th {
            background: #fafaf8;
            color: #888;
            font-weight: 500;
            text-transform: uppercase;
            font-size: 0.7rem;
        }

        tr:nth-child(even) { background: #fafaf8; }

        .badge-list {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 20px;
        }

        .badge {
            background: #f5f4f0;
            padding: 4px 10px;
            border-radius: 6px;
            font-family: 'DM Mono', monospace;
            font-size: 0.85rem;
            color: #666;
        }

        .btn-refresh {
            display: inline-block;
            margin-top: 25px;
            padding: 10px 20px;
            background: #1a1a1a;
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            font-size: 0.85rem;
            transition: background 0.2s;
        }

        .btn-refresh:hover { background: #333; }
    </style>
</head>
<body>
    <div class="card">
        <h1>26-tableaux-avances.php</h1>

        <div class="section-title">Valeurs brutes (générées)</div>
        <div class="badge-list">
            <?php foreach ($original as $val): ?>
                <span class="badge"><?= $val ?></span>
            <?php endforeach; ?>
        </div>

        <div class="section-title">Résultat trié et unique</div>
        <table>
            <thead>
                <tr>
                    <th>Position</th>
                    <th>Valeur</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($resultatFinal as $index => $valeur): ?>
                    <tr>
                        <td style="color: #aaa;">#<?= $index + 1 ?></td>
                        <td><strong><?= $valeur ?></strong></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="" class="btn-refresh">Générer de nouveaux nombres</a>
    </div>
</body>
</html>