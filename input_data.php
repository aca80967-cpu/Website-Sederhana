<?php
// Cek apakah semua data sudah dikirim lewat POST
include ("koneksi.php");

    $tanggal = @$_POST['tanggal'];
    $nama = @$_POST['nama_barang'];
    $kode = @$_POST['kode_barang'];
    $jumlah = @$_POST['jumlah_barang'];

    $sql_simpan = mysqli_query ($konek, "INSERT into id_barang(tanggal,nama_barang,kode_barang,jumlah_barang) VALUE('$tanggal','$nama','$kode','$jumlah')");
    
    if (
    isset($_POST['tanggal']) &&
    isset($_POST['nama_barang']) &&
    isset($_POST['kode_barang']) &&
    isset($_POST['jumlah_barang']) &&
    $sql_simpan
    ) {
} 

if ($sql_simpan) {
    header("Location: tampilan_admin.php?pesan=Data Berhasil Disimpan");
    exit;
} else {
    echo "Data gagal di simpan.";
}
?>
