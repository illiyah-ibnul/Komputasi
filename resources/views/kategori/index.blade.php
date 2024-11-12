<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kategori</title>
</head>
<body>
    <h1>Daftar Kategori</h1>
    <!-- Script untuk confirm delete -->
    <script type="text/javascript">
        function confirmDelete(event) {
            // Menampilkan confirm dialog box
            if (!confirm("Apakah Anda yakin ingin menghapus kategori ini?")) {
                // Jika pengguna memilih Cancel, stop form submission
                event.preventDefault();
            }
        }
    </script>

    <!-- Tombol untuk menambah kategori -->
    <a href="{{ route('kategori.create') }}" class="btn btn-primary mb-3">Tambah Kategori</a>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Keterangan</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop untuk menampilkan kategori -->
            @foreach ($kategoris as $kategori)
                <tr>
                    <td>{{ $kategori->nama }}</td>
                    <td>{{ $kategori->keterangan }}</td>
                    <td>{{ $kategori->status }}</td>
                    <td>
                        <!-- Link Lihat untuk kategori spesifik -->
                        <a href="{{ route('kategori.show', $kategori->id_kategori) }}" class="btn btn-info btn-sm">Lihat</a>

                        <!-- Link Edit untuk kategori spesifik -->
                        <a href="{{ route('kategori.edit', $kategori->id_kategori) }}" class="btn btn-warning btn-sm">Edit</a>

                        <!-- Form untuk menghapus kategori -->
                        <form action="{{ route('kategori.destroy', $kategori->id_kategori) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="confirmDelete(event)">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
