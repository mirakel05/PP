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
    <title>Document</title>
</head>

<body>
    <?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM pendaftaran where id = $id limit 1";
    $data = $conn->query($sql);
    if ($data->num_rows > 0) :
        while ($row = $data->fetch_assoc()) :
    ?>
            </div>
            <div class="container">
                <form action="aksi_edit.php" method="POST" enctype="multipart/form-data">
                    <label for="exampleInputEmail1" class="form-label">Masukan Nama</label>
                    <input type="hidden" class="form-control" value="<?= $row['id'] ?>" name="id" placeholder="Masukan ">
                    <input type="text" class="form-control" value="<?= $row['nama'] ?>" name="nama" placeholder="Masukan ">
                    <br>
                    <label for="exampleInputEmail1" class="form-label">Masukan Tanggal lahir</label>
                    <input type="text" class="form-control" value="<?= $row['tanggal_lahir'] ?>" name="tanggal_lahir" placeholder="Masukan ">
                    <br>
                    <label for="exampleInputEmail1" class="form-label">Masukan Jenis Kelamin</label>
                    <input type="text" class="form-control" value="<?= $row['jenis_kelamin'] ?>" name="jenis_kelamin" placeholder="Masukan ">
                    <br>
                    <label for="exampleInputEmail1" class="form-label">Masukan Golongan</label>
                    <input type="text" class="form-control" value="<?= $row['gol'] ?>" name="gol" placeholder="Masukan ">
                    <br>
                    <label for="exampleInputEmail1" class="form-label">Masukan TB</label>
                    <input type="text" class="form-control" value="<?= $row['tb'] ?>" name="tb" placeholder="Masukan ">
                    <br>
                    <label for="exampleInputEmail1" class="form-label">Masukan BB</label>
                    <input type="text" class="form-control" value="<?= $row['bb'] ?>" name="bb" placeholder="Masukan ">
                    <br>
                    <label for="exampleInputEmail1" class="form-label">Masukan Asal Sekolah</label>
                    <input type="text" class="form-control" value="<?= $row['asal'] ?>" name="asal" placeholder="Masukan ">
                    <br>
                    <label for="exampleInputEmail1" class="form-label">Masukan Email</label>
                    <input type="email" class="form-control" value="<?= $row['email'] ?>" name="email" placeholder="Masukan ">
                    <br>
                    <label for="exampleInputEmail1" class="form-label">Masukan Phone</label>
                    <input type="text" class="form-control" value="<?= $row['phone'] ?>" name="phone" placeholder="Masukan ">
                    <br>
                    <label for="exampleInputEmail1" class="form-label">Masukan NISN</label>
                    <input type="text" class="form-control" value="<?= $row['nisn'] ?>" name="nisn" placeholder="Masukan ">
                    <br>
                    <label for="exampleInputEmail1" class="form-label">Masukan Nama Wali</label>
                    <input type="text" class="form-control" value="<?= $row['nama_wali'] ?>" name="nama_wali" placeholder="Masukan ">
                    <br>
                    <label for="exampleInputEmail1" class="form-label">Masukan No Ortu</label>
                    <input type="text" class="form-control" value="<?= $row['no_ortu'] ?>" name="no_ortu" placeholder="Masukan ">
                    <br>
                    <label for="exampleInputEmail1" class="form-label">Masukan Pekerjaan Ortu</label>
                    <input type="text" class="form-control" value="<?= $row['pekerjaan_ortu'] ?>" name="pekerjaan_ortu" placeholder="Masukan ">
                    <br>
                    <label for="exampleInputEmail1" class="form-label">Masukan File</label>
                    <input type="file" class="form-control" value="<?= $row['files'] ?>" name="files" placeholder="Masukan ">
                    <br>
                    <div class="form-input">
                        <textarea name="alamat" value="<?= $row['alamat'] ?>" placeholder="Masukan" required=""></textarea>
                    </div>
                    <br>
            <?php
        endwhile;
    endif;
            ?>
            <br>
            <button type="submit" class="btn btn-primary" name="update">Submit</button>
                </form>
            </div>
</body>

</html>