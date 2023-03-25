<?php
include "database.php";
$db = new database();

$aksi = $_GET["aksi"];
if ($aksi == "tambah") {

    $db->inputDataKamar(
        $_POST["no_kamar"],
        $_POST["tipe"],
        $_POST["maks"],
        $_POST["desk"]
    );

    echo "<script language = 'JavaScript'>
        alert('Data Berhasil Disimpan');
        document.location = 'dataKamar.php';
        </script>";
} else if ($aksi == "update") {

    $db->updateDataKamar(
        $_POST["id_kamar"],
        $_POST["no_kamar"],
        $_POST["tipe"],
        $_POST["maks"],
        $_POST["desk"]
    );

    echo "<script language = 'JavaScript'>
        alert('Data Berhasil DiUpdate');
        document.location = 'dataKamar.php';
        </script>";
} else if ($aksi == "delete") {
    $id = $_GET["id"];
    $db->hapusDataKamar($id);
    header('location: dataKamar.php');
} else {
    echo "Database anda eror, silahkan proses kembali lg <a href='dataKamar.php?'>Klik disini</a>";
}
