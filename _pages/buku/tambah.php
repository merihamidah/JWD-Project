<h1>Halaman Tambah Data</h1>

<div class="card card-default">
    <div class="card-header">
        <div class="card-title">
            Tambah Data Buku
        </div>
    </div>
    <div class="card-body">
        <form action="?page=buku/store" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="" class="control-label">Judul</label>
                        <input type="text" class="form-control" name="judul">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="" class="control-label">Penulis</label>
                        <input type="text" class="form-control" name="penulis">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="" class="control-label">Barcode</label>
                        <input type="text" class="form-control" name="barcode">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="" class="control-label">Penerbit</label>
                        <input type="text" class="form-control" name="penerbit">
                    </div>
                </div>
            </div>
             <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="" class="control-label">Tahun Terbit</label>
                        <input type="number" class="form-control" name="tahun_terbit">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="" class="control-label">ISBN</label>
                        <input type="text" class="form-control" name="isbn">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="" class="control-label">Stok</label>
                        <input type="number" class="form-control" name="stok">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="" class="control-label">Tersedia</label>
                        <input type="number" class="form-control" name="tersedia">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="" class="control-label">Dipinjam</label>
                        <input type="number" class="form-control" name="dipinjam">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="" class="control-label">Cover</label>
                <input type="file" class="form-control" name="cover">
            </div>
            <div class="form-group">
                <button class="btn btn-primary float-right"><i class="fa fa-save"></i> Simpan</button>
            </div>
        </form>
    </div>
</div>