<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Pelanggan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                               <div class="col-sm-2 col-xs-9">
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="no_rumah" class="col-sm-3 control-label">Nomor Rumah</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_rumah" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Rumah" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat Rumah</label>
                            <div class="col-sm-3">
                                <input type="date" name="alamat" class="form-control" id="inputEmail3" placeholder="Inputkan Alamat Rumah" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_pembeli" class="col-sm-3 control-label">Nama Pembeli</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pembeli" class="form-control" id="inputPassword3" placeholder="Inputkan Nama Pembeli" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="nama_penerima" class="col-sm-3 control-label">No Telephone</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_penerima" class="form-control" id="inputPassword3" placeholder="Inputkan No Telephone" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal Masuk</label>
                            <div class="col-sm-9">
                                <input type="text" name="tgl_masuk" class="form-control" id="inputPassword3" placeholder="Inputkan Tanggal Masuk" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" class="form-control" id="inputPassword3" placeholder="Inputkan Keterangan">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Complain</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=pelanggan&actions=tampil" class="btn btn-info btn-sm">
                        Kembali Ke Data Pelanggan
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
	$norumah=$_POST['no_rumah'];
  $alamat=$_POST['alamat'];
  $nama_pembeli=$_POST['nama_pembeli'];
	$no_telp=$_POST['no_telp'];
	  $tgl_masuk=$_POST['tgl_masuk'];
	$ket=$_POST['ket'];
    //buat sql
    $sql="INSERT INTO perumahan VALUES ('','$norumah','$alamat','$nama_pembeli','$no_telp','$tgl_masuk','$ket')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=arsip&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
