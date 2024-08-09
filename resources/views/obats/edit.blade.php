<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Obat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Edit Obat</h1>
        <form action="{{ route('obats.update', $obat->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_obat" class="form-label">Nama Obat</label>
                <input type="text" class="form-control" id="nama_obat" name="nama_obat" value="{{ $obat->nama_obat }}" required>
            </div>
            <div class="mb-3">
                <label for="harga_obat" class="form-label">Harga Obat</label>
                <input type="number" step="0.01" class="form-control" id="harga_obat" name="harga_obat" value="{{ $obat->harga_obat }}" required>
            </div>
            <div class="mb-3">
                <label for="jumlah_obat" class="form-label">Jumlah Obat</label>
                <input type="number" class="form-control" id="jumlah_obat" name="jumlah_obat" value="{{ $obat->jumlah_obat }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('obats.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
