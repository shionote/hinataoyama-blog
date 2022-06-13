<?php get_header(); ?>

	<!-- content -->
	<div id="content">
		<div class="inner">

			<!-- primary -->
			<main id="primary">

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
              <?php
                $category = get_the_category();
                if($category[0]) :
              ?>
                <div class="entry-label"><?php my_the_post_category(true); ?></div><!-- /entry-label -->
              <?php endif; ?>
              <h1 class="entry-title"><?php the_title(); ?></h1><!-- /entry-title -->

              <!-- entry-meta -->
              <div class="entry-meta">
                <time class="entry-published" datetime="<?php the_time('c');?>"> <?php the_time('Y/n/j'); ?></time>
                <?php if(get_the_modified_time('Y-m-d') !== get_the_time('Y-m-d')) : ?>
                  <time class="entry-updated" datetime="<?php the_modified_time('c'); ?>">
                     <?php the_modified_time('Y/n/j'); ?>
                  </time>
                <?php endif; ?>
              </div><!-- /entry-meta -->

              <!-- entry-img -->
              <!-- <div class="entry-img"> -->
                <?php 
                  //if(has_post_thumbnail())
                  //{
                  //the_post_thumbnail('large');
                  //}
                ?>
              <!-- </div>/entry-img -->
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
            
            <?php $post_tags = get_the_tags(); ?>
            <div class="entry-tag-items">
              <?php my_get_post_tags(); ?>
            </div><!-- /entry-tag-items -->

            <?php get_template_part('template_parts/sharebutton'); ?>

            <?php get_template_part('template_parts/relatedarticle'); ?>

          </article> <!-- /entry -->

        <?php 
          endwhile;
          endif;
        ?>
			</main><!-- /primary -->

      <?php get_sidebar(); ?>
      
		</div><!-- /inner -->
	</div><!-- /content -->

<?php get_footer(); ?>