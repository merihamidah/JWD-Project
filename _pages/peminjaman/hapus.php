<?php
include "./_lib/entities/peminjaman.php";
$param = [
    'id' => $_GET['id']
];
delete($param);

echo "
        <script>
            console.log('Data Berhasil Dihapus');
            window.location.href = '?page=peminjaman'
        </script>
    ";
