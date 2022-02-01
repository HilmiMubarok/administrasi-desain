<div class="card shadow-lg">
    <?php if ($this->session->flashdata()): ?>
		<div class="alert alert-<?= $this->session->flashdata('icon') ?> bg-<?= $this->session->flashdata('icon') ?> text-white">
			<?= $this->session->flashdata('pesan') ?>
		</div>
	<?php endif ?>
    <div class="card-header">
        <h4>Detail Stok Bahan <?= $stok->kode_bahan ?></h4>
    </div>
    <div class="card-body">
        <table class="table table-hover table-bordered table-stripped my-3">
            <tbody>
                <tr>
                    <th>Nama Bahan</th>
                    <td><?= $stok->nama_bahan ?></tr>
                </tr>
                <tr>
                    <th>Satuan</th>
                    <td><?= $stok->satuan ?></td>
                </tr>
                <tr>
                    <th>Jumlah Stok</th>
                    <td><?= $stok->jumlah_stok ?></td>
                </tr>
                <tr>
                    <th>Jenis</th>
                    <td><?= $stok->jenis ?></td>
                </tr>
                <tr>
                    <th>Keterangan</th>
                    <td><?= $stok->keterangan ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <?php
            if ($this->session->userdata('role') == 'admin') {
                echo anchor('stok/edit/'. $data->kode_bahan, '<i class="fas fa-edit"></i>', ['class' => 'btn btn-warning']);
                echo anchor('stok/hapus/'. $data->kode_bahan, '<i class="fas fa-trash"></i>', ['class' => 'btn btn-danger', 'onclick' => 'return confirm(\'Yakin?\')']);
            }
            

        ?>
        
    </div>
</div>