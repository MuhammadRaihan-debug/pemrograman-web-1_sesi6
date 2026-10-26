<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "web_programming_1";

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    http_response_code(500);
    exit("Koneksi database gagal. Pastikan MySQL aktif dan konfigurasi koneksi.php sesuai.");
}
$conn->set_charset("utf8mb4");
?>
