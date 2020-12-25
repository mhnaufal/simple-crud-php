<!-- OPERASI MENAMBAHKAN DIKLAT -->
<?php
require_once "./database/init.php";

//LINKING THE DATABASE FOR OPERATION
$link = CreateDB();

//CHECK WHETHER 'Simpan' CLICKED
if (isset($_POST['create'])) {
    CreateData();
}

//INSERT DATA FROM FORM INTO THE DATA BASE
function CreateData()
{
    $nama = mysqli_real_escape_string($GLOBALS['link'], trim($_POST['nama_diklat']));
    $jenis = mysqli_real_escape_string($GLOBALS['link'], trim($_POST['jenis_diklat']));
    $jalan = mysqli_real_escape_string($GLOBALS['link'], trim($_POST['penyelenggara_diklat']));
    $jumlah = (int)mysqli_real_escape_string($GLOBALS['link'], trim($_POST['jumlah_peserta']));
    $mulai = (int)mysqli_real_escape_string($GLOBALS['link'], trim($_POST['mulai']));
    $selesai = mysqli_real_escape_string($GLOBALS['link'], trim($_POST['selesai']));
    $durasi = (int)mysqli_real_escape_string($GLOBALS['link'], trim($_POST['durasi']));
    $lokasi = mysqli_real_escape_string($GLOBALS['link'], trim($_POST['lokasi']));

    if ($nama && $jenis && $jalan && $jumlah && $mulai && $selesai && $durasi && $lokasi) {
       //QUERY
       $sql = "INSERT INTO Diklat 
                (nama, jenis, penyelenggara,
                jumlahPeserta, tanggalMulai, tanggalSelesai,
                durasi, tempat)
                VALUES 
                ('$nama', '$jenis', '$jalan',
                '$jumlah', '$mulai', '$selesai',
                '$durasi', '$lokasi');";
        if (mysqli_query($GLOBALS['link'], $sql)) {
            echo "Data inserted succesfully!";
            return header("location:index.php");
        } else {
            echo "ERROR: While inserting data! " . mysqli_error($GLOBALS['link']);
        }
    } else {
        echo "ERROR: Enter the form correctly!";
    }
}
?>