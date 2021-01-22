<div class="container">
    <div class="row">
        <div class ="col-xs-12">

            <div class="alert alert-danger">
                <strong style="color: black; font-weight: bold;">Selamat Datang Di Pemilihan Tahfiz Terbaik</strong>
            </div>
        </div>
    </div>
    <div class="row">
        <!--colomn kedua-->
        <div class="col-sm-9 col-xs-12">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title" style="color: black; font-weight: bold;">Data Tahfiz</h3>
                </div>
                <div class="panel-body panel">
                     <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th width="30%">Nama Lengkap</th>
                                <th>Alamat</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Nomor Handphone</th>
                                <th>Asal Kelas</th>
                                <th>Jenis Kelamin</th>
                                <th>Wali kelas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_tahfiz";
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
                                    <td><?= $data['nama'] ?></td>
                                    <td><?= $data['alamat'] ?></td>
                                    <td><?= $data['tempat_lahir'] ?></td>
                                    <td><?= $data['tgl_lahir'] ?></td>
                                    <td><?= $data['no_hp'] ?></td>
                                    <td><?= $data['asal_kelas'] ?></td>
                                    <td><?= $data['jk'] ?></td>
                                    <td><?= $data['wali_kelas'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
        <!--akhir colomn kedua-->
        <div class="col-sm-3 col-xs-12">
            <!--Jika terjadi login error tampilkan pesan ini-->
            <?php if(isset($_GET['error']) ) {?>
            <div class="alert alert-danger">Maaf! Login Gagal, Coba Lagi..</div>
            <?php }?>

            <?php if (isset($_SESSION['username'])) { ?>
            <div class="alert alert-info">
                <strong>Welcome <?=$_SESSION['nama']?></strong>
            </div>
            <?php
           } else { ?>

            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title" style="color: black; font-weight: bold;">Masuk Ke Sistem</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="proses_login.php" method="post">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="text" name="user" class="form-control input-sm"
                                   placeholder="Username" required="" autocomplete="off"/>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="pwd" name="pwd" class="form-control input-sm"
                                   placeholder="pwd" required="" autocomplete="off"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" name="login" value="login"
                                        class="btn btn-danger btn-block" style="color: black; font-weight: bold;"><span class="fa fa-unlock-alt"></span>
                                    Login Sistem
                                </button>
                            </div>
                    </form>
                </div>
            </div>

        </div>
            <?php } ?>
    </div>
</div>
