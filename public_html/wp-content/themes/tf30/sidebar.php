<aside id="secondary">
  <div class="widget widget_text widget_custom_html">
    <div class="wprofile">
      <div class="wprofile-img">
        <img src="<?php echo get_template_directory_uri(); ?>/TF-30/img/profile.png" alt="">
      </div><!-- /wprofile-img -->
      <div class="wprofile-name">ひなた</div>
      <hr>
      <div class="wprofile-content">
        <p>コロナで丸一年間コンビニすら行かなかった引きこもり大学生です。</p>
        <p>引きこもりながらでもお金を稼ぐ方法を求めて、プログラミングに手を出しました。スキルと知識をつけることで、以前の自分とは違った景色で世界を見れるように日々作業しています。</p>
        <p>最近のマイブームはプログラミング・投資・メタバース事業です。</p>
      </div><!-- /wprofile-content -->
      <nav class="wprofile-sns">
        <div class="wprofile-sns-item m_twitter"><a href="" rel="noopener noreferrer" target="_blank"><i class="fab fa-twitter"></i></a></div>
      </nav>
    </div><!-- /wprofile -->
  </div><!-- /widget_custom_html -->

  <!-- widget_search -->
  <div class="widget widget_search">
    <!-- search-form -->
    <form method="get" class="search-form" action="<?php echo home_url('/'); ?>">
    <input type="search" class="search-field" value="" placeholder="検索" name="s" id="s">
    <button type="submit" class="search-submit"><i class="fas fa-search"></i></button>
    </form><!-- /search-form -->
  </div><!-- /widget_search -->

  <!-- widget -->
  <div class="widget widget_popular">
    <div class="widget-title">人気の投稿</div>
    <div class="wpost-items m_ranking">
      <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 5,
          'meta_key' => 'view_counter',
          'orderby' => 'meta_value_num',
          'order' => 'DESC',
        );
        $popular_posts = get_posts($args);
        foreach($popular_posts as $post): setup_postdata($post);
      ?>
        <!-- wpost-item -->
        <a class="wpost-item" href="<?php the_permalink(); ?>">
          <div class="wpost-item-img">
            <?php if(has_post_thumbnail()){
              the_post_thumbnail('medium');
            }else{
              echo '<img src="' . esc_url(get_template_directory_uri()) . '/TF-30/img/noimg.png" alt="">';
            }
            ?>
          </div>
          <div class="wpost-item-text">
            <?php the_title(); ?>
          </div><!-- /wpost-item-text -->
        </a><!-- /wpost-item -->
      <?php endforeach; wp_reset_postdata(); ?>
    </div><!-- /wpost-items -->
  </div><!-- /widget -->

  <!-- widget_archive -->
  <div class="widget widget_archive">
    <div class="widget-title">アーカイブ</div>
    <ul>
      <?php
        wp_get_archives($args);
      ?>
    </ul>
  </div><!-- widget_archive -->
</aside>