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
                    <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th class="d-none d-xl-table-cell">Nama</th>
                                <th class="d-none d-xl-table-cell">Nomer</th>
                                <th class="d-none d-xl-table-cell">Judul</th>
                                <th class="d-none d-xl-table-cell">Keterangan</th>
                                <th class="d-none d-xl-table-cell">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $sql = "SELECT * FROM progress";
                            $data = $conn->query($sql);
                            if ($data->num_rows > 0) :
                                while ($row = $data->fetch_assoc()) :
                            ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td class="d-none d-xl-table-cell"><?= $row['nama'] ?></td>
                                        <td class="d-none d-xl-table-cell"><?= $row['nomer'] ?></td>
                                        <td class="d-none d-xl-table-cell"><?= $row['judul'] ?></td>
                                        <td class="d-none d-xl-table-cell"><?= $row['keterangan'] ?></td>
                                        <td>
                                            <a href="form/about/progress/form_edit.php?id=<?= $row['id'] ?>" class="btn btn-primary"><i class="fas fa-pencil-alt"> Edit</i></a>
                                            <a href="form/about/progress/hapus.php?id=<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus?')"><i class="far fa-trash-alt"> Hapus</i></a>
                                        </td>
                                    </tr>
                            <?php
                                endwhile;
                            endif;
                            ?>
                        </tbody>
                    </table>
                    <br>
                    <a href="form/about/progress/form_tambah.php" class="btn btn-secondary"><i class="fas fa fa-plus"> Tambah</i></a>
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