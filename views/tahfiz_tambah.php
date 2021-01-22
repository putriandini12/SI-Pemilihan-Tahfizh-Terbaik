<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title" >Form Tambah Data Calon Tahfiz</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
						 <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Inputkan Nama" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" class="form-control" id="inputEmail3" placeholder="Inputkan Alamat" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir" class="col-sm-3 control-label">Tempat Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" name="tempat_lahir" class="form-control" id="inputEmail3" placeholder="Inputkan Tempat Lahir" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir" class="col-sm-3 control-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="date" name="tgl_lahir" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Lahir" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Nomor Handphone</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_hp"class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Handphone" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="asal_kelas" class="col-sm-3 control-label">Asal Kelas</label>
                            <div class="col-sm-9">
                                <input type="text" name="asal_kelas" class="form-control" id="inputEmail3" placeholder="Inputkan Asal Kelas" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jk" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <select name="jk">
                                    <option> --- Pilih Jenis Kelamin ---</option>
                                    <option value="Laki-Laki"> Laki-Laki</option>
                                    <option value="Perempuan"> Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="wali_kelas" class="col-sm-3 control-label">Wali Kelas</label>
                            <div class="col-sm-9">
                                <input type="text" name="wali_kelas" class="form-control" id="inputEmail3" placeholder="Inputkan Wali Kelas" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=tahfiz&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data calon Tahfiz
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
	$nama=$_POST['nama'];
    $tempat_lahir=$_POST['tempat_lahir'];
	$tgl_lahir=$_POST['tgl_lahir'];
    $no_hp=$_POST['no_hp'];
    $jk=$_POST['jk'];
    $alamat=$_POST['alamat'];
    $asal_kelas=$_POST['asal_kelas'];
    $wali_kelas=$_POST['wali_kelas'];
    
    //buat sql
    $sql="INSERT INTO tbl_tahfiz VALUES ('','$nama','$alamat','$tempat_lahir','$tgl_lahir','$no_hp','$asal_kelas','$jk','$wali_kelas')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=tahfiz&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
