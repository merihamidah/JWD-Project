<?php
include "./_lib/entities/buku.php";
?>
<h1>
    Halaman Anggota
</h1>

<div class="card card-default">
    <div class="card-header">
        <a href="?page=buku/tambah" class="btn btn-primary float-right"> <i class="fa fa-plus"></i> Tambah</a>
        <a href="?page=buku/contoh" class="btn btn-primary float-right"> <i class="fa fa-plus"></i> Contoh</a>

        <div class="card-title">
            Table Anggota
        </div>
    </div>
    <div class="card-body">
        <table class="table datatable">
            <thead>
                <th>No</th>
                <th>Aksi</th>
                <th>Judul</th>
                <th>Tahun Terbit</th>
            </thead>
            <tbody>
                <?php foreach (getAll() as $key => $buku) : ?>
                    <tr>
                        <td><?php echo $key + 1 ?></td>
                        <td>
                            <div class="btn-group">
                                <a href="?page=buku/show&id=<?php echo $buku['id'] ?>" class="btn btn-info"><i class="fa fa-info"></i></a>
                                <a href="?page=buku/edit&id=<?php echo $buku['id'] ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                <a onclick="return confirm('Yakin Menghapus Data Ini?')" href="?page=buku/hapus&id=<?php echo $buku['id'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                        <td><?php echo $buku['judul'] ?></td>
                        <td><?php echo $buku['tahun_terbit'] ?></td>
                    </tr>
                <?php endforeach ?>

            </tbody>
        </table>
    </div>
</div>