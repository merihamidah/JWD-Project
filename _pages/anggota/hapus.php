<?php
include "./_lib/entities/anggota.php";
$param = [
    'id' => $_GET['id']
];
delete($param);

echo "
        <script>
            console.log('Data Berhasil Dihapus');
            window.location.href = '?page=anggota'
        </script>
    ";
