<?php
// Memanggil file koneksi database
require '../dbkoneksi.php';

// Memeriksa apakah parameter id telah diterima dari URL
if (isset($_GET['id'])) {
    $user_id = $_GET['user_id'];

    // Query untuk menghapus data pasien berdasarkan id
    $sql = "DELETE FROM users WHERE id = ?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$user_id]);

    // Redirect ke halaman index.php setelah proses penghapusan selesai
    header("Location: index.php");
    exit();
} else {
    echo "Parameter ID tidak ditemukan.";
    exit;
}
