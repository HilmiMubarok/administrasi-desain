<div class="card">
    <?php if ($this->session->flashdata()): ?>
		<div class="alert alert-<?= $this->session->flashdata('icon') ?> bg-<?= $this->session->flashdata('icon') ?> text-white">
			<?= $this->session->flashdata('pesan') ?>
		</div>
	<?php endif ?>
    <div class="card-body">
        <?php
            if ($this->session->userdata('role') == 'admin') {
                echo anchor('stok/tambah', '<i class="fas fa-plus"></i> Tambah Stok', ['class' => 'btn btn-primary mb-3']);
            }
        ?>
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
                        <a href="<?= base_url('stok/detail/'). $data->kode_bahan ?>" class="btn btn-primary">Detail</a>
                        <?php
                            // if role admin 
                            if ($this->session->userdata('role') == 'admin') {
                                echo anchor('stok/edit/'. $data->kode_bahan, '<i class="fas fa-edit"></i>', ['class' => 'btn btn-warning']);
                                echo anchor('stok/hapus/'. $data->kode_bahan, '<i class="fas fa-trash"></i>', ['class' => 'btn btn-danger', 'onclick' => 'return confirm(\'Yakin?\')']);
                            }
                        ?>
                    </td>
                </tr>
            <?php endforeach ?>
            <?php endif ?>
            </tbody>
        </table>
    </div>
</div>