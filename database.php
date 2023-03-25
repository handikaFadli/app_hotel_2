<?php
class database
{
    var $host = "localhost";
    var $user = "root";
    var $pas = "";
    var $db = "hotel2";
    var $koneksi = "";

    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->user, $this->pas, $this->db);
    }

    //---------------------------Reservasi---------------------------

    function dataReservasi()
    {
        $data = mysqli_query($this->koneksi, "SELECT * FROM reservasi");
        while ($row = mysqli_fetch_array($data)) {
            $hasil[] = $row;
        }
        return $hasil;
    }

    function inputDataReservasi($no_ktp, $nama, $ttl, $alamat, $no_hp, $email, $check_in, $check_out, $jumlah_hari, $kamar, $jumlah_kamar, $foto)
    {
        mysqli_query($this->koneksi, "INSERT INTO reservasi VALUES (' ','$no_ktp', '$nama', '$ttl', '$alamat', '$no_hp', '$email', '$check_in', '$check_out', '$jumlah_hari', '$kamar', '$jumlah_kamar', '$foto')");
    }

    function tampilUpdateReservasi($id_reservasi)
    {
        $query = mysqli_query($this->koneksi, "SELECT * FROM reservasi WHERE id_reservasi = '$id_reservasi'");
        return $query->fetch_array();
    }

    function updateReservasi($id_reservasi, $no_ktp, $nama, $ttl, $alamat, $no_hp, $email, $check_in, $check_out, $jumlah_hari, $kamar, $jumlah_kamar)
    {
        $query = mysqli_query($this->koneksi, "UPDATE reservasi SET no_ktp='$no_ktp', nama='$nama', ttl='$ttl', alamat='$alamat', no_hp='$no_hp', email='$email', check_in='$check_in', check_out='$check_out', jumlah_hari='$jumlah_hari', kamar='$kamar', jumlah_kamar='$jumlah_kamar' WHERE id_reservasi='$id_reservasi'");
    }

    function hapusDataReservasi($id_reservasi)
    {
        $dok = mysqli_query($this->koneksi, "SELECT * FROM reservasi WHERE id_reservasi = '$id_reservasi'");
        $dataFile = $dok->fetch_array();
        unlink('img/' . $dataFile["foto"]);

        $query = mysqli_query($this->koneksi, "DELETE FROM reservasi WHERE id_reservasi = '$id_reservasi'");
    }

    //---------------------------Kamar---------------------------

    function dataKamar()
    {
        $data = mysqli_query($this->koneksi, "SELECT * FROM kamar");
        while ($row = mysqli_fetch_array($data)) {
            $hasil[] = $row;
        }
        return $hasil;
    }

    function inputDataKamar($no_kamar, $tipe, $maks, $desk)
    {
        mysqli_query($this->koneksi, "INSERT INTO kamar VALUES (' ','$no_kamar', '$tipe', '$maks', '$desk')");
    }

    function tampilUpdateKamar($id_kamar)
    {
        $query = mysqli_query($this->koneksi, "SELECT * FROM kamar WHERE id_kamar = '$id_kamar'");
        return $query->fetch_array();
    }

    function updateDataKamar($id_kamar, $no_kamar, $tipe, $maks, $desk)
    {
        $query = mysqli_query($this->koneksi, "UPDATE kamar SET no_kamar='$no_kamar', tipe='$tipe', maks='$maks', desk='$desk' WHERE id_kamar='$id_kamar'");
    }

    function hapusDataKamar($id_kamar)
    {
        $dok = mysqli_query($this->koneksi, "SELECT * FROM kamar WHERE id_kamar = '$id_kamar'");
        $dataFile = $dok->fetch_array();
        unlink('img/' . $dataFile["foto"]);

        $query = mysqli_query($this->koneksi, "DELETE FROM kamar WHERE id_kamar = '$id_kamar'");
    }

    //---------------------------Tipe Kamar---------------------------

    function dataTipeKamar()
    {
        $data = mysqli_query($this->koneksi, "SELECT * FROM tipe_kamar");
        while ($row = mysqli_fetch_array($data)) {
            $hasil[] = $row;
        }
        return $hasil;
    }

    function inputTipeKamar($nama_tipe, $fasilitas, $harga, $ket)
    {
        mysqli_query($this->koneksi, "INSERT INTO tipe_kamar VALUES (' ','$nama_tipe', '$fasilitas', '$harga', '$ket')");
    }

    function tampilUpdateTipeKamar($id_tipe)
    {
        $query = mysqli_query($this->koneksi, "SELECT * FROM tipe_kamar WHERE id_tipe = '$id_tipe'");
        return $query->fetch_array();
    }

    function updateTipeKamar($id_tipe, $nama_tipe, $fasilitas, $harga, $ket)
    {
        $query = mysqli_query($this->koneksi, "UPDATE tipe_kamar SET nama_tipe='$nama_tipe', fasilitas='$fasilitas', harga='$harga', ket='$ket' WHERE id_tipe='$id_tipe'");
    }

    function hapusTipeKamar($id_tipe)
    {
        $dok = mysqli_query($this->koneksi, "SELECT * FROM tipe_kamar WHERE id_tipe = '$id_tipe'");
        $dataFile = $dok->fetch_array();
        unlink('img/' . $dataFile["foto"]);

        $query = mysqli_query($this->koneksi, "DELETE FROM tipe_kamar WHERE id_tipe = '$id_tipe'");
    }

    //---------------------------Pengunjung---------------------------

    function dataPengunjung()
    {
        $data = mysqli_query($this->koneksi, "SELECT * FROM pengunjung");
        while ($row = mysqli_fetch_array($data)) {
            $hasil[] = $row;
        }
        return $hasil;
    }

    function inputPengunjung($nama, $status)
    {
        mysqli_query($this->koneksi, "INSERT INTO pengunjung VALUES (' ','$nama' ,'$status')");
    }

    function tampilUpdatePengunjung($id_pengunjung)
    {
        $query = mysqli_query($this->koneksi, "SELECT * FROM pengunjung WHERE id_pengunjung = '$id_pengunjung'");
        return $query->fetch_array();
    }

    function updatePengunjung($id_pengunjung, $nama, $status)
    {
        $query = mysqli_query($this->koneksi, "UPDATE pengunjung SET nama='$nama', status='$status' WHERE id_pengunjung='$id_pengunjung'");
    }

    function hapusDataPengunjung($id_pengunjung)
    {
        $query = mysqli_query($this->koneksi, "DELETE FROM pengunjung WHERE id_pengunjung = '$id_pengunjung'");
    }
}
