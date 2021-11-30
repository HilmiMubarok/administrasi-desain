<div class="card">
    <div class="card-body">
        <a href="<?= base_url('stok/tambah') ?>" class="mb-3 btn btn-primary"><span class="mdi mdi-plus"></span> Tambah Stok</a>
        <table class="table table-bordered table-stripped table-hover">
            <thead>
                <tr>
                    <th>Kode Bahan</th>
                    <th>Nama Bahan</th>
                    <th>Satuan</th>
                    <th>Jumlah Stok</th>
                    <th>Jenis</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php if(count($stok) < 1): ?>
                <tr>
                    <td colspan="7" class="text-center">Data Kosong</td>
                </tr>
            <?php else: ?>
            <?php foreach($stok as $data): ?>
                <tr>
                    <td><?= $data->kode_bahan ?></td>
                    <td><?= $data->nama_bahan ?></td>
                    <td><?= $data->satuan ?></td>
                    <td><?= $data->jumlah_stok ?></td>
                    <td><?= $data->jenis ?></td>
                    <td><?= $data->keterangan ?></td>
                    <td>
                        <a href="<?= base_url('stok/edit/'). $data->kode_bahan ?>" class="btn btn-success">Edit</a>
                        <a href="<?= base_url('stok/hapus/'). $data->kode_bahan ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php endforeach ?>
            <?php endif ?>
            </tbody>
        </table>
    </div>
</div>