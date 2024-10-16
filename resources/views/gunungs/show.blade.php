<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $gunung->nama_gunung }} - Infogunungs</title>
</head>
<body>
    <h1>{{ $gunung->nama_gunung }}</h1>
    <p>{{ $gunung->deskripsi }}</p>
    <p>Status: {{ $gunung->status_buka ? 'Buka' : 'Tutup' }}</p>
    @if ($gunung->link_booking)
        <p><a href="{{ $gunung->link_booking }}">Link Booking SIMAKSI</a></p>
    @endif
    <h2>Status Terkait</h2>
    <ul>
        @foreach ($gunung->statuses as $status)
            <li>{{ $status->keterangan }}</li>
        @endforeach
    </ul>
    <a href="{{ route('gunungs.index') }}">Kembali ke Daftar Gunung</a>
</body>
</html>
