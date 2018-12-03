<div class="gr-wd-box">
	<?php $display_categories =  explode(',',zm_get_option('group_wd_r_id') ); foreach ($display_categories as $category) { ?>
	<?php query_posts( array( 'showposts' => 1, 'cat' => $category, 'post__not_in' => $do_not_cat ) ); ?>
		<div class="gr-wd-b">
			<div class="gr-wd gr-wd-img gr-wd-img-r">
				<?php query_posts( array ( 'category__in' => array(get_query_var('cat')), 'meta_key' => 'cat_top', 'showposts' => 1, 'ignore_sticky_posts' => 1 ) ); while ( have_posts() ) : the_post(); $do_not_cat[] = $post->ID;?>
					<?php gr_wd_thumbnail(); ?>
				<?php endwhile; ?>
				<div class="gr-cat-wd">
					<h3 class="gr-cat-wd-title"><a href="<?php echo get_category_link($category);?>" title="<?php echo strip_tags(category_description($category)); ?>"><?php single_cat_title(); ?></a></h3>
				</div>
			</div>

			<div class="gr-wd gr-wd-w gr-wd-r">
			<?php query_posts( array ( 'category__in' => array(get_query_var('cat')), 'meta_key' => 'cat_top', 'showposts' => 1, 'ignore_sticky_posts' => 1 ) ); while ( have_posts() ) : the_post(); $do_not_cat[] = $post->ID;?>
				<?php the_title( sprintf( '<h3 class="gr-title gr-wd-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

				<p>
					<?php if (has_excerpt('')){
							echo wp_trim_words( get_the_excerpt(), 92, '...' );
						} else {
							$content = get_the_content();
							$content = wp_strip_all_tags(str_replace(array('[',']'),array('<','>'),$content));
							echo wp_trim_words( $content, 95, '...' );
					    }
					?>
				</p>

				<?php endwhile; ?>

				<ul>
					<?php query_posts( array( 'showposts' => zm_get_option('group_wd_r_id_n'), 'cat' => $category, 'offset' => 1, 'post__not_in' => $do_not_cat ) ); ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php the_title( sprintf( '<li class="list-title wow fadeInUp" data-wow-delay="0.5s"><i class="fa fa-angle-right"></i><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></li>' ); ?>
					<?php endwhile; ?>
					<?php wp_reset_query(); ?>
				</ul>
				<div class="gr-cat-wd-more"><a href="<?php echo get_category_link($category);?>" title="<?php echo strip_tags(category_description($category)); ?>"><?php _e( '更多', 'begin' ); ?></a></div>
			</div>
			<div class="clear"></div>
		</div>
	<?php } ?>
</div>