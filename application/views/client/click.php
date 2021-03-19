<style>
    :root {
        --swiper-theme-color: #009b72
    }
</style>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 isian">
                <style>
                    .isian img {
                        width: 100% !important;
                        height: auto !important;
                    }
                </style>
                <?php
                $query = $this->query->get_query("SELECT * FROM promo WHERE id = 1")->row();
                echo $query->isi;
                ?>
            </div>
        </div>
    </div>
</section>
<section class="pb-0" style="background: #dbdbdb;">
    <div class="container">
        <div class="row section-title justify-content-center text-center">
            <div class="col-md-9 col-lg-8 col-xl-7">
                <h3 class="display-4"><?= $footer['footer-1']['title'] ?></h3>
                <div class="lead"><?= $footer['footer-1']['content'] ?></div>
            </div>
        </div>
        <?php if ($footer['footer-1']['nb']) : ?>
            <div class="row justify-content-center text-center mt-md-n4">
                <div class="col-auto">
                    <a href="https://wa.me/6281252524177" target="_blank" class="btn btn-primary btn-lg"><?= $footer['footer-1']['nb'] ?></a>
                </div>
            </div>
        <?php endif ?>
    </div>
    <div class="divider divider-bottom mt-5"></div>
</section>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-sm-12">
                <div class="swiper-container" id="swiper_click" style="padding-left: 50px;padding-right:50px">

                    <div class="swiper-wrapper">
                        <?php
                        $slider = $this->query->get_data_simple("slider_promo", null)->result();
                        foreach ($slider as $s) {
                        ?>
                            <div class="swiper-slide">
                                <img src="<?= base_url() ?>assets/img/slider_promo/<?= $s->img_slider ?>" alt="" style="width: 100%;">
                            </div>

                        <?php } ?>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </div>
</section>