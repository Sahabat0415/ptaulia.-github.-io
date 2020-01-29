<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Data Pelanggan</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Perumahan PT. Aulia Kisaran </h2>
                        <h4>Jalan Diponegoro No.4, Kisaran Kota <br> Kec. Kota Kisaran Barat, Kabupaten Asahan, Sumatera Utara, 21216</h4>
                        <hr>
                        <h3>DATA SELURUH PELANGGAN</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                                <thead>
								<tr>
                                 <th>No.</th><th width="17%">Nomor Rumah</th><th>Alamat</th><th width="14%">Nama Pembeli</th><th width="15%">Nomor Telephone</th><th width="10%">Tanggal Masuk</th><th>Keterangan</th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM perumahan";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
									<td><?= $data['no_rumah'] ?></td>
                                    <td><?= $data['alamat'] ?></td>
                                    <td><?= $data['nama_pembeli'] ?></td>
                                    <td><?= $data['no_telp'] ?></td>
									<td><?= $data['tgl_masuk'] ?></td>
									<td><?= $data['keterangan'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="8" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Staff Administrasi<strong></u><br>
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>