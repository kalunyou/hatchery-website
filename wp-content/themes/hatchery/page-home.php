<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Hatchery</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <style>
    <?php include 'wp-content/themes/hatchery/assets/css/main.css' ?><?php include 'wp-content/themes/hatchery/assets/css/normalize.css' ?>
  </style>
</head>

<body id="home">

  <nav class="nav">
    <!-- TODO: tag nav-logo should be div?  -->
    <h2 class="nav-logo">
      <a href="./" class="nav-logo-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" width="224" height="24" alt="Hatchery" class="nav-logo-img" /></a>
    </h2>
    <ul class="nav-menu">
      <li class="nav-menu-item"><a href="about/" class="nav-menu-item-link">About Us</a></li>
      <li class="nav-menu-item"><a href="work/" class="nav-menu-item-link">Work</a></li>
      <li class="nav-menu-item"><a href="contact/" class="nav-menu-item-link">Contact</a></li>
    </ul>
  </nav>

  <section class="homehero">
    <div class="homehero-copy">
      <div class="homehero-copy-container">
        <p>Hatchery creates and delivers the most innovative opportunities for our global partners and clients.</p>
      </div>
    </div>
    <div class="homehero-video">
      <video autoplay muted loop src="<?php echo get_template_directory_uri(); ?>/assets/viedos/hatchery.mp4" poster="" class="homehero-video-source"></video>
    </div>
  </section>

  <div class="foreground">
    <object data="<?php echo get_template_directory_uri(); ?>/assets/images/foreground.svg?v=20190207" type="image/svg+xml" width="828" height="520" id="foreground"></object>
  </div>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/jquery-3.3.1.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>


</body>

</html>