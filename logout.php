<?php
session_start();// Memulai session untuk memastikan PHP tahu session mana yang sedang aktif
session_destroy();// Menghapus seluruh data session (logout user)
header("Location: Login.html");// Mengarahkan (redirect) user kembali ke halaman login setelah logout
?>
?>