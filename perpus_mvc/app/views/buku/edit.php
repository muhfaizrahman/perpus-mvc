<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <link rel="stylesheet" href="../public/css/bootstrap.css">
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
    <div class="container mt-4" id="edit">

        <h1 class="mb-4">Edit Buku</h1>
        <form action="?action=update" method="POST">
            <input type="hidden" name="id" value="<?= $buku['id'] ?>">
            
            <label>Judul:</label><br>
            <input type="text" name="judul" value="<?= htmlspecialchars($buku['judul']) ?>" required><br>
            
            <label>Penulis:</label><br>
            <input type="text" name="penulis" value="<?= htmlspecialchars($buku['penulis']) ?>" required><br>
            
            <label>Tahun:</label><br>
            <input type="number" name="tahun" value="<?= $buku['tahun'] ?>" required><br>
            
            <label>Genre:</label><br>
            <input type="text" name="genre" value="<?= htmlspecialchars($buku['genre']) ?>" required><br>
            
            <button type="submit" class="btn btn-primary mt-2" >Update</button>
        </form>

    </div>
</body>
</html>