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
$data = $db->dataPengunjung();
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


    <?php function UpdateDataPengunjung()
    {
        $db = new database();
        $id = $_GET['id'];
        $row = $db->tampilUpdatePengunjung($id);
    ?>

        <section id="ubahDataPengunjung">
            <div class="container">
                <div class="row text-center">
                    <div class="col">
                        <h2 class="fw-normal mb-4">Ubah Data</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <form method="post" action="<?php echo 'prosesPengunjung.php?aksi=update'; ?>">
                            <div class="mb-3">
                                <label class="form-label">Id Pengunjung</label>
                                <input type="text" name="id_pengunjung" class="form-control" value="<?= $row["id_pengunjung"] ?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" value="<?= $row["nama"] ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <input type="text" name="status" class="form-control" value="<?= $row["status"] ?> ">
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
    function TambahDataPengunjung()
    {

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
                        <form method="post" action="<?php echo 'prosesPengunjung.php?aksi=tambah'; ?>">
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <input type="text" name="status" class="form-control" placeholder="Masukkan Status Pengunjung">
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
        UpdateDataPengunjung();
    } else {
        TambahDataPengunjung();
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>