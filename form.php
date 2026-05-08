<?php
include 'koneksi.php';
$id = isset($_GET['id']) ? $_GET['id'] : '';
$row = ['nim' => '', 'nama_lengkap' => '', 'jurusan' => '', 'foto' => ''];
if ($id) {
    $res = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id = '$id'");
    $row = mysqli_fetch_assoc($res);
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Data Mahasiswa</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background: #f5f9fc; display: flex; justify-content: center; align-items: center; min-height: 100vh; margin: 0; }
        .card { background: white; padding: 40px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); width: 100%; max-width: 400px; }
        h2 { color: #0097e6; text-align: center; margin-bottom: 25px; }
        label { display: block; margin-bottom: 8px; font-weight: 600; color: #57606f; }
        input[type="text"], input[type="file"] { width: 100%; padding: 12px; margin-bottom: 20px; border: 2px solid #f1f2f6; border-radius: 10px; box-sizing: border-box; outline: none; transition: 0.3s; }
        input:focus { border-color: #00a8ff; }
        button { width: 100%; padding: 15px; background: #00a8ff; color: white; border: none; border-radius: 10px; font-weight: bold; cursor: pointer; transition: 0.3s; }
        button:hover { background: #0097e6; }
        .back { display: block; text-align: center; margin-top: 20px; color: #a4b0be; text-decoration: none; }
    </style>
</head>
<body>
    <div class="card">
        <h2><?= $id ? 'Edit' : 'Tambah' ?> Data</h2>
        <form id="formMahasiswa" action="proses.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" id="id_mhs" value="<?= $id; ?>">
            <input type="hidden" name="aksi" value="<?= $id ? 'edit' : 'tambah'; ?>">
            <input type="hidden" name="foto_lama" value="<?= $row['foto']; ?>">

            <label>NIM</label>
            <input type="text" name="nim" id="nim" value="<?= $row['nim']; ?>" placeholder="Masukkan NIM">

            <label>Nama Lengkap</label>
            <input type="text" name="nama_lengkap" id="nama" value="<?= $row['nama_lengkap']; ?>" placeholder="Nama Mahasiswa">

            <label>Jurusan</label>
            <input type="text" name="jurusan" id="jurusan" value="<?= $row['jurusan']; ?>" placeholder="Program Studi">

            <label>Foto Profil</label>
            <input type="file" name="foto" id="foto" accept="image/*">

            <button type="submit">Simpan Sekarang</button>
            <a href="index.php" class="back">Kembali ke Daftar</a>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>