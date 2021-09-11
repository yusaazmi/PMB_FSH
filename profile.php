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

        <div class="row">
            <?php
            $sql = "SELECT * FROM table_pendaftaran WHERE Email = '$_SESSION[Email]'";
            $data = mysqli_fetch_array(mysqli_query($dbc,$sql));
            ?>
            <div class="col-lg-4 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                <img src="assets/foto_mahasiswa/<?php echo $data['Foto'];?>" style="height:320px;width:200px;" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 order-2 order-lg-1 content">
                <table class="table table-striped table-bordered">
                    <tbody>
                        <tr>
                            <th>nama</th>
                            <td><?php echo $data['Nama_lengkap']; ?></td>
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

  <!-- ======= Footer ======= -->
<?php include('footer.php');?>