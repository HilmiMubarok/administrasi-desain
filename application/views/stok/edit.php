<div class="card">
    <div class="card-body">
        <form action="<?= base_url('stok/update') ?>" method="POST">
        <input type="hidden" name="kode" value="<?= $stok->kode_bahan ?>">
            <div class="form-group">
                <label>Kode Bahan</label>
                <input type="text" name="kode_bahan" class="form-control" value="<?= $stok->kode_bahan ?>">
            </div>
            <div class="form-group">
                <label>Nama Bahan</label>
                <input type="text" name="nama_bahan" class="form-control" value="<?= $stok->nama_bahan ?>">
            </div>
            <div class="form-group">
                <label>Satuan</label>
                <input type="text" name="satuan" class="form-control" value="<?= $stok->satuan ?>">
            </div>
            <div class="form-group">
                <label>Jumlah Stok</label>
                <input type="text" name="jumlah_stok" class="form-control" value="<?= $stok->jumlah_stok ?>">
            </div>
            <div class="form-group">
                <label>Jenis</label>
                <input type="text" name="jenis" class="form-control" value="<?= $stok->jenis ?>">
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <textarea name="keterangan" cols="30" rows="10" class="form-control"><?= $stok->keterangan ?></textarea>
            </div>
            <button class="btn btn-primary" type="submit">
                Simpan
            </button>
        </form>
    </div>
</div>