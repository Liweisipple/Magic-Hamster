<?php get_header(); ?>

<div class="bbp-crumb"><?php bbp_breadcrumb(); ?></div>

<div id="primary" class="content-area bbp-primary">
	<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="bbp-entry-header">
					<?php if ( bbp_is_forum_archive()) { ?><h1 class="forums-entry-title"><i class="fa fa-codepen"></i>论坛</h1><?php } ?>
					<?php if ( bbp_is_single_forum()) { ?><?php the_title( '<h1 class="forum-entry-title"><i class="fa fa-sticky-note"></i>版块：', '</h1>' ); ?></h1><?php } ?>
					<?php if ( bbp_is_single_topic()) { ?><?php the_title( '<h1 class="topic-entry-title">', '</h1>' ); ?><?php } ?>
				</header>

				<div class="bbp-content">
					<?php the_content(); ?>
				</div>

			</article>
		<?php endwhile; ?>
	</main>
</div>
<?php get_footer(); ?>