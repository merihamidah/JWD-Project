<?php
include "./_lib/entities/buku.php";
$id = $_GET['id'];
$buku = getById($id);
?>
<h1>Halaman Detail</h1>

<div class="card card-default">
    <div class="card-header">
        <a href="?page=buku/edit&id=<?php echo $buku['id'] ?>" class="btn btn-warning float-right"><i class="fa fa-edit"></i> Edit</a>
        <div class="card-title">
            Detail Buku
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col">
                <dl>
                    <dt>ISBN</dt>
                    <dd> <?php echo $buku['isbn'] ?> </dd>
                    <dt>Barcode</dt>
                    <dd> <?php echo $buku['barcode'] ?> </dd>
                    <dt>Judul</dt>
                    <dd> <?php echo $buku['judul'] ?> </dd>
                    <dt>Penulis</dt>
                    <dd> <?php echo $buku['penulis'] ?> </dd>
                    <dt>Penerbit</dt>
                    <dd> <?php echo $buku['penerbit'] ?> </dd>
                    <dt>Tahun Terbit</dt>
                    <dd> <?php echo $buku['tahun_terbit'] ?> </dd>
                    <dt>Stok</dt>
                    <dd> <?php echo $buku['stok'] ?> </dd>
                    <dt>Tersedia / Dipinjam</dt>
                    <dd> <?php echo $buku['tersedia'] ?> / <?php echo $buku['dipinjam'] ?></dd>
                </dl>
            </div>
            <div class="col">
                <img src="<?php echo $buku['cover'] ?>" alt="">
            </div>
        </div>
    </div>
</div>