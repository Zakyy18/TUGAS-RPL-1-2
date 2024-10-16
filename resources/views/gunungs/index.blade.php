<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infogunungs</title>
</head>
<body>
    <h1>Informasi Gunung</h1>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <a href="{{ route('gunungs.create') }}">Tambah Gunung</a>

    <ul>
        @foreach ($gunungs as $gunung)
            <li>
                <a href="{{ route('gunungs.show', $gunung->id) }}">{{ $gunung->nama_gunung }}</a>
                - {{ $gunung->status_buka ? 'Buka' : 'Tutup' }}
                <a href="{{ route('gunungs.edit', $gunung->id) }}">Edit</a>
                <form action="{{ route('gunungs.destroy', $gunung->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
