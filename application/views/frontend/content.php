<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
        <h1>Selamat Datang Di <span><?= $judul; ?></span></h1>
        <h2>Ini adalah sebuah Landing Page</h2>
        <a href="#about" class="btn-get-started scrollto">Lebih Lanjut</a>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
            <div class="section-title">
                <h2>About Us</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <img src="<?= base_url() ?>assets/frontend/img/about.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <ul>
                        <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                        <li><i class="bx bx-check-double"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    </ul>
                    <div class="row icon-boxes">
                        <div class="col-md-6">
                            <i class="bx bx-receipt"></i>
                            <h4>Corporis voluptates sit</h4>
                            <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                        </div>
                        <div class="col-md-6 mt-4 mt-md-0">
                            <i class="bx bx-cube-alt"></i>
                            <h4>Ullamco laboris nisi</h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Feature</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="icon-box">
                        <i class="bi bi-briefcase"></i>
                        <h4><a href="#">Lorem Ipsum</a></h4>
                        <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-lg-0">
                    <div class="icon-box">
                        <i class="bi bi-card-checklist"></i>
                        <h4><a href="#">Dolor Sitema</a></h4>
                        <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="icon-box">
                        <i class="bi bi-bar-chart"></i>
                        <h4><a href="#">Sed ut perspiciatis</a></h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="icon-box">
                        <i class="bi bi-binoculars"></i>
                        <h4><a href="#">Nemo Enim</a></h4>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="icon-box">
                        <i class="bi bi-brightness-high"></i>
                        <h4><a href="#">Magni Dolore</a></h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="icon-box">
                        <i class="bi bi-calendar4-week"></i>
                        <h4><a href="#">Eiusmod Tempor</a></h4>
                        <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Testimonials</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>
            </div>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-button-prev" style="color: gray; margin-left: 20px;"></div>
                <div class="swiper-wrapper">

                    <?php foreach ($product as $prd) : ?>

                        <div class="swiper-slide">
                            <div class="testimonial-item" style="padding: 30px;">

                                <div class="row" style="padding: 0 10px">

                                    <div class="col-lg-5 col-12">
                                        <div>
                                            <img src="<?= base_url() ?>assets/produk/<?= $prd['gambar']; ?>" class="testimonial-img">
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-12">
                                        <div>
                                            <h3 class="pt-3"><?= $prd['nama']; ?></h3>
                                            <p><?= $prd['keterangan']; ?></p>
                                            <div>
                                                <!-- <a href="#" class="btn btn-outline-primary m-2">Lihat Detail</a> -->
                                                <a href="https://api.whatsapp.com/send?phone=<?= $prd['kontak']; ?>" class="btn btn-outline-success m-2"><i class="bi bi-whatsapp"></i> Kontak WA</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div><!-- End testimonial item -->
                    <?php endforeach; ?>

                </div>
                <div class="swiper-button-next" style="color: gray; margin-right: 20px;"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container">

            <div class="section-title">
                <h2>Team</h2>
                <p>Sit sint consectetur velit quos quisquam cupiditate nemo qui</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="<?= base_url() ?>assets/frontend/img/team/team-1.jpg" alt="">
                        <h4>Walter White</h4>
                        <span>Chief Executive Officer</span>
                        <p>
                            Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
                        </p>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="<?= base_url() ?>assets/frontend/img/team/team-2.jpg" alt="">
                        <h4>Sarah Jhinson</h4>
                        <span>Product Manager</span>
                        <p>
                            Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
                        </p>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="<?= base_url() ?>assets/frontend/img/team/team-3.jpg" alt="">
                        <h4>William Anderson</h4>
                        <span>CTO</span>
                        <p>
                            Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
                        </p>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fuga</p>
            </div>

            <div class="row mt-5 justify-content-center">

                <div class="col-lg-10">

                    <div class="info-wrap">
                        <div class="row">
                            <div class="col-lg-4 info">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>A108 Adam Street<br>New York, NY 535022</p>
                            </div>

                            <div class="col-lg-4 info mt-4 mt-lg-0">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@example.com<br>contact@example.com</p>
                            </div>

                            <div class="col-lg-4 info mt-4 mt-lg-0">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+1 5589 55488 51<br>+1 5589 22475 14</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->