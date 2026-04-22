<?php
function inverserMot($mot){
    $motInverser = "";
    for ($i = 0; $i < strlen($mot); $i++){
        $motInverser = $mot[$i] . $motInverser;
    }
    return $motInverser;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex.22 — Inverser un mot</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=JetBrains+Mono:wght@400;600&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">

    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --bg:        #0e0e0e;
            --surface:   #161616;
            --border:    #2a2a2a;
            --accent:    #c8f060;
            --accent-dim:#8ab33a;
            --text:      #f0f0f0;
            --muted:     #666;
            --code-bg:   #1c1c1c;
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
            overflow-x: hidden;
        }

        /* Grid bg */
        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background-image:
                linear-gradient(rgba(200,240,96,0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(200,240,96,0.03) 1px, transparent 1px);
            background-size: 40px 40px;
            pointer-events: none;
            z-index: 0;
        }

        .wrapper {
            position: relative;
            z-index: 1;
            width: 100%;
            max-width: 640px;
        }

        /* ── BADGE ── */
        .badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(200,240,96,0.08);
            border: 1px solid rgba(200,240,96,0.2);
            color: var(--accent);
            font-family: 'JetBrains Mono', monospace;
            font-size: 11px;
            letter-spacing: 0.12em;
            padding: 5px 12px;
            border-radius: 2px;
            margin-bottom: 24px;
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
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.4; transform: scale(0.7); }
        }

        /* ── HEADING ── */
        .ex-number {
            font-family: 'Bebas Neue', sans-serif;
            font-size: clamp(72px, 14vw, 110px);
            line-height: 0.9;
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
            margin-bottom: 32px;
        }

        /* ── CARD ── */
        .card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 4px;
            padding: 28px 32px;
            margin-bottom: 16px;
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
            font-size: 14px;
            color: #aaa;
            line-height: 1.7;
            font-weight: 300;
        }

        code {
            font-family: 'JetBrains Mono', monospace;
            font-size: 12px;
            background: var(--code-bg);
            border: 1px solid var(--border);
            color: var(--accent);
            padding: 2px 7px;
            border-radius: 2px;
        }

        /* ── RESULT ── */
        .result-card {
            background: var(--surface);
            border: 1px solid rgba(200,240,96,0.25);
            border-radius: 4px;
            padding: 28px 32px;
            position: relative;
            overflow: hidden;
            margin-bottom: 16px;
        }
        .result-card::after {
            content: '';
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 2px;
            background: linear-gradient(90deg, var(--accent), transparent);
        }
        .flow {
            display: flex;
            align-items: center;
            gap: 16px;
            flex-wrap: wrap;
            margin-top: 12px;
        }
        .word {
            font-family: 'JetBrains Mono', monospace;
            font-size: 28px;
            font-weight: 600;
            letter-spacing: 0.05em;
        }
        .word.original { color: #aaa; }
        .word.reversed { color: var(--accent); }

        .arrow {
            font-size: 20px;
            color: var(--muted);
            font-family: 'JetBrains Mono', monospace;
        }

        /* ── CODE BLOCK ── */
        .code-card {
            background: var(--code-bg);
            border: 1px solid var(--border);
            border-radius: 4px;
            overflow: hidden;
        }
        .code-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 16px;
            border-bottom: 1px solid var(--border);
            background: #111;
        }
        .code-header span {
            font-family: 'JetBrains Mono', monospace;
            font-size: 10px;
            letter-spacing: 0.15em;
            color: var(--muted);
            text-transform: uppercase;
        }
        .dots { display: flex; gap: 5px; }
        .dot {
            width: 9px; height: 9px;
            border-radius: 50%;
        }
        .dot:nth-child(1){ background: #ff5f57; }
        .dot:nth-child(2){ background: #febc2e; }
        .dot:nth-child(3){ background: #28c840; }

        pre {
            padding: 20px 24px;
            font-family: 'JetBrains Mono', monospace;
            font-size: 12.5px;
            line-height: 1.8;
            color: #ccc;
            overflow-x: auto;
            margin: 0;
        }
        .kw  { color: #bb9af7; }
        .fn  { color: #7dcfff; }
        .str { color: #9ece6a; }
        .var { color: #f7768e; }
        .cmt { color: #565f89; font-style: italic; }
        .num { color: #ff9e64; }

        /* ── FOOTER ── */
        .footer {
            margin-top: 32px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .footer-brand {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 14px;
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

    <div class="badge">PHP · Fonctions & Strings</div>

    <span class="ex-number">22</span>
    <div class="ex-title">Inverser un mot sans strrev()</div>

    <!-- Consigne -->
    <div class="card">
        <div class="card-label">// Consigne</div>
        <p>
            Créez une fonction <code>inverserMot($mot)</code> qui retourne le mot à l'envers 
            <strong style="color:#fff">sans utiliser</strong> <code>strrev()</code>. 
            Testez avec <code>"Bonjour"</code>.
        </p>
    </div>

    <!-- Résultat -->
    <div class="result-card">
        <div class="card-label">// Output</div>
        <div class="flow">
            <span class="word original">"Bonjour"</span>
            <span class="arrow">→</span>
            <span class="word reversed">"<?= inverserMot("Bonjour") ?>"</span>
        </div>
    </div>

    <!-- Code -->
    <div class="code-card">
        <div class="code-header">
            <div class="dots">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
            <span>inverser_mot.php</span>
        </div>
        <pre><span class="kw">function</span> <span class="fn">inverserMot</span>(<span class="var">$mot</span>) {
    <span class="var">$motInverser</span> = <span class="str">""</span>;
    <span class="kw">for</span> (<span class="var">$i</span> = <span class="num">0</span>; <span class="var">$i</span> &lt; <span class="fn">strlen</span>(<span class="var">$mot</span>); <span class="var">$i</span>++) {
        <span class="var">$motInverser</span> = <span class="var">$mot</span>[<span class="var">$i</span>] . <span class="var">$motInverser</span>;
    }
    <span class="kw">return</span> <span class="var">$motInverser</span>;
}

<span class="cmt">// Test</span>
<span class="fn">echo</span> <span class="fn">inverserMot</span>(<span class="str">"Bonjour"</span>); <span class="cmt">// → ruojnoB</span></pre>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="footer-brand"><span>TNK</span>-SEMPAI</div>
        <div class="footer-meta">Exercice 22 · Formation TI</div>
    </div>

</div>

</body>
</html>