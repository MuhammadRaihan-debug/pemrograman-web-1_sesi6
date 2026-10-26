<?php
require_once "auth.php";
require_once "koneksi.php";
$result = $conn->query("SELECT id, nim, nama, program_studi, email FROM mahasiswa ORDER BY id ASC");
?>
<!DOCTYPE html><html lang="id"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Data Mahasiswa</title><link rel="stylesheet" href="style.css"></head>
<body><header><h1>Data Mahasiswa</h1><p>Web Programming 1</p></header>
<nav><a href="dashboard.php">Dashboard</a><a href="index.php">Biodata</a><a href="layout.php">Layout Lab</a><a href="data_mahasiswa.php">Data Mahasiswa</a><a href="form_mahasiswa.php">Tambah Mahasiswa</a><a href="logout.php">Logout</a></nav>
<main><section><div class="form-actions" style="justify-content:space-between;align-items:center"><h2>Daftar Mahasiswa</h2><a class="btn" href="form_mahasiswa.php">+ Tambah Data</a></div>
<?php if (isset($_GET["success"])): ?><p class="message">Data mahasiswa berhasil ditambahkan.</p><?php endif; ?>
<table class="data-table"><caption>Data Mahasiswa dari MySQL</caption><thead><tr><th>No</th><th>NIM</th><th>Nama</th><th>Program Studi</th><th>Email</th></tr></thead><tbody>
<?php if ($result && $result->num_rows > 0): $no=1; while ($row=$result->fetch_assoc()): ?>
<tr><td><?= $no++ ?></td><td><?= htmlspecialchars($row["nim"] ?? "", ENT_QUOTES, "UTF-8") ?></td><td><?= htmlspecialchars($row["nama"] ?? "", ENT_QUOTES, "UTF-8") ?></td><td><?= htmlspecialchars($row["program_studi"] ?? "", ENT_QUOTES, "UTF-8") ?></td><td><?= htmlspecialchars($row["email"] ?? "", ENT_QUOTES, "UTF-8") ?></td></tr>
<?php endwhile; else: ?><tr><td colspan="5">Belum ada data mahasiswa.</td></tr><?php endif; ?>
</tbody></table></section></main><footer><p>Web Programming 1</p></footer></body></html>
