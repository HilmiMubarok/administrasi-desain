<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $title ?></title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table tr td {
            border: 1px solid;
            padding: 2px 5px;
        }


    </style>
</head>
<body>

	<div class="container">
		
		<h3 class="text-center">
            LAPORAN PENJUALAN
        </h3>
            
            <table>
                <tr>
                    <td>Tanggal</td>
                    <td>Pemesanan</td>
                    <td>Jumlah Pesan</td>
                    <td>Panjang</td>
                    <td>Lebar</td>
                    <td>Jenis Pesan</td>
                </tr>
                <?php if(count($cetak) < 1): ?>
                    <tr>
                        <td colspan="5" class="text-center">Data Kosong</td>
                    </tr>
                <?php else: ?>
                <?php foreach($cetak as $data): ?>
                    <tr>
                        <td><?= format_indo($data->tanggal_pesan) ?></td>
                        <td><?= $data->pemesanan ?></td>
                        <td><?= $data->jumlah_pesan ?></td>
                        <td><?= $data->panjang ?></td>
                        <td><?= $data->lebar ?></td>
                        <td><?= $data->jenis_pesan ?></td>
                    </tr>
                <?php endforeach ?>
                <?php endif ?>
            </table>
           
      
		
	</div>

</body>
</html>