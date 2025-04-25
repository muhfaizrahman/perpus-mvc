<?php 

require_once '../config/database.php';
require_once '../app/controllers/BukuController.php';

$page = $_GET['page'] ?? 'buku';
$action = $_GET['action'] ?? 'index';

$controller = new BukuController();

switch ($action) {
    case 'index':
        $controller->index();
        break;
    case 'tambah':
        $controller->tambah();
        break;
    case 'simpan':
        $controller->simpan();
        break;
    case 'edit':
        $controller->edit($_GET['id']);
        break;
    case 'update':
        $controller->update($_POST['id']);
        break;
    case 'hapus':
        $controller->hapus($_GET['id']);
        break;
    default:
        echo"Halaman tidak ditemukan.";
        break;
}
?>