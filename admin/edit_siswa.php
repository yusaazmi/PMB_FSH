<?php include('header.php');?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
<?php
$select = "SELECT * FROM table_hasil_test where No_Pendaftaran = '$_GET[id]'";
$sql = mysqli_query($dbc,$select);
$data = mysqli_fetch_array($sql);
?>
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Form Update Hasil Tes Nomor Pendaftaran <?php echo $data['No_Pendaftaran'];?></h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
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
                    <div class="col-md-12">
                        <div class="card">
                            <form class="form-horizontal" method="POST" action="simpan_edit_siswa.php">
                                <div class="card-body">
                                    <!-- <h4 class="card-title">Personal Info</h4> -->
                                    <input type="hidden" name="No_Pendaftaran" value="<?php echo $data['No_Pendaftaran'];?>">
                                    <input type="hidden" name="Id_test" value="<?php echo $data['Id_test'];?>">
                                    <div class="form-group row">
                                        <label for="Nilai_test1" class="col-sm-3 text-end control-label col-form-label">Baca Tulis Al-Qur'an</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="Nilai_test1"
                                                placeholder="Nilai Test 1" name="Nilai_test1">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Nilai_test2" class="col-sm-3 text-end control-label col-form-label">Bahasa Inggris</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="Nilai_test2"
                                                placeholder="Nilai Test 2" name="Nilai_test2">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Nilai_test3" class="col-sm-3 text-end control-label col-form-label">Komputer</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="Nilai_test3"
                                                placeholder="Nilai Test 3" name="Nilai_test3">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    <label for="Status" class="col-sm-3 text-end control-label col-form-label">Status</label>
                                    <div class="col-md-9">
                                        <select name="Status" class="select2 form-select shadow-none" style="width: 100%; height:36px;">
                                            <option value="Belum Diterima">Belum Diterima</option>
                                            <option value="Tidak Diterima">Tidak Diterima</option>
                                            <option value="Diterima">Diterima</option>
                                        </select>
                                    </div>
                                </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
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
<?php include('footer.php');?>