<div class="card shadow-lg">
    <?php if ($this->session->flashdata()): ?>
		<div class="alert alert-<?= $this->session->flashdata('icon') ?> bg-<?= $this->session->flashdata('icon') ?> text-white">
			<?= $this->session->flashdata('pesan') ?>
		</div>
	<?php endif ?>
    <div class="card-header">
        <h4>Detail Stok Bahan <?= $bon->kode_bahan ?></h4>
    </div>
    <div class="card-body">
        <table class="table table-hover table-bordered table-stripped my-3">
            <tbody>
                <tr>
                    <th>Kode Bahan</th>
                    <td><?= $bon->kode_bahan ?></tr>
                </tr>
                <tr>
                    <th>Nama Bahan</th>
                    <td><?= $bon->nama_bahan ?></tr>
                </tr>
                <tr>
                    <th>Satuan</th>
                    <td><?= $bon->satuan ?></tr>
                </tr>
                <tr>
                    <th>Satuan</th>
                    <td><?= format_indo($bon->tanggal_bon) ?></td>
                </tr>
                <tr>
                    <th>Jumlah Stok</th>
                    <td><?= $bon->shift ?></td>
                </tr>
                <tr>
                    <th>Jenis</th>
                    <td><?= $bon->jumlah_bon ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="card-footer">
    <?php 
                            
        //if role admin
        if ($this->session->userdata('role') == 'admin') {
            echo anchor('bon/edit/'. $data->kode_bahan, '<i class="fas fa-edit"></i>', ['class' => 'btn btn-warning']);
            echo anchor('bon/hapus/'. $data->kode_bahan, '<i class="fas fa-trash"></i>', ['class' => 'btn btn-danger', 'onclick' => 'return confirm(\'Yakin?\')']);
        }
    
    ?>
    </div>
</div>