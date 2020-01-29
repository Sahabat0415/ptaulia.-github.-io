<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Pelanggan</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM perumahan WHERE no ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td>No Rumah</td> <td><?= $data['no_rumah'] ?></td>
                        </tr>
						<tr>
                            <td>Alamat Rumah</td> <td><?= $data['alamat'] ?></td>
                        </tr>
						<tr>
                            <td>Nama Pembeli</td> <td><?= $data['nama_pembeli'] ?></td>
                        </tr>
						<tr>
                            <td>No Telephone</td> <td><?= $data['no_telp'] ?></td>
                        </tr>
						<tr>
                            <td>Tanggal Masuk</td> <td><?= $data['tgl_masuk'] ?></td>
                        </tr>
						<tr>
                            <td>Keterangan</td> <td><?= $data['keterangan'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=pelanggan&actions=tampil" class="btn btn-info btn-sm">
                        Kembali ke Data Pelanggan </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

