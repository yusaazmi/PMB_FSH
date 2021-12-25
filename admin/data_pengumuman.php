<?php include('header.php');?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Data Pengumuman</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <a href="tambah_pengumuman.php" class="btn btn-primary">Tambah Pengumuman</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- <h5 class="card-title">Basic Datatable</h5> -->
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <?php $no = 1; ?>
                                                <th>No</th>
                                                <th>File Pengumuman</th>
                                                <th>Tanggal Upload</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = "SELECT * FROM table_pengumuman";
                                            $query = mysqli_query($dbc,$sql);
                                            while($data = mysqli_fetch_array($query)){
                                            ?>
                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td><?php echo $data['file'] ?></td>
                                                <td><?php echo $data['date'] ?></td>
                                                <?php
                                                if($data['status'] == 1){
                                                    echo "<td>";
                                                    echo "<form action='update_pengumuman.php' method='POST'>";
                                                    echo "<input type='hidden' name='id_pengumuman' value='$data[id_pengumuman]'/>";
                                                    echo "<input type='hidden' name='status' value='0'>";
                                                    echo "<button class='btn btn-success' style='color:white'>Published</button>";
                                                    echo "</form>";
                                                    echo "</td>";
                                                }
                                                elseif($data['status'] == 0){
                                                    echo "<td>";
                                                    echo "<form action='update_pengumuman.php' method='POST'>";
                                                    echo "<input type='hidden' name='id_pengumuman' value='$data[id_pengumuman]'/>";
                                                    echo "<input type='hidden' name='status' value='1'>";
                                                    echo "<button class='btn btn-secondary' style='color:white'>Tidak DiPublish</button>";
                                                    echo "</form>";
                                                    echo "</td>";
                                                }
                                                ?>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-3 p-0"><a href="delete_pengumuman.php?id=<?php echo $data['id_pengumuman']; ?>" class="button" style="text-decoration:none;border:none;background-color: transparent;"><i class="mdi mdi-delete"></i></a></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php $no++; } ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Matrix-admin. Designed and Developed by <a
                    href="https://www.wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>

</body>

</html>