<?php
include "./_lib/entities/peminjaman.php";
?>
<h1>
    Halaman Transaksi Peminjaman
</h1>

<div class="card card-default">
    <div class="card-header">
        <a href="?page=peminjaman/tambah" class="btn btn-primary float-right"> <i class="fa fa-plus"></i> Tambah</a>

        <div class="card-title">
            Table Peminjaman
        </div>
    </div>
    <div class="card-body">
        <table class="table datatable">
            <thead>
                <th>No</th>
                <th>Aksi</th>
                <th>Nama</th>                
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Kembali</th>
                <th>Terlambat</th>
                <th>Status </th>
            </thead>
            <tbody>
                <?php foreach (getAll() as $key => $peminjaman) : ?>
                    <tr>
                        <td><?php echo $key + 1 ?></td>
                        <td>
                            <div class="btn-group">
                                <a href="?page=peminjaman/show&id=<?php echo $peminjaman['id'] ?>" class="btn btn-info"><i class="fa fa-info"></i></a>
                                <a href="?page=peminjaman/edit&id=<?php echo $peminjaman['id'] ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                <a onclick="return confirm('Yakin Menghapus Data Ini?')" href="?page=peminjaman/hapus&id=<?php echo $anggota['id'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                        <td><?php echo $peminjaman['nama'] ?></td>
                        <td><?php echo $peminjaman['tanggal_pinjam'] ?></td>                        
                        <td><?php echo $peminjaman['tanggal_kembali'] ?></td>  
                        <td><?php echo $peminjaman['0'] ?></td>                     
                        <td><?php echo $peminjaman['status'] ?></td>
                    </tr>
                <?php endforeach ?>

            </tbody>
        </table>
    </div>
</div>