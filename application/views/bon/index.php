<div class="card">
    <?php if ($this->session->flashdata()): ?>
		<div class="alert alert-<?= $this->session->flashdata('icon') ?> bg-<?= $this->session->flashdata('icon') ?> text-white">
			<?= $this->session->flashdata('pesan') ?>
		</div>
	<?php endif ?>
    <div class="card-body">
        <a href="<?= base_url('bon/tambah') ?>" class="mb-3 btn btn-primary"><span class="mdi mdi-plus"></span> Tambah Bon</a>
        <div class="table-responsive">
            <table class="table table-bordered table-stripped table-hover">
                <thead>
                    <tr>
                        <th>Kode Bahan</th>
                        <th>Nama Bahan</th>
                        <th>Satuan</th>
                        <th>Tanggal Bon</th>
                        <th>Shift</th>
                        <th>Jumlah Bon</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php if(count($bon) < 1): ?>
                    <tr>
                        <td colspan="7" class="text-center">Data Kosong</td>
                    </tr>
                <?php else: ?>
                <?php foreach($bon as $data): ?>
                    <tr>
                        <td><?= $data->kode_bahan ?></td>
                        <td><?= $data->nama_bahan ?></td>
                        <td><?= $data->satuan ?></td>
                        <td><?= format_indo($data->tanggal_bon) ?></td>
                        <td><?= $data->shift ?></td>
                        <td><?= $data->jumlah_bon ?></td>
                        <td>
                            <a href="<?= base_url('bon/detail/'). $data->kode_bahan ?>" class="btn btn-primary">Detail</a>
                            <?php 
                            
                                //if role admin
                                if ($this->session->userdata('role') == 'admin') {
                                    echo anchor('bon/edit/'. $data->kode_bahan, '<i class="fas fa-edit"></i>', ['class' => 'btn btn-warning']);
                                    echo anchor('bon/hapus/'. $data->kode_bahan, '<i class="fas fa-trash"></i>', ['class' => 'btn btn-danger', 'onclick' => 'return confirm(\'Yakin?\')']);
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
</div>