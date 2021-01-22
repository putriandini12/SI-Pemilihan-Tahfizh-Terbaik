<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_tahfiz WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Edit Data Siswa</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
						<div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama']?>"class="form-control" id="inputEmail3" placeholder="Nama Lengkap">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['alamat']?>"class="form-control" id="inputEmail3" placeholder="Alamat">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir" class="col-sm-3 control-label">Tempat Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" name="tempat_lahir" value="<?=$data['tempat_lahir']?>"class="form-control" id="inputEmail3" placeholder="Tempat Lahir">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir" class="col-sm-3 control-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="date" name="tgl_lahir" value="<?=$data['tgl_lahir']?>"class="form-control" id="inputEmail3" placeholder="Tanggal Lahir">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">No. Handphone</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_hp" value="<?=$data['no_hp']?>"class="form-control" id="inputEmail3" placeholder="Nomor Handphone" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="asal_kelas" class="col-sm-3 control-label">Asal Kelas</label>
                            <div class="col-sm-9">
                                <input type="text" name="asal_kelas" value="<?=$data['asal_kelas']?>"class="form-control" id="inputEmail3" placeholder="Asal Kelas">
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
                                <input type="text" name="wali_kelas" value="<?=$data['wali_kelas']?>"class="form-control" id="inputEmail3" placeholder="Wali Kelas">
                            </div>
                        </div>

                        <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        
                        <!--end tanggal lahir-->           

                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Edit Data Siswa</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=tahfiz&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Calon Tahfiz
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
    $sql="UPDATE tbl_tahfiz SET nama='$nama',tempat_lahir='$tempat_lahir',tgl_lahir='$tgl_lahir',no_hp='$no_hp',jk='$jk',alamat='$alamat',asal_kelas='$asal_kelas',wali_kelas='$wali_kelas' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=tahfiz&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



