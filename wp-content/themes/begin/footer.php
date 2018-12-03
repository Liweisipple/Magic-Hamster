	</div><!-- .site-content -->

	<div class="clear"></div>
	<?php if (zm_get_option('footer_link')) { ?>
		<?php get_template_part( 'template/footer-links' ); ?>
	<?php } ?>

	<?php get_template_part( 'template/footer-widget' ); ?>

	<footer id="colophon" class="site-footer wow fadeInUp" data-wow-delay="0.3s" role="contentinfo">
		<div class="site-info">
			<?php echo zm_get_option('footer_inf_t'); ?>
			<span class="add-info">
				<?php echo zm_get_option('footer_inf_b'); ?>
				<?php echo zm_get_option('tongji_f'); ?>
			</span>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->
<?php if (zm_get_option('login')) { ?>
<?php get_template_part( 'template/login' ); ?>
<?php } ?>

<?php if (zm_get_option('share')) { ?>
<?php if (is_single() || is_page() ) : ?>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"16"},"share":{"bdSize":16}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
<?php endif; ?>
<?php } ?>

<?php get_template_part( 'template/scroll' ); ?>

<?php if (is_home() || is_archive() || is_search()) { ?>
<script type="text/javascript">
    document.onkeydown = chang_page;function chang_page(e) {
        var e = e || event,
        keycode = e.which || e.keyCode;
        if (keycode == 37) location = '<?php echo get_previous_posts_page_link(); ?>';
        if (keycode == 39) location = '<?php echo get_next_posts_page_link(); ?>';
    }
</script>
<?php } ?>
<?php if (zm_get_option('weibo_t')) { ?>
	<script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>
	<html xmlns:wb="http://open.weibo.com/wb">
<?php } ?>

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>