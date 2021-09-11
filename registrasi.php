<?php include('header.php');?>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Registrasi Mahasiswa Baru</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">
            <div class="row mt-5">
                <div class="col-lg-12 mt-5 mt-lg-0">
                    <form action="simpan_registrasi.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="no_pendaftaran" class="form-control" id="no_pendaftaran" placeholder="No pendaftaran *diisi oleh petugas" disabled>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="text" class="form-control" name="Nama_lengkap" id="Nama_lengkap" placeholder="Nama Lengkap" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6 form-group">
                                <input type="email" name="Email" class="form-control" id="Email" placeholder="Email">
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="password" class="form-control" name="Password" id="Password" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-4 form-group">
                            <select class="form-select" name="Prodi" aria-label="Default select example">
                                <option selected>Pilih Program Studi</option>
                                <option value="Hukum Keluarga">Hukum Keluarga</option>
                                <option value="Ilmu Hukum">Ilmu Hukum</option>
                                <option value="Hukum Ekonomi Syari'ah">Hukum Ekonomi Syari'ah</option>
                                <option value="Perbankan Syari'ah">Perbankan Syari'ah</option>
                                <option value="Ilmu Al-Qur'an dan Tafsir">Ilmu Al-Qur'an dan Tafsir</option>
                            </select>
                            </div>
                            <div class="col-md-4 form-group">
                                <input type="text" class="form-control" name="Tempat_lahir" id="Tempat_lahir" placeholder="Tempat Lahir" required>
                            </div>
                            <div class="col-md-4 form-group">
                                <input type="date" class="form-control" name="Tanggal_lahir" id="Tanggal_lahir" placeholder="Tanggal Lahir" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6 form-group">
                            <select class="form-select" name="Jenis_kelamin" aria-label="Default select example">
                                <option selected>Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" name="Pekerjaan" id="Pekerjaan" placeholder="Pekerjaan" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" name="Provinsi" id="Provinsi" placeholder="Provinsi" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" name="Kode_pos" id="Kode_pos" placeholder="Kode Pos" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="Asal_sekolah" id="Asal_sekolah" placeholder="Asal Sekolah" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="Alamat" rows="5" placeholder="Alamat Lengkap" required></textarea>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" name="Nama_bapak" id="Nama_bapak" placeholder="Nama Bapak" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" name="Nama_ibu" id="Nama_ibu" placeholder="Nama Ibu" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6 form-group">
                            <select class="form-select" name="Status_perkawinan" aria-label="Default select example">
                                <option selected>Status Perkawinan</option>
                                <option value="Kawin">Kawin</option>
                                <option value="Belum Kawin">Belum Kawin</option>
                            </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="file" class="form-control" name="foto" id="foto" placeholder="Upload Foto" required>
                            </div>
                        </div>
                        <div class="my-3">
                            <!-- <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div> -->
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>
            </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<?php include('footer.php');?>