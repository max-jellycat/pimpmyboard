<?php

/*======================
  Advanced Custom Fields
======================*/
$services_title                       = get_field('services_title');
$services_description                 = get_field('services_description');
$services_font_awesome_class_1        = get_field('services_font_awesome_class_1');
$services_paragraph_1                 = get_field('services_paragraph_1');
$services_font_awesome_class_2        = get_field('services_font_awesome_class_2');
$services_paragraph_2                 = get_field('services_paragraph_2');
$services_font_awesome_class_3        = get_field('services_font_awesome_class_3');
$services_paragraph_3                 = get_field('services_paragraph_3');

?>

<section id="services">
  <div class="container">

    <div class="section-header">
      <h2><?php echo $services_title; ?></h2>
      <p class="lead"><?php echo $services_description; ?></p>
    </div>

    <div class="row">
      <div class="col-sm-4">
        <p>
          <i class="fa <?php echo $services_font_awesome_class_1; ?>"></i> <?php echo $services_paragraph_1; ?>
        </p>
      </div>
      <div class="col-sm-4">
        <p>
          <i class="fa <?php echo $services_font_awesome_class_2; ?>"></i> <?php echo $services_paragraph_2; ?>
        </p>
      </div>
      <div class="col-sm-4">
        <p>
          <i class="fa <?php echo $services_font_awesome_class_3; ?>"></i> <?php echo $services_paragraph_3; ?>
        </p>
      </div>
    </div>
  </div>
</section>
