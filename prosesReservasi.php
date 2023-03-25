<?php
include "database.php";
$db = new database();

$aksi = $_GET["aksi"];
if ($aksi == "tambah") {

    $foto = $_FILES["foto"]["name"];
    $file_tmp = $_FILES["foto"]["tmp_name"];
    $rand = rand(1, 9999);
    $foto_baru = $rand . " " . $foto;
    $folder = "img/";

    move_uploaded_file($file_tmp, $folder . $foto_baru);

    $db->inputDataReservasi(
        $_POST["no_ktp"],
        $_POST["nama"],
        $_POST["ttl"],
        $_POST["alamat"],
        $_POST["no_hp"],
        $_POST["email"],
        $_POST["check_in"],
        $_POST["check_out"],
        $_POST["jumlah_hari"],
        $_POST["kamar"],
        $_POST["jumlah_kamar"],
        $foto_baru
    );

    echo "<script language = 'JavaScript'>
        alert('Data Berhasil Disimpan');
        document.location = 'dataReservasi.php';
        </script>";
} else if ($aksi == "update") {

    $db->updateReservasi(
        $_POST["id_reservasi"],
        $_POST["no_ktp"],
        $_POST["nama"],
        $_POST["ttl"],
        $_POST["alamat"],
        $_POST["no_hp"],
        $_POST["email"],
        $_POST["check_in"],
        $_POST["check_out"],
        $_POST["jumlah_hari"],
        $_POST["kamar"],
        $_POST["jumlah_kamar"]
    );

    echo "<script language = 'JavaScript'>
        alert('Data Berhasil DiUpdate');
        document.location = 'dataReservasi.php';
        </script>";
} else if ($aksi == "delete") {
    $id = $_GET["id"];
    $db->hapusDataReservasi($id);
    header('location: dataReservasi.php');
} else {
    echo "Database anda eror, silahkan proses kembali lg <a href='dataReservasi.php?'>Klik disini</a>";
}
