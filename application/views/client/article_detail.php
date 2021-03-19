<section class="p-0 border-top border-bottom bg-light row no-gutters">
    <div class="col-lg-5 col-xl-6 order-lg-2">
        <div class="divider divider-side transform-flip-y bg-light d-none d-lg-block"></div>
        <img class="flex-fill" src="<?= base_url($article->img) ?>" alt="">
    </div>
    <div class="col-lg-7 col-xl-6">
        <div class="container min-vh-lg-70 d-flex align-items-center">
            <div class="row justify-content-center">
                <div class="col col-md-10 col-xl-9 py-4 py-sm-5">
                    <div class="my-4 my-md-5">
                        <h1 class="display-4">
                            <?= $article->judul ?>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-10">
                <article class="article">
                    <?= $article->artikel ?>
                </article>
            </div>
        </div>
    </div>
</section>
<section class="bg-light">
    <div class="container">
        <div class="row section-title justify-content-center text-center">
            <div class="col-md-9 col-lg-8 col-xl-7">
                <h3 class="h1">More great articles</h3>

            </div>
        </div>
        <div class="row">
            <?php foreach ($more_article as $m) { ?>
                <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
                    <div class="card h-100 hover-box-shadow">
                        <a href="#" class="d-block bg-gradient rounded-top">
                            <img class="card-img-top hover-fade-out" src="<?= base_url($m->img) ?>" alt="">
                        </a>
                        <div class="card-body">
                            <a href="#">
                                <h3><?= $m->judul ?></h3>
                            </a>
                            <p>
                                <?php
                                $this->load->helper('text');
                                echo character_limiter($m->artikel, 20) ?>
                            </p>
                            <a href="<?= base_url('article/' . $m->slug) ?>">Read Story</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>