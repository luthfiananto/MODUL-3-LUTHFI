<!-- Pada file ini kalian membuat coding untuk logika delete / menghapus data mobil pada showroom sesuai id-->
<?php 
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
$dbhost = "localhost:3308";
$dbuser = "root";
$dbname = "wad_modul3";
$dbpass = "";

$koneksi = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
if(isset($_GET['id']));

    // (3) Buatkan perintah SQL DELETE untuk menghapus data dari tabel berdasarkan id mobil
    $query = "DELETE FROM showroom_mobil WHERE id='$_GET[id]'";

    // (4) Buatkan perkondisi jika eksekusi query berhasil
    if($koneksi->query($query)){
        echo "<script>alert('Data Berhasil Dihapus')</script>";
    }

// Tutup koneksi ke database setelah selesai menggunakan database
$koneksi->close()

?>