<?php
// Koneksi ke database
$conn = mysqli_connect('localhost', 'root', '', 'dbpos');

// Mengecek apakah parameter iddel ada dan tidak kosong
if(isset($_GET['iddel']) && !empty($_GET['iddel'])) {
    // Menghapus data pelanggan dengan id yang diberikan
    $id = $_GET['iddel'];
    $query = "DELETE FROM pelanggan WHERE id = $id";
    mysqli_query($conn, $query);

    // Redirect kembali ke halaman daftar pelanggan
    header("Location: list_pelanggan.php");
    exit;
}
?>

<!-- Tombol delete pada halaman daftar pelanggan -->
<a class="btn btn-primary" href="delete_pelanggan.php?iddel=<?=$row['id']?>"
onclick="if(!confirm('Anda Yakin Hapus Data Pelanggan <?=$row['nama']?>?')) {return false}">Delete</a>