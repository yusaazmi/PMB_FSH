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
                        <h4 class="page-title">Data Pembayaran Mahasiswa Baru</h4>
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
                                                <th>No Pendaftaran</th>
                                                <th>Nama Pendaftar</th>
                                                <th>Jurusan</th>
                                                <th>Pekerjaan</th>
                                                <th>Bukti Pembayaran</th>
                                                <th>Status Pembayaran</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = "SELECT * FROM table_pembayaran,table_pendaftaran WHERE table_pendaftaran.No_pendaftaran = table_pembayaran.No_pendaftaran";
                                            $query = mysqli_query($dbc,$sql);
                                            while($data = mysqli_fetch_array($query)){
                                            ?>
                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td><?php echo $data['No_Pendaftaran'] ?></td>
                                                <td><?php echo $data['Nama_lengkap'] ?></td>
                                                <td><?php echo $data['Prodi_pilihan'] ?></td>
                                                <td><?php echo $data['Pekerjaan'] ?></td>
                                                <td><a href="../assets/surat_keterangan/<?php echo $data['bukti_pembayaran'];?>" download>Klik untuk lihat bukti pembayaran</a></td>
                                                <?php
                                                if($data['status_pembayaran'] === 'Valid'){
                                                    echo "<td>";
                                                    echo "<form action='simpan_edit_pembayaran.php' method='POST'>";
                                                    echo "<input type='hidden' name='id_bayar' value='$data[id_bayar]'/>";
                                                    echo "<input type='hidden' name='status_pembayaran' value='Tidak Valid'>";
                                                    echo "<button class='btn btn-success' style='color:white'>Valid</button>";
                                                    echo "</form>";
                                                    echo "</td>";
                                                }
                                                elseif($data['status_pembayaran'] === 'Tidak Valid'){
                                                    echo "<td>";
                                                    echo "<form action='simpan_edit_pembayaran.php' method='POST'>";
                                                    echo "<input type='hidden' name='id_bayar' value='$data[id_bayar]'/>";
                                                    echo "<input type='hidden' name='status_pembayaran' value='Valid'>";
                                                    echo "<button class='btn btn-secondary' style='color:white'>Tidak Valid</button>";
                                                    echo "</form>";
                                                    echo "</td>";
                                                }
                                                ?>
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