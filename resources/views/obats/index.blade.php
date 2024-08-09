<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Obat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Daftar Obat</h1>
        <a href="{{ route('obats.create') }}" class="btn btn-primary mb-3">Tambah Obat</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Obat</th>
                    <th>Harga Obat</th>
                    <th>Jumlah Obat</th>
                    <th>Total Harga</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($obats as $obat)
                <tr>
                    <td>{{ $obat->id }}</td>
                    <td>{{ $obat->nama_obat }}</td>
                    <td>{{ number_format($obat->harga_obat, 2) }}</td>
                    <td>{{ $obat->jumlah_obat }}</td>
                    <td>{{ number_format($obat->total_harga_obat, 2) }}</td>
                    <td>
                        <a href="{{ route('obats.show', $obat->id) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('obats.edit', $obat->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('obats.destroy', $obat->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
