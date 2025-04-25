<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <link rel="stylesheet" href="../public/css/bootstrap.css">
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
    <div class="container mt-4">
        
        <h1 class="mb-4">Daftar Buku</h1>
        <table border="1" cellpadding="10" class="table table-bordered mt-4">
            <tr border="1">
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tahun</th>
                <th>Genre</th>
                <th>Aksi</th>
            </tr>
            <?php foreach ($data as $i => $buku): ?>
                <tr>
                    <td><?= $i + 1 ?></td>
                    <td><?= htmlspecialchars($buku['judul']) ?></td>
                    <td><?= htmlspecialchars($buku['penulis']) ?></td>
                    <td><?= $buku['tahun'] ?></td>
                    <td><?= htmlspecialchars($buku['genre']) ?></td>
                    <td>
                        <a href="?action=edit&id=<?= $buku['id'] ?>" class="btn btn-secondary">Edit</a>
                        <a href="?action=hapus&id=<?= $buku['id'] ?>" onclick="return confirm('Hapus buku ini?')" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

        <a href="?action=tambah" class="btn btn-primary mt-2" id="add">+ Tambah Buku</a>

    </div>
</body>
</html>