<?php require_once "auth.php"; ?>
<!DOCTYPE html><html lang="id"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Dashboard - Web Programming 1</title><link rel="stylesheet" href="style.css"></head>
<body>
<header><h1>Dashboard Project Web Programming 1</h1><p>Halo, <strong><?= htmlspecialchars($_SESSION["nama_lengkap"] ?? "Mahasiswa", ENT_QUOTES, "UTF-8") ?></strong>! Kamu berhasil login.</p></header>
<nav aria-label="Navigasi utama"><a href="dashboard.php">Dashboard</a><a href="index.php">Home / Biodata</a><a href="layout.php">Layout Lab</a><a href="data_mahasiswa.php">Data Mahasiswa</a><a href="form_mahasiswa.php">Tambah Mahasiswa</a><a href="logout.php">Logout</a></nav>
<main>
<section class="dashboard-welcome"><h2>Project Hub</h2><p>Gunakan halaman ini untuk membuka kembali hasil Modul 1–4. Seluruh halaman project hanya bisa diakses setelah login.</p><p><strong>Username:</strong> <?= htmlspecialchars($_SESSION["username"] ?? "", ENT_QUOTES, "UTF-8") ?></p></section>
<div class="dashboard-grid">
<a class="dashboard-link" href="index.php"><h3>Home / Biodata</h3><p>Halaman biodata yang dilanjutkan dari Modul 1–2.</p></a>
<a class="dashboard-link" href="layout.php"><h3>Layout Lab</h3><p>Eksperimen layout HTML dan CSS dari Modul 3A.</p></a>
<a class="dashboard-link" href="data_mahasiswa.php"><h3>Data Mahasiswa</h3><p>Melihat data mahasiswa dari database MySQL.</p></a>
<a class="dashboard-link" href="form_mahasiswa.php"><h3>Tambah Mahasiswa</h3><p>Menambahkan data mahasiswa ke tabel mahasiswa.</p></a>
</div>
</main><footer><p>Web Programming 1 — Integrated Login &amp; Project Hub</p></footer>
</body></html>
