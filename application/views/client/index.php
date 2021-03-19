<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title><?= @$seo ? @$seo['title'] : 'Intive Studio' ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= @$seo['desc'] ?>">
  <meta name="keyword" content="<?= @$seo['keyword'] ?>">
  <!-- Global site tag (gtag.js) - Google Ads: 454293007 -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-454293007"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'AW-454293007');
  </script>
  <!-- Facebook Pixel Code -->
  <script>
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '958629417876890');
    fbq('track', 'PageView');
  </script>
  <noscript>
    <img height="1" width="1" src="https://www.facebook.com/tr?id=958629417876890&ev=PageView
  &noscript=1" />
  </noscript>
  <!-- End Facebook Pixel Code -->
  <link rel="icon" href="<?= base_url() ?>assets/img/favicon.ico">

  <!-- Begin loading animation -->
  <link href="<?php echo base_url('assets/css/loaders/loader-pulse.css') ?>" rel="stylesheet" type="text/css" media="all" />
  <!-- End loading animation -->
  <link href="<?php echo base_url('assets/css/custom.css') ?>?<?php echo date('l jS \of F Y h:i:s A') ?>" rel="stylesheet" type="text/css" media="all" />
  <link href="<?php echo base_url('assets/css/theme.css') ?>?<?php echo date('l jS \of F Y h:i:s A') ?>" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-178253760-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-178253760-1');
  </script>

</head>

<body>
  <div class="loader">
    <div class="loading-animation"></div>
  </div>
  <!-- <div class="alert alert-dismissible d-none d-md-block bg-primary-3 text-white py-4 py-md-3 px-0 mb-0 rounded-0 border-0">
    <div class="container">
        <div class="row no-gutters align-items-md-center justify-content-center">
            <div class="col-lg-11 col-md d-flex flex-column flex-md-row align-items-md-center justify-content-lg-center">
                <div class="mb-3 mb-md-0"><strong>Intro Sale</strong> $10 per license for Jumpstart's launch. Act fast, ends soon.</div>
                <a class="btn btn-sm btn-success ml-md-3" target="_blank" href=#>Redeem Offer</a>
            </div>
            <div class="col-auto position-absolute right">
                <button type="button" class="close p-0 position-relative" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">
                        <img src="assets/img/icons/interface/icon-x.svg" alt="Close" class="icon icon-sm bg-white" data-inject-svg>
                    </span>
                </button>
            </div>
        </div>
    </div>
  </div> -->
  <!-- <div class="navbar-container">
    <nav class="navbar navbar-expand-lg navbar-light" data-sticky="top">
      <div class="container">
        <a class="navbar-brand navbar-brand-dynamic-color fade-page" href="<?= base_url() ?>">
          <img alt="Intive Studio" src="<?= base_url('assets/img/logos/intive.png') ?>" style="height: 75px;">
        </a>
        <div class="d-flex align-items-center order-lg-3">
          <a href="#" class="btn btn-primary ml-lg-4 mr-3 mr-md-4 mr-lg-0 d-none d-sm-block order-lg-3">Contact Us</a>
          <button aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target=".navbar-collapse" data-toggle="collapse" type="button">
            <img alt="Navbar Toggler Open Icon" class="navbar-toggler-open icon icon-sm" data-inject-svg src="<?= base_url('assets/img/icons/interface/icon-menu.svg') ?>">
            <img alt="Navbar Toggler Close Icon" class="navbar-toggler-close icon icon-sm" data-inject-svg src="<?= base_url('assets/img/icons/interface/icon-x.svg') ?>">
          </button>
        </div>
        <div class="collapse navbar-collapse order-3 order-lg-2 justify-content-lg-end" id="navigation-menu">
          <ul class="navbar-nav my-3 my-lg-0">
            <li class="nav-item">
              <a class="nav-link nav-item" href="<?= base_url() ?>">Home</a>
              <a class="nav-link nav-item" href="<?= base_url('client') ?>">Works</a>
              <a class="nav-link nav-item" href="<?= base_url('client') ?>">About</a>
              <a class="nav-link nav-item" href="<?= base_url('client') ?>">Article</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div> -->
  <div class="navbar-container" style="min-height: 80px;">
    <nav class="navbar navbar-expand-lg navbar-light position-fixed" data-sticky="top" style="top: 0px;">
      <div class="container" style="padding-left:unset;padding-right:unset">
        <a class="navbar-brand navbar-brand-dynamic-color fade-page" href="<?= base_url() ?>">
          <img alt="Intive Studio" src="<?= base_url('assets/img/logos/intive.png') ?>" class="logo" style="height: 50px;">
        </a>
        <div class="d-flex align-items-center order-lg-3">
          <a href="https://wa.me/6281252524177" target="_blank" class="btn btn-primary ">Contact Us</a>
          <button aria-expanded="true" <?php if ($this->uri->segment(1) == "promowebsite") {
                                          echo 'style="display:none"';
                                        } ?> aria-label="Toggle navigation" class="navbar-toggler" data-target=".navbar-collapse" data-toggle="collapse" type="button">
            <i class="fa fa-bars"></i>
          </button>
        </div>
        <div class="collapse navbar-collapse order-3 order-lg-2 justify-content-lg-end" id="navigation-menu">
          <ul class="navbar-nav my-3 my-lg-0">
            <a class="nav-link nav-item" <?php if ($this->uri->segment(1) == "promowebsite") {
                                            echo 'style="display:none"';
                                          } ?> href="<?= base_url() ?>">Home</a>
            <a class="nav-link nav-item" <?php if ($this->uri->segment(1) == "promowebsite") {
                                            echo 'style="display:none"';
                                          } ?> href="<?= base_url('client') ?>">Works</a>
            <a class="nav-link nav-item" <?php if ($this->uri->segment(1) == "promowebsite") {
                                            echo 'style="display:none"';
                                          } ?> href="<?= base_url('about') ?>">About</a>
            <a class="nav-link nav-item" <?php if ($this->uri->segment(1) == "promowebsite") {
                                            echo 'style="display:none"';
                                          } ?> href="<?= base_url('article') ?>">Article</a>
            <!-- <a class="nav-link nav-item" href="<?= base_url('client') ?>">Article</a> -->
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <?= $content ?>

  <footer class="bg-primary-3 text-white links-white pb-4 footer-1">
    <div class="container">
      <div class="row">
        <div class="col mt-4 mt-md-0 mt-lg-5 mt-xl-0 order-lg-4 order-xl-3">
          <h5>Our Works</h5>
          <ul class="list-unstyled d-flex flex-wrap">
            <?php $limit = count($clients) > 3 ? 3 : count($clients) ?>
            <?php for ($i = 0; $i < $limit; $i++) : ?>
              <li class="col-12 col-lg-6 col-xl-12 px-0">
                <div class="row my-2 my-md-3">
                  <a class="col-5" href="<?= base_url('client/' . str_replace(' ', '-', $clients[$i]->name)) ?>">
                    <img class="rounded img-fluid hover-fade-out" src="<?= base_url() . '/' . $clients[$i]->img ?>" alt="blog.1.image">
                  </a>
                  <div class="col">
                    <a class="h6" href="<?= base_url('client/' . str_replace(' ', '-', $clients[$i]->name)) ?>"><?= $clients[$i]->name ?></a>
                    <?php
                    if (strlen($clients[$i]->content) > 60) {
                      $st = '...';
                    } else {
                      $st = '';
                    }

                    ?>
                    <div class="text-small text-muted mt-2"><?= substr($clients[$i]->content, 0, 60)  ?><?= $st ?></div>
                  </div>
                </div>
              </li>
            <?php endfor ?>
          </ul>
        </div>
        <div class="col-lg mt-2 mt-md-5 mt-lg-0 order-lg-3 order-xl-4">
          <h5>Newsletter</h5>
          <div class="card card-body bg-white">
            <p>Get a bi-weekly digest of great articles</p>
            <form data-form-email novalidate action="/forms/mailchimp.php">
              <div class="d-flex flex-column flex-sm-row form-group">
                <input class="form-control mr-sm-2 mb-2 mb-sm-0 w-auto flex-grow-1" name="email" placeholder="Email Address" type="email" required>
                <button type="submit" class="btn btn-primary btn-loading" data-loading-text="Sending">
                  <!-- Icon for loading animation -->
                  <svg class="icon bg-white" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>Icon For Loading</title>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g>
                        <polygon points="0 0 24 0 24 24 0 24" opacity="0"></polygon>
                      </g>
                      <path d="M12,4 L12,6 C8.6862915,6 6,8.6862915 6,12 C6,15.3137085 8.6862915,18 12,18 C15.3137085,18 18,15.3137085 18,12 C18,10.9603196 17.7360885,9.96126435 17.2402578,9.07513926 L18.9856052,8.09853149 C19.6473536,9.28117708 20,10.6161442 20,12 C20,16.418278 16.418278,20 12,20 C7.581722,20 4,16.418278 4,12 C4,7.581722 7.581722,4 12,4 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 12.000000) scale(-1, 1) translate(-12.000000, -12.000000) "></path>
                    </g>
                  </svg>
                  <span>Go</span>
                </button>
              </div>
              <div data-recaptcha data-sitekey="INSERT_YOUR_RECAPTCHA_V2_SITEKEY_HERE" data-size="invisible" data-badge="bottomleft"></div>
              <div class="d-none alert alert-success w-100" role="alert" data-success-message>
                Thanks, a member of our team will be in touch shortly.
              </div>
              <div class="d-none alert alert-danger w-100" role="alert" data-error-message>
                Please fill all fields correctly.
              </div>
              <div class="text-small text-muted">We'll never share your email address</div>
            </form>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <hr>
        </div>
      </div>
      <div class="row flex-column flex-lg-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
        <div class="col-auto">
          <div class="d-flex flex-column flex-sm-row align-items-center text-small">
            <div class="text-muted">&copy; <?= date('Y') ?> Page protected by reCAPTCHA and subject to Google's <a href="https://www.google.com/policies/privacy/" target="_blank">Privacy Policy</a> and <a href="https://policies.google.com/terms" target="_blank">Terms of Service</a>
            </div>
          </div>
        </div>
        <div class="col-auto mt-3 mt-lg-0">
          <ul class="list-unstyled d-flex mb-0">
            <li class="mx-3">
              <a href="#" class="hover-fade-out">
                <img src="assets/img/icons/social/dribbble.svg" alt="Dribbble" class="icon icon-xs bg-white" data-inject-svg>
              </a>
            </li>
            <li class="mx-3">
              <a href="#" class="hover-fade-out">
                <img src="assets/img/icons/social/twitter.svg" alt="Twitter" class="icon icon-xs bg-white" data-inject-svg>
              </a>
            </li>
            <li class="mx-3">
              <a href="#" class="hover-fade-out">
                <img src="assets/img/icons/social/github.svg" alt="Github" class="icon icon-xs bg-white" data-inject-svg>
              </a>
            </li>
            <li class="mx-3">
              <a href="#" class="hover-fade-out">
                <img src="assets/img/icons/social/facebook.svg" alt="Facebook" class="icon icon-xs bg-white" data-inject-svg>
              </a>
            </li>
            <li class="mx-3">
              <a href="#" class="hover-fade-out">
                <img src="assets/img/icons/social/google.svg" alt="Google" class="icon icon-xs bg-white" data-inject-svg>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <a href="#top" class="btn btn-primary rounded-circle btn-back-to-top" data-smooth-scroll data-aos="fade-up" data-aos-offset="2000" data-aos-mirror="true" data-aos-once="false">
    <img src="assets/img/icons/interface/icon-arrow-up.svg" alt="Icon" class="icon bg-white" data-inject-svg>
  </a>
  <!-- Required vendor scripts (Do not remove) -->
  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>

  <!-- Optional Vendor Scripts (Remove the plugin script here and comment initializer script out of index.js if site does not use that feature) -->

  <!-- AOS (Animate On Scroll - animates elements into view while scrolling down) -->
  <script type="text/javascript" src="<?php echo base_url('assets/js/aos.js') ?>"></script>
  <!-- Clipboard (copies content from browser into OS clipboard) -->
  <script type="text/javascript" src="<?php echo base_url('assets/js/clipboard.min.js') ?>"></script>
  <!-- Fancybox (handles image and video lightbox and galleries) -->
  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.fancybox.min.js') ?>"></script>
  <!-- Flatpickr (calendar/date/time picker UI) -->
  <script type="text/javascript" src="<?php echo base_url('assets/js/flatpickr.min.js') ?>"></script>
  <!-- Flickity (handles touch enabled carousels and sliders) -->
  <script type="text/javascript" src="<?php echo base_url('assets/js/flickity.pkgd.min.js') ?>"></script>
  <!-- Ion rangeSlider (flexible and pretty range slider elements) -->
  <script type="text/javascript" src="<?php echo base_url('assets/js/ion.rangeSlider.min.js') ?>"></script>
  <!-- Isotope (masonry layouts and filtering) -->
  <script type="text/javascript" src="<?php echo base_url('assets/js/isotope.pkgd.min.js') ?>"></script>
  <!-- jarallax (parallax effect and video backgrounds) -->
  <script type="text/javascript" src="<?php echo base_url('assets/js/jarallax.min.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/jarallax-video.min.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/jarallax-element.min.js') ?>"></script>
  <!-- jQuery Countdown (displays countdown text to a specified date) -->
  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.countdown.min.js') ?>"></script>
  <!-- jQuery smartWizard facilitates steppable wizard content -->
  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.smartWizard.min.js') ?>"></script>
  <!-- Plyr (unified player for Video, Audio, Vimeo and Youtube) -->
  <script type="text/javascript" src="<?php echo base_url('assets/js/plyr.polyfilled.min.js') ?>"></script>
  <!-- Prism (displays formatted code boxes) -->
  <script type="text/javascript" src="<?php echo base_url('assets/js/prism.js') ?>"></script>
  <!-- ScrollMonitor (manages events for elements scrolling in and out of view) -->
  <script type="text/javascript" src="<?php echo base_url('assets/js/scrollMonitor.js') ?>"></script>
  <!-- Smooth scroll (animation to links in-page)-->
  <script type="text/javascript" src="<?php echo base_url('assets/js/smooth-scroll.polyfills.min.js') ?>"></script>
  <!-- SVGInjector (replaces img tags with SVG code to allow easy inclusion of SVGs with the benefit of inheriting colors and styles)-->
  <script type="text/javascript" src="<?php echo base_url('assets/js/svg-injector.umd.production.js') ?>"></script>
  <!-- TwitterFetcher (displays a feed of tweets from a specified account)-->
  <script type="text/javascript" src="<?php echo base_url('assets/js/twitterFetcher_min.js') ?>"></script>
  <!-- Typed text (animated typing effect)-->
  <script type="text/javascript" src="<?php echo base_url('assets/js/typed.min.js') ?>"></script>
  <!-- Required theme scripts (Do not remove) -->
  <script type="text/javascript" src="<?php echo base_url('assets/js/theme.js') ?>"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <!-- Removes page load animation when window is finished loading -->
  <script type="text/javascript">
    window.addEventListener("load", function() {
      document.querySelector('body').classList.add('loaded');
    });

    var mySwiper = new Swiper('#swiper_click', {
      // Optional parameters
      loop: true,
      slidesPerView: 1,
      autoplay: true,
      disableOnInteraction: false,
      spaceBetween: 75,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

    })
  </script>

</body>

</html>