<!-- navcar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <a class="nav-link active text-white" aria-current="page" href="index.php"><i class="bi bi-house-door"></i> Home</a>
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Buku Tamu
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="dataPengunjung.php">Data Tamu</a></li>
                        <li><a class="dropdown-item" href="formPengunjung.php">Tambah Data</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Kamar
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="dataKamar.php">Lihat Kamar</a></li>
                        <li><a class="dropdown-item" href="formKamar.php">Tambah Kamar</a></li>
                        <li><a class="dropdown-item" href="dataTipeKamar.php">Tipe Kamar</a></li>
                        <li><a class="dropdown-item" href="formTipeKamar.php">Tambah Tipe Kamar</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Reservasi
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="formReservasi.php">Reservasi</a></li>
                        <li><a class="dropdown-item" href="dataReservasi.php">Data Reservasi</a></li>
                    </ul>
                </li>
            </ul>
            <a class="nav-link text-white text-decoration-none" href="#"><i class="bi bi-box-arrow-right"></i> Logout</a>
        </div>
    </div>
</nav>
<!-- akhir navbar -->