<!-- TAMPILAN HALAMAN Tambahkan Diklat -->
<?php
require_once "./tambah_config.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/187119635b.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <title>Tambah Diklat</title>
    </head>
    <body>
        <main>
            <div class="container">
                <h3 class="py-3 bg-dark text-light rounded float-right">Tambah Diklat</h3>
                <div class="d-flex">
                    <form action="" method="post" class="w-50">
                        <h4 class="pull-left">Informasi Diklat</h4>
                        <div class="row pt-w">
                            <div class="col">
                                <h5>Nama Diklat</h5>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Nama Diklat" name="nama_diklat" autocomplete="off" class="form-control mb-3" id="inlineFormInputGroup">
                            </div>
                        </div>
                        <div class="row pt-w">
                            <div class="col">
                                <h5>Jenis</h5>
                            </div>
                            <div class="col">
                                <!-- <select name="jenis" id="jenis">
                                    <option value="Internal">Internal</option>
                                    <option value="Intership">Internship</option>
                                    <option value="Freelance">Freelance</option>
                                </select> -->
                                <input type="text" placeholder="Internal" name="jenis_diklat" autocomplete="off" class="form-control mb-3" id="inlineFormInputGroup">
                            </div>
                        </div>
                        <div class="row pt-w">
                            <div class="col">
                                <h5>Penyelenggara</h5>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Penyelenggara" name="penyelenggara_diklat" autocomplete="off" class="form-control mb-3" id="inlineFormInputGroup">
                            </div>
                        </div>
                        <div class="row pt-w">
                            <div class="col">
                                <h5>Jumlah Peserta</h5>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Jumlah Peserta" name="jumlah_peserta" autocomplete="off" class="form-control mb-3" id="inlineFormInputGroup">
                            </div>
                        </div>
                        <h4>Waktu dan Tempat</h4>
                        <div class="row pt-w">
                            <div class="col">
                                <h5>Tanggal Diklat</h5>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Tanggal Diklat" name="mulai" autocomplete="off" class="form-control mb-3" id="inlineFormInputGroup">
                            </div>
                        </div>
                        <div class="row pt-w">
                            <div class="col">
                                <h5>Tanggal Selesai</h5>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Tanggal Selesai" name="selesai" autocomplete="off" class="form-control mb-3" id="inlineFormInputGroup">
                            </div>
                        </div>
                        <div class="row pt-w">
                            <div class="col">
                                <h5>Durasi</h5>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Durasi" name="durasi" autocomplete="off" class="form-control mb-3" id="inlineFormInputGroup">
                            </div>
                        </div>
                        <div class="row pt-w">
                            <div class="col">
                                <h5>Lokasi</h5>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Lokasi" name="lokasi" autocomplete="off" class="form-control mb-3" id="inlineFormInputGroup">
                            </div>
                        </div>
                        <div class="row pt-w">
                            <div class="col float-right">
                                <a href="./index.php" class="btn btn-danger">Batal</a>
                            </div>
                            <div class="col float-right">
                                <!-- USE BUTTON -->
                                <button name="create" class="btn btn-success" type="submit">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </body>
</html>