<?php
require_once "koneksi.php";
$username = "admin";
$password = "admin123";
$nama_lengkap = "Administrator";
$check = $conn->prepare("SELECT id FROM users WHERE username = ? LIMIT 1");
$check->bind_param("s", $username); $check->execute();
if ($check->get_result()->num_rows > 0) {
    echo "Akun admin sudah tersedia. <a href='login.php'>Buka halaman login</a>.";
    exit;
}
$hash = password_hash($password, PASSWORD_DEFAULT);
$stmt = $conn->prepare("INSERT INTO users (username, password_hash, nama_lengkap) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $hash, $nama_lengkap);
if ($stmt->execute()) {
    echo "Akun latihan berhasil dibuat. Username: <b>admin</b>, password: <b>admin123</b>. Demi keamanan praktikum, hapus file buat_user.php setelah selesai. <a href='login.php'>Login sekarang</a>.";
} else { http_response_code(500); echo "Gagal membuat akun. Pastikan tabel users sudah dibuat."; }
?>
