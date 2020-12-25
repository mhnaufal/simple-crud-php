<!-- TAMPILAN HALAMAN Tambahkan Diklat -->
<?php
require_once "./database/init.php";

//LINKING THE DATABASE FOR OPERATION
$link = CreateDB();

/***EDIT THE DATA ***/
//CHECK WHETHER 'Update' BUTTON CLICKED
if (isset($_POST['update'])) {
    $id = mysqli_real_escape_string($GLOBALS['link'], trim($_POST['id']));
    $nama = mysqli_real_escape_string($GLOBALS['link'], trim($_POST['nama_diklat']));
    $jenis = mysqli_real_escape_string($GLOBALS['link'], trim($_POST['jenis_diklat']));
    $jalan = mysqli_real_escape_string($GLOBALS['link'], trim($_POST['penyelenggara_diklat']));
    $jumlah = (int)mysqli_real_escape_string($GLOBALS['link'], trim($_POST['jumlah_peserta']));
    $mulai = (int)mysqli_real_escape_string($GLOBALS['link'], trim($_POST['mulai']));
    $selesai = mysqli_real_escape_string($GLOBALS['link'], trim($_POST['selesai']));
    $durasi = (int)mysqli_real_escape_string($GLOBALS['link'], trim($_POST['durasi']));
    $lokasi = mysqli_real_escape_string($GLOBALS['link'], trim($_POST['lokasi']));

    if ($nama || $jenis || $jalan || $jumlah || $mulai || $selesai || $durasi || $lokasi) {
        //QUERY
        $sql = "UPDATE Diklat SET 
                nama='$nama', 
                jenis='$jenis', 
                penyelenggara='$jalan',
                jumlahPeserta='$jumlah', 
                tanggalMulai='$mulai', 
                tanggalSelesai='$selesai', 
                durasi='$durasi', 
                tempat='$lokasi'
                WHERE id=$id;";
        if (mysqli_query($GLOBALS['link'], $sql)) {
            echo "Data updated successfully!";
            header("location:./index.php");
        } else {
            echo "ERROR: Can't update data!";
        }
        mysqli_close($link);
    } else {
        echo "ERROR: Table not responding!";
    }
}

/***UPDATE THE LIST VIEW (READ)***/
$id = $_GET['id'];
$sql = "SELECT * FROM Diklat WHERE id=$id";
$con = mysqli_query($GLOBALS['link'], $sql);

if ($con) {
    while ($result = mysqli_fetch_array($con)) {
        $nama = $result['nama'];
        $jenis = $result['jenis'];
        $penyelenggara = $result['penyelenggara'];
        $jumlah = $result['jumlahPeserta'];
        $mulai = $result['tanggalMulai'];
        $selesai = $result['tanggalSelesai'];
        $durasi = $result['durasi'];
        $lokasi = $result['tempat'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/187119635b.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <title>Edit Diklat</title>
    </head>
    <body>
        <main>
            <div class="container">
                <h3 class="py-3 bg-dark text-light rounded float-right">Edit Diklat</h3>
                <div class="d-flex">
                    <form action="" method="post" class="w-50">
                        <h4 class="pull-left">Informasi Diklat</h4>
                        <div class="row pt-w">
                            <div class="col">
                                <h5>Nama Diklat</h5>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Nama Diklat" name="nama_diklat" value="<?php echo $nama; ?>" autocomplete="off" class="form-control mb-3" id="inlineFormInputGroup">
                            </div>
                        </div>
                        <div class="row pt-w">
                            <div class="col">
                                <h5>Jenis</h5>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Internal" name="jenis_diklat" value="<?php echo $jenis; ?>" autocomplete="off" class="form-control mb-3" id="inlineFormInputGroup">
                            </div>
                        </div>
                        <div class="row pt-w">
                            <div class="col">
                                <h5>Penyelenggara</h5>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Penyelenggara" name="penyelenggara_diklat" value="<?php echo $penyelenggara; ?>" autocomplete="off" class="form-control mb-3" id="inlineFormInputGroup">
                            </div>
                        </div>
                        <div class="row pt-w">
                            <div class="col">
                                <h5>Jumlah Peserta</h5>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Jumlah Peserta" name="jumlah_peserta" value="<?php echo $jumlah; ?>" autocomplete="off" class="form-control mb-3" id="inlineFormInputGroup">
                            </div>
                        </div>

                        <h4>Waktu dan Tempat</h4>
                        <div class="row pt-w">
                            <div class="col">
                                <h5>Tanggal Diklat</h5>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Tanggal Diklat" name="mulai" value="<?php echo $mulai; ?>" autocomplete="off" class="form-control mb-3" id="inlineFormInputGroup">
                            </div>
                        </div>
                        <div class="row pt-w">
                            <div class="col">
                                <h5>Tanggal Selesai</h5>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Tanggal Selesai" name="selesai" value="<?php echo $selesai; ?>" autocomplete="off" class="form-control mb-3" id="inlineFormInputGroup">
                            </div>
                        </div>
                        <div class="row pt-w">
                            <div class="col">
                                <h5>Durasi</h5>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Durasi" name="durasi" value="<?php echo $durasi; ?>" autocomplete="off" class="form-control mb-3" id="inlineFormInputGroup">
                            </div>
                        </div>
                        <div class="row pt-w">
                            <div class="col">
                                <h5>Lokasi</h5>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Lokasi" name="lokasi" value="<?php echo $lokasi; ?>" autocomplete="off" class="form-control mb-3" id="inlineFormInputGroup">
                            </div>
                        </div>
                        <div class="row pt-w">
                            <div class="col float-right">
                                <a href="./index.php" class="btn btn-danger">Batal</a>
                            </div>
                            <div class="col float-right">
                                <tr>
                                    <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?> readonly></td>
                                    <td><input type="submit" name="update" value="Update" class="btn btn-success"></td>
                                </tr>
                                <!-- <button name="update" class="btn btn-success" type="submit">Simpan</button> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </body>
</html>