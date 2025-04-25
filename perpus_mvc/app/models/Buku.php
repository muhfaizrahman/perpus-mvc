<?php 

class Buku {
    private $db;

    public function __construct($pdo) {
        $this->db = $pdo;
    }

    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM buku");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert($judul, $penulis, $tahun, $genre) {
        $stmt = $this->db->prepare("INSERT INTO buku (judul, penulis, tahun, genre) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$judul, $penulis, $tahun, $genre]);
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM buku WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } 

    public function update($id, $judul, $penulis, $tahun, $genre) {
        $stmt = $this->db->prepare("UPDATE buku SET judul = ?, penulis = ?, tahun = ?, genre = ? WHERE id = ?");
        return $stmt->execute([$judul, $penulis, $tahun, $genre, $id]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM buku WHERE id = ?");
        return $stmt->execute([$id]);
    }
}

?>