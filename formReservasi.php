<?php
class home
{
    function __construct()
    {
        include "menu.php";
    }
}
$halUtama = new home;
include "database.php";
$db = new database();
$data = $db->dataReservasi();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hotel Prima Cirebon - 20210120064</title>
</head>
<style>
    h2 {
        margin-top: 70px;
    }
</style>

<body>

    <!-- content -->

    <?php function UpdateDataReservasi()
    {
        $db = new database();
        $dataTipeKamar = $db->dataTipeKamar();
        $id = $_GET['id'];
        $row = $db->tampilUpdateReservasi($id);
    ?>

        <section id="ubahDataReservasi">
            <div class="container">
                <div class="row text-center">
                    <div class="col">
                        <h2 class="fw-normal mb-4">Ubah Data</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <form method="post" action="<?php echo 'prosesReservasi.php?aksi=update'; ?>" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label class="form-label">Id Reservasi</label>
                                <input type="text" name="id_reservasi" class="form-control" value="<?= $row["id_reservasi"] ?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nomor KTP</label>
                                <input type="text" name="no_ktp" class="form-control" value="<?= $row["no_ktp"] ?> ">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" value="<?= $row["nama"] ?> ">
                            </div>

                            <div class=" mb-3">
                                <label class="form-label">TTL</label>
                                <input type="date" name="ttl" class="form-control" value="<?= $row["ttl"] ?>">
                            </div>

                            <div class=" mb-3">
                                <label class="form-label">Alamat</label>
                                <textarea class="form-control" name="alamat" rows="3"><?= $row["alamat"] ?></textarea>
                            </div>

                            <div class=" mb-3">
                                <label class="form-label">Nomor Handphone</label>
                                <input type="text" name="no_hp" class="form-control" value="<?= $row["no_hp"] ?>">
                            </div>

                            <div class=" mb-3">
                                <label class="form-label">Email</label>
                                <input type="text" name="email" class="form-control" value="<?= $row["email"] ?>">
                            </div>

                            <div class=" mb-3">
                                <label class="form-label">Check In</label>
                                <input type="date" name="check_in" class="form-control" value="<?= $row["check_in"] ?>">
                            </div>

                            <div class=" mb-3">
                                <label class="form-label">Check Out</label>
                                <input type="date" name="check_out" class="form-control" value="<?= $row["check_out"] ?>">
                            </div>

                            <div class=" mb-3">
                                <label class="form-label">Jumlah Hari</label>
                                <input type="number" name="jumlah_hari" class="form-control" value="<?= $row["jumlah_hari"] ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Kamar</label>
                                <select name="kamar" class="form-control">
                                    <option value="<?= $row["kamar"] ?>"><?= $row["kamar"] ?></option>
                                    <?php
                                    foreach ($dataTipeKamar as $data) {
                                    ?>
                                        <option value=" <?= "$data[nama_tipe]" ?>"><?= "$data[nama_tipe]" ?></option>
                                    <?php
                                    } ?>
                                </select>
                            </div>

                            <div class=" mb-3">
                                <label class="form-label">Jumlah Kamar</label>
                                <input type="number" name="jumlah_kamar" class="form-control" value="<?= $row["jumlah_kamar"] ?>">
                            </div>


                            <div class="mb-3">
                                <input type="submit" name="ubah" class="btn btn-success" value="Update Data">
                                <a href="index.php" class="btn btn-primary">kembali</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#e2edff" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,181.3C384,203,480,213,576,208C672,203,768,181,864,181.3C960,181,1056,203,1152,218.7C1248,235,1344,245,1392,250.7L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </section>

    <?php }
    function TambahDataReservasi()
    {
        $db = new database();
        $dataTipeKamar = $db->dataTipeKamar();
    ?>

        <section id="tambahDataReservasi">
            <div class="container">
                <div class="row text-center">
                    <div class="col">
                        <h2 class="fw-normal mb-4">Reservasi</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <form method="post" action="<?php echo 'prosesReservasi.php?aksi=tambah'; ?>" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label class="form-label">Nomor KTP</label>
                                <input type="text" name="no_ktp" class="form-control" placeholder="Masukkan Nomor KTP">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">TTL</label>
                                <input type="date" name="ttl" class="form-control" placeholder="Masukkan Tempat Tanggal Lahir">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Alamat</label>
                                <textarea class="form-control" name="alamat" rows="3" placeholder="Masukkan Alamat"></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Nomor Handphone</label>
                                <input type="text" name="no_hp" class="form-control" placeholder="Masukkan Nomor Handphone">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">email</label>
                                <input type="text" name="email" class="form-control" placeholder="Masukkan Email">
                            </div>

                            <div class=" mb-3">
                                <label class="form-label">Check In</label>
                                <input type="date" name="check_in" class="form-control">
                            </div>

                            <div class=" mb-3">
                                <label class="form-label">Check Out</label>
                                <input type="date" name="check_out" class="form-control">
                            </div>

                            <div class=" mb-3">
                                <label class="form-label">Jumlah Hari</label>
                                <input type="number" name="jumlah_hari" class="form-control" placeholder="Masukkan Jumlah Hari Menginap">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Kamar</label>
                                <select name="kamar" class="form-control">
                                    <?php
                                    foreach ($dataTipeKamar as $data) {
                                    ?>
                                        <option value="<?= $data["nama_tipe"]; ?>"><?= $data["nama_tipe"]; ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class=" mb-3">
                                <label class="form-label">Jumlah Kamar</label>
                                <input type="number" name="jumlah_kamar" class="form-control" placeholder="Masukkan Jumlah Kamar">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Pass Foto</label>
                                <input type="file" name="foto" class="form-control">
                            </div>

                            <div class="mb-3">
                                <input type="submit" name="simpan" class="btn btn-success" value="Simpan Data">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#e2edff" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,181.3C384,203,480,213,576,208C672,203,768,181,864,181.3C960,181,1056,203,1152,218.7C1248,235,1344,245,1392,250.7L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </section>
    <?php } ?>

    <?php
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    $edit = $_GET['edit'];
    if ($edit == "update") {
        UpdateDataReservasi();
    } else {
        TambahDataReservasi();
    }
    ?>

    <!-- akhir content -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>