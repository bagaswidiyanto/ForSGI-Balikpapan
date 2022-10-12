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
                                    <div class="box-img">
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
            <div class="col-lg-8">
                <div class="text-header text-center" data-aos="fade-up" data-aos="fade-up" data-aos-duration="2000">
                    <h3>program-program</h3>
                    <h2>forsgi BALIKPAPAN</h2>
                    <p>Memberikan pelatihan yang terpadu dan berkomitmen agar tetap disiplin dan memberikan yang terbaik
                        kepada
                        seluruh peserta SSB yang bergabung. materi pelatihan yang update to date dan berkualitas</p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <?php foreach ($program as $program) { ?>
            <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-4" data-aos="fade-up" data-aos="fade-up"
                data-aos-duration="2000">
                <div class="programs-item text-center">
                    <div class="programs-img mb-5 position-relative">
                        <div class="reg d-flex justify-content-center align-items-center">
                            <p>REG</p>
                        </div>
                        <img src="https://admin103.forsgibpn.com/upload/program/<?= $program->image; ?>"
                            class="img-fluid" alt="">
                    </div>
                    <h5 class="mb-4"><?= $program->content; ?></h5>
                    <p class="m-0"><?= $program->deskripsi; ?></p>
                    <div class="btn-informasi mt-5">
                        <a title="Klik untuk bertanya lebih detail" href="https://wa.wizard.id/48e782"
                            target="_blank">Informasi Lanjut</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

<div class="merchandise" id="merchandise">
    <img src="assets/imagenew/bg-merchandise.png" class="img-fluid bg" alt="">
    <div class="container">
        <div class="text-header text-end" data-aos="fade-up" data-aos="fade-up" data-aos-duration="2000">
            <h3>forsgi BALIKPAPAN <br><span>MERCHANDISE</span></h3>
        </div>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-5 col-md-5 col-sm-0 col-0" data-aos="fade-up" data-aos="fade-up"
                data-aos-duration="2000">
                <div class="slider-container">
                    <div class="swiper-container produk-slider">
                        <div class="swiper-wrapper">
                            <?php foreach ($merchandise as $mr) { ?>
                            <div class="swiper-slide">
                                <div class="produk-img text-center">
                                    <img class="img-fluid"
                                        src="https://admin103.forsgibpn.com/upload/merchandise/<?= $mr->image; ?>"
                                        alt="">
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                <div class="row">
                    <?php foreach ($this->db->query("SELECT * FROM tbl_our_merchandise ORDER BY id DESC LIMIT 6")->result() as $mr) { ?>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-6 mt-4" data-aos="fade-up" data-aos="fade-up"
                        data-aos-duration="2000">
                        <div class="merchandise-item">
                            <div class="item-img">
                                <img class="img-fluid"
                                    src="https://admin103.forsgibpn.com/upload/merchandise/<?= $mr->image; ?>" alt="">
                            </div>
                            <div class="item-content">
                                <p><?= $mr->title; ?></p>
                                <h4 class="mt-2">Rp. <?= number_format($mr->price, 0, ",", "."); ?></h4>
                                <div class="btn-buy text-center mt-2">
                                    <a title="Klik untuk bertanya lebih detail" href="https://wa.wizard.id/48e782"
                                        target="_blank">Beli Sekarang</a>
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

<div class="gallery py-5">
    <div class="container py-5 px-lg-5">
        <div class="text-header text-center pb-4" data-aos="fade-up" data-aos="fade-up" data-aos-duration="2000">
            <h3>GALLERY KEGIATAN <br><span>FORSGI BALIKPAPAN</span></h3>
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
            <div class="col-lg-4">
                <div class="text-header">
                    <h3>KEPENGURUSAN FORSGI BALIKPAPAN</h3>
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
                                <div class="management-item text-center">
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