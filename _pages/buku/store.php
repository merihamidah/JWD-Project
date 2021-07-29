<?php
if ($_POST) {
    include "./_lib/entities/buku.php";
    $file = $_FILES['cover'];
    if ($file['size'] > 1000000) {
        header("Location: ?page=buku/tambah&msg=File Terlalu Besar");
    } else {
        $destination = 'assets/img/buku';
        $extension = pathinfo($_FILES['cover']['name'], PATHINFO_EXTENSION);
        $filename = "cover." . time() . "." . $_POST['isbn'] . "." . $extension;
        move_uploaded_file($_FILES['cover']['tmp_name'], $destination . "/" . $filename);

        $param = [
            'judul' => $_POST['judul'],
            'penulis' => $_POST['penulis'],
            'barcode' => $_POST['barcode'],
            'penerbit' => $_POST['penerbit'],
            'tahun_terbit' => $_POST['tahun_terbit'],
             'isbn' => $_POST['isbn'],
            'stok' => $_POST['stok'],
            'tersedia' => $_POST['tersedia'],
            'dipinjam' => $_POST['dipinjam'],
            'cover' => $destination . "/" . $filename,
        ];
        store($param);
        header("Location: ?page=buku");
    }
}
