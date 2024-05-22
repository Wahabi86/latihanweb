<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "db_latweb";

// Membuat koneksi
$db = mysqli_connect($hostname, $username, $password, $database_name);

// Periksa Koneksi
if ($db->connect_error) {
    echo "koneksi database rusak";
    die ("error");
}

?>