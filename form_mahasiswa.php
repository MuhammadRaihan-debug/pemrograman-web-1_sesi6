<?php require_once "auth.php"; ?>
<!DOCTYPE html><html lang="id"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Tambah Mahasiswa</title><link rel="stylesheet" href="style.css"></head>
<body><header><h1>Tambah Mahasiswa</h1><p>Web Programming 1</p></header>
<nav><a href="dashboard.php">Dashboard</a><a href="index.php">Biodata</a><a href="layout.php">Layout Lab</a><a href="data_mahasiswa.php">Data Mahasiswa</a><a href="form_mahasiswa.php">Tambah Mahasiswa</a><a href="logout.php">Logout</a></nav>
<main><section><h2>Form Input Mahasiswa</h2>
<?php if (isset($_GET["error"])): ?><p class="message error">Data gagal disimpan. Periksa NIM dan email, lalu coba lagi.</p><?php endif; ?>
<form action="proses_tambah.php" method="POST">
<div class="form-group"><label for="nim">NIM</label><input type="text" id="nim" name="nim" maxlength="30" required></div>
<div class="form-group"><label for="nama">Nama Lengkap</label><input type="text" id="nama" name="nama" maxlength="100" required></div>
<div class="form-group"><label for="program_studi">Program Studi</label><input type="text" id="program_studi" name="program_studi" maxlength="100" required></div>
<div class="form-group"><label for="email">Email</label><input type="email" id="email" name="email" maxlength="100" required></div>
<div class="form-actions"><button class="btn" type="submit">Simpan Data</button><a class="btn btn-secondary" href="data_mahasiswa.php">Kembali</a></div>
</form></section></main><footer><p>Web Programming 1</p></footer></body></html>
