<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.html");
    exit;
}

include 'koneksi.php';

$role = $_SESSION['role'];

// Ambil data dari database
$sql = mysqli_query($konek, "SELECT * FROM id_barang");
?>


<html>
<head>
   <title>Menu User</title>
   <link rel="stylesheet" href="style.css">
</head>

    <body>
        <h1>🍓SELAMAT DATANG DI <?php echo $role ; ?> MARKET🍍</h1>
        <nav class="navbar">
            <ul class="navbar-links">
            <li><a href="">Dashboard</a></li>
        </ul>
        <a href="logout.php" class="logout-btn">Logout</a>
    </nav>

    <table>
    <tr>
        <th>📅 Tanggal</th>
        <th>🍉 Nama Buah</th>
        <th>🔢 Kode</th>
        <th>📦 Jumlah</th>
    </tr>
    <?php while ($data = mysqli_fetch_array($sql)) : ?>
    <tr>
        <td><?php echo $data['tanggal']; ?></td>
        <td><?php echo $data['nama_barang']; ?></td>
        <td><?php echo $data['kode_barang']; ?></td>
        <td><?php echo $data['jumlah_barang']; ?></td>
    </tr>
    <?php endwhile; ?>
</table>
	</ul>
</body>
</html>