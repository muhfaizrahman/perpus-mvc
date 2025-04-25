<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <link rel="stylesheet" href="../public/css/bootstrap.css">
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
    <div class="container mt-4" id="tambah">
        
        <h1 class="mb-4">Tambah Buku</h1>
        <form action="?action=simpan" method="POST">
            <label for="">Judul: </label><br>
            <input type="text" name="judul" required><br><br>
            
            <label for="">Penulis: </label><br>
            <input type="text" name="penulis" required><br><br>
            
            <label for="">Tahun: </label><br>
            <input type="number" name="tahun" required><br><br>
            
            <label for="">Genre: </label><br>
            <input type="text" name="genre" required><br><br>
            
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

    </div>
</body>
</html>