<html>
    <head>
        <title>Tabel Karyawan</title>
        <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <form action="tambah.php" method="post">
                <div class="form-group" style="padding-top: 50px;">
                    <label>No Karyawan</label>
                    <input type="number" class="form-control" placeholder="No" name="no_karyawan">
                </div>
                <div class="form-group">
                    <label>Nama Karyawan</label>
                    <input type="text" class="form-control" placeholder="Nama Karyawan" name="nama">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                   <textarea class="form-control" rows="5" name="alamat"></textarea>
                </div>
                <div class="form-group">
                  <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Jenis Kelamin</label>
                  <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="jenis_kelamin">
                    <option selected>Pilih</option>
                    <option value="1">L</option>
                    <option value="2">P</option>
                  </select>
                </div>
                <div class="form-group"">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>         
    <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="asset/jquery.js"></script>
</body>
</html>











