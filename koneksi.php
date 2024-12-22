<?php

$host = 'localhost';
$user = 'root';
$password = '' ;
$db = 'db_sekolah';
$conn = mysqli_connect($host, $user,$password, $db);

if($conn->connect_error) {
    echo "Koneksi Error";
} else {
    echo "Koneksi Berhasil";
}

?>
