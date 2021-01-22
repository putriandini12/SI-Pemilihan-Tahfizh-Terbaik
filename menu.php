<!-- Fixed navbar -->
<nav class="navbar bg-danger navbar-fixed-top">

    <div class="container">
        <div class="navbar-header">
            <button type="button"  class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand " style="color: black; font-weight: bold;"  href="?page=utama">Sistem Informasi Pemilihan Tahfiz Terbaik</a>
        </div>
        <div id="navbar"  class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li ><a   style="color: black; font-weight: bold;"  href="?page=utama">Home</a></li>

                <?php if(isset($_SESSION['level']) && $_SESSION['level']==1) { ?>
                <li class="dropdown text-secondary">
                    <a style="color: black; font-weight: bold;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Master Data <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a style="color: black; font-weight: bold;" href="?page=tahfiz&actions=tampil">Data Calon Tahfiz</a></li>
                        <li><a style="color: black; font-weight: bold;" href="?page=kriteria&actions=tampil">Data Kriteria</a></li>
                    </ul>
                    
                    <?php } ?>
                    <?php if(isset($_SESSION['level']) && $_SESSION['level']==2) { ?>
                </li><li class="dropdown">
                    <a style="color: black; font-weight: bold;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Report <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a style="color: black; font-weight: bold;" href="?page=tahfiz&actions=report">Laporan Data Calon Tahfiz</a></li>
                        <li><a style="color: black; font-weight: bold;" href="?page=kriteria&actions=report">Laporan Data Kriteria</a></li>
                    </ul>
                </li>


                <li><a style="color: black; font-weight: bold;" href="?page=user&actions=tampil">User</a></li>
                <?php } ?>
                <li><a style="color: black; font-weight: bold;" href="?page=about&actions=tampil">About</a></li>
                <li><a style="color: black; font-weight: bold;" href="?page=kontak&actions=tampil">Contact</a></li>

                    <?php if (isset($_SESSION['username'])) { ?>
                    <li><a style="color: black; font-weight: bold;" href="logout.php">Logout</a></li>
                <?php } ?>

            </ul>
        </div>
    </div>
</nav>
