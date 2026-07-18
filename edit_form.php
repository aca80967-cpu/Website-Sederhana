<?php
include("koneksi.php");

$nama_cari = @$_GET['nama_cari'];

if ($nama_cari != "") {
    $sql = mysqli_query($konek, "SELECT * FROM id_barang WHERE nama_barang='$nama_cari'");
    $data = mysqli_fetch_array($sql);
}

if (isset($_POST['update'])) {
    $id_barang = $_POST['id_barang'];
    $tanggal = $_POST['tanggal'];
    $nama_barang = $_POST['nama_barang'];
    $kode_barang = $_POST['kode_barang'];
    $jumlah_barang = $_POST['jumlah_barang'];

    $query_update = "UPDATE id_barang SET 
        tanggal = '$tanggal', 
        nama_barang = '$nama_barang', 
        kode_barang = '$kode_barang', 
        jumlah_barang = '$jumlah_barang' 
        WHERE id_barang = '$id_barang'";

    $update = mysqli_query($konek, $query_update);

    if ($update) {
        header ("Location: tampilan_admin.php?pesan=Data berhasil diupdate.");
    } else {
        echo "Gagal update data: " . mysqli_error($konek);
    }
}
?>

<link rel="stylesheet" href="style.css">
<body>
    <nav class="navbar">
        <ul class="navbar-links">
            <li><a href="menu.php">Dashboard</a></li>
            <li><a href="tampilan_admin.php">Tampilan Sederhana</a></li>
        </ul>
        <a href="logout.php" class="logout-btn">Logout</a>
    </nav>

    <div class="container">
        <a href="tampilan_admin.php" class="back-btn">Kembali</a>
        <h1>EDIT DATA BARANG</h1>
        <form action="" method="post">
            <input type="hidden" name="id_barang" value="<?php echo $data['id_barang']; ?>">
            Tanggal       : <input type="text" name="tanggal" value="<?php echo $data['tanggal']; ?>"><br>
            Nama Buah     : <input type="text" name="nama_barang" value="<?php echo $data['nama_barang']; ?>"><br>
            Kode Buah     : <input type="text" name="kode_barang" value="<?php echo $data['kode_barang']; ?>"><br>
            Jumlah Buah   : <input type="text" name="jumlah_barang" value="<?php echo $data['jumlah_barang']; ?>"><br>
            
            <input type="submit" name="update" value="Update">
        </form>
    </div>
</body>