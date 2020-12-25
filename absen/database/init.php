<!-- INISIALISASI DATABASE + MENYAMBUNGKAN WEB DENGAN DATABASE-->

<?php
function CreateDB()
{
    $SERVER = "localhost";
    $USERNAME = "root";
    $PASSWORD = "";
    $DBNAME = "hris";

    //INITIATE THE CONNECTION
    $link = mysqli_connect($SERVER, $USERNAME, $PASSWORD);

    //CHECKING CONNECTION
    if ($link === false) {
        die("ERROR: Database could not created" . mysqli_connect_error());
    }

    //CREATE THE DATABASE
    $sql = "CREATE DATABASE IF NOT EXISTS $DBNAME;";

    //RUN THE QUERY USING mysqli_query(database,query)
    if (mysqli_query($link, $sql)) {
        $link = mysqli_connect($SERVER, $USERNAME, $PASSWORD, $DBNAME);
        $sql = "    CREATE TABLE IF NOT EXISTS `Diklat`(
                    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                    `nama` varchar(255) DEFAULT NULL,
                    `jenis` varchar(255) NOT NULL,
                    `penyelenggara` varchar(255) NOT NULL,
                    `jumlahPeserta` int(11) NOT NULL,
                    `tanggalMulai` datetime NOT NULL,
                    `tanggalSelesai` datetime NOT NULL,
                    `waktuMulai` varchar(255) NOT NULL,
                    `waktuSelesai` varchar(255) NOT NULL,
                    `durasi` int(11) NOT NULL,
                    `tempat` varchar(255) NOT NULL,
                    `sertifikat` tinyint(1) NOT NULL,
                    `biaya` int(11) NOT NULL,
                    `kadaluarsaSertifikat` datetime DEFAULT NULL,
                    `deskripsi` varchar(255) NOT NULL,
                    `createdAt` datetime NOT NULL,
                    `createdBy` int(11) NOT NULL,
                    `updatedAt` datetime NOT NULL,
                    `updatedBy` int(11) NOT NULL,
                    `deletedAt` datetime DEFAULT NULL,
                    `deletedBy` int(11) DEFAULT NULL,
                    `statusKadaluarsaSertifikat` int(255) DEFAULT NULL
                    ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
                ";
        if (mysqli_query($link, $sql)) {
            return $link;
        } else {
            echo "ERROR: While creating 'Diklat' table!" . mysqli_error($link);
        }
    } else {
        echo "ERROR: While creating 'hris' database!" . mysqli_error($link);
    }
    mysqli_close($link);
}
?>