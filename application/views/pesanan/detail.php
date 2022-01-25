<div class="card shadow-lg">
    <?php if ($this->session->flashdata()): ?>
		<div class="alert alert-<?= $this->session->flashdata('icon') ?> bg-<?= $this->session->flashdata('icon') ?> text-white">
			<?= $this->session->flashdata('pesan') ?>
		</div>
	<?php endif ?>
    <div class="card-header">
        <h4>Detail Pesanan <?= $pesanan->pemesanan ?></h4>
    </div>
    <div class="card-body">
        <table class="table table-hover table-bordered table-stripped my-3">
            <tbody>
                <tr>
                    <th>Tanggal Pesan</th>
                    <td><?= format_indo($pesanan->tanggal_pesan) ?></tr>
                </tr>
                <tr>
                    <th>Pemesanan</th>
                    <td><?= $pesanan->pemesanan ?></tr>
                </tr>
                <tr>
                    <th>Panjang</th>
                    <td><?= $pesanan->panjang ?></tr>
                </tr>
                <tr>
                    <th>Lebar</th>
                    <td><?= $pesanan->lebar ?></td>
                </tr>
                <tr>
                    <th>Jumlah Pesan</th>
                    <td><?= $pesanan->jumlah_pesan ?></td>
                </tr>
                <tr>
                    <th>Gambar</th>
                    <td>
                        <img src="<?= base_url() ?>assets/images/uploads/<?= $pesanan->gambar ?>" style="width:300px; height:300px; border-radius:0">
                    </td>
                </tr>
                <tr>
                    <th>Jenis Pesan</th>
                    <td><?= $pesanan->jenis_pesan ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <a href="<?= base_url('pesanan') ?>" class="btn btn-primary">Kembali</a>
        <a href="<?= base_url('pesanan/hapus/'). $pesanan->id_pesanan ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')">Hapus</a>
    </div>
</div>