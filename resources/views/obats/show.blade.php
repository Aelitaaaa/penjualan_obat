<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Obat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Detail Obat</h1>
        <dl class="row">
            <dt class="col-sm-3">ID</dt>
            <dd class="col-sm-9">{{ $obat->id }}</dd>
            <dt class="col-sm-3">Nama Obat</dt>
            <dd class="col-sm-9">{{ $obat->nama_obat }}</dd>
            <dt class="col-sm-3">Harga Obat</dt>
            <dd class="col-sm-9">{{ number_format($obat->harga_obat, 2) }}</dd>
            <dt class="col-sm-3">Jumlah Obat</dt>
            <dd class="col-sm-9">{{ $obat->jumlah_obat }}</dd>
            <dt class="col-sm-3">Total Harga</dt>
            <dd class="col-sm-9">{{ number_format($obat->total_harga_obat, 2) }}</dd>
        </dl>
        <a href="{{ route('obats.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
