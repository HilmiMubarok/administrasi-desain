<div class="card">
    <?php if ($this->session->flashdata()): ?>
		<div class="alert alert-<?= $this->session->flashdata('icon') ?> bg-<?= $this->session->flashdata('icon') ?> text-white">
			<?= $this->session->flashdata('pesan') ?>
		</div>
	<?php endif ?>
    <div class="card-body">
        <a href="<?= base_url('pesanan/tambah') ?>" class="mb-3 btn btn-primary"><span class="mdi mdi-plus"></span> Tambah Pesanan</a>
        <div class="table-responsive">
            <table class="table table-bordered table-stripped table-hover">
                <thead>
                    <tr>
                        <th>Nomor Pesanan</th>
                        <th>Tanggal</th>
                        <th>Pemesanan</th>
                        <th>Jumlah Pesan</th>
                        <th>Jenis Pesan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php if(count($pesanan) < 1): ?>
                    <tr>
                        <td colspan="5" class="text-center">Data Kosong</td>
                    </tr>
                <?php else: ?>
                <?php foreach($pesanan as $data): ?>
                    <tr>
                        <td><?= $data->id_pesanan ?></td>
                        <td><?= $data->tanggal_pesan ?></td>
                        <td><?= $data->pemesanan ?></td>
                        <td><?= $data->jumlah_pesan ?></td>
                        <td><?= $data->jenis_pesan ?></td>
                        <td>
                            <a href="<?= base_url('pesanan/detail/'). $data->id_pesanan ?>" class="btn btn-primary">Detail</a>
                            <a href="<?= base_url('pesanan/edit/'). $data->id_pesanan ?>" class="btn btn-success">Edit</a>
                            <a href="<?= base_url('pesanan/hapus/'). $data->id_pesanan ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach ?>
                <?php endif ?>
                </tbody>
            </table>
        </div>
    </div>
</div>