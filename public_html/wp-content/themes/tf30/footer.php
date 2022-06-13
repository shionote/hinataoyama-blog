<!-- footer-menu -->
<div id="footer-menu">
		<div class="inner">
			<div class="footer-fblock block">
				<h4 class="fheading">TAG</h4>
				<ul>
					<?php
					$term_list = get_terms('post_tag');
					$result_list = [];
					foreach ($term_list as $term) {
					$u = (get_term_link( $term, 'post_tag' ));
					echo "<li><a href='".$u."'>".$term->name."</a></li>";
					}
					?>
				</ul>
			</div>
			<div class="footer-mblock block">
				<h4 class="fheading">CATEGORY</h4>
				<nav class="footer-nav">
					<ul class="footer-list">
						<?php 
							$categories = get_categories();
							$separator = "";
							$output = "";
							if($categories){
								foreach($categories as $category) {
								$output .= '<li><a href="'.get_category_link( $category->term_id ).'">'.$category->cat_name.' ('.$category->count.')'.'</a>'.$separator.'</li>';
								}
								echo trim($output, $separator);
							}
						?>
					</ul>
				</nav>
			</div>
			<div class="footer-lblock block">
				<h4 class="fheading">PORTFOLIO</h4>
			</div>
		</div><!-- /inner -->
	</div><!-- /footer-menu -->

	<!-- footer -->
	<footer id="footer">
		<div class="inner">
			<div class="copy">&copy; 2022 hinata All rights reserved.</div><!-- /copy -->

		</div><!-- /inner -->
	</footer><!-- /footer -->

	<div class="floating">
		<a href="#"><i class="fas fa-chevron-up"></i></a>
	</div>

  <?php wp_footer(); ?>

</body>

</html>