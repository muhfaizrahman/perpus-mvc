<?php 

require_once '../app/models/Buku.php';

class BukuController {

    private $buku;

    public function __construct() {
        global $pdo;
        $this->buku = new Buku($pdo);
    }

    public function index() {
        $data = $this->buku->getAll();
        include '../app/views/buku/index.php';
    }

    public function tambah() {
        include '../app/views/buku/tambah.php';
    }
    
    public function simpan() {
        $judul = $_POST['judul'];
        $penulis = $_POST['penulis'];
        $tahun = $_POST['tahun'];
        $genre = $_POST['genre'];

        $this->buku->insert($judul, $penulis, $tahun, $genre);
        header("Location: ?action=index");
    }

    public function edit($id) {
        $buku = $this->buku->getById($id);
        include '../app/views/buku/edit.php';
    }

    public function update($id) {
        $judul = $_POST['judul'];
        $penulis = $_POST['penulis'];
        $tahun = $_POST['tahun'];
        $genre = $_POST['genre'];

        $this->buku->update($id, $judul, $penulis, $tahun, $genre);
        header("Location: ?action=index");
    }

    public function hapus($id) {
        $this->buku->delete($id);
        header("Location: ?action=index");
    }
}
?>