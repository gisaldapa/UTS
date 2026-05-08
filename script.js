// Konfirmasi Hapus
document.querySelectorAll('.btn-konfirmasi').forEach(btn => {
    btn.addEventListener('click', function(e) {
        if (!confirm('Yakin ingin menghapus data ini?')) {
            e.preventDefault();
        }
    });
});

// Validasi Form
const formMhs = document.getElementById('formMahasiswa');
if (formMhs) {
    formMhs.addEventListener('submit', function(e) {
        const nim = document.getElementById('nim').value;
        const nama = document.getElementById('nama').value;
        const jurusan = document.getElementById('jurusan').value;
        const foto = document.getElementById('foto');
        const isEdit = document.getElementById('id_mhs').value;

        if (!nim || !nama || !jurusan) {
            alert('Semua kolom wajib diisi!');
            e.preventDefault();
        } else if (!isEdit && foto.files.length === 0) {
            alert('Foto wajib diunggah!');
            e.preventDefault();
        } else if (foto.files.length > 0) {
            const file = foto.files[0];
            if (file.size > 2000000) {
                alert('Ukuran file maksimal 2MB!');
                e.preventDefault();
            }
        }
    });
}