<section class="p-0 border-top border-bottom row no-gutters">
  <div class="col-lg-7 col-xl-6">
    <div class="container min-vh-lg-80 d-flex align-items-center">
      <div class="row justify-content-center">
        <div class="col col-md-10 col-xl-9 text-center text-lg-left">
          <section>
            <div data-aos="fade-right">
              <h1 class="display-3">
                <?php $spword = explode(' ', $headers['home-header-1']['title'], 4);
                echo $spword[0];
                ?>
                <mark data-aos="highlight-text" data-aos-delay="200"><?= $spword[1] . ' ' . $spword[2] ?></mark>
                <?= $spword[3] ?>
              </h1>
              <p class="lead"><?= $headers['home-header-1']['content'] ?></p>
            </div>
            <div class="d-flex flex-column flex-sm-row mt-4 mt-md-5 justify-content-center justify-content-lg-start" data-aos="fade-right" data-aos-delay="300">
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-5 col-xl-6 d-lg-flex flex-lg-column">
    <div class="divider divider-side transform-flip-y bg-white d-none d-lg-block"></div>
    <div class="d-lg-flex flex-column flex-fill controls-hover" data-flickity='{ "imagesLoaded": true, "wrapAround":true, "pageDots":false, "autoPlay":true }'>
      <?php foreach ($carousel as $car) : ?>
        <div class="carousel-cell text-center">
          <img class="img-fluid" src="<?= $car->src ?>" alt="Image">
        </div>
      <?php endforeach ?>
    </div>
  </div>
</section>
<section class="bg-light o-hidden">
  <div class="container">
    <div class="row section-title justify-content-center text-center">
      <div class="col-md-9 col-lg-8 col-xl-7">
        <h2 class="display-4"><?= $headers['home-header-2']['title'] ?></h2>
        <div class="lead"><?= $headers['home-header-2']['content'] ?></div>
      </div>
    </div>
    <div class="row align-items-center justify-content-around">
      <div class="col-md-9 col-lg-5" data-aos="fade-in">
        <img src="<?= base_url($image['img-home-1']['src']) ?>" alt="Image" class="img-fluid rounded shadow">
      </div>
      <div class="col-md-9 col-lg-6 col-xl-5 mt-4 mt-md-5 mt-lg-0">
        <ol class="list-unstyled p-0">
          <?php foreach ($step as $st => $s) : ?>
            <li class="d-flex align-items-start my-4 my-md-5">
              <div class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-success">
                <div class="position-absolute text-white h5 mb-0"><?= $st + 1 ?></div>
              </div>
              <div class="ml-3 ml-md-4">
                <h4><?= $s->header ?></h4>
                <p>
                  <?= $s->body ?>
                </p>
                <?php if ($s->url and $s->url_string) : ?>
                  <a href="<?= $s->url ?>"><?= $s->url_string ?></a>
                <?php endif ?>
              </div>
            </li>
          <?php endforeach ?>
        </ol>
      </div>
    </div>
  </div>
</section>
<section class="p-0 bg-light">
  <div class="container">
    <div class="row align-items-center justify-content-around">
      <div class="col-md-9 col-lg-6 col-xl-5 mb-4 mb-md-5 mb-lg-0 pl-lg-5 pl-xl-0">
        <div class="text-center text-lg-left">
          <h2 class="h1"><?= $headers['home-header-3']['title'] ?></h2>
          <p class="lead"><?= $headers['home-header-3']['content'] ?></p>
        </div>
      </div>
      <div class="col-md-9 col-lg-5" data-aos="fade-in">
        <img src="<?= base_url($image['img-home-2']['src']) ?>" alt="Image" class="img-fluid rounded shadow">
      </div>

    </div>
  </div>
  <div class="divider divider-bottom bg-white"></div>
</section>
<section>
  <div class="container">
    <div class="row section-title justify-content-center text-center">
      <div class="col-md-9 col-lg-8 col-xl-7">
        <?php $spword = explode(' ', $headers['home-header-4']['title'], 3) ?>
        <h3 class="display-4"><?= $spword[0] ?> <mark data-aos="highlight-text" data-aos-delay="300"><?= $spword[1] ?> </mark> <?= @$spword[2] ?> </h3>
        <div class="lead"><?= $headers['home-header-4']['content'] ?></div>
      </div>
    </div>
    <div class="row">
      <?php $limit = count($clients) > 3 ? 3 : count($clients) ?>
      <?php for ($i = 0; $i < $limit; $i++) : ?>
        <div class="col-md-6 col-lg-4 mb-3 mb-md-4 mb-lg-0">
          <div class="card h-100 hover-box-shadow">
            <div class="d-block bg-gradient rounded-top position-relative">
              <img class="card-img-top hover-fade-out" src="<?= $clients[$i]->img ?>" alt="Image accompanying Circle testimonial">
              <div class="badge badge-light">
                <img src="<?= $clients[$i]->logo ?>" alt="<?= $clients[$i]->name ?> company logo" class="icon icon-sm m-lg-1">
              </div>
            </div>
            <div class="card-body">
              <h3><?= $clients[$i]->name ?></h3>
              <p>
                <?= $clients[$i]->content ?>
              </p>
              <a href="<?= base_url('client/' . str_replace(' ', '-', $clients[$i]->name)) ?>" class="stretched-link">Read Story</a>
            </div>
          </div>
        </div>
      <?php endfor ?>
    </div>
  </div>
</section>
<section class="bg-primary-3 pt-0 text-white">
  <div class="divider divider-top transform-flip-x bg-white"></div>
  <div class="container">
    <div class="row section-title justify-content-center text-center">
      <div class="col-md-9 col-lg-8 col-xl-7">
        <h3 class="display-4"><?= $headers['home-header-5']['title'] ?></h3>
        <div class="lead"><?= $headers['home-header-5']['content'] ?></div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-xl-9 col-lg-10">
        <div class="row justify-content-center">
          <?php $limit = count($feature) < 6 ? count($feature) : 6; ?>
          <?php for ($i = 0; $i < $limit; $i++) : ?>
            <div class="col-md-6 mb-3 mb-md-4" data-aos="fade-up" data-aos-delay="10">
              <div class="card card-body bg-white min-vh-md-30 hover-box-shadow">
                <div class="flex-fill">
                  <h4 class="h3"><?= ucwords($feature[$i]->name) ?></h4>
                  <p><?= $feature[$i]->content ?></p>
                </div>
                <a href="<?= $feature[$i]->url ?>" class="stretched-link">Learn More</a>
              </div>
            </div>
          <?php endfor; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="bg-primary text-white">
  <div class="container">
    <div class="row section-title justify-content-center text-center">
      <div class="col-md-12 col-lg-12 col-xl-12">
        <h3 class="display-4" style="font-size: 2.5rem !important;"><?= $headers['home-header-6']['title'] ?></h3>
        <div class="lead"><?= $headers['home-header-6']['content'] ?></div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col d-flex flex-wrap justify-content-center">
        <?php foreach ($customers as $c) : ?>
          <style>
            .brand img {
              filter: grayscale(100%);
            }
          </style>
          <div class="m-2 brand">
            <img src="<?php echo base_url($c->img) ?>" alt="<?= $c->content ?>" style="max-height: 50px;min-height:35px;max-width:150px;width:auto">
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </div>
</section>
<section class="pb-0">
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
  <div class="divider divider-bottom bg-primary-3 mt-5"></div>
</section>