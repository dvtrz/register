<?php
include('koneksi.php');

// Ambil parameter ID yang akan dihapus
$del = $_GET['del'];

// Query untuk memilih data berdasarkan ID
$perintah2 = "SELECT * FROM namamahasiswa WHERE id = '$del'";
$a = mysqli_query($koneksi, $perintah2);

// Cek apakah data ditemukan
if ($a && mysqli_num_rows($a) > 0) {
    $b = mysqli_fetch_array($a); // Ambil data dari hasil query

    // Cek apakah file foto ada di folder
    if (!empty($b['foto']) && file_exists("gambar/" . $b['foto'])) {
        unlink("gambar/" . $b['foto']); // Hapus file gambar
    }

    // Query untuk menghapus data di database
    $perintah1 = sprintf("DELETE FROM namamahasiswa WHERE id = %d", $del);
    $del2 = mysqli_query($koneksi, $perintah1);

    if ($del2) {
        echo "Gambar berhasil dihapus<br/>";
        echo "<a href='tampil_foto.php'>Kembali</a>";
    } else {
        echo "Gagal menghapus data: " . mysqli_error($koneksi);
    }
} else {
    echo "Data tidak ditemukan atau ID tidak valid.<br/>";
    echo "<a href='tampil_foto.php'>Kembali</a>";
}
?>
