<?php
$hostname = gethostname();
$ip = $_SERVER['SERVER_ADDR'];
$date = date('d/m/Y H:i:s');

$themes = [
    'Web-Alfa'    => [
        'bg'      => '#1a0000',
        'card'    => '#2a0000',
        'accent'  => '#ff4444',
        'border'  => '#ff444433',
        'dot'     => '#ff4444',
        'badge'   => '#ff4444',
    ],
    'Web-Bravo'   => [
        'bg'      => '#00001a',
        'card'    => '#00002a',
        'accent'  => '#4488ff',
        'border'  => '#4488ff33',
        'dot'     => '#4488ff',
        'badge'   => '#4488ff',
    ],
    'Web-Charlie' => [
        'bg'      => '#001a00',
        'card'    => '#002a00',
        'accent'  => '#44cc44',
        'border'  => '#44cc4433',
        'dot'     => '#44cc44',
        'badge'   => '#44cc44',
    ],
];

$t = $themes[$hostname] ?? [
    'bg'      => '#0a0a0a',
    'card'    => '#111111',
    'accent'  => '#00d4aa',
    'border'  => '#00d4aa33',
    'dot'     => '#00d4aa',
    'badge'   => '#00d4aa',
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="5">
    <title>GodCloud — <?php echo strtoupper($hostname); ?></title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', sans-serif;
            background: <?php echo $t['bg']; ?>;
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .card {
            background: <?php echo $t['card']; ?>;
            border: 1px solid #333;
            border-radius: 12px;
            padding: 48px;
            text-align: center;
            min-width: 380px;
        }
        .logo {
            font-size: 28px;
            font-weight: 700;
            color: <?php echo $t['accent']; ?>;
            margin-bottom: 8px;
            letter-spacing: 2px;
        }
        .subtitle {
            font-size: 13px;
            color: #555;
            margin-bottom: 40px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .status {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: <?php echo $t['card']; ?>;
            border: 1px solid <?php echo $t['border']; ?>;
            border-radius: 20px;
            padding: 8px 20px;
            margin-bottom: 32px;
        }
        .dot {
            width: 8px;
            height: 8px;
            background: <?php echo $t['dot']; ?>;
            border-radius: 50%;
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.3; }
        }
        .status-text {
            font-size: 13px;
            color: <?php echo $t['accent']; ?>;
            font-weight: 500;
        }
        .info-grid {
            display: grid;
            gap: 12px;
        }
        .info-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 16px;
            background: #1a1a1a;
            border-radius: 8px;
        }
        .info-label {
            font-size: 12px;
            color: #666;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .info-value {
            font-size: 14px;
            color: #fff;
            font-weight: 600;
            font-family: monospace;
        }
        .hostname-badge {
            display: inline-block;
            background: <?php echo $t['badge']; ?>22;
            border: 1px solid <?php echo $t['badge']; ?>55;
            color: <?php echo $t['badge']; ?>;
            font-family: monospace;
            font-size: 14px;
            font-weight: 700;
            padding: 4px 14px;
            border-radius: 6px;
        }
        .footer {
            margin-top: 32px;
            font-size: 11px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="logo">⚡ GODCLOUD</div>
        <div class="subtitle">High Availability Network</div>
        <div class="status">
            <div class="dot"></div>
            <span class="status-text">Servidor Online</span>
        </div>
        <div class="info-grid">
            <div class="info-row">
                <span class="info-label">Hostname</span>
                <span class="hostname-badge"><?php echo strtoupper($hostname); ?></span>
            </div>
            <div class="info-row">
                <span class="info-label">IP del Servidor</span>
                <span class="info-value"><?php echo $ip; ?></span>
            </div>
            <div class="info-row">
                <span class="info-label">Última actualización</span>
                <span class="info-value"><?php echo $date; ?></span>
            </div>
        </div>
        <div class="footer">GodCloud · 2º ASIR · Curso 2025/26</div>
    </div>
</body>
</html>
