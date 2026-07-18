<?php
   $localhost = "localhost";
   $server = "root";
   $pass = "";
   $db = "asia"; //database
   
   $konek = mysqli_connect($localhost,$server,$pass,$db) or die (mysqli_error($konek));
?>