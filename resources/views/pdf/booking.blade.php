<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation - {{ $booking->code }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            max-width: 600px; /* Smaller container */
            margin: 20px auto;
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            text-align: center; /* Center content */
        }
        h2 {
            color: #0056b3;
            margin-bottom: 25px;
            border-bottom: 2px solid #0056b3;
            padding-bottom: 10px;
            display: inline-block; /* To make border-bottom only as wide as text */
        }
        .patient-info {
            text-align: left; /* Align patient details left */
            margin-bottom: 30px;
            padding: 15px 0;
            border-bottom: 1px dashed #eee;
        }
        .patient-info p {
            margin-bottom: 8px;
            font-size: 1.1em;
        }
        .patient-info strong {
            display: inline-block;
            width: 120px; /* Align labels */
            color: #555;
        }
        .qr-code-section {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px dashed #eee;
        }
        .qr-code-section img {
            max-width: 250px; /* Slightly larger QR code */
            height: auto;
            border: 1px solid #ddd;
            padding: 8px;
            background-color: #fff;
            margin-top: 15px;
        }
        .text-muted {
            color: #666;
            font-size: 0.9em;
            margin-top: 25px;
            display: block; /* Ensures it starts on a new line */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Konfirmasi Booking</h2>

        <div class="patient-info">
            <p><strong>Nama:</strong> <span>{{ $booking->user->name }}</span></p>
            <p><strong>Email:</strong> <span>{{ $booking->user->email }}</span></p>
            <p><strong>Telepon:</strong> <span>{{ $booking->user->phone_number ?? '-' }}</span></p>
            <p><strong>Kode Booking:</strong> <span>{{ $booking->code }}</span></p>
            <p><strong>Antrian ke-</strong> <span style="font-size: 1.3em; font-weight: bold; color: #007bff;">{{ $booking->queue_number }}</span></p>
            <p><strong>Estimasi Waktu:</strong> <span>{{ \Carbon\Carbon::parse($booking->estimated_time)->format('H:i') }} WIB</span></p>
        </div>

        @if ($qrImageBase64)
        <div class="qr-code-section">
            <p>Silakan tunjukkan QR Code ini saat kedatangan:</p>
            <img src="data:image/png;base64,{{ $qrImageBase64 }}" alt="QR Code Booking">
        </div>
        @endif

        <span class="text-muted">Terima kasih telah melakukan booking melalui layanan kami.</span>
    </div>
</body>
</html>