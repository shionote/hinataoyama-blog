<?php get_header(); ?>

	<!-- content -->
	<div id="content">
		<div class="inner">

			<!-- primary -->
			<main id="page">

        <?php if(function_exists('bcn_display')): ?>
          <!-- breadcrumb -->
          <div class="breadcrumb">
            <?php bcn_display(); ?>
          </div><!-- /breadcrumb -->
        <?php endif; ?>

        <?php 
        if(have_posts()) :
          while(have_posts()) :
            the_post();
        ?>

          <!-- entry -->
          <article <?php post_class(array('entry')); ?>>

            <!-- entry-header -->
            <div class="entry-header">
              <h1 class="entry-title"><?php the_title(); ?></h1><!-- /entry-title -->

              <!-- entry-img -->
              <div class="entry-img">
                <?php 
                  if(has_post_thumbnail())
                  {
                  the_post_thumbnail('large');
                  }
                ?>
              </div><!-- /entry-img -->
            </div><!-- /entry-header -->

            <!-- entry-body -->
            <div class="entry-body">
              <?php the_content(); ?>
              <?php
                wp_link_pages(  // 記事が長くなってしまった場合のpaginationタグ
                  array(
                    'before' => '<nav class="entry-links">',
                    'after' => '</nav>',
                    'link_before' => '',
                    'link_after' => '',
                    'next_or_number' => 'number',
                    'separator' => '',
                  )
                );
              ?>
            </div><!-- /entry-body -->
          </article> <!-- /entry -->

        <?php 
          endwhile;
          endif;
        ?>

			</main><!-- /primary -->

		</div><!-- /inner -->
	</div><!-- /content -->

<?php get_footer(); ?>