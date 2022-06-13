<?php if(is_single()) : ?>
		<!-- footer-sns -->
		<div class="share-sns">
			<div class="inner">
				<div class="share-sns-head">SHARE</div><!-- /footer-sns-head -->

				<nav class="share-sns-buttons">
					<ul>
						<li><a class="m_twitter"
								href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" rel="nofollow"
								target="_blank"><img src="<?php echo esc_url(get_template_directory_uri() . '/TF-30/img/icon-twitter.png'); ?>" alt=""></a></li>
						<li><a class="m_facebook" href="https://www.facebook.com/share.php?u=<?php the_permalink(); ?>"
								rel="nofollow" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri() . '/TF-30/img/icon-facebook.png'); ?>" alt=""></a></li>
						<li><a class="m_hatena"
								href="https://b.hatena.ne.jp/add?mode=confirm&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>"
								rel="nofollow" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri() . '/TF-30/img/icon-hatena.png'); ?>" alt=""></a></li>
						<li><a class="m_line" href="https://social-plugins.line.me/lineit/share?url=<?php the_permalink(); ?>"
								rel="nofollow" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri() . '/TF-30/img/icon-line.png'); ?>" alt=""></a></li>
						<li><a class="m_pocket" href="https://getpocket.com/edit?url=<?php the_permalink(); ?>" rel="nofollow"
								target="_blank"><img src="<?php echo esc_url(get_template_directory_uri() . '/TF-30/img/icon-pocket.png'); ?>" alt=""></a></li>
					</ul>
				</nav><!-- /share-sns-buttons -->
			</div><!-- /inner -->
		</div><!-- /share-sns -->
	<?php endif; ?>