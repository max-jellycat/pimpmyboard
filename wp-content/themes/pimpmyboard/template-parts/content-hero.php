<?php

/*======================
  Advanced Custom Fields
======================*/
$who_title_1                          = get_field('who_title_1');
$who_paragraph_1                      = get_field('who_paragraph_1');
$who_title_2                          = get_field('who_title_2');
$who_paragraph_2                      = get_field('who_paragraph_2');
$who_title_3                          = get_field('who_title_3');
$who_button_text                      = get_field('who_button_text');

?>

<section id="hero" data-type="background" data-speed="5">
  <div class="hero-body">
    <div class="container pull-right">
      <div class="row">
        <div class=" hero-text col-sm-6 col-sm-offset-6">
          <h1><?php bloginfo('name'); ?></h1>
          <p class="lead"><?php bloginfo('description'); ?></p>
          <h3><?php echo $who_title_1; ?></h3>
          <p><?php echo $who_paragraph_1; ?></p>
          <h3><?php echo $who_title_2; ?></h3>
          <p><?php echo $who_paragraph_2; ?></p>
          <br>
          <h3><?php echo $who_title_3; ?></h3>
          <button type="button" class="btn btn-lg btn-danger" data-toggle="modal" data-target="#contactModal"><?php echo $who_button_text; ?></button>
        </div>
      </div>
    </div>
  </div>
</section>
