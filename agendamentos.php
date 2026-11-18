<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

$ch = curl_init("http://127.0.0.1:3010/appointments");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 4);
$res = curl_exec($ch);
curl_close($ch);

$data = json_decode($res, true);
$appointments = $data['appointments'] ?? [];
$count = $data['count'] ?? count($appointments);

// Buscar métricas da fila
$chM = curl_init("http://127.0.0.1:3010/metrics");
curl_setopt($chM, CURLOPT_RETURNTRANSFER, true);
curl_setopt($chM, CURLOPT_TIMEOUT, 4);
$resM = curl_exec($chM);
curl_close($chM);
$metrics = json_decode($resM, true);
$counters = $metrics['counters'] ?? [];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atendimentos Agendados — Zap24hs</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&family=JetBrains+Mono:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        :root {
            --bg: #070b0e;
            --surface: #0f171d;
            --surface-border: #1b2730;
            --neon: #22c55e;
            --neon-glow: rgba(34, 197, 94, 0.25);
            --text-main: #f0fdf4;
            --text-muted: #94a3b8;
        }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            background: var(--bg);
            color: var(--text-main);
            font-family: 'Plus Jakarta Sans', sans-serif;
            min-height: 100vh;
            padding: 30px 20px;
        }
        .container {
            max-width: 960px;
            margin: 0 auto;
        }
        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid var(--surface-border);
            flex-wrap: wrap;
            gap: 16px;
        }
        .brand {
            display: flex;
            align-items: center;
            gap: 14px;
        }
        .brand img {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            border: 2px solid var(--neon);
        }
        .brand h1 {
            font-size: 1.5rem;
            font-weight: 800;
        }
        .brand span {
            color: var(--neon);
        }
        .nav-links {
            display: flex;
            gap: 10px;
        }
        .btn-nav {
            padding: 8px 16px;
            background: var(--surface);
            border: 1px solid var(--surface-border);
            color: var(--text-main);
            text-decoration: none;
            border-radius: 8px;
            font-size: 0.9rem;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.2s ease;
        }
        .btn-nav:hover {
            border-color: var(--neon);
            color: var(--neon);
        }
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 16px;
            margin-bottom: 30px;
        }
        .stat-card {
            background: var(--surface);
            border: 1px solid var(--surface-border);
            border-radius: 14px;
            padding: 20px;
            position: relative;
            overflow: hidden;
        }
        .stat-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; height: 3px;
            background: var(--neon);
            opacity: 0.8;
        }
        .stat-title {
            color: var(--text-muted);
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .stat-number {
            font-size: 2rem;
            font-weight: 800;
            color: var(--text-main);
            font-family: 'JetBrains Mono', monospace;
        }
        .section-header {
            margin-bottom: 18px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .section-header h2 {
            font-size: 1.25rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .appt-list {
            display: flex;
            flex-direction: column;
            gap: 14px;
        }
        .appt-card {
            background: var(--surface);
            border: 1px solid var(--surface-border);
            border-radius: 14px;
            padding: 20px;
            display: grid;
            grid-template-columns: 1fr auto;
            align-items: center;
            gap: 20px;
            transition: transform 0.2s ease, border-color 0.2s ease;
        }
        .appt-card:hover {
            border-color: var(--neon);
            transform: translateY(-2px);
        }
        .appt-info h3 {
            font-size: 1.15rem;
            font-weight: 700;
            margin-bottom: 6px;
            color: #ffffff;
        }
        .appt-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            color: var(--text-muted);
            font-size: 0.9rem;
            margin-top: 8px;
        }
        .appt-meta span {
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }
        .appt-meta strong {
            color: var(--neon);
        }
        .appt-actions {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }
        .btn-action {
            padding: 10px 16px;
            border-radius: 10px;
            font-size: 0.88rem;
            font-weight: 700;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.2s ease;
        }
        .btn-cal {
            background: #1e3a8a;
            color: #93c5fd;
            border: 1px solid #3b82f6;
        }
        .btn-cal:hover {
            background: #2563eb;
            color: #ffffff;
        }
        .btn-wa {
            background: rgba(34, 197, 94, 0.15);
            color: var(--neon);
            border: 1px solid var(--neon);
        }
        .btn-wa:hover {
            background: var(--neon);
            color: #000000;
        }
        .empty-state {
            background: var(--surface);
            border: 1px dashed var(--surface-border);
            border-radius: 14px;
            padding: 40px 20px;
            text-align: center;
            color: var(--text-muted);
        }
        .empty-state i {
            font-size: 3rem;
            margin-bottom: 12px;
            color: var(--neon);
            opacity: 0.7;
        }
        .badge-live {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: rgba(34, 197, 94, 0.15);
            color: var(--neon);
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 700;
        }
        .pulse-dot {
            width: 8px;
            height: 8px;
            background: var(--neon);
            border-radius: 50%;
            box-shadow: 0 0 8px var(--neon);
        }
        @media (max-width: 768px) {
            .appt-card {
                grid-template-columns: 1fr;
            }
            .appt-actions {
                width: 100%;
            }
            .btn-action {
                flex: 1;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="brand">
                <img src="icon-192.png" alt="Zap24hs">
                <div>
                    <h1>Zap<span>24hs</span></h1>
                    <small style="color: var(--text-muted);">Painel de Agendamentos & Follow-up</small>
                </div>
            </div>
            <div class="nav-links">
                <a href="index.php" class="btn-nav"><i class="fa-solid fa-house"></i> Landing Page</a>
                <a href="conectar.php" class="btn-nav"><i class="fa-brands fa-whatsapp"></i> Conectar Zap</a>
                <a href="javascript:location.reload()" class="btn-nav"><i class="fa-solid fa-rotate-right"></i> Atualizar</a>
            </div>
        </header>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-title"><i class="fa-regular fa-calendar-check text-neon"></i> Total Agendados</div>
                <div class="stat-number"><?php echo $count; ?></div>
            </div>
            <div class="stat-card">
                <div class="stat-title"><i class="fa-solid fa-clock-rotate-left"></i> Follow-ups Enviados</div>
                <div class="stat-number"><?php echo (int)($counters['followups_sent'] ?? 0); ?></div>
            </div>
            <div class="stat-card">
                <div class="stat-title"><i class="fa-solid fa-robot"></i> Respostas com IA</div>
                <div class="stat-number"><?php echo (int)($counters['ai_replies'] ?? 0); ?></div>
            </div>
            <div class="stat-card">
                <div class="stat-title"><i class="fa-solid fa-circle-check"></i> Status do Sistema</div>
                <div style="margin-top: 6px;">
                    <span class="badge-live"><span class="pulse-dot"></span> IA Ativa 24h</span>
                </div>
            </div>
        </div>

        <div class="section-header">
            <h2><i class="fa-solid fa-calendar-days text-neon"></i> Atendimentos Agendados via WhatsApp</h2>
            <small style="color: var(--text-muted);">Sincronizados com Google Agenda</small>
        </div>

        <?php if (empty($appointments)): ?>
            <div class="empty-state">
                <i class="fa-solid fa-calendar-plus"></i>
                <h3 style="color: var(--text-main); margin-bottom: 8px;">Nenhum agendamento pendente</h3>
                <p>Assim que um lead solicitar um atendimento no WhatsApp, ele aparecerá aqui em tempo real com link para o Google Agenda!</p>
            </div>
        <?php else: ?>
            <div class="appt-list">
                <?php foreach ($appointments as $appt): ?>
                    <div class="appt-card">
                        <div class="appt-info">
                            <h3><?php echo htmlspecialchars($appt['name'] ?? 'Cliente'); ?></h3>
                            <div class="appt-meta">
                                <span><i class="fa-solid fa-clock text-neon"></i> Horário: <strong><?php echo htmlspecialchars($appt['datetime'] ?? 'A combinar'); ?></strong></span>
                                <?php if (!empty($appt['company'])): ?>
                                    <span><i class="fa-solid fa-building"></i> Empresa: <?php echo htmlspecialchars($appt['company']); ?></span>
                                <?php endif; ?>
                                <span><i class="fa-solid fa-phone"></i> +<?php echo htmlspecialchars($appt['number'] ?? ''); ?></span>
                            </div>
                        </div>
                        <div class="appt-actions">
                            <?php if (!empty($appt['calUrl'])): ?>
                                <a href="<?php echo htmlspecialchars($appt['calUrl']); ?>" target="_blank" rel="noopener noreferrer" class="btn-action btn-cal">
                                    <i class="fa-brands fa-google"></i> Google Agenda
                                </a>
                            <?php endif; ?>
                            <a href="https://wa.me/<?php echo htmlspecialchars($appt['number'] ?? ''); ?>" target="_blank" rel="noopener noreferrer" class="btn-action btn-wa">
                                <i class="fa-brands fa-whatsapp"></i> Conversar
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
