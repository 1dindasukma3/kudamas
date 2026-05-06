<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KUDAMAS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --biru-tua: #1B3A6B;
            --kuning: #F5C518;
        }

        html, body {
            height: 100%;
            margin: 0;
            background-color: var(--biru-tua);
        }

        .splash-wrapper {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 20px;
            padding: 40px 20px;
            text-align: center;
        }

        .splash-logo {
            width: 120px;
            height: 120px;
            background-color: var(--kuning);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 60px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.25);
        }

        /* Di laptop logo lebih besar */
        @media (min-width: 768px) {
            .splash-logo {
                width: 160px;
                height: 160px;
                font-size: 80px;
            }
        }

        .splash-title {
            color: white;
            font-size: clamp(2rem, 6vw, 3.5rem); /* otomatis skala sesuai layar */
            font-weight: 800;
            letter-spacing: 8px;
        }

        .splash-subtitle {
            color: rgba(255,255,255,0.75);
            font-size: clamp(0.75rem, 2vw, 1rem);
            letter-spacing: 2px;
        }

        .splash-divider {
            width: 50px;
            height: 3px;
            background-color: var(--kuning);
            border-radius: 99px;
            margin: 4px auto;
        }

        .btn-masuk {
            background-color: var(--kuning);
            color: var(--biru-tua);
            font-weight: 700;
            font-size: 0.9rem;
            padding: 12px 36px;
            border-radius: 99px;
            border: none;
            text-decoration: none;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.2);
            transition: transform 0.15s, box-shadow 0.15s;
            display: inline-block;
        }

        .btn-masuk:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(0,0,0,0.3);
            color: var(--biru-tua);
        }

        /* Animasi fade in stagger */
        .splash-wrapper > * {
            animation: fadeUp 0.8s ease forwards;
            opacity: 0;
        }
        .splash-wrapper > *:nth-child(1) { animation-delay: 0.2s; }
        .splash-wrapper > *:nth-child(2) { animation-delay: 0.5s; }
        .splash-wrapper > *:nth-child(3) { animation-delay: 0.7s; }
        .splash-wrapper > *:nth-child(4) { animation-delay: 0.9s; }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(24px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        /* Progress bar auto redirect */
        .progress-bar-splash {
            position: fixed;
            bottom: 0;
            left: 0;
            height: 3px;
            background-color: var(--kuning);
            animation: progress 5s linear forwards;
        }

        @keyframes progress {
            from { width: 0%; }
            to   { width: 100%; }
        }
    </style>
</head>
<body>

    <div class="splash-wrapper">

        <div class="splash-logo">🐴</div>

        <div>
            <div class="splash-title">KUDAMAS</div>
            <div class="splash-divider"></div>
            <div class="splash-subtitle">KUNINGAN DALAM ANGKA STATISTIK</div>
        </div>

        <div style="color: rgba(255,255,255,0.5); font-size: 0.8rem;">
            BPS Kabupaten Kuningan
        </div>

        <a href="{{ route('home') }}" class="btn-masuk">
            Masuk ke Aplikasi
        </a>

    </div>

    {{-- Progress bar di bawah --}}
    <div class="progress-bar-splash"></div>

    <script>
        setTimeout(() => {
            window.location.href = "{{ route('home') }}";
        }, 2500);
    </script>

</body>
</html>