<?php
include "database.php";
$db = new database();

$aksi = $_GET["aksi"];
if ($aksi == "tambah") {

    $db->inputTipeKamar(
        $_POST["nama_tipe"],
        $_POST["fasilitas"],
        $_POST["harga"],
        $_POST["ket"]
    );

    echo "<script language = 'JavaScript'>
        alert('Data Berhasil Disimpan');
        document.location = 'dataTipeKamar.php';
        </script>";
} else if ($aksi == "update") {

    $db->updateTipeKamar(
        $_POST["id_tipe"],
        $_POST["nama_tipe"],
        $_POST["fasilitas"],
        $_POST["harga"],
        $_POST["ket"]
    );

    echo "<script language = 'JavaScript'>
        alert('Data Berhasil DiUpdate');
        document.location = 'dataTipeKamar.php';
        </script>";
} else if ($aksi == "delete") {
    $id = $_GET["id"];
    $db->hapusTipeKamar($id);
    header('location: dataTipeKamar.php');
} else {
    echo "Database anda eror, silahkan proses kembali lg <a href='dataTipeKamar.php?'>Klik disini</a>";
}
