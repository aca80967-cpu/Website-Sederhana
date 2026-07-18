<?php
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	// Contoh pengecekan username & password
	if (($username === 'admin' && $password === '123') || ($username === 'CACA' && $password === '2424')) {
    session_start(); // Pastikan session dimulai

    $_SESSION['login'] = true;
    $_SESSION['role'] = $username;

    if ($username === 'admin') {
        header("Location: menu.php"); // Halaman admin
    } else if ($username === 'CACA') {
        header("Location: menu_user.php"); // Halaman user biasa
    }
    exit;
} else {
    echo "Login gagal. <a href='login.html'>Coba lagi</a>";
}
}

?>
