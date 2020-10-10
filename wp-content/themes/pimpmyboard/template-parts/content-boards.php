<?php

/*======================
  Advanced Custom Fields
======================*/
$boards_title                         = get_field('boards_title');
$boards_description                   = get_field('boards_description');
$boards_image                         = get_field('boards_image');
$boards_subtitle_1                    = get_field('boards_subtitle_1');
$boards_paragraph_1                   = get_field('boards_paragraph_1');
$boards_subtitle_2                    = get_field('boards_subtitle_2');
$boards_paragraph_2                   = get_field('boards_paragraph_2');
$boards_subtitle_3                    = get_field('boards_subtitle_3');
$boards_paragraph_3                   = get_field('boards_paragraph_3');

?>

<section id="boards" class="container-fluid">
  <div class="section-header">
    <h2><?php echo $boards_title; ?></h2>
    <p class="lead"><?php echo $boards_description; ?></p>
  </div>
  <div class="row">
    <div class="col-sm-6">

      <!-- If user uploaded an image -->
      <?php if(!empty($boards_image)) : ?>
        <img src="<?php echo $boards_image['url']; ?>" alt="<?php echo $boards_image['alt']; ?>" class="img-responsive center-block">
      <?php endif; ?>

    </div>

    <div class="col-sm-5">
      <h3><?php echo $boards_subtitle_1; ?></h3>
      <p><?php echo $boards_paragraph_1; ?></p>
      <h3><?php echo $boards_subtitle_2; ?></h3>
      <p><?php echo $boards_paragraph_2; ?></p>
      <h3><?php echo $boards_subtitle_3; ?></h3>
      <p><?php echo $boards_paragraph_3; ?></p>
    </div>
  </div>
</section>
