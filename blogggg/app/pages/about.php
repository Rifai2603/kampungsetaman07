<?php include '../app/pages/includes/header.php'; ?>

<head>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    
    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?=ROOT?>/assets/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?=ROOT?>/assets/css/style.css" rel="stylesheet">
</head>

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Tentang Kami</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Sensus Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <h5 class="mb-3">Rukun Tetangga</h5>
                            <p>6 RT</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5 class="mb-3">Kepala Keluarga</h5>
                            <p>1300 KK</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <h5 class="mb-3">Warga</h5>
                            <p>4500 Jiwa</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                            <h5 class="mb-3">Pos Kegiatan</h5>
                            <p>5 Pos</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sensus End -->


    <!-- Penjelasan Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" style="object-fit:cover; display: inline-block; border-radius: 15px; box-shadow: 0px 0px 20px 0 #0000002c;" src="<?=ROOT?>/assets/images/about.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Kampung Setaman</h1>
                    <p class="mb-4">Kampung setaman adalah Kampung yang terletak pada RW 07 Kelurahan Ratu Jaya Kecamatan Cipayung, Kota Depok yang mengimplementasikan 
                        program penghijauan dan penataan lingkungan untuk meningkatkan lingkungan yang rapih, bersih dan nyaman.</p>                  
                    <p class="mb-4">
                        Sesuai dengan visi nya, nama kampung setaman berasal dari singkatan kata Bersih, Tertata dan Nyaman. Inovasi ini dibentuk untuk meningkatkan 
                        ketahanan pangan serta tata lingkungan untuk era mendatang. 
                    <div class="row gy-2 gx-4 mb-4">
                        <p class="mb-0">Salah satu program yang diterapkan pada kampung setaman :</p> 
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Penampungan dan Pemanfaatan air hujan </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Pemanfaatan tanaman markisa untuk penghijauan lingkungan </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Pembuatan lubang biopori untuk penyerapan air </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Pemanfaat limbah sampah untuk membayar tanggungan bangunan (PBB) </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Penjelasan End -->


    <!-- Video Start -->
    <div class="container-fluid py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Video Profile</h6>
                <h1 class="mb-5">Profile Video Kampung Setaman</h1>
            </div>

            <div class="container">
                <video controls style="width: 100%; ">
                    <source src="<?=ROOT?>/assets/images/Pengmas.mp4" type="video/webm" />
                </video>
            </div>

                
        </div>
    </div>
    <!-- Video End -->


    <!-- Pos Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            </div>
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.2s">
                    <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Pos Untuk Melaksanakan Program Di Kampung Setaman. 
                    </h6>
                    <div class="row gy-2 gx-4 mb-5">
                        <div class="col-lg-10">
                            <p class="mb-2"><i class="fas fa-circle text-primary me-2"></i>Pos 1 (PBB Sampah)</p>
                        </div>
                        <div class="col-lg-10">
                            <p class="mb-2"><i class="fas fa-circle text-primary me-2"></i>Pos 2 (Pembuatan Pot Popok)</p>
                        </div>
                        <div class="col-lg-10">
                            <p class="mb-2"><i class="fas fa-circle text-primary me-2"></i>Pos 3 (Pembuatan Paving Block)</p>
                        </div>
                        <div class="col-lg-10">
                            <p class="mb-2"><i class="fas fa-circle text-primary me-2"></i>Pos 4 (Bank Sampah)</p>
                        </div>
                        <div class="col-lg-10">
                            <p class="mb-2"><i class="fas fa-circle text-primary me-2"></i>Pos 5 (Kantin Sampah)</p>
                        </div>
                    </div>

                    <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Upaya Masyarakat RW 07 Dalam Meningkatkan Penghijauan Dan Penataan Lingkungan</h5>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-lg-10">
                            <h7 class="mb-3"><li class="fas fa-square text-primary me-2"></li>  Pengelolaan Sampah :</h7>
                                <ul>
                                    <li class="mb-2">Pemanfaatan Limbah sampah untuk sampah mart</li>
                                    <li class="mb-2">Pemanfaatan limbah popok untuk pot tanaman</li>
                                    <li class="mb-2">Pemanfaatan limbah sampah untuk membayar tanggungan bangunan (PBB)</li>
                                </ul>
                                
                        </div>
                        <div class="col-lg-10">
                            <h7 class="mb-3"><i class="fas fa-square text-primary me-2"></i>  Ketahanan pangan dan energi :</h7>
                                <ul>
                                    <li class="mb-2"> Penanaman bahan pangan untuk kebutuhan harian</li>
                                    <li class="mb-2"> Penanaman tanaman obat-obatan untuk kesehatan</li>
                                    <li class="mb-2"> Pemanfaatan solar sistem</li>
                                    <li class="mb-2"> Upaya penggantian bahan bakar gas dengan limbah sampah</li>
                                </ul>
                              
                        </div>
                    </div>

                </div>
        </div>
    </div>
    <!-- Pos End -->

    <!-- Struktur Start -->
    <div class="container-fluid py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Organization Structure</h6>
                <h1 class="mb-5">Struktur Organisasi</h1>
            </div>

            <img class="img-fluid" src="<?=ROOT?>/assets/images/struktur_organisasi.jpg" alt="">
                
        </div>
    </div>
    <!-- Struktur End -->


    <!-- Galeri Start -->
    <div class="container-fluid py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Photos</h6>
                <h1 class="mb-5">Foto-Foto</h1>
            </div>

            <div class="row g-3">
                <div class="col-lg-7 col-md-6 mb-3">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden">
                                <img class="img-fluid" src="<?=ROOT?>/assets/images/galeri/gal-1.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden">
                                <img class="img-fluid" src="<?=ROOT?>/assets/images/galeri/gal-2-1.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden">
                                <img class="img-fluid" src="<?=ROOT?>/assets/images/galeri/gal-3.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 mb-3 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden">
                        <img class="img-fluid position-absolute w-100 h-100" src="<?=ROOT?>/assets/images/galeri/gal-4.jpg" alt="" style="object-fit: cover;">
                    </a>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.1s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden">
                        <img class="img-fluid position-absolute w-100 h-100" src="<?=ROOT?>/assets/images/galeri/gal-5-1.jpg" alt="" style="object-fit: cover;">
                    </a>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden">
                                <img class="img-fluid" src="<?=ROOT?>/assets/images/galeri/gal-6-1.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden">
                                <img class="img-fluid" src="<?=ROOT?>/assets/images/galeri/gal-7-1.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.7s">
                            <a class="position-relative d-block overflow-hidden">
                                <img class="img-fluid" src="<?=ROOT?>/assets/images/galeri/gal-8.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- Galeri End -->


    <!-- Ketua Start -->
    <div class="container-fluid py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Neighborhood Leader</h6>
                <h1 class="mb-5">Ketua RW & RT</h1>
            </div>

                <div class="row g-3">

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item bg-light">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="<?=ROOT?>/assets/images/ketua/pic1.jpg" alt="">
                            </div>
                            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                    <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-sm-square btn-primary mx-1" href="https://wa.me/085216226786"><i class="fab fa-whatsapp"></i></a>
                                    <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fa fa-envelope"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-0">Bambang Sugiharto</h5>
                                <small>LURAH RATUJAYA</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item bg-light">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="<?=ROOT?>/assets/images/ketua/rw.jpg" alt="">
                            </div>
                            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                    <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-sm-square btn-primary mx-1" href="https://wa.me/081912454140"><i class="fab fa-whatsapp"></i></a>
                                    <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fa fa-envelope"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-0">Sanusi</h5>
                                <small>KETUA RW.07</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item bg-light">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="<?=ROOT?>/assets/images/ketua/rt1.jpg" alt="">
                            </div>
                            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                    <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-sm-square btn-primary mx-1" href="https://wa.me/085771557790"><i class="fab fa-whatsapp"></i></a>
                                    <a class="btn btn-sm-square btn-primary mx-1" href="mailto:jailani5669@gmail.com"><i class="fa fa-envelope"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-0">Sofyan Hadi</h5>
                                <small>KETUA RT.01</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item bg-light">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="<?=ROOT?>/assets/images/ketua/pic4.jpg" alt="">
                            </div>
                            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                    <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-sm-square btn-primary mx-1" href="https://wa.me/081310481933"><i class="fab fa-whatsapp"></i></a>
                                    <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fa fa-envelope"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-0">Rudi</h5>
                                <small>KETUA RT.02</small>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item bg-light">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="<?=ROOT?>/assets/images/ketua/rt3.jpg" alt="">
                            </div>
                            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                    <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-sm-square btn-primary mx-1" href="https://wa.me/08158746461"><i class="fab fa-whatsapp"></i></a>
                                    <a class="btn btn-sm-square btn-primary mx-1" href="mailto:jailani5669@gmail.com"><i class="fa fa-envelope"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-0">Jailani</h5>
                                <small>KETUA RT.03</small>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item bg-light">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="<?=ROOT?>/assets/images/ketua/rt4.jpg" alt="">
                            </div>
                            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                    <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-sm-square btn-primary mx-1" href="https://wa.me/0895342078209"><i class="fab fa-whatsapp"></i></a>
                                    <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fa fa-envelope"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-0">Deden Sumarto</h5>
                                <small>KETUA RT.04</small>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item bg-light">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="<?=ROOT?>/assets/images/ketua/rt5.jpg" alt="">
                            </div>
                            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                    <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-sm-square btn-primary mx-1" href="https://wa.me/081776586862"><i class="fab fa-whatsapp"></i></a>
                                    <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fa fa-envelope"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-0">Samsuri</h5>
                                <small>KETUA RT.05</small>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item bg-light">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="<?=ROOT?>/assets/images/ketua/rt6.jpg" alt="">
                            </div>
                            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                    <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-sm-square btn-primary mx-1" href="https://wa.me/0895343304222"><i class="fab fa-whatsapp"></i></a>
                                    <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fa fa-envelope"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-0">Hartono</h5>
                                <small>KETUA RT.06</small>
                            </div>
                        </div>
                    </div>
    
                             
            </div>

        </div>
    </div>
    <!-- Ketua End -->


    <!-- Sosmed Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">    
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Social Media</h6>
                <h1 class="mb-5">Sosial Media</h1>
            </div>

                    <div class="row g-5">
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item text-center pt-3">
                                <div class="p-4">
                                    <a class="btn btn-social" href="https://www.instagram.com/kampungsetaman07/"><i class="fab fa-3x fa-instagram text-primary mb-4"></i></a>
                                    <h5 class="mb-3">Instagram</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="service-item text-center pt-3">
                                <div class="p-4">
                                    <a class="btn btn-social" href="mailto:kampungsetaman07@gmail.com"><i class="fa fa-3x fa-envelope text-primary mb-4"></i></a>
                                    <h5 class="mb-3">Email</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="service-item text-center pt-3">
                                <div class="p-4">
                                    <a class="btn btn-social" href="https://www.youtube.com/@kampungsetaman1661/featured"><i class="fab fa-3x fa-youtube text-primary mb-4"></i></a>
                                    <h5 class="mb-3">Youtube</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="service-item text-center pt-3">
                                <div class="p-4">
                                    <a class="btn btn-social" href="https://www.facebook.com/groups/649258509209142"><i class="fab fa-3x fa-facebook-f text-primary mb-4"></i></a>
                                    <h5 class="mb-3">Facebook</h5>
                                </div>
                            </div>
                        </div>
                    </div>

        </div>
    </div>
    <!-- Sosmed End -->
    
<?php include '../app/pages/includes/top.php'; ?>

<?php include '../app/pages/includes/footer.php'; ?>