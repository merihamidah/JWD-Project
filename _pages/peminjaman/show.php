<?php
include "./_lib/entities/peminjaman.php";
$id = $_GET['id'];
$peminjaman = getById($id);
?>
<h1>Halaman Detail</h1>

<div class="card card-default">
    <div class="card-header">
        <a href="?page=peminjaman/edit&id=<?php echo $peminjaman['id'] ?>" class="btn btn-warning float-right"><i class="fa fa-edit"></i> Edit</a>
        <div class="card-title">
            Detail Peminjaman
        </div>
    </div>
    <div class="card-body">
        <dl>
            <dt>Nama</dt>
            <dd> <?php echo $peminjaman['nama'] ?> </dd>
            <dt>NIM</dt>
            <dd> <?php echo $peminjaman['nim'] ?> </dd>
            <dt>Judul</dt>
            <dd> <?php echo $peminjaman['judul'] ?> </dd>
            <dt>Tanggal Peminjaman</dt>
            <dd> <?php echo $peminjaman['tanggal_pinjam'] ?> </dd>
            <dt>Tanggal Kembali</dt>
            <dd> <?php echo $peminjaman['tanggal_kembali'] ?> </dd>
         </dl>
    </div>
</div>