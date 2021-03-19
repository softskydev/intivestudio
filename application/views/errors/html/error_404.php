<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Jumpstart SaaS App & Software Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootstrap HTML template and UI kit by Medium Rare">
    <!-- Begin loading animation -->
    <link href="<?php echo config_item('base_url').'assets/css/loaders/loader-pulse.css' ?>" rel="stylesheet" type="text/css" media="all" />
    <!-- End loading animation -->
    <link href="<?php echo config_item('base_url').'assets/css/theme.css' ?>" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,400i,600,700&display=swap" rel="stylesheet">
  </head>

  <body>
    <div class="loader">
      <div class="loading-animation"></div>
    </div>

    <section class="bg-primary-3 text-white p-0 o-hidden">
      <div class="container min-vh-100 d-flex flex-column justify-content-between text-center py-4 py-md-5">
        <a href="index.html" class="fade-page">
          <img src="<?= config_item('base_url') ?>assets/img/logos/jumpstart.svg" alt="Jumpstart" class="bg-white" data-inject-svg>
        </a>
        <div class="my-5">
          <div class="row justify-content-center">
            <div class="col-5 mb-4">
              <img src="<?= config_item('base_url') ?>assets/img/illustrations/illustration-4.svg" alt="404 Page Not Found" class="img-fluid">
            </div>
            <div class="col-12">
              <h1>404 - Page Not Found</h1>
              <div class="lead">Whoops, it looks like the page you request wasn't found.</div>
            </div>
          </div>
        </div>
        <div>
          <a href="/" class="btn btn-sm btn-outline-light fade-page">Back to Home</a>
        </div>
      </div>
    </section>

    <a href="#top" class="btn btn-primary rounded-circle btn-back-to-top" data-smooth-scroll data-aos="fade-up" data-aos-offset="2000" data-aos-mirror="true" data-aos-once="false">
      <img src="<?= config_item('base_url') ?>assets/img/icons/interface/icon-arrow-up.svg" alt="Icon" class="icon bg-white" data-inject-svg>
    </a>
    <!-- Required vendor scripts (Do not remove) -->
    <script type="text/javascript" src="<?php echo config_item('base_url').'assets/js/jquery.min.js' ?>"></script>
    <script type="text/javascript" src="<?php echo config_item('base_url').'assets/js/popper.min.js' ?>"></script>
    <script type="text/javascript" src="<?php echo config_item('base_url').'assets/js/bootstrap.js' ?>"></script>

    <!-- Optional Vendor Scripts (Remove the plugin script here and comment initializer script out of index.js if site does not use that feature) -->

    <!-- AOS (Animate On Scroll - animates elements into view while scrolling down) -->
    <script type="text/javascript" src="<?php echo config_item('base_url').'assets/js/aos.js' ?>"></script>
    <!-- Clipboard (copies content from browser into OS clipboard) -->
    <script type="text/javascript" src="<?php echo config_item('base_url').'assets/js/clipboard.min.js' ?>"></script>
    <!-- Fancybox (handles image and video lightbox and galleries) -->
    <script type="text/javascript" src="<?php echo config_item('base_url').'assets/js/jquery.fancybox.min.js' ?>"></script>
    <!-- Flatpickr (calendar/date/time picker UI) -->
    <script type="text/javascript" src="<?php echo config_item('base_url').'assets/js/flatpickr.min.js' ?>"></script>
    <!-- Flickity (handles touch enabled carousels and sliders) -->
    <script type="text/javascript" src="<?php echo config_item('base_url').'assets/js/flickity.pkgd.min.js' ?>"></script>
    <!-- Ion rangeSlider (flexible and pretty range slider elements) -->
    <script type="text/javascript" src="<?php echo config_item('base_url').'assets/js/ion.rangeSlider.min.js' ?>"></script>
    <!-- Isotope (masonry layouts and filtering) -->
    <script type="text/javascript" src="<?php echo config_item('base_url').'assets/js/isotope.pkgd.min.js' ?>"></script>
    <!-- jarallax (parallax effect and video backgrounds) -->
    <script type="text/javascript" src="<?php echo config_item('base_url').'assets/js/jarallax.min.js' ?>"></script>
    <script type="text/javascript" src="<?php echo config_item('base_url').'assets/js/jarallax-video.min.js' ?>"></script>
    <script type="text/javascript" src="<?php echo config_item('base_url').'assets/js/jarallax-element.min.js' ?>"></script>
    <!-- jQuery Countdown (displays countdown text to a specified date) -->
    <script type="text/javascript" src="<?php echo config_item('base_url').'assets/js/jquery.countdown.min.js' ?>"></script>
    <!-- jQuery smartWizard facilitates steppable wizard content -->
    <script type="text/javascript" src="<?php echo config_item('base_url').'assets/js/jquery.smartWizard.min.js' ?>"></script>
    <!-- Plyr (unified player for Video, Audio, Vimeo and Youtube) -->
    <script type="text/javascript" src="<?php echo config_item('base_url').'assets/js/plyr.polyfilled.min.js' ?>"></script>
    <!-- Prism (displays formatted code boxes) -->
    <script type="text/javascript" src="<?php echo config_item('base_url').'assets/js/prism.js' ?>"></script>
    <!-- ScrollMonitor (manages events for elements scrolling in and out of view) -->
    <script type="text/javascript" src="<?php echo config_item('base_url').'assets/js/scrollMonitor.js' ?>"></script>
    <!-- Smooth scroll (animation to links in-page)-->
    <script type="text/javascript" src="<?php echo config_item('base_url').'assets/js/smooth-scroll.polyfills.min.js' ?>"></script>
    <!-- SVGInjector (replaces img tags with SVG code to allow easy inclusion of SVGs with the benefit of inheriting colors and styles)-->
    <script type="text/javascript" src="<?php echo config_item('base_url').'assets/js/svg-injector.umd.production.js' ?>"></script>
    <!-- TwitterFetcher (displays a feed of tweets from a specified account)-->
    <script type="text/javascript" src="<?php echo config_item('base_url').'assets/js/twitterFetcher_min.js' ?>"></script>
    <!-- Typed text (animated typing effect)-->
    <script type="text/javascript" src="<?php echo config_item('base_url').'assets/js/typed.min.js' ?>"></script>
    <!-- Required theme scripts (Do not remove) -->
    <script type="text/javascript" src="<?php echo config_item('base_url').'assets/js/theme.js' ?>"></script>
    <!-- Removes page load animation when window is finished loading -->
    <script type="text/javascript">
      window.addEventListener("load",function(){document.querySelector('body').classList.add('loaded');});
    </script>

  </body>

</html>
