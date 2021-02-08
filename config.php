<?php

$databaseHost = 'localhost';
$databaseName = 'peta';
$databaseUsername = 'root';
$databasePassword = '';

$koneksi = new mysqli(
    $databaseHost, 
    $databaseUsername,
    $databasePassword,
    $databaseName);

//$koneksi->connect_error ? die("Koneksi Gagal : ".$koneksi->connect_error) : die("Koneksi Berhasil!")

?>