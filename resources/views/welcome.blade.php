<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <h1 class="text-center mb-4">📚 Aplikasi Buku</h1>

    <div class="card shadow-sm">
        <div class="card-body">
            <h4 class="mb-3">Navigasi Buku</h4>
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="{{ route('index.buku') }}" class="btn btn-primary w-100">📖 Lihat Daftar Buku</a>
                </li>
                <li class="list-group-item">
                    <a href="{{ route('create.buku') }}" class="btn btn-success w-100">➕ Tambah Buku Baru</a>
                </li>
                <li class="list-group-item">
                    {{-- Contoh edit (id = 1) --}}
                    <a href="{{ route('edit.buku', ['id' => 1]) }}" class="btn btn-warning w-100">✏️ Edit Buku (contoh ID:1)</a>
                </li>
                <li class="list-group-item">
                    {{-- Contoh hapus (id = 1) --}}
                    <form action="{{ route('destroy.buku', ['id' => 1]) }}" method="POST" onsubmit="return confirm('Yakin mau hapus buku ID 1?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger w-100">🗑️ Hapus Buku (contoh ID:1)</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>

</body>
</html>
