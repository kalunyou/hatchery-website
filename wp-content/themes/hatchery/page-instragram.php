<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
    <?php include 'wp-content/themes/hatchery/assets/css/style.css' ?>
  </style>
  <title>Workshop1-Flex</title>
</head>

<body>
  <div class="top-bar">
    <div class="top-bar-item">
      <img src="<?php the_field('logo') ?>" width="100" height="28" id="logo" />
      <input type="text" placeholder="Search" id="search" />
      <div class="menu">
        <?php if (have_rows('menu')) : the_row() ?>
          <img src="<?php the_sub_field('icon1'); ?>" height="25" width="25" />
          <img src="<?php the_sub_field('icon2'); ?>" height="25" width="25" />
          <img src="<?php the_sub_field('icon3'); ?>" height="25" width="25" />
          <img src="<?php the_sub_field('icon4'); ?>" height="25" width="25" />
          <img src="<?php the_sub_field('icon5'); ?>" height="25" width="25" />
          <img src="<?php the_sub_field('profile'); ?>" height="25" width="25" id="profile" />
      </div>
    <?php endif; ?>
    </div>
  </div>
  <div class="container">
    <div class="feed">
      <div class="story">
        <div class="story-item">
          <?php $images = get_field('story');
          ?>
          <?php foreach ($images as $value) : ?>
            <div class="story-detail">
              <img src="<?= $value; ?>" width="75" height="75">
              <span>Jiggo</span>
            </div>
          <?php
          endforeach;
          ?>
        </div>
      </div>
      <div class="post">
        <?php while (have_rows('posts')) : the_row(); ?>
          <div class="post-item">
            <div class="post-profile">
              <img src="<?php the_sub_field('profile-pic') ?>" width="40" height="40" id="profile" />
              <div class="account-detail-post">
                <span id="acc-name"><?php the_sub_field('account-name') ?></span>
                <span id="acc-bio"><?php the_sub_field('location') ?></span>
              </div>
            </div>
            <div class="post-pic">
              <img src="<?php the_sub_field('post-image') ?>" width="100%" />
            </div>
            <div class="post-action">
              <div class="post-action-group">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/heart.png" width="25" height="25" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/comment.png" width="25" height="25" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/paper-plane.png" width="25" height="25" />
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bookmark.png" width="25" height="25" />
            </div>
            <hr id="section-line" />
            <div class="post-comment">
              <div class="post-comment-action">
                <div class="post-comment-input">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/smile-beam.png" width="25" height="25" />
                  <input type="text" placeholder="Add a comment..." id="post" />
                </div>
                <button id="post">Post</button>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
    <div class="suggestions">
      <div class="account-swt">
        <img src="./images/301375987_1143419516254843_1120587938116159725_n.jpg" width="60" height="60" id="profile-acc-swt" />
        <div class="account">
          <div class="account-detail">
            <span id="acc-name">JoodMorning</span>
            <span id="acc-bio">Jood</span>
          </div>
          <button id="swt-btn">Switch</button>
        </div>
      </div>
      <div class="acc-suggestions">
        <div class="suggess-txt">
          <h4>Suggestions For You</h4>
          <button id="suggess-btn">See All</button>
        </div>
        <div class="suggess-acc-item">
          <img src="./images/301543093_1546737722421490_7556045845933081424_n.jpg" width="35" height="35" />
          <div class="account-sgt">
            <div class="account-sgt-detail">
              <span id="acc-sgt-name">Ford</span>
              <span id="acc-follow">Followed by ... + 7 more</span>
            </div>
            <button id="follow-btn">Follow</button>
          </div>
        </div>
        <div class="suggess-acc-item">
          <img src="./images/301543093_1546737722421490_7556045845933081424_n.jpg" width="35" height="35" />
          <div class="account-sgt">
            <div class="account-sgt-detail">
              <span id="acc-sgt-name">Ford</span>
              <span id="acc-follow">Followed by ... + 7 more</span>
            </div>
            <button id="follow-btn">Follow</button>
          </div>
        </div>
        <div class="suggess-acc-item">
          <img src="./images/301543093_1546737722421490_7556045845933081424_n.jpg" width="35" height="35" />
          <div class="account-sgt">
            <div class="account-sgt-detail">
              <span id="acc-sgt-name">Ford</span>
              <span id="acc-follow">Followed by ... + 7 more</span>
            </div>
            <button id="follow-btn">Follow</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>