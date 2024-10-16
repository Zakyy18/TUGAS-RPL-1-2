<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Gunung - Infogunungs</title>
</head>
<body>
    <h1>Tambah Gunung</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('gunungs.store') }}" method="POST">
        @csrf
        <label for="nama_gunung">Nama Gunung:</label>
        <input type="text" name="nama_gunung" id="nama_gunung" required>
        <br>

        <label for="deskripsi">Deskripsi:</label>
        <textarea name="deskripsi" id="deskripsi" required></textarea>
        <br>

        <label for="status_buka">Status Buka:</label>
        <select name="status_buka" id="status_buka" required>
            <option value="1">Buka</option>
            <option value="0">Tutup</option>
        </select>
        <br>

        <label for="link_booking">Link Booking:</label>
        <input type="url" name="link_booking" id="link_booking">
        <br>

        <button type="submit">Simpan</button>
    </form>

    <a href="{{ route('gunungs.index') }}">Kembali ke Daftar Gunung</a>
</body>
</html>
