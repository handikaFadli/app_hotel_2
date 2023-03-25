<?php
include "database.php";
$db = new database();

$aksi = $_GET["aksi"];
if ($aksi == "tambah") {

    $db->inputPengunjung(
        $_POST["nama"],
        $_POST["status"]
    );

    echo "<script language = 'JavaScript'>
        alert('Data Berhasil Disimpan');
        document.location = 'dataPengunjung.php';
        </script>";
} else if ($aksi == "update") {

    $db->updatePengunjung(
        $_POST["id_pengunjung"],
        $_POST["nama"],
        $_POST["status"]
    );

    echo "<script language = 'JavaScript'>
        alert('Data Berhasil DiUpdate');
        document.location = 'dataPengunjung.php';
        </script>";
} else if ($aksi == "delete") {
    $id = $_GET["id"];
    $db->hapusDataPengunjung($id);
    header('location: dataPengunjung.php');
} else {
    echo "Database anda eror, silahkan proses kembali lg <a href='dataPengunjung.php?'>Klik disini</a>";
}
