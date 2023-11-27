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
    $sql = "SELECT * FROM kegiatan where id = $id limit 1";
    $data = $conn->query($sql);
    if ($data->num_rows > 0) :
        while ($row = $data->fetch_assoc()) :
    ?>
            </div>
            <div class="container">
                <form action="aksi_edit.php" method="POST" enctype="multipart/form-data">
                    <label for="exampleInputEmail1" class="form-label">Masukan Judul</label>
                    <input type="hidden" class="form-control" value="<?= $row['id'] ?>" name="id" placeholder="Masukan ">
                    <input type="text" class="form-control" value="<?= $row['judul'] ?>" name="judul" placeholder="Masukan ">
                    <br>
                    <label for="exampleInputEmail1" class="form-label">Masukan Nama</label>
                    <input type="text" class="form-control" value="<?= $row['nama'] ?>" name="nama" placeholder="Masukan ">
                    <br>
                    <label for="exampleInputEmail1" class="form-label">Masukan Keterangan</label>
                    <input type="text" class="form-control" value="<?= $row['keterangan'] ?>" name="keterangan" placeholder="Masukan ">
                    <br>
                    <label for="exampleInputEmail1" class="form-label">Masukan Foto</label>
                    <input type="file" class="form-control" value="<?= $row['foto'] ?>" name="foto" placeholder="Masukan ">
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