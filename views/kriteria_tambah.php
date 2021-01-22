<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Kriteria</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
						 <div class="form-group">
                            <label for="nama_kriteria" class="col-sm-3 control-label">Nama Kriteria</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_kriteria" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Kriteria" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="nilai" class="col-sm-3 control-label">Nilai</label>
                            <div class="col-sm-9">
                                <input type="text" name="nilai" class="form-control" id="inputEmail3" placeholder="Inputkan Nilai" required>
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
                    <a href="?page=jurusan&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Kriteria
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
	$nama_kriteria=$_POST['nama_kriteria'];
	$nilai=$_POST['nilai'];
    //buat sql
    $sql="INSERT INTO tbl_kriteria VALUES ('','$nama_kriteria','$nilai')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=kriteria&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
