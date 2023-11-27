<?php
include '../../../../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Form Tambah</title>
</head>

<body>
    <div class="container">
        <form action="aksi_tambah.php" method="POST" enctype="multipart/form-data">
            <form class="row g-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Masukan Judul</label>
                    <input type="text" class="form-control" name="judul" id="exampleFormControlInput1" placeholder="masukan">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Masukan Keterangan</label>
                    <input type="text" class="form-control" name="keterangan" id="exampleFormControlInput1" placeholder="masukan">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Masukan Nama</label>
                    <input type="text" class="form-control" name="nama" id="exampleFormControlInput1" placeholder="masukan">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Masukan Logo</label>
                    <input type="text" class="form-control" name="logo" id="exampleFormControlInput1" placeholder="masukan">
                </div>
                <br>
                <button type="submit" class="btn btn-secondary" name="submit" value="submit">Tambah</button>
            </form>
    </div>
</body>

</html>