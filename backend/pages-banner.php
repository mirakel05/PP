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
                    <table class="table table-hover my-0" >
                        <thead>
                            <tr>
                                <th>No</th>
                                <th class="d-none d-xl-table-cell">Foto</th>
                                <th class="d-none d-xl-table-cell">Nama</th>
                                <th class="d-none d-xl-table-cell">Keterangan1</th>
                                <th class="d-none d-xl-table-cell">Keterangan2</th>
                                <th class="d-none d-xl-table-cell">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM banner";
                            $data = $conn->query($sql);
                            if ($data->num_rows > 0) :
                                while ($row = $data->fetch_assoc()) :
                                    $x = 0;
                                    while ($x <= 0) {
                                        $x++;
                                    }
                            ?>
                                    <tr>
                                        <td><?= $x++ ?></td>
                                        <td><img style="width : 100px; height : 100px;" src="form/home/banner/file/<?= $row['foto'] ?>" alt=""></td>
                                        <td class="d-none d-xl-table-cell"><?= $row['nama'] ?></td>
                                        <td class="d-none d-xl-table-cell"><?= $row['keterangan'] ?></td>
                                        <td class="d-none d-xl-table-cell"><?= $row['keterangan2'] ?></td>
                                        <td>
                                            <a href="form/home/banner/form_edit.php?id=<?= $row['id'] ?>" class="btn btn-primary"><i class="fas fa-pencil-alt"> Edit</i></a>
                                        </td>
                                    </tr>
                            <?php
                                endwhile;
                            endif;
                            ?>
                        </tbody>
                    </table>

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