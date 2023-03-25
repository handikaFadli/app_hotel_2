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
$data = $db->dataKamar();
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

    <?php function UpdateDataKamar()
    {
        $db = new database();
        $dataTipeKamar = $db->dataTipeKamar();
        $id = $_GET['id'];
        $row = $db->tampilUpdateKamar($id);
    ?>

        <section id="ubahDataKamar">
            <div class="container">
                <div class="row text-center">
                    <div class="col">
                        <h2 class="fw-normal mb-4">Ubah Data</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <form method="post" action="<?php echo 'prosesKamar.php?aksi=update'; ?>" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label class="form-label">Id Kamar</label>
                                <input type="text" name="id_kamar" class="form-control" value="<?= $row["id_kamar"] ?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nomor Kamar</label>
                                <input type="text" name="no_kamar" class="form-control" value="<?= $row["no_kamar"] ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tipe Kamar</label>
                                <select name="tipe" class="form-control">
                                    <option value="<?= $row["tipe"] ?>"><?= $row["tipe"] ?></option>
                                    <?php
                                    foreach ($dataTipeKamar as $data) {
                                    ?>
                                        <option value=" <?= "$data[nama_tipe]" ?>"><?= "$data[nama_tipe]" ?></option>
                                    <?php
                                    } ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Maksimal Orang</label>
                                <input type="text" name="maks" class="form-control" value="<?= $row["maks"] ?> ">
                            </div>

                            <div class=" mb-3">
                                <label class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="desk" rows="3"><?= $row["desk"] ?></textarea>
                            </div>

                            <div class="mb-3">
                                <input type="submit" name="simpan" class="btn btn-success" value="Update Data">
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
    function TambahDataKamar()
    {
        $db = new database();
        $dataTipeKamar = $db->dataTipeKamar();

    ?>

        <section id="tambahDataKamar">
            <div class="container">
                <div class="row text-center">
                    <div class="col">
                        <h2 class="fw-normal mb-4">Tambah Data</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <form method="post" action="<?php echo 'prosesKamar.php?aksi=tambah'; ?>" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label class="form-label">Nomor Kamar</label>
                                <input type="text" name="no_kamar" class="form-control" placeholder="Masukkan Nomor Kamar">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Tipe Kamar</label>
                                <select name="tipe" class="form-control">
                                    <?php
                                    foreach ($dataTipeKamar as $data) {
                                    ?>
                                        <option value="<?= $data["nama_tipe"]; ?>"><?= $data["nama_tipe"]; ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Maksimal Orang</label>
                                <input type="text" name="maks" class="form-control" placeholder="Masukkan Maksimal Orang">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="desk" rows="3" placeholder="Masukkan Deskripsi"></textarea>
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
        UpdateDataKamar();
    } else {
        TambahDataKamar();
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>