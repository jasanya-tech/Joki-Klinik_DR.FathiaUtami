<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Booking PDF</title>
</head>
<body>
    <h1>Klinik Sehat</h1>
    <p><strong>Kode Booking:</strong> {{ $booking->code }}</p>
    <p><strong>Nama:</strong> {{ $booking->user->name ?? '-' }}</p>
    <p><strong>Tanggal:</strong> {{ \Carbon\Carbon::parse($booking->booking_date)->format('d M Y') }}</p>
    <p><strong>No Antrian:</strong> {{ $booking->queue_number }}</p>
    <p><strong>Jam Estimasi:</strong> {{ $booking->estimated_time }}</p>
    <img src="{{ public_path('storage/' . $booking->qr_code_path) }}" width="150" alt="QR Code">
</body>
</html>
