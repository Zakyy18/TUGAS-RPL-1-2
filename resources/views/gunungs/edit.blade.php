<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Gunung - Infogunungs</title>
</head>
<body>
    <h1>Edit Gunung</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('gunungs.update', $gunung->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nama_gunung">Nama Gunung:</label>
        <input type="text" name="nama_gunung" id="nama_gunung" value="{{ $gunung->nama_gunung }}" required>
        <br>

        <label for="deskripsi">Deskripsi:</label>
        <textarea name="deskripsi" id="deskripsi" required>{{ $gunung->deskripsi }}</textarea>
        <br>

        <label for="status_buka">Status Buka:</label>
        <select name="status_buka" id="status_buka" required>
            <option value="1" {{ $gunung->status_buka ? 'selected' : '' }}>Buka</option>
            <option value="0" {{ !$gunung->status_buka ? 'selected' : '' }}>Tutup</option>
        </select>
        <br>

        <label for="link_booking">Link Booking:</label>
        <input type="url" name="link_booking" id="link_booking" value="{{ $gunung->link_booking }}">
        <br>

        <button type="submit">Update</button>
    </form>

    <a href="{{ route('gunungs.index') }}">Kembali ke Daftar Gunung</a>
</body>
</html>
