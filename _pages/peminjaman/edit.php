<?php
include "./_lib/entities/peminjaman.php";
$id = $_GET['id'];
$peminjaman = getById($id);
?>
<h1>Halaman Tambah Data</h1>

<div class="card card-default">
    <div class="card-header">
        <div class="card-title">
            Tambah Data Peminjaman
        </div>
    </div>
    <div class="card-body">
        <form action="?page=peminjaman/store" method="post">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="" class="control-label">Nama</label>
                        <input type="text" class="form-control" name="nama" value="<?php echo $peminjaman['nama'] ?>">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="" class="control-label">NIM</label>
                        <input type="text" class="form-control" name="nim" value="<?php echo $peminjaman['nim'] ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="" class="control-label">Judul</label>
                        <input type="text" class="form-control" name="judul" value="<?php echo $peminjaman['judul'] ?>">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="" class="control-label">Tanggal Peminjaman</label>
                        <input type="date" class="form-control" name="tanggal_pinjam" value="<?php echo $peminjaman['tanggal_pinjam'] ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="" class="control-label">Tangggal Kembali</label>
                        <input type="date" class="form-control" name="tanggal_kembali" value="<?php echo $peminjaman['tanggal_kembali'] ?>">
                    </div>
                </div>
            <div class="form-group">
                <button class="btn btn-primary float-right"><i class="fa fa-save"></i> Simpan</button>
            </div>
        </form>
    </div>
</div>