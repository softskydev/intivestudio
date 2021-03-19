    <div class="o-hidden" data-overlay>
      <section class="pb-0">
        <div class="container">
          <div class="row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
            <div class="col-md-9 col-lg-6 col-xl-5 pl-lg-5 pl-xl-0 order-lg-2" data-aos="fade-left" data-aos-delay="250">
              <h1 class="display-3">Our Passion Is <mark data-aos="highlight-text" data-aos-delay="500">Your Solution</mark></h1>
              <p class="lead">
                Our passion is to scale up your business and ready to take-off against every challenging obstacle of disruption era </p>
            </div>
            <div class="col-md-8 col-lg-6 mt-4 mt-md-5 mt-lg-0 order-lg-1" data-aos="fade-right">
              <img src="assets/img/IMG-7093.jpg" alt="Image" class="rounded img-fluid shadow-lg">
            </div>
          </div>
        </div>
        <div class="position-absolute w-50 h-100 top right" data-jarallax-element="50">
          <div class="blob bg-primary opacity-20 w-100 h-100 top left"></div>
        </div>
        <div class="divider divider-bottom bg-primary-3"></div>
      </section>
    </div>
    <section class="bg-primary-3 text-white">
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
    <section class="bg-light">
      <div class="container">
        <div class="row section-title justify-content-center text-center">
          <div class="col-md-9 col-lg-8 col-xl-7">
            <div class="lead">These medias/brands have covered about us</div>
            <h3 class="display-4">See what they have to say</h3>


          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-xs-6 mb-lg-3">
            <center>
              <img src="<?= base_url() ?>assets/img/partner/cimb.jpg" alt="" height="100px">
            </center>
          </div>
          <div class="col-md-3 col-xs-6 mb-lg-3">
            <center>
              <img src="<?= base_url() ?>assets/img/partner/innocreativation.png" alt="" height="100px">
            </center>
          </div>
          <div class="col-md-3 col-xs-6 mb-lg-3">
            <center>
              <img src="<?= base_url() ?>assets/img/partner/kompas.png" alt="" height="100px">
            </center>
          </div>
          <div class="col-md-3 col-xs-6 mb-lg-3">
            <center>
              <img src="<?= base_url() ?>assets/img/partner/literoom.jpg" alt="" height="100px">
            </center>
          </div>
          <div class="col-md-3 col-xs-6 mb-lg-3">
            <center>
              <img src="<?= base_url() ?>assets/img/partner/pemkot.jpg" alt="" height="100px">
            </center>
          </div>
          <div class="col-md-3 col-xs-6 mb-lg-3">
            <center>
              <img src="<?= base_url() ?>assets/img/partner/roscoradio.png" alt="" height="100px">
            </center>
          </div>
          <div class="col-md-3 col-xs-6 mb-lg-3">
            <center>
              <img src="<?= base_url() ?>assets/img/partner/snss.jpg" alt="" height="100px">
            </center>
          </div>
          <div class="col-md-3 col-xs-6 mb-lg-3">
            <center>
              <img src="<?= base_url() ?>assets/img/partner/uc.png" alt="" height="100px">
            </center>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-primary pb-0 text-white">
      <div class="container">
        <div class="row section-title justify-content-center text-center">
          <div class="col-md-9 col-lg-8 col-xl-7">
            <h3 class="display-4">You’re in good company</h3>
            <div class="lead">Got a problem with digitizing your business? No worries, we’ll help
              you with every step of the way!</div>
          </div>
        </div>
        <!-- <div class="row justify-content-center">
          <div class="col-auto">
            <ul class="list-unstyled d-flex flex-wrap justify-content-center mb-0">
            <?php foreach ($customers as $c) : ?>
              <li class="my-3 mx-3 mx-lg-4">
                <img src="<?php echo base_url($c->img) ?>" alt="<?= $c->content ?>" style="height: 100px;width:auto">
              </li>
              <?php endforeach ?>

            </ul>
          </div>
        </div> -->
      </div>
      <div class="divider divider-bottom bg-primary-3"></div>
    </section>