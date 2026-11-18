<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

$apiKey = "";
if (file_exists(__DIR__ . '/.config.php')) {
    require_once __DIR__ . '/.config.php';
    if (defined('EVOLUTION_KEY')) {
        $apiKey = EVOLUTION_KEY;
    }
}

// 1. Checar estado atual da conexao
$ch = curl_init("http://127.0.0.1:8085/instance/connectionState/zap24hs");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 6);
curl_setopt($ch, CURLOPT_HTTPHEADER, ["apikey: " . $apiKey]);
$stateRes = curl_exec($ch);
curl_close($ch);
$stateData = json_decode($stateRes, true);
$state = $stateData['instance']['state'] ?? 'close';

$qrBase64 = null;
$pairingCode = null;

// 2. Se nao estiver conectado, solicitar QR Code atualizado
if ($state !== 'open') {
    $ch2 = curl_init("http://127.0.0.1:8085/instance/connect/zap24hs");
    curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch2, CURLOPT_TIMEOUT, 8);
    curl_setopt($ch2, CURLOPT_HTTPHEADER, ["apikey: " . $apiKey]);
    $connectRes = curl_exec($ch2);
    curl_close($ch2);
    $connectData = json_decode($connectRes, true);
    $qrBase64 = $connectData['base64'] ?? null;
    $pairingCode = $connectData['pairingCode'] ?? null;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conectar WhatsApp — Zap24hs</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;700;800&family=JetBrains+Mono:wght@600&display=swap" rel="stylesheet">
    <style>
        body {
            background: #0a0f14;
            color: #f0fdf4;
            font-family: 'Plus Jakarta Sans', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
            box-sizing: border-box;
        }
        .card {
            background: #101720;
            border: 1px solid rgba(0, 230, 118, 0.35);
            border-radius: 24px;
            padding: 40px;
            max-width: 480px;
            width: 100%;
            text-align: center;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.8), 0 0 40px rgba(0, 230, 118, 0.15);
            box-sizing: border-box;
        }
        h1 {
            font-size: 1.6rem;
            font-weight: 800;
            margin-bottom: 8px;
        }
        p {
            color: #94a3b8;
            font-size: 0.95rem;
            margin-bottom: 24px;
            line-height: 1.5;
        }
        .qr-box {
            background: #fff;
            padding: 16px;
            border-radius: 16px;
            display: inline-block;
            margin-bottom: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }
        .qr-img {
            display: block;
            width: 260px;
            height: 260px;
        }
        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 18px;
            border-radius: 999px;
            font-size: 0.88rem;
            font-weight: 700;
            margin-bottom: 20px;
        }
        .status-open {
            background: rgba(0, 230, 118, 0.15);
            border: 1px solid #00e676;
            color: #00e676;
        }
        .status-connecting {
            background: rgba(234, 179, 8, 0.15);
            border: 1px solid #eab308;
            color: #eab308;
        }
        .instructions {
            background: #15222e;
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 14px;
            padding: 16px;
            font-size: 0.88rem;
            color: #cbd5e1;
            text-align: left;
            margin-bottom: 24px;
        }
        .instructions ol {
            margin: 0;
            padding-left: 20px;
        }
        .instructions li {
            margin-bottom: 8px;
        }
        .instructions li:last-child {
            margin-bottom: 0;
        }
        .btn-reload {
            background: #00e676;
            color: #062211;
            padding: 14px 28px;
            border-radius: 12px;
            font-weight: 800;
            cursor: pointer;
            border: none;
            text-decoration: none;
            display: inline-block;
            font-size: 0.95rem;
            transition: all 0.2s;
        }
        .btn-reload:hover {
            background: #00c853;
            transform: translateY(-2px);
        }
    </style>
    <?php if ($state !== 'open'): ?>
    <meta http-equiv="refresh" content="15">
    <?php endif; ?>
</head>
<body>
    <div class="card">
        <h1>Conexão WhatsApp Zap24hs</h1>
        <p>Número de demonstração: <strong style="color: #00e676;">+55 11 911303662</strong></p>

        <?php if ($state === 'open'): ?>
            <div class="status-badge status-open">
                ● WHATSAPP CONECTADO COM SUCESSO!
            </div>
            <p>O número <strong>+55 11 911303662</strong> está conectado e pronto na instância <strong>zap24hs</strong>!</p>
            <p><a href="./" class="btn-reload">Ver Landing Page Zap24hs</a></p>
        <?php else: ?>
            <div class="status-badge status-connecting">
                ● AGUARDANDO ESCANEAMENTO DO QR CODE
            </div>

            <?php if ($qrBase64): ?>
                <div class="qr-box">
                    <img src="<?php echo $qrBase64; ?>" alt="QR Code WhatsApp" class="qr-img">
                </div>
                <div class="instructions">
                    <ol>
                        <li>Abra o <strong>WhatsApp</strong> no telefone com o número <strong>+55 11 911303662</strong>.</li>
                        <li>Toque em <strong>Mais opções</strong> (⋮) ou <strong>Configurações</strong> &gt; <strong>Aparelhos conectados</strong>.</li>
                        <li>Toque em <strong>Conectar um aparelho</strong> e aponte a câmera para o QR Code acima.</li>
                    </ol>
                </div>
            <?php else: ?>
                <p>Gerando QR Code atualizado... Aguarde alguns instantes.</p>
            <?php endif; ?>

            <a href="conectar.php" class="btn-reload">Atualizar QR Code</a>
        <?php endif; ?>
    </div>
</body>
</html>
