<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_kriteria WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Edit Data Jurusan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nama_kriteria" class="col-sm-3 control-label">Nama Kriteria</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_kriteria" value="<?=$data['nama_kriteria']?>"class="form-control" id="inputEmail3" placeholder="Nama Kriteria">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nilai" class="col-sm-3 control-label">Nilai</label>
                            <div class="col-sm-9">
                                <input type="text" name="nilai" value="<?=$data['nilai']?>"class="form-control" id="inputEmail3" placeholder="Nilai">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Edit Data Kriteria</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=kriteria&actions=tampil" class="btn btn-danger btn-sm">
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
    $sql="UPDATE tbl_kriteria SET nama_kriteria='$nama_kriteria',nilai='$nilai' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=kriteria&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



