<!DOCTYPE html>
<html>
<head>
    <title>Booking Detail</title>
</head>
<body>
    <h1>Kode Booking: {{ $booking->code }}</h1>
    <p>Antrian ke-{{ $booking->queue_number }}</p>
    <p>Estimasi Jam: {{ $booking->estimated_time }}</p>

    <img src="data:image/png;base64,{{ $qrImageBase64 }}" alt="QR Code">
</body>
</html>
