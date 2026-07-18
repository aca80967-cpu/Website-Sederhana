<?php
session_start();

include("koneksi.php");

$role = $_SESSION['role'];//Mengambil role (admin/user) dari sesi login

//jalanin query biar bisa ngambil di database
$sql = mysqli_query($konek, "SELECT * FROM id_barang");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>ASIA MARKET - Admin Panel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>🍓SELAMAT DATANG DI <?php echo $role ; ?> MARKET🍍</h1>
        <nav class="navbar">
            <ul class="navbar-links">
            <li><a href="menu.php">Dashboard</a></li>
            <li><a href="tampilan_admin.php">Input Data</a></li>
        </ul>
        <a href="logout.php" class="logout-btn">Logout</a>
    </nav>

    <div style="text-align: center;">
        <a href="input_data.html" class="add-btn">➕ Tambah Buah Baru</a>
    </div>

    <table>
        <tr>
            <th>📅 Tanggal</th>
            <th>🍉 Nama Buah</th>
            <th>🔢 Kode</th>
            <th>📦 Jumlah</th>
            <th>⚙️ Aksi</th>
        </tr>

        <?php while ($data = mysqli_fetch_array($sql)) { ?>
        <tr>
            <td><?php echo $data['tanggal']; ?></td>
            <td><?php echo $data['nama_barang']; ?></td>
            <td><?php echo $data['kode_barang']; ?></td>
            <td><?php echo $data['jumlah_barang']; ?></td>
            <td class="action-cell">
                <a href="edit_form.php?nama_cari=<?php echo $data['nama_barang']; ?>" class="btn edit-btn">✏️ Edit</a>
                <a href="delete_form.php?nama_barang=<?php echo $data['nama_barang']; ?>" class="btn delete-btn" onclick="return confirm('Yakin ingin menghapus data ini?')">🗑️ Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>

</body>
</html>
