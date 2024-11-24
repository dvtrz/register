<?php
include('koneksi.php');

// Menggunakan mysqli_query untuk query database
$perintah = "SELECT * FROM namamahasiswa ORDER BY id DESC";
$query = mysqli_query($koneksi, $perintah);

// Cek jika query gagal
if (!$query) {
    die("Query gagal: " . mysqli_error($koneksi));
}
?>
<html>
<head>
    <title>Halaman Tampil Foto</title>
</head>
<body>
<table width="500" border="1">
    <tr>
        <th colspan="4">MENAMPILKAN FOTO / <a href="input_foto.php">TAMBAH DATA</a></th>
    </tr>
    <tr>
        <td>NO</td>
        <td>NAMA</td>
        <td>FOTO</td>
        <td>DELETE</td>
    </tr>
    <?php
    // Menggunakan mysqli_fetch_array untuk mengambil data
    while ($data = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td align="center"><img src="gambar/<?php echo $data['foto']; ?>" width="60" height="80"></td>
            <td colspan="2"><a href="delete.php?del=<?php echo $data['id']; ?>">DELETE</a></td>
        </tr>
        <?php
    }
    ?>
</table>
</body>
</html>
