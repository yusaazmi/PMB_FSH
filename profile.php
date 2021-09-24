<?php include('header.php');?>

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Your Profile</h2>
        <!-- <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p> -->
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row" id="kolom">
            <?php
            $sql = "SELECT * FROM table_pendaftaran WHERE No_Pendaftaran = '$_SESSION[No_Pendaftaran]'";
            $data = mysqli_fetch_array(mysqli_query($dbc,$sql));
            ?>
            <div class="col-lg-3 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                <img src="assets/foto_mahasiswa/<?php echo $data['Foto'];?>" style="height:320px;width:200px;" class="img-fluid" alt="">
            </div>
            <div class="col-lg-9 pt-4 pt-lg-0 order-2 order-lg-1 content">
                <table class="table table-striped table-bordered">
                    <tbody>
                        <tr>
                            <th>Nama</th>
                            <td><?php echo $data['Nama_lengkap']; ?>
                        </td>
                          <button id="edit" style="border:none; background-color:white; position:absolute;left:845px;top:-35px"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAPNJREFUSEu1lVERwjAQBbcKQAIOwAHgACsoABzgBAmAA1AAEpDAvJlmJg1pSC5pZvpBP3bv3qVHx8Snm5hPC8EcOPSFnoCPX3StQPArsOqhD2DrS2oFN2AdxDyQ1ApUuSSzQKKojnpnESiWC7AHVG1MYhb4mWuYyjuUPIGNm0NJB+FAlUAoOQM7y5BjcBe7L/n5rHI6SMEd8N7HUizIgQ8yDw2pDqrhqWvaBD4maAYfE+heLxNbNpn5vxksgFcreKwDfSRaA7FTVLkDhLdIC8rtdl9igsc6iK1fMzwmeAN6JNKw9ei3+eSsCjPc+n9QJJy8gy8ExD4Zt/EmLgAAAABJRU5ErkJggg=="/></button>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td><?php echo $data['Jenis_kelamin'];?></td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td>
                            <td><?php echo $data['Tempat_lahir'];?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td><?php
                            $date = date_create($data['Tanggal_lahir']); 
                            echo date_format($date,"d M Y");?></td>
                        </tr>
                        <tr>
                            <td>Provinsi</td>
                            <td><?php echo $data['Provinsi'];?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><?php echo $data['Alamat'];?></td>
                        </tr>
                        <tr>
                            <td>Kode Pos</td>
                            <td><?php echo $data['Kode_pos'];?></td>
                        </tr>
                        <tr>
                            <td>Asal Sekolah</td>
                            <td><?php echo $data['Asal_sekolah'];?></td>
                        </tr>
                        <tr>
                            <td>Nama Ayah</td>
                            <td><?php echo $data['Nama_bapak'];?></td>
                        </tr>
                        <tr>
                            <td>Nama Ibu</td>
                            <td><?php echo $data['Nama_ibu'];?></td>
                        </tr>
                        <tr>
                            <td>Pekerjaan</td>
                            <td><?php echo $data['Pekerjaan'];?></td>
                        </tr>
                       
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row d-none" id="editProfile">
          <h4>Edit Data Diri</h4>
        <form action="edit_profile.php" method="post" enctype="multipart/form-data">
            <div class="row">
              <input type="text" value="<?php echo $_SESSION['No_Pendaftaran'];?>" name="No_Pendaftaran">
              <div class="col-md-6 form-group">
                  <label for="">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="<?php echo $data['Email'];?>" disabled>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label for="">Password</label>
                    <input type="password" class="form-control" name="Password" id="Password" placeholder="Password">
                </div>
              </div>
              <div class="row mt-2">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <label for="">Nama Lengkap</label>
                  <input type="text" class="form-control" name="Nama_lengkap" id="Nama_lengkap" placeholder="Nama Lengkap" value="<?php echo $data['Nama_lengkap']; ?>" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <label for="">Program Studi</label>
                  <input type="text" class="form-control" placeholder="" value="<?php echo $data['Prodi_pilihan']; ?>" disabled>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-6 form-group">
                  <label for="">Tempat Lahir</label>
                    <input type="text" class="form-control" name="Tempat_lahir" id="Tempat_lahir" placeholder="Tempat Lahir" required value="<?php echo $data['Tempat_lahir'];?>">
                </div>
                <div class="col-md-6 form-group">
                  <label for="">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="Tanggal_lahir" id="Tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo $data['Tanggal_lahir'];?>" required>
                </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-6 form-group">
                  <label for="">Jenis Kelamin</label>
                <select class="form-select" name="Jenis_kelamin" aria-label="Default select example">
                    <option selected value="<?php echo $data['Jenis_kelamin'];?>"><?php echo $data['Jenis_kelamin'];?></option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                </div>
                <div class="col-md-6 form-group">
                  <label for="">Pekerjaan</label>
                    <input type="text" class="form-control" name="Pekerjaan" id="Pekerjaan" placeholder="Pekerjaan" value="<?php echo $data['Pekerjaan'];?>" required>
                </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-6 form-group">
                  <label for="">Provinsi</label>
                    <input type="text" class="form-control" name="Provinsi" id="Provinsi" placeholder="Provinsi" value="<?php echo $data['Provinsi'];?>" required>
                </div>
                <div class="col-md-6 form-group">
                  <label for="">Kode Pos</label>
                    <input type="text" class="form-control" name="Kode_pos" id="Kode_pos" placeholder="Kode Pos" value="<?php echo $data['Kode_pos'];?>" required>
                </div>
            </div>
            <div class="form-group mt-3">
              <label for="">Asal Sekolah</label>
                <input type="text" class="form-control" name="Asal_sekolah" id="Asal_sekolah" placeholder="Asal Sekolah" value="<?php echo $data['Asal_sekolah'];?>" required>
            </div>
            <div class="form-group mt-3">
              <label for="">Alamat Lengkap</label>
                <textarea class="form-control" name="Alamat" rows="5" placeholder="Alamat Lengkap" value="<?php echo $data['Alamat'];?>" required></textarea>
            </div>
            <div class="row mt-2">
              <div class="col-md-6 form-group">
                  <label for="">Nama Bapak</label>
                    <input type="text" class="form-control" name="Nama_bapak" id="Nama_bapak" placeholder="Nama Bapak" value="<?php echo $data['Nama_bapak'];?>" required>
                </div>
                <div class="col-md-6 form-group">
                  <label for="">Nama Ibu</label>
                    <input type="text" class="form-control" name="Nama_ibu" id="Nama_ibu" value="<?php echo $data['Nama_ibu'];?>" placeholder="Nama Ibu" required>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-6 form-group">
                <label for="">Status Perkawinan</label>
                <select class="form-select" name="Status_perkawinan" aria-label="Default select example">
                    <option selected value="<?php echo $data['Status_perkawinan'];?>"><?php echo $data['Status_perkawinan'];?></option>
                    <option value="Kawin">Kawin</option>
                    <option value="Belum Kawin">Belum Kawin</option>
                </select>
                </div>
                <div class="col-md-6 form-group">
                  <label for="">Foto</label>
                    <input type="file" class="form-control" name="Foto" id="Foto" placeholder="Upload Foto">
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
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Our Lecturers</h2>
          <p>What are they saying</p>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $("#edit").click(function(){
      $("#kolom").addClass("d-none");
      $("#editProfile").removeClass("d-none",1000);
    });
  });
</script>
  <!-- ======= Footer ======= -->
<?php include('footer.php');?>