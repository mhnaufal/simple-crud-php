<!-- OPERASI MENGHAPUS RECORD -->
<?php
require_once "./database/init.php";

//LINKING THE DATABASE FOR OPERATION
$link = CreateDB();

//RECEIVE THE ID FROM index.php
$id = $_GET['id'];

//QUERY
$sql = "DELETE FROM Diklat WHERE id=$id;";

if (mysqli_query($GLOBALS['link'], $sql)) {
    echo "Successfully deleted data!";
    mysqli_close($link);
    header("location:index.php");
} else {
    echo "ERROR: Can't delete data permission denied!";
}
?>