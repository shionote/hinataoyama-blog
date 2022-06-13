<!-- pickup -->
<div id="pickup">
  <div class="inner">
    <?php
      $pickup_posts = get_posts(array(
        'post_type' => 'post',
        'post_per_page' => '2',
        'tag' => 'pickup',
        'orderby' => 'DESC'
      ));
    ?>
    <div class="pickup-items">
      <?php foreach($pickup_posts as $post): setup_postdata($post); ?>
        <a href="<?php echo esc_url(get_permalink($id)); ?>" class="pickup-item">
          <div class="pickup-item-img">
            <?php
            if(has_post_thumbnail($id)){
              echo get_the_post_thumbnail($id, 'large');
            }else{
              echo '<img src="' . esc_url(get_template_directory_uri()) . '/TF-30/img/noimg.png" alt="">';
            }
            ?>
          </div><!-- /pickup-item-img -->
          <div class="pickup-item-body">
            <h2 class="pickup-item-title"><?php echo esc_html(get_the_title($id)); ?></h2><!-- /pickup-item-title -->
          </div><!-- /pickup-item-body -->
        </a><!-- /pickup-item -->
      <?php endforeach; wp_reset_postdata(); ?>
    </div><!-- /pickup-items -->
  </div><!-- /inner -->
</div><!-- /pickup -->