<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation - {{ $booking->code }}</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #e0f7fa 0%, #f4f4f4 100%);
            margin: 0;
            padding: 0;
            color: #222;
        }
        .container {
            max-width: 480px;
            margin: 40px auto;
            background: #fff;
            padding: 36px 32px 32px 32px;
            border-radius: 14px;
            box-shadow: 0 6px 32px rgba(0, 86, 179, 0.10), 0 1.5px 6px rgba(0,0,0,0.04);
            text-align: center;
        }
        .logo {
            margin-bottom: 18px;
        }
        h2 {
            color: #007bff;
            margin-bottom: 18px;
            font-size: 1.7em;
            font-weight: 700;
            letter-spacing: 1px;
        }
        .divider {
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, #00b894 0%, #007bff 100%);
            margin: 0 auto 28px auto;
            border-radius: 2px;
        }
        .patient-info {
            text-align: left;
            margin-bottom: 28px;
            padding: 18px 20px 18px 20px;
            border-radius: 8px;
            background: #f8fafc;
            border: 1px solid #e3e8ee;
        }
        .patient-info p {
            margin-bottom: 10px;
            font-size: 1.08em;
        }
        .patient-info strong {
            display: inline-block;
            width: 120px;
            color: #007bff;
            font-weight: 600;
        }
        .queue-highlight {
            font-size: 1.25em;
            font-weight: bold;
            color: #00b894;
        }
        .qr-code-section {
            margin-top: 22px;
            padding-top: 18px;
            border-top: 1px dashed #d1e7fd;
        }
        .qr-code-section p {
            margin-bottom: 12px;
            color: #555;
        }
        .qr-code-section img {
            max-width: 180px;
            height: auto;
            border: 1.5px solid #e3e8ee;
            padding: 10px;
            background: #fff;
            border-radius: 8px;
            margin-top: 8px;
        }
        .text-muted {
            color: #888;
            font-size: 0.97em;
            margin-top: 30px;
            display: block;
            letter-spacing: 0.2px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="{{ public_path('images/logo.png') }}" alt="Klinik logo" width="140">
        </div>
        <h2>Konfirmasi Booking</h2>
        <div class="divider"></div>

        <div class="patient-info">
            <p><strong>Nama</strong> <span>{{ $booking->user->name }}</span></p>
            <p><strong>Email</strong> <span>{{ $booking->user->email }}</span></p>
            <p><strong>Telepon</strong> <span>{{ $booking->user->phone_number ?? '-' }}</span></p>
            <p><strong>Kode Booking</strong> <span>{{ $booking->code }}</span></p>
            <p><strong>Antrian ke-</strong> <span class="queue-highlight">{{ $booking->queue_number }}</span></p>
            <p><strong>Estimasi Waktu</strong> <span>{{ \Carbon\Carbon::parse($booking->estimated_time)->format('H:i') }} WIB</span></p>
        </div>

        @if ($qrImageBase64)
        <div class="qr-code-section">
            <p>Silakan tunjukkan QR Code ini saat kedatangan:</p>
            <img src="data:image/png;base64,{{ $qrImageBase64 }}" alt="QR Code Booking">
        </div>
        @endif

        <span class="text-muted">Terima kasih telah melakukan booking melalui layanan kami.<br>Harap datang tepat waktu sesuai estimasi.</span>
    </div>
</body>
</html>