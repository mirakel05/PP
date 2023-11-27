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
                    <table class="table" id="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th class="d-none d-xl-table-cell">Nama</th>
                                <th class="d-none d-xl-table-cell">Asal Sekolah</th>
                                <th class="d-none d-xl-table-cell">Email</th>
                                <th class="d-none d-xl-table-cell">Phone</th>
                                <th class="d-none d-xl-table-cell">NISN</th>
                                <th class="d-none d-xl-table-cell">Nama Wali</th>
                                <th class="d-none d-xl-table-cell">Alamat</th>
                                <th class="d-none d-xl-table-cell">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $sql = "SELECT * FROM pendaftaran";
                            $data = $conn->query($sql);
                            if ($data->num_rows > 0) :
                                while ($row = $data->fetch_assoc()) :
                            ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td class="d-none d-xl-table-cell"><?= $row['nama'] ?></td>
                                        <td class="d-none d-xl-table-cell"><?= $row['asal'] ?></td>
                                        <td class="d-none d-xl-table-cell"><?= $row['email'] ?></td>
                                        <td class="d-none d-xl-table-cell"><?= $row['phone'] ?></td>
                                        <td class="d-none d-xl-table-cell"><?= $row['nisn'] ?></td>
                                        <td class="d-none d-xl-table-cell"><?= $row['nama_wali'] ?></td>
                                        <td class="d-none d-xl-table-cell"><?= $row['alamat'] ?></td>
                                        <td>
                                            <a href="pages-detail_pendaftaran.php?id=<?= $row['id'] ?>" class="btn btn-warning"><i class="fas fa-search-plus"> Detail</i></a>
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