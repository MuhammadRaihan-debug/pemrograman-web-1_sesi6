<?php
if (session_status() !== PHP_SESSION_ACTIVE) { session_start(); }
if (isset($_SESSION["user_id"])) { header("Location: dashboard.php"); exit; }
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Web Programming 1</title><link rel="stylesheet" href="style.css">
</head>
<body class="auth-page">
<main class="login-card">
    <h1>Login</h1>
    <p>Masuk untuk membuka project Web Programming 1.</p>
    <?php if (isset($_GET["error"])): ?><p class="message error">Username atau password salah. Coba lagi.</p><?php endif; ?>
    <?php if (isset($_GET["logout"])): ?><p class="message">Kamu sudah logout dengan aman.</p><?php endif; ?>
    <?php if (isset($_GET["setup"])): ?><p class="message">Akun latihan berhasil disiapkan. Login dengan admin / admin123.</p><?php endif; ?>
    <form action="proses_login.php" method="POST">
        <div class="form-group"><label for="username">Username</label><input type="text" id="username" name="username" required autocomplete="username"></div>
        <div class="form-group"><label for="password">Password</label><input type="password" id="password" name="password" required autocomplete="current-password"></div>
        <button type="submit">Login</button>
    </form>
    <p style="font-size:13px;color:#64748b;margin-bottom:0">Akun latihan awal: admin / admin123</p>
</main>
</body></html>
