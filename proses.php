<?php
include 'koneksi.php';

$aksi = isset($_POST['aksi']) ? $_POST['aksi'] : (isset($_GET['aksi']) ? $_GET['aksi'] : '');

function upload() {
    $nama = $_FILES['foto']['name'];
    $ukuran = $_FILES['foto']['size'];
    $tmp = $_FILES['foto']['tmp_name'];
    $ext = strtolower(pathinfo($nama, PATHINFO_EXTENSION));
    
    if (!in_array($ext, ['jpg', 'jpeg', 'png']) || $ukuran > 2000000) return false;
    
    $namaBaru = time() . '.' . $ext;
    move_uploaded_file($tmp, 'uploads/' . $namaBaru);
    return $namaBaru;
}

if ($aksi == 'tambah') {
    $foto = upload();
    if ($foto) {
        $nim = $_POST['nim']; $nama = $_POST['nama_lengkap']; $jurusan = $_POST['jurusan'];
        mysqli_query($conn, "INSERT INTO mahasiswa VALUES (NULL, '$nim', '$nama', '$jurusan', '$foto')");
    }
} elseif ($aksi == 'edit') {
    $id = $_POST['id']; $nim = $_POST['nim']; $nama = $_POST['nama_lengkap']; $jurusan = $_POST['jurusan'];
    $foto = ($_FILES['foto']['error'] === 4) ? $_POST['foto_lama'] : upload();
    mysqli_query($conn, "UPDATE mahasiswa SET nim='$nim', nama_lengkap='$nama', jurusan='$jurusan', foto='$foto' WHERE id='$id'");
} elseif ($aksi == 'hapus') {
    $id = $_GET['id'];
    $data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT foto FROM mahasiswa WHERE id='$id'"));
    unlink('uploads/' . $data['foto']);
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id='$id'");
}

header("Location: index.php");
?>