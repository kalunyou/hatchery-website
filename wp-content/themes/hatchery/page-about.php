<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>About Us - Hatchery</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <style>
    <?php include 'wp-content/themes/hatchery/assets/css/main.css' ?><?php include 'wp-content/themes/hatchery/assets/css/normalize.css' ?>
  </style>

</head>

<body id="about">

  <nav class="nav">
    <!-- TODO: tag nav-logo should be div?  -->
    <h2 class="nav-logo">
      <a href="home/" class="nav-logo-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" width="224" height="24" alt="Hatchery" class="nav-logo-img" /></a>
    </h2>
    <ul class="nav-menu">
      <li class="nav-menu-item"><a href="about/" class="nav-menu-item-link -active">About Us</a></li>
      <li class="nav-menu-item"><a href="work/" class="nav-menu-item-link">Work</a></li>
      <li class="nav-menu-item"><a href="contact." class="nav-menu-item-link">Contact</a></li>
    </ul>
  </nav>

  <section class="pagehero">
    <div class="pagehero-image">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about.jpg" alt="Celebrity" class="pagehero-image-source">
    </div>
  </section>

  <section class="content">
    <!-- TODO: should fixed max height container, because after user can add text by wordpress it's container maybe larger & ruin page style -->
    <div class="content-container">
      <p>Hatchery Co., Ltd. is an entertainment agency based in Bangkok, Thailand. As your partner, we provide all‑around services including creating, planning, coordinating and managing. Our well‑defined products and processes are specially customised to meet your specific needs and goals.</p>
      <p>At Hatchery, we offer a wider range of contents in the Media and Entertainment Industry which cover regional and global markets.</p>
    </div>
  </section>

  <div class="background">
    <object data="<?php echo get_template_directory_uri(); ?>/assets/images/background.svg" type="image/svg+xml" width="1920" height="1324" id="background"></object>
  </div>

  <div class="foreground">
    <object data="<?php echo get_template_directory_uri(); ?>/assets/images/foreground.svg" type="image/svg+xml" width="946" height="520" id="foreground"></object>
  </div>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/jquery-3.3.1.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

</body>

</html>