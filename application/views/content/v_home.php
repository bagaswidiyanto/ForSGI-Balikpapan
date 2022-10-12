<div class="about px-0" id="about">
    <img class="img-fluid bg" src="assets/imagenew/bg-about.png" alt="">
    <img class="img-fluid bg-res" src="assets/imagenew/bg-about-responsive.png" alt="">

    <div class="container py-5 px-lg-5" data-aos="fade-up" data-aos="fade-up" data-aos-duration="2000">
        <div class="content-about text-center">
            <h1>ABOUT <span>FORSGI</span></h1>
            <?= $website->description; ?>
        </div>
    </div>
</div>

<div class="visi-misi px-0" id="about">
    <div class="container py-5 px-lg-5" data-aos="fade-up" data-aos="fade-up" data-aos-duration="2000">
        <div class="slider-container">
            <div class="swiper-container visi-misi-slider">
                <div class="swiper-wrapper">
                    <?php foreach ($visi_misi as $vm) { ?>
                    <div class="swiper-slide">
                        <div class="visi-misi-item">
                            <div class="row d-flex align-items-center">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 bg-text">
                                    <div class="text-box">
                                        <h3><?= $vm->title; ?></h3>
                                        <?= $vm->deskripsi; ?>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 ps-0">
                                    <div class="box-img text-center">
                                        <img class="img-fluid"
                                            src="https://admin103.forsgibpn.com/upload/visi_misi/<?= $vm->image; ?>"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="swiper-pagination"></div>

            </div>
        </div>
    </div>
</div>

<div class="programs py-5" id="programs">
    <div class="container py-5 px-lg-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="text-header text-center" data-aos="fade-up" data-aos="fade-up" data-aos-duration="2000">
                    <h3>program-program</h3>
                    <h2>forsgi BALIKPAPAN</h2>
                    <?= $program_desk->deskripsi; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="slider-container">
                    <div class="program-slider swiper-container">
                        <div class="swiper-wrapper">
                            <?php foreach ($this->db->query("SELECT * FROM tbl_program WHERE id != 5")->result() as $program) { ?>
                            <div class="swiper-slide">
                                <div class="programs-item text-center px-3 py-5 p-sm-3 py-md-5 px-md-4">
                                    <div class="programs-img mb-5 position-relative">
                                        <div class="reg d-flex justify-content-center align-items-center">
                                            <p>REG</p>
                                        </div>
                                        <img src="https://admin103.forsgibpn.com/upload/program/<?= $program->image; ?>"
                                            class="img-fluid" alt="">
                                    </div>
                                    <h5 class="mb-4"><?= $program->content; ?></h5>
                                    <p><?= $program->deskripsi; ?></p>
                                    <div class="btn-informasi mt-5">
                                        <a class="mt-3 py-1 py-sm-2 px-3 rounded-pill"
                                            title="Klik untuk bertanya lebih detail" href="https://wa.wizard.id/611e7c"
                                            target="_blank">Informasi Lanjut</a>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="merchandise" id="merchandise">
    <img src="assets/imagenew/bg-merchandise.png" class="img-fluid bg" alt="">
    <div class="container container-header">
        <div class="text-header text-end">
            <h3>forsgi BALIKPAPAN <br><span>MERCHANDISE</span></h3>
        </div>
        <div class="row d-flex justify-content-end align-items-center">

            <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                <div class="slider-container">
                    <div class="produk-slider swiper-container py-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="swiper-wrapper">
                            <?php foreach ($merchandise as $mr) { ?>
                            <div class="swiper-slide">
                                <div class="merchandise-item">
                                    <div class="item-img">
                                        <img class="img-fluid"
                                            src="https://admin103.forsgibpn.com/upload/merchandise/<?= $mr->image; ?>"
                                            alt="">
                                    </div>
                                    <div class="item-content">
                                        <p><?= $mr->title; ?></p>
                                        <h4 class="mt-2">Rp. <?= number_format($mr->price, 0, ",", "."); ?></h4>
                                        <div class="btn-buy text-center mt-2">
                                            <a title="Klik untuk bertanya lebih detail"
                                                href="https://wa.wizard.id/611e7c" target="_blank">Beli Sekarang</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="gallery py-5">
    <div class="container py-5 px-lg-5">
        <div class="text-header text-center pb-4" data-aos="fade-up" data-aos="fade-up" data-aos-duration="2000">
            <h1>GALLERY KEGIATAN <br><span>FORSGI BALIKPAPAN</span></h1>
        </div>
        <div class="slider-container" data-aos="fade-up" data-aos="fade-up" data-aos-duration="2000">
            <div class="swiper-container gallery-slider">
                <div class="swiper-wrapper">
                    <?php foreach ($this->db->query("SELECT * FROM tbl_gallery ORDER BY id DESC")->result() as $gal) { ?>
                    <div class="swiper-slide">
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img class="img-fluid"
                                    src="https://admin103.forsgibpn.com/upload/gallery/<?= $gal->image; ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>

    </div>
</div>

<div class="management" id="pengurus">
    <img src="assets/imagenew/bg-management.png" class="img-fluid bg" alt="">
    <div class="container py-5">
        <div class="row justify-content-center" data-aos="fade-up" data-aos="fade-up" data-aos-duration="2000">
            <div class="col-lg-5">
                <div class="text-header">
                    <h1>KEPENGURUSAN FORSGI BALIKPAPAN</h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="slider-container" data-aos="fade-up" data-aos="fade-up" data-aos-duration="2000">
                    <div class="swiper-container management-slider">
                        <div class="swiper-wrapper">
                            <?php foreach ($kepengurusan as $k) { ?>
                            <div class="swiper-slide">
                                <div class="management-item text-center p-4">
                                    <div class="management-img">
                                        <img class="img-fluid"
                                            src="https://admin103.forsgibpn.com/upload/kepengurusan/<?= $k->image; ?>"
                                            alt="">
                                    </div>
                                    <div class="item-content mt-3">
                                        <h5><?= $k->nama; ?></h5>
                                        <p><?= $k->jabatan; ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>