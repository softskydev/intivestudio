<section class="pb-0">
    <div class="container">
        <div class="row">

            <?php foreach ($article as $a) { ?>
                <div class="col-md-6 col-lg-4 mb-3 mb-md-4 mb-lg-4">
                    <div class="card h-100 hover-box-shadow">
                        <div class="d-block bg-gradient rounded-top position-relative">
                            <img class="card-img-top hover-fade-out" style="width: 100%;height:200px;object-fit:cover;object-position:top" src="<?= $a->img ?>" alt="Image accompanying Circle testimonial">
                        </div>
                        <div class="card-body">
                            <h3><?= $a->judul ?></h3>
                            <p>
                                <?php
                                $this->load->helper('text');
                                echo character_limiter($a->artikel, 20) ?>
                            </p>
                            <a href="<?= base_url('article/' . $a->slug) ?>" class="stretched-link">Read Story</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<section class="pb-0">
    <div class="divider divider-bottom bg-primary-3 mt-5"></div>
</section>