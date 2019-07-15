<?php
// ini untuk nambah data ke database
include('koneksi.php');
$sql = "INSERT INTO karyawan (nomor_karyawan, nama, alamat, jenis_kelamin)
VALUES ('".$_POST['no_karyawan']."', '".$_POST['nama']."', '".$_POST['alamat']."', '".$_POST['jenis_kelamin']."')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>