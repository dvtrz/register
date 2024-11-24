<?php
include('koneksi.php');

$aran = $_POST['nama'];
$nama = true;

if ($_POST['nama'] == "") {
    echo "Nama masih kosong";
    $nama = false;
}

$cek = ($nama) ? true : false;

// Cek jika benar
if ($cek == true) {
    // Menyiapkan validasi gambar yang akan diupload
    $file = $_FILES['foto']['name'];
    $tmp_dir = $_FILES['foto']['tmp_name'];
    $ukuran = $_FILES['foto']['size'];

    $direktori = 'gambar/'; // Path tempat simpan
    $ektensi = strtolower(pathinfo($file, PATHINFO_EXTENSION)); // Dapatkan info ekstensi gambar
    $valid_ektensi = array('jpeg', 'jpg', 'png', 'gif'); // Ekstensi yang dibolehkan
    $gambar = rand(1000, 1000000) . "." . $ektensi;

    // Mulai validasi
    // Cek ekstensi gambar
    if (in_array($ektensi, $valid_ektensi)) {
        // Cek ukuran gambar
        if ($ukuran < 1000000) { // Jika ukuran tidak lebih dari 1MB
            if (!is_dir($direktori)) {
                mkdir($direktori, 0755, true); // Buat folder jika belum ada
            }

            if (move_uploaded_file($tmp_dir, $direktori . $gambar)) {
                // Simpan dan buat query
                $perintah = sprintf(
                    "INSERT INTO namamahasiswa (nama, foto) VALUES ('%s', '%s')",
                    $_POST['nama'],
                    $gambar
                );
                $query = @mysqli_query($koneksi, $perintah);

                // Validasi query
                if (!$query) {
                    echo "Gagal menyimpan: " . mysqli_error($koneksi);
                } else {
                    echo "Berhasil disimpan<br/>";
                    echo "Nama $aran <br/> <img src='$direktori$gambar' height='200'><br/>Berhasil disimpan<br><a href='tampil_foto.php'>Lihat Halaman Berikutnya</a>";
                }
            } else {
                echo "Gagal memindahkan file gambar.<br/><a href='input_foto.php'>Kembali</a>";
            }
        } else {
            echo "Gambar terlalu besar<br/><a href='input_foto.php'>Kembali</a>";
        }
    } else {
        echo "Gambar yang diupload tidak sesuai<br/><a href='input_foto.php'>Kembali</a>";
    }
}
?>
