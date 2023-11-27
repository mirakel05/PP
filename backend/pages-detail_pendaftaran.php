<?php
include '../koneksi.php';
?>
<?php
include 'header.php';
?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        include 'sidebar.php';
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php
                include 'topbar.php';
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="row align-items-left">
                        <div class="col">
                            <thead>
                                <tr>
                                    <th>No</th><br>
                                    <th class="d-none d-xl-table-cell">Nama :</th><br>
                                    <th class="d-none d-xl-table-cell">Tmpt/tgl lahir :</th><br>
                                    <th class="d-none d-xl-table-cell">Jenis Kelamin :</th><br>
                                    <th class="d-none d-xl-table-cell">Golongan :</th><br>
                                    <th class="d-none d-xl-table-cell">TB :</th><br>
                                    <th class="d-none d-xl-table-cell">BB :</th><br>
                                    <th class="d-none d-xl-table-cell">Asal Sekolah :</th><br>
                                    <th class="d-none d-xl-table-cell">Email :</th><br>
                                    <th class="d-none d-xl-table-cell">Phone :</th><br>
                                    <th class="d-none d-xl-table-cell">NISN :</th><br>
                                    <th class="d-none d-xl-table-cell">Nama Wali :</th><br>
                                    <th class="d-none d-xl-table-cell">No HP :</th><br>
                                    <th class="d-none d-xl-table-cell">Pekerjaan Ortu :</th><br>
                                    <th class="d-none d-xl-table-cell">Alamat :</th><br>
                                    <th class="d-none d-xl-table-cell">File :</th><br><br><br>
                                    <th class="d-none d-xl-table-cell">Aksi :</th>
                                </tr>
                            </thead>
                        </div>
                        <div class="col">
                            <tbody>
                                <?php
                                $no = 1;
                                $id = $_GET['id'];
                                $sql = "SELECT * FROM pendaftaran WHERE id = $id";
                                $data = $conn->query($sql);
                                if ($data->num_rows > 0) :
                                    while ($row = $data->fetch_assoc()) :
                                ?>
                                        <tr>
                                            <td><?= $no++ ?></td><br>
                                            <td class="d-none d-xl-table-cell"><?= $row['nama'] ?></td><br>
                                            <td class="d-none d-xl-table-cell"><?= $row['tanggal_lahir'] ?></td><br>
                                            <td class="d-none d-xl-table-cell"><?= $row['jenis_kelamin'] ?></td><br>
                                            <td class="d-none d-xl-table-cell"><?= $row['gol'] ?></td><br>
                                            <td class="d-none d-xl-table-cell"><?= $row['tb'] ?></td><br>
                                            <td class="d-none d-xl-table-cell"><?= $row['bb'] ?></td><br>
                                            <td class="d-none d-xl-table-cell"><?= $row['asal'] ?></td><br>
                                            <td class="d-none d-xl-table-cell"><?= $row['email'] ?></td><br>
                                            <td class="d-none d-xl-table-cell"><?= $row['phone'] ?></td><br>
                                            <td class="d-none d-xl-table-cell"><?= $row['nisn'] ?></td><br>
                                            <td class="d-none d-xl-table-cell"><?= $row['nama_wali'] ?></td><br>
                                            <td class="d-none d-xl-table-cell"><?= $row['no_ortu'] ?></td><br>
                                            <td class="d-none d-xl-table-cell"><?= $row['pekerjaan_ortu'] ?></td><br>
                                            <td class="d-none d-xl-table-cell"><?= $row['alamat'] ?></td><br>
                                            <td class="d-none d-xl-table-cell"><?= $row['files'] ?></td><br><br><br>
                                            <td>
                                                <a href="form/about/detail_pendaftaran/form_edit.php?id=<?= $row['id'] ?>" class="btn btn-primary"><i class="fas fa-pencil-alt"> Edit</i></a>
                                                <a href="form/about/detail_pendaftaran/hapus.php?id=<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus?')"><i class="far fa-trash-alt"> Hapus</i></a>
                                                <a href="form/about/detail_pendaftaran/file/<?= $row['files'] ?>" class="btn btn-dark"><i class="far fa-file-pdf"> Lihat Files</i></a><br><br><br><br>
                                                <a href="pages-pendaftaran.php?id=<?= $row['id'] ?>" class="btn btn-link"><i class="fas fa-reply"> Kembali</i></a><br>
                                            </td>
                                        </tr>
                                <?php
                                    endwhile;
                                endif;
                                ?>
                            </tbody>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php
            include "footer.php";
            ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Bottom -->
    <?php
    include "bottom.php";
    ?>
    <!-- End of Bottom -->