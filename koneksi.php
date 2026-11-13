
<?php
$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "UTS_PBD_071";
$port = 3306;

$conn = mysqli_connect(
    $host,
    $user,
    $password,
    $database,
    $port
);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
