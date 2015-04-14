<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
$active_indicator = 'class="active"';
$active_slide = ' active';
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>

<div class="carousel slide" data-ride="carousel" id="carousel-example-generic">

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <?php foreach ($rows as $id => $row): ?>
      <li <?php print $active_indicator; ?> data-slide-to="<?php print $id; ?>" data-target="#carousel-example-generic">
        &nbsp;
      </li>
      <?php $active_indicator = ''; ?>
    <?php endforeach; ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <?php foreach ($rows as $id => $row): ?>
        <div class="item<?php print $active_slide; ?>">
          <?php print $row; ?>
        </div>
      <?php $active_slide = ''; ?>
    <?php endforeach; ?>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" data-slide="prev" href="#carousel-example-generic" role="button"><span class="sr-only">Previous</span> </a> <a class="right carousel-control" data-slide="next" href="#carousel-example-generic" role="button"> <span class="sr-only">Next</span> </a>
</div>
