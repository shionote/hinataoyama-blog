<?php get_header(); ?>

  <!-- content -->
	<div id="content">
		<div class="inner">

			<!-- primary -->
			<main id="primary">

				<!-- breadcrumb -->
				<div class="breadcrumb">
          <!-- BreadcrumbNavXTのパンくずを表示するための記述 -->
					<?php bcn_display(); ?>
				</div><!-- /breadcrumb -->

				<div class="archive-head m_description">
					<div class="archive-lead">ARCHIVE</div>
					<h1 class="archive-title m_category"><?php the_archive_title(); ?>の記事一覧</h1><!-- /archive-title -->
					<div class="archive-description">
						<p><?php the_archive_description(); ?></p>
					</div><!-- /archive-description -->
				</div><!-- /archive-head -->

        <?php if(have_posts()) : ?>
          <!-- entries -->
          <div class="entries m_horizontal">
            <?php while(have_posts()) : the_post(); ?>
              <!-- entry-item -->
              <a href="<?php the_permalink(); ?>" class="entry-item">
                <!-- entry-item-img -->
                <div class="entry-item-img">
                  <?php 
                    if(has_post_thumbnail())
                    {
										  the_post_thumbnail('large');
									  }
									  else
                    {
										  echo '<img src="'. esc_url(get_template_directory_uri()) .'/TF-30/img/noimg.png" alt="">';
									  }
									?>
                </div><!-- /entry-item-img -->

                <!-- entry-item-body -->
                <div class="entry-item-body">
                  <div class="entry-item-meta">
                    <div class="entry-item-tag"><?php my_the_post_category(false); ?></div><!-- /entry-item-tag -->
                    <time class="entry-item-published" datetime="<?php the_time('c');?>"><?php the_time('Y/n/j'); ?></time><!-- /entry-item-published -->
                  </div><!-- /entry-item-meta -->
                  <h2 class="entry-item-title"><?php the_title();?></h2><!-- /entry-item-title -->
                  <div class="entry-item-excerpt">
                    <p><?php the_excerpt(); ?></p>
                  </div><!-- /entry-item-excerpt -->
                </div><!-- /entry-item-body -->
              </a><!-- /entry-item -->
            <?php endwhile; ?>
          </div><!-- /entries -->
        <?php endif; ?>

        <?php get_template_part('template_parts/pagination'); ?>

			</main><!-- /primary -->

      <?php get_sidebar(); ?>

		</div><!-- /inner -->
	</div><!-- /content -->

	<!-- footer-sns -->
	<div class="footer-sns">
		<div class="inner">
			<div class="footer-sns-head">この記事をシェアする</div><!-- /footer-sns-head -->

			<nav class="footer-sns-buttons">
				<ul>
					<li><a class="m_twitter" href="https://twitter.com/share?url=https://example.com/category/a/&text=カテゴリー名"
							rel="nofollow" target="_blank"><img src="img/icon-twitter.png" alt=""></a></li>
					<li><a class="m_facebook" href="https://www.facebook.com/share.php?u=https://example.com/category/a/"
							rel="nofollow" target="_blank"><img src="img/icon-facebook.png" alt=""></a></li>
					<li><a class="m_hatena"
							href="https://b.hatena.ne.jp/add?mode=confirm&url=https://example.com/category/a/&title=カテゴリー名"
							rel="nofollow" target="_blank"><img src="img/icon-hatena.png" alt=""></a></li>
					<li><a class="m_line" href="https://social-plugins.line.me/lineit/share?url=https://example.com/category/a/"
							rel="nofollow" target="_blank"><img src="img/icon-line.png" alt=""></a></li>
					<li><a class="m_pocket" href="https://getpocket.com/edit?url=https://example.com/category/a/" rel="nofollow"
							target="_blank"><img src="img/icon-pocket.png" alt=""></a></li>
				</ul>
			</nav><!-- /footer-sns-buttons -->

		</div><!-- /inner -->
	</div><!-- /footer-sns -->

<?php get_footer(); ?>