<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>KUDAMAS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        html, body {
            height: 100%;
            width: 100%;
            overflow: hidden; /* tidak bisa scroll */
            background: #1B3A6B;
            font-family: 'Segoe UI', sans-serif;
        }

        .splash-wrap {
            height: 100vh;
            width: 100vw;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 0;
            background: linear-gradient(160deg, #1B3A6B 0%, #0f2447 100%);
            position: relative;
            overflow: hidden;
        }

        /* Lingkaran dekoratif */
        .splash-wrap::before {
            content: '';
            position: absolute;
            width: 500px; height: 500px;
            border-radius: 50%;
            background: rgba(245,197,24,0.04);
            top: -100px; right: -100px;
        }

        .splash-wrap::after {
            content: '';
            position: absolute;
            width: 300px; height: 300px;
            border-radius: 50%;
            background: rgba(255,255,255,0.03);
            bottom: -80px; left: -80px;
        }

        /* Logo kuda */
        .splash-logo {
            width: min(160px, 35vw);
            height: min(160px, 35vw);
            display: flex; align-items: center; justify-content: center;
            margin-bottom: clamp(16px, 3vh, 28px);
            animation: popIn 0.6s cubic-bezier(.34,1.56,.64,1) forwards;
            position: relative; z-index: 1;
            /* HAPUS background kuning */
            background: none;
            border-radius: 0;
            box-shadow: none;
        }

        .splash-logo img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            /* Drop shadow biar logo tetap terlihat di bg gelap */
            filter: drop-shadow(0 8px 24px rgba(245,197,24,0.4));
        }

        /* KUDAMAS title */
        .splash-title {
            color: white;
            font-size: clamp(2rem, 7vw, 3.5rem);
            font-weight: 800;
            letter-spacing: clamp(6px, 2vw, 12px);
            text-align: center;
            position: relative; z-index: 1;
            animation: fadeUp 0.6s ease 0.2s both;
        }

        /* Divider kuning */
        .splash-divider {
            width: clamp(40px, 8vw, 60px);
            height: 3px;
            background: #F5C518;
            border-radius: 99px;
            margin: clamp(8px, 1.5vh, 14px) auto;
            position: relative; z-index: 1;
            animation: fadeUp 0.6s ease 0.35s both;
        }

        /* Subtitle Kuningan Dalam Angka Statistik */
        .splash-subtitle {
            color: rgba(255,255,255,0.72);
            font-size: clamp(0.72rem, 2.2vw, 0.95rem);
            letter-spacing: clamp(1px, 0.5vw, 2px);
            text-align: center;
            text-transform: uppercase;
            position: relative; z-index: 1;
            animation: fadeUp 0.6s ease 0.45s both;
            margin-bottom: clamp(12px, 2vh, 20px);
        }

        /* BPS text — Arial Italic */
        .splash-bps {
            font-family: 'Arial', sans-serif;
            font-style: italic;
            font-weight: 900;
            font-size: clamp(0.8rem, 2.5vw, 1.05rem);
            color: rgba(255,255,255,0.85);
            text-align: center;
            line-height: 1.4;
            position: relative; z-index: 1;
            animation: fadeUp 0.6s ease 0.55s both;
            display: flex;
            align-items: center;
            gap: 10px;
            justify-content: center;
        }

        .splash-bps img {
            height: clamp(28px, 5vw, 38px);
            width: auto;
            object-fit: contain;
            filter: brightness(0) invert(1);
            opacity: 0.85;
        }

        /* Progress bar */
        .splash-progress {
            position: fixed;
            bottom: 0; left: 0;
            height: 3px;
            background: #F5C518;
            animation: progress 2.5s linear forwards;
            z-index: 10;
        }

        @keyframes popIn {
            from { opacity: 0; transform: scale(0.6); }
            to   { opacity: 1; transform: scale(1); }
        }
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(16px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        @keyframes progress {
            from { width: 0%; }
            to   { width: 100%; }
        }
    </style>
</head>
<body>

    <div class="splash-wrap">
        {{-- Logo kuda — polosan tanpa circle --}}
        <div class="splash-logo">
            <img src="{{ asset('images/logo-kudamas.png') }}" alt="KUDAMAS"
                 onerror="this.src='';this.alt='🐴'">
        </div>

        {{-- KUDAMAS --}}
        <div class="splash-title">KUDAMAS</div>

        {{-- Divider --}}
        <div class="splash-divider"></div>

        {{-- Subtitle saja — BPS dihapus --}}
        <div class="splash-subtitle">Kuningan Dalam Angka Statistik</div>

    </div>

    <div class="splash-progress"></div>

    <script>
        setTimeout(() => {
            window.location.href = "{{ route('home') }}";
        }, 2500);
    </script>
</body>
</html>