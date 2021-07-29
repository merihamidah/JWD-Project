<?php
if ($_POST) {
    include "./_lib/entities/peminjaman.php";
    $param = [
        'nama' => $_POST['nama'],
        'nim' => $_POST['nim'],
        'judul' => $_POST['judul'],
        'tanggal_pinjam' => $_POST['tanggal_pinjam'],
        'tanggal_kembali' => $_POST['tanggal_kembali']
        
    ];
    store($param);

    echo "
        <script>
            console.log('Data Berhasil Disimpan');
            window.location.href = '?page=buku'
        </script>
    ";
}
