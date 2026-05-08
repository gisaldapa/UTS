<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>UTS - Data Mahasiswa</title>
    <style>
        body { font-family: sans-serif; margin: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
        .thumb { width: 50px; height: 50px; object-fit: cover; border-radius: 5px; }
        .btn { padding: 5px 10px; text-decoration: none; border-radius: 3px; color: white; }
        .btn-edit { background-color: #ffc107; color: black; }
        .btn-hapus { background-color: #dc3545; }
        .btn-tambah { background-color: #28a745; padding: 10px; display: inline-block; margin-bottom: 10px; }
    </style>
</head>
<body>
    <h2>Daftar Mahasiswa UMMI</h2>
    <a href="form.php" class="btn btn-tambah">Tambah Mahasiswa</a>
    
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = mysqli_query($conn, "SELECT * FROM mahasiswa");
            $no = 1;
            while ($row = mysqli_fetch_assoc($query)) :
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><img src="uploads/<?= $row['foto']; ?>" class="thumb"></td>
                <td><?= $row['nim']; ?></td>
                <td><?= $row['nama_lengkap']; ?></td>
                <td><?= $row['jurusan']; ?></td>
                <td>
                    <a href="form.php?id=<?= $row['id']; ?>" class="btn btn-edit">Edit</a>
                    <a href="proses.php?aksi=hapus&id=<?= $row['id']; ?>" class="btn btn-hapus btn-konfirmasi">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <script src="script.js"></script>
</body>
</html>