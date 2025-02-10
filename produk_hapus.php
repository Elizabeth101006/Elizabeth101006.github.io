<?php
include "koneksi.php";

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Mencegah SQL Injection

    // Hapus data di tabel detail terlebih dahulu
    $deleteDetail = mysqli_query($koneksi, "DELETE FROM detail_penjualan WHERE id_penjualan = $id");

    // Hapus data di tabel utama (penjualan)
    $deletePembelian = mysqli_query($koneksi, "DELETE FROM penjualan WHERE id_penjualan = $id");

    if ($deletePembelian) {
        echo '<script>alert("Hapus pembelian berhasil"); location.href="?page=pembelian"</script>';
    } else {
        echo '<script>alert("Hapus pembelian gagal! Coba lagi.")</script>';
    }
} else {
    echo '<script>alert("ID tidak ditemukan!"); location.href="?page=pembelian"</script>';
}
?>
