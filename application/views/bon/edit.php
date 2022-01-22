<div class="card">
    <div class="card-body">
        <form action="<?= base_url('bon/update') ?>" method="POST">
            <div class="form-group">
                <label>Kode Bahan</label>
                <select name="kode_bahan" class="form-control">
                    <?php foreach($stok as $s): ?>
                        <option value="<?= $s->kode_bahan ?>" <?= ($s->kode_bahan == $bon->kode_bahan ? "selected" : null) ?> ><?= $s->kode_bahan ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group">
                <label>Tanggal Bon</label>
                <input type="date" name="tanggal_bon" class="form-control" value="<?= $bon->tanggal_bon ?>">
            </div>
            <div class="form-group">
                <label>Shift</label>
                <input type="text" name="shift" class="form-control" value="<?= $bon->shift ?>">
            </div>
            <div class="form-group">
                <label>Jumlah Bon</label>
                <input type="text" name="jumlah_bon" class="form-control" value="<?= $bon->jumlah_bon ?>">
            </div>
            <button class="btn btn-primary" type="submit">
                Simpan
            </button>
        </form>
    </div>
</div>