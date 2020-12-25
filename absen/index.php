<!-- MAIN WEB PAGE + FUNCTION:
    tambah.php  : Adding record      (CREATE)
    hapus.php   : Deleting record    (DELETE)
    edit.php    : Updating record    (UPDATE)
    index.php   : List all record    (READ)
-->
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
        <title>Daftar Diklat</title>
    </head>
    <body>
        <main>
            <div class="container text-center">
                <h3 class="py-3 bg-dark text-light rounded">Daftar Diklat</h3>
                <div class="d-flex">
                    <form action="" method="post" class="w-50">
                        <div class="row pt-2">
                            <div class="col">
                                <!-- ADDING NEW RECORD-->
                                <a href="tambah.php" class="btn btn-primary mb-3">Tambahkan Diklat</a>
                            </div>
                            <div class="col">
                                <input type="text" id="cari" placeholder="Search" autocomplete="off" class="form-control" id="inlineFormInputGroup">
                            </div>
                        </div>
                    </form>
                </div>

                <!-- TABLE -->
                <div class="d-flex table-data justify-content-center">
                    <?php
                    $sql = "SELECT * FROM Diklat;";
                    if ($result = mysqli_query($GLOBALS['link'], $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            echo "<table class='table table-striped table-dark'>";
                            echo "<thead>";
                            echo "<tr>";
                            echo " <th>No</th>";
                            echo "<th>Nama Diklat</th>";
                            echo "<th>Jenis</th>";
                            echo "<th>Penyelenggara</th>";
                            echo "<th>Jumlah Peserta</th>";
                            echo "<th>Tanggal Mulai</th>";
                            echo "<th>Tanggal Berakhir</th>";
                            echo "<th>Durasi</th>";
                            echo "<th>Tempat</th>";
                            echo "<th>Edit</th>";
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['nama'] . "</td>";
                                echo "<td>" . $row['jenis'] . "</td>";
                                echo "<td>" . $row['penyelenggara'] . "</td>";
                                echo "<td>" . $row['jumlahPeserta'] . "</td>";
                                echo "<td>" . $row['tanggalMulai'] . "</td>";
                                echo "<td>" . $row['tanggalSelesai'] . "</td>";
                                echo "<td>" . $row['durasi'] . "</td>";
                                echo "<td>" . $row['tempat'] . "</td>";
                                echo "<td>";
                                echo "<a href=\"./edit.php?id=$row[id]\" class='btn btn-warning'>Edit</a>";
                                echo "<a href=\"./hapus.php?id=$row[id]\" class='btn btn-danger' onClick=\"return confirm('Apakah kamu yakin ingin menghapus data ini?')\">Hapus</a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";
                            echo "</table>";
                            mysqli_free_result($result);
                        } else {
                            echo "<p class='lead'><strong>NO DATA FOUND!</strong></p>";
                        }
                    } else {
                        echo "ERROR: While receiving data from database! " . mysqli_error($link);
                    }
                    mysqli_close($link);
                    ?>
                </div>
            </div>
        </main>
    </body>
</html>