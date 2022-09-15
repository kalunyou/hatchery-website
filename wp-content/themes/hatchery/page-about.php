<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?php the_field('header_title'); ?></h1>
    <h1><?= the_field('header_title'); ?></h1>
    <ul>
        <?php while (have_rows('contents')) : the_row(); ?>
            <li><?php the_sub_field('title'); ?>
                <ul>
                    <li><?php the_sub_field('body'); ?></li>
                </ul>
            </li>
        <?php endwhile; ?>
    </ul>
    <img src="<?php the_field('image'); ?>">
    <?php $images = get_field('gallery');
    echo var_export($images);
    ?>
    <?php
    foreach ($images as $value) :
    ?>
        <img src="<?= $value; ?>">
    <?php

    endforeach;
    ?>

</body>

</html>