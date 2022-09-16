<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Work - Hatchery</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <style>
    <?php include 'wp-content/themes/hatchery/assets/css/main.css' ?><?php include 'wp-content/themes/hatchery/assets/css/normalize.css' ?>
  </style>

</head>

<body id="work">

  <nav class="nav">
    <!-- TODO: tag nav-logo should be div?  -->
    <h2 class="nav-logo">
      <a href="home/" class="nav-logo-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" width="224" height="24" alt="Hatchery" class="nav-logo-img" /></a>
    </h2>
    <ul class="nav-menu">
      <li class="nav-menu-item"><a href="about/" class="nav-menu-item-link">About Us</a></li>
      <li class="nav-menu-item"><a href="work/" class="nav-menu-item-link -active">Work</a></li>
      <li class="nav-menu-item"><a href="contact/" class="nav-menu-item-link">Contact</a></li>
    </ul>
  </nav>

  <section class="work">
    <!-- TODO: tag work-list should be div?  -->
    <ul class="work-list">
      <!-- TODO: tag work-list-item should be div?  -->
      <li class="work-list-item">
        <div class="work-media">
          <ul class="work-media-list">
            <li class="work-media-list-item -active">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/101.jpg" alt="Ong Seong Wu" class="work-media-source">
            </li>
            <li class="work-media-list-item">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/102.jpg" alt="Ong Seong Wu" class="work-media-source">
            </li>
          </ul>
          <button class="work-media-button"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/chevron.svg" width="16" height="16" alt="Next" class="work-media-button-icon"></button>
        </div>
        <div class="work-info">
          <div class="work-info-container">
            <h2 class="work-info-header">ONG SEONG WU 1st Fan meeting in Singapore (ETERNITY)</h2>
            <!-- TODO: tag work-info-details should be div?  -->
            <h3 class="work-info-details">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/calendar.svg" width="16" height="16" alt="Date" class="work-info-details-icon">
              <span class="work-info-details-text">6 April 2019</span>
            </h3>
            <!-- TODO: should fixed max height container, because after user can add text by wordpress it's container maybe larger & ruin page style -->
            <div class="work-info-content">
              <p>South Korean singer and actor of Wanna One fame, Ong Seong Wu made his comeback to Singapore as a solo artist for Ong Seong Wu First Fan Meeting in Malaysia (Eternity) at Zepp @BigBox in Singapore, which saw 3,000 fans not only from Singapore but also places like Thailand, Malaysia and the Indonesia with Ong Seong Wu.</p>
              <p>This is the first ever fan meeting of Ong Seong Wu organised by Hatchery, a Thailand-based production and entertainment company. Singapore is the 3rd and final stop of the Eternity Tour.</p>
            </div>
          </div>
        </div>
      </li>
      <li class="work-list-item">
        <div class="work-media">
          <ul class="work-media-list">
            <li class="work-media-list-item -active">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/101.jpg" alt="Ong Seong Wu" class="work-media-source">
            </li>
            <li class="work-media-list-item">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/102.jpg" alt="Ong Seong Wu" class="work-media-source">
            </li>
          </ul>
          <button class="work-media-button"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/chevron.svg" width="16" height="16" alt="Next" class="work-media-button-icon"></button>
        </div>
        <div class="work-info">
          <div class="work-info-container">
            <h2 class="work-info-header">ONG SEONG WU 1st Fan meeting in Malaysia (ETERNITY)</h2>
            <h3 class="work-info-details">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/calendar.svg" width="16" height="16" alt="Date" class="work-info-details-icon">
              <span class="work-info-details-text">23 March 2019</span>
            </h3>
            <div class="work-info-content">
              <p>This is the first ever fan meeting tour in Asia organized by Bangkok based Hatchery for the very popular 23-year-old South Korean actor’s maiden tour called “Eternity”. Hatchery clinched the 3 city Asian tour that includes Singapore are expecting great response from Wannables and Ong’s super fans in Malaysia after having sold out its Bangkok show in just minutes after going on sale.</p>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </section>

  <div class="background">
    <object data="<?php echo get_template_directory_uri(); ?>/assets/images/background.svg" type="image/svg+xml" width="1920" height="1324" id="background"></object>
  </div>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/jquery-3.3.1.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

</body>

</html>