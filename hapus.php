<?php
include('koneksi.php');
// sql to delete a record
$sql = "DELETE FROM karyawan WHERE nomor_karyawan=".$_GET['no'];
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>