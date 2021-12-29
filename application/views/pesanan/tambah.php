<div class="card">
    <div class="card-body">
        <form action="<?= base_url('pesanan/save') ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Nomor Pesanan</label>
                <input type="text" name="id_pesanan" class="form-control">
            </div>
            <div class="form-group">
                <label>Tanggal Pesanan</label>
                <input type="date" name="tanggal_pesan" class="form-control">
            </div>
            <div class="form-group">
                <label>Pemesanan</label>
                <input type="text" name="pemesanan" class="form-control">
            </div>
            <div class="form-group">
                <label>Panjang</label>
                <input type="text" name="panjang" class="form-control">
            </div>
            <div class="form-group">
                <label>Lebar</label>
                <input type="text" name="lebar" class="form-control">
            </div>
            <div class="form-group">
                <label>Jumlah Pesan</label>
                <input type="text" name="jumlah_pesan" class="form-control">
            </div>
            <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="gambar" class="form-control">
            </div>
            <div class="form-group">
                <label>Jenis Pesan</label>
                <input type="text" name="jenis_pesan" class="form-control">
            </div>
            
            <button class="btn btn-primary" type="submit">
                Simpan
            </button>
        </form>
    </div>
</div>