<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM perumahan WHERE no ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Pelanggan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <div class="col-sm-2 col-xs-9">
                            </div>
                        </div>
                       <div class="form-group">
                            <label for="noRumah" class="col-sm-3 control-label">Nomor Rumah</label>
                            <div class="col-sm-9">
                                <input type="text" name="noRumah" value="<?=$data['no_rumah']?>" class="form-control" id="inputEmail3" placeholder="Nomor Rumah" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="Alamat" class="col-sm-3 control-label">Alamat Rumah</label>
                            <div class="col-sm-3">
                                <input type="text" name="Alamat" value="<?=$data['alamat']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Alamat" required>
                            </div>
                        </div>         
                        <div class="form-group">
                            <label for="namaPembeli" class="col-sm-3 control-label">Nama Pembeli</label>
                            <div class="col-sm-9">
                                <input type="text" name="namaPembeli" value="<?=$data['nama_pembeli']?>" class="form-control" id="inputPassword3" placeholder="Inputkan Nama Pembeli" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="noTelp" class="col-sm-3 control-label">Nomor Telephone</label>
                            <div class="col-sm-9">
                                <input type="text" name="noTelp" value="<?=$data['no_telp']?>" class="form-control" id="inputPassword3" placeholder="Inputkan Nomot Telephone" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="tglMasuk" class="col-sm-3 control-label">Tanggal Masuk</label>
                            <div class="col-sm-9">
                                <input type="date" name="tglMasuk" value="<?=$data['tgl_masuk']?>" class="form-control" id="inputPassword3" placeholder="Inputkan Tanggal Masuk" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keterangan" value="<?=$data['keterangan']?>" class="form-control" id="inputPassword3" placeholder="Inputkan Keterangan">
                            </div>
                        </div>
                        

                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-info">
                                    <span class="fa fa-edit"></span> Update Data Pelanggan</button>
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
  $noRumah=$_POST['noRumah'];
  $Alamat=$_POST['Alamat'];
  $namaPembeli=$_POST['namaPembeli'];
  $noTelp=$_POST['noTelp'];
  $tglMasuk=$_POST['tglMasuk'];
  $keterangan=$_POST['keterangan'];
    //buat sql
    $sql="UPDATE perumahan SET no_rumah='$noRumah',alamat='$Alamat',nama_pembeli='$namaPembeli',no_telp='$noTelp',tgl_masuk='$tglMasuk',
	keterangan='$keterangan' WHERE no ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit Complain Error");
    if ($query){
        echo "<script>window.location.assign('?page=arsip&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



