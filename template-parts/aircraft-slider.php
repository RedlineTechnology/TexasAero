<?php

/* Testimonial Slider */
wp_enqueue_script( 'ta-aircraft-slider', get_template_directory_uri() . '/js/aircraft-slider.min.js', array('slick'), '20190224', true);

?>

<div data-slick='{"autoplay": false, "autoplaySpeed": 4000}' class="aircraft-slider">
  <?php

    $pics = get_post_meta( $post->ID, 'aircraft_gallery', true );

    $imageCount = count($pics)-1;
    $i = 0;

    while( $i < $imageCount ) {
      $largeImg = wp_get_attachment_image_src( $pics[$i], 'large' )[0];
      echo '<div class="pic" id="pic_' . $i . '" style="background-image: url(\'' . $largeImg . '\')"></div>';
      $i++;
    }
  ?>
</div>
