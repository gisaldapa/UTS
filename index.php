<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mahasiswa - UMMI</title>
    <style>
        :root { --primary: #00a8ff; --dark: #0097e6; --bg: #f5f9fc; --text: #2f3640; }
        body { font-family: 'Segoe UI', sans-serif; background-color: var(--bg); margin: 40px; color: var(--text); }
        h2 { color: var(--dark); margin-bottom: 30px; }
        .btn { padding: 10px 20px; text-decoration: none; border-radius: 8px; font-weight: 600; transition: 0.3s; display: inline-block; }
        .btn-tambah { background: var(--primary); color: white; box-shadow: 0 4px 10px rgba(0,168,255,0.3); }
        .btn-tambah:hover { background: var(--dark); transform: translateY(-2px); }
        table { width: 100%; border-collapse: separate; border-spacing: 0; background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.05); margin-top: 20px; }
        th { background: var(--primary); color: white; padding: 15px; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 1px; }
        td { padding: 15px; border-bottom: 1px solid #f1f2f6; }
        tr:hover { background-color: #e1f5fe; }
        .thumb { width: 50px; height: 50px; object-fit: cover; border-radius: 50%; border: 2px solid var(--primary); }
        .action-btns a { margin-right: 10px; font-size: 0.9rem; }
        .edit { color: var(--primary); }
        .hapus { color: #e84118; }
    </style>
</head>
<body>
    <h2>Data Mahasiswa</h2>
    <a href="form.php" class="btn btn-tambah"> + Tambah Mahasiswa</a>
    
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Profil</th>
                <th>NIM</th>
                <th>Nama Lengkap</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = mysqli_query($conn, "SELECT * FROM mahasiswa ORDER BY id DESC");
            $no = 1;
            while ($row = mysqli_fetch_assoc($query)) :
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><img src="uploads/<?= $row['foto']; ?>" class="thumb"></td>
                <td><?= $row['nim']; ?></td>
                <td><strong><?= $row['nama_lengkap']; ?></strong></td>
                <td><?= $row['jurusan']; ?></td>
                <td class="action-btns">
                    <a href="form.php?id=<?= $row['id']; ?>" class="edit">Edit</a>
                    <a href="proses.php?aksi=hapus&id=<?= $row['id']; ?>" class="hapus btn-konfirmasi">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <script src="script.js"></script>
</body>
</html>