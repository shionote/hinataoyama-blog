<!-- header-navまでをget_header()に置き換える -->
<?php get_header(); ?>

	<?php get_template_part('template_parts/pickup_by_tag'); ?>


	<!-- content -->
	<div id="content">
		<div class="inner">

			<!-- primary -->
			<main id="primary">
				<?php if(have_posts()) : ?>
					<!-- entries -->
					<div class="entries">
						<?php while(have_posts()) : the_post(); ?>
						
							<!-- entry-item -->
							<a href="<?php the_permalink(); ?>" class="entry-item">
								<!-- entry-item-img -->
								<div class="entry-item-img">
									<?php if(has_post_thumbnail()){
										the_post_thumbnail('large');
									}
									else{
										echo '<img src="'. esc_url(get_template_directory_uri()) .'/TF-30/img/noimg.png" alt="">';
									}
									?>
									<p class="entry-item-tag"><?php my_the_post_category(false); ?></p><!-- /entry-item-tag -->
								</div><!-- /entry-item-img -->

								<!-- entry-item-body -->
								<div class="entry-item-body">
									<h2 class="entry-item-title"><?php the_title();?></h2><!-- /entry-item-title -->
									<div class="entry-item-meta">
										<time class="entry-item-published" datetime="<?php the_time('c');?>"><?php the_time('Y/n/j'); ?></time><!-- /entry-item-published -->
										<?php if(get_the_modified_time('Y-m-d') !== get_the_time('Y-m-d')) : ?>
											<time class="entry-updated" datetime="<?php the_modified_time('c'); ?>">
												<?php the_modified_time('Y/n/j'); ?>
											</time>
										<?php endif; ?>
									</div><!-- /entry-item-meta -->
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

<!-- footer-menuから下をget_footer()に置き換える -->
<?php get_footer(); ?>