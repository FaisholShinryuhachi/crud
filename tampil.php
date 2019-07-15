<html>
    <head>
        <title>Tabel Karyawan</title>
        <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <table class="table table-striped">
                <thead>
                 <tr>
                     <th>No</th>
                     <th>Nama</th>
                     <th>Alamat</th>
                     <th>Jenis Kelamin</th>
                 </tr>   
                </thead>
                <tbody>
                    <?php
                include('koneksi.php');

                $sql = "SELECT nomor_karyawan,nama,alamat,jenis_kelamin FROM karyawan";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                                <td>" . $row["nomor_karyawan"]. "</td>
                                <td>" . $row["nama"]. "</td>
                                <td>" . $row["alamat"]. "</td>
                                <td>" . $row["jenis_kelamin"]. "</td>
                                <td><a href='hapus.php?no=".$row["nomor_karyawan"]."'>hapus</a></td>
                            </tr>";
                    }
                } else {
                    echo "0 results";
                }
                mysqli_close($conn);
                ?> 
                </tbody> 
            </table>
            
        </div>         
    <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="asset/jquery.js"></script>
</body>
</html>