<?php require_once "auth.php"; ?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header id="top">
        <h1>Data Mahasiswa</h1>
        <p>Web Programming 1</p>
    </header>
<div class="page-layout right">
    
    <nav aria-label="Navigasi utama">
        <a href="#biodata">Biodata</a> |
        <a href="#tentang">Tentang</a> |
        <a href="#pendidikan">Pendidikan</a> |
        <a href="#hobi">Hobi</a> |
        <a href="#skill">Skill</a> |
         <a href="index.php">Biodata</a> |
        <a href="layout.php">Layout Lab</a> |
        <a href="dashboard.php">Dashboard</a> |
        <a href="data_mahasiswa.php">Data Mahasiswa</a> |
        <a href="form_mahasiswa.php">Tambah Mahasiswa</a> |
        <a href="logout.php">Logout</a>
    </nav>

    <main>

        <!-- Bagian Biodata -->
        <section id="biodata" class="card">
            <h2>Data Pribadi</h2>

            <figure>
                <img src="fotosaya.jpg" alt="Foto profil Raihan" width="150">
                <figcaption>Foto profil mahasiswa.</figcaption>
            </figure>

            <table>
                <caption>Informasi Biodata</caption>

                <tbody>
                    <tr>
                        <th scope="row">Nama</th>
                        <td>Muhammad Raihan</td>
                    </tr>

                    <tr>
                        <th scope="row">NIM</th>
                        <td>4112755201250075</td>
                    </tr>

                    <tr>
                        <th scope="row">Program Studi</th>
                        <td>Informatika</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- Bagian Tentang Saya -->
        <section id="tentang" class="card">
            <h2>Tentang Saya</h2>

            <p>
                Saya mahasiswa Informatika yang tertarik pada Web Development.
            </p>

            <details>
                <summary>Informasi tambahan</summary>

                <p>
                    Saya sedang mempelajari HTML sebelum masuk ke CSS.
                </p>
            </details>
        </section>

        <!-- Bagian Pendidikan -->
        <section id="pendidikan" class="card">
            <h2>Pendidikan</h2>

            <ol>
                <li>SMKN 2 CIKARANG BARAT</li>
                <li>S1 Informatika</li>
            </ol>
        </section>

        <!-- Bagian Hobi -->
        <section id="hobi" class="card">
            <h2>Hobi</h2>

            <ul>
                <li>Badminton</li>
                <li>Game</li>
                <li>Musik</li>
            </ul>
        </section>

        <!-- Bagian Skill -->
        <section id="skill" class="card">
            <h2>Skill</h2>

            <dl>
                <dt>HTML</dt>
                <dd>Membuat struktur dan semantic content.</dd>

                <dt>CSS</dt>
                <dd>Basic programming dan data processing.</dd>
            </dl>
        </section>

    </main>
</div>
    <footer>
        <p>Copyright &copy; 2026 - Muhammad Raihan</p>

        <nav aria-label="Navigasi footer">
            <a href="#top">Kembali ke atas</a>
        </nav>
    </footer>

</body>

</html>