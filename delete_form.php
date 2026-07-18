<?php
include ("koneksi.php");

$nama = @$_GET['nama_barang'];

//Hapus berdasarka nama
$sql_delete = mysqli_query($konek, "DELETE FROM id_barang WHERE nama_barang='$nama'");

if ($sql_delete) {
    header("Location: tampilan_admin.php?pesan=hapus_berhasil");
    exit;
} else {
    echo "Data gagal di hapus.";
}
?>