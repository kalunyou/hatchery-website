<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Contact - Hatchery</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <style>
    <?php include 'wp-content/themes/hatchery/assets/css/main.css' ?><?php include 'wp-content/themes/hatchery/assets/css/normalize.css' ?>
  </style>

</head>

<body id="contact">

  <nav class="nav">
    <!-- TODO: tag nav-logo should be div?  -->
    <h2 class="nav-logo">
      <a href="home/" class="nav-logo-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" width="224" height="24" alt="Hatchery" class="nav-logo-img" /></a>
    </h2>
    <ul class="nav-menu">
      <li class="nav-menu-item"><a href="about/" class="nav-menu-item-link">About Us</a></li>
      <li class="nav-menu-item"><a href="work/" class="nav-menu-item-link">Work</a></li>
      <li class="nav-menu-item"><a href="contact/" class="nav-menu-item-link -active">Contact</a></li>
    </ul>
  </nav>

  <section class="pagehero">
    <div class="pagehero-image">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact.svg" width="1000" height="1000" alt="Map" class="pagehero-image-source">
    </div>
  </section>

  <section class="content">
    <div class="content-container">

      <section class="contactinfo">
        <p class="contactinfo-line">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/marker.svg" width="16" height="16" alt="Phone" class="contactinfo-icon">
          <a href="https://www.google.com/maps/place/Bangkok,%20Thailand" target="_blank" class="contactinfo-link">Bangkok, Thailand</a>
        </p>
        <p class="contactinfo-line">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/envelope.svg" width="16" height="16" alt="Phone" class="contactinfo-icon">
          <a href="mailto:admin@hatcheryth.com" target="_blank" class="contactinfo-link">admin@hatcheryth.com</a>
        </p>
      </section>

      <form method="post" action="./send/" class="contactform">
        <input type="text" name="name" placeholder="Name" class="contactform-textbox" required>
        <input type="email" name="email" placeholder="Email" class="contactform-textbox" required>
        <textarea name="message" placeholder="Message" class="contactform-textarea" required></textarea>
        <input type="submit" value="Send" class="contactform-button">
      </form>

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