<?php
/* 企业主页 */
?>
<?php get_header(); ?>

<style type="text/css">
body {
	background: #fff;
}
#content {
	width: 100%;
	margin: 0 auto;
}

#primary {
	width: 100%;
	box-shadow: none;
}

#primary .page {
	background: transparent !important;
	padding: 0 !important;
	border: none !important;
	box-shadow: none !important;
}

.breadcrumb, .header-sub, .owl-buttons {
	display: none;
}

#slideshow {
	background: #555;
	margin: -1px auto 0;
}

#menu-box {
	transition-duration: .0s;
}

.links-box {
	width: 100%;
	background: #f1f1f1;
}
/** 链接 **/
#links {
	width: 1080px;
	margin: 0 auto;
	padding: 20px 0;
}

.link-f a {
	box-shadow: none;
}

@media screen and (max-width: 1080px) {
	#links {
		width: 100%;
	}
}

.ad-site {
	display: none;
}

#group-widget-two .add-widgets {
	text-align: center;
	padding: 30px;
	background: #fff;
}

.small-img {
	position: absolute;
	max-width: 28%;
	top: 15%;
	left: 20%;
}

@-webkit-keyframes small-img {
  16.65% {
    -webkit-transform: translateY(8px);
    transform: translateY(8px);
  }

  33.3% {
    -webkit-transform: translateY(-6px);
    transform: translateY(-6px);
  }

  49.95% {
    -webkit-transform: translateY(4px);
    transform: translateY(4px);
  }

  66.6% {
    -webkit-transform: translateY(-2px);
    transform: translateY(-2px);
  }

  83.25% {
    -webkit-transform: translateY(1px);
    transform: translateY(1px);
  }

  100% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }
}

@keyframes small-img {
  16.65% {
    -webkit-transform: translateY(8px);
    transform: translateY(8px);
  }

  33.3% {
    -webkit-transform: translateY(-6px);
    transform: translateY(-6px);
  }

  49.95% {
    -webkit-transform: translateY(4px);
    transform: translateY(4px);
  }

  66.6% {
    -webkit-transform: translateY(-2px);
    transform: translateY(-2px);
  }

  83.25% {
    -webkit-transform: translateY(1px);
    transform: translateY(1px);
  }

  100% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }
}

.small-img {
  display: inline-block;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
}

#slideshow:hover .small-img{
  -webkit-animation-name: small-img;
  animation-name: small-img;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-timing-function: ease-in-out;
  animation-timing-function: ease-in-out;
  -webkit-animation-iteration-count: 1;
  animation-iteration-count: 1;
}
</style>

<div class="container">

	<!-- 幻灯 -->
	<?php if (zm_get_option('group_slider')) { ?>
	<div class="g-row">
		<div class="home-slider">
			<?php get_template_part( '/group/group-slider' ); ?>
		</div>
	</div>
	<?php } ?>

	<div id="group-section">

		<!-- 关于 -->
		<?php if (zm_get_option('group_contact')) { ?>
		<div class="contact">
			<div class="g-row">
				<div class="g-col">
					<?php get_template_part( '/group/group-contact' ); ?>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<?php } ?>

		<!-- 服务 -->
		<?php if (zm_get_option('dean')) { ?>
		<div class="g-row">
			<div class="g-col">
				<?php get_template_part( '/group/group-dean' ); ?>
				<div class="clear"></div>
			</div>
		</div>
		<?php } ?>

		<!-- 简介 -->
		<?php if (zm_get_option('group_features')) { ?>
		<div class="g-row">
			<div class="g-col">
				<?php get_template_part( '/group/group-features' ); ?>
				<div class="clear"></div>
			</div>
		</div>
		<?php } ?>

		<!-- 分类左图 -->
		<?php if (zm_get_option('group_wd_l')) { ?>
		<div class="g-row">
			<div class="g-col">
				<?php get_template_part( '/group/group-wd-l' ); ?>
				<div class="clear"></div>
			</div>
		</div>
		<?php } ?>

		<!-- 分类右图 -->
		<?php if (zm_get_option('group_wd_r')) { ?>
		<div class="g-row">
			<div class="g-col">
				<?php get_template_part( '/group/group-wd-r' ); ?>
				<div class="clear"></div>
			</div>
		</div>
		<?php } ?>

		<!-- 说明 -->
		<?php if (zm_get_option('group_explain')) { ?>
		<div class="explain">
			<div class="g-row">
					<div class="g-col">
						<?php get_template_part( '/group/group-explain' ); ?>
						<div class="clear"></div>
					</div>
			</div>
		</div>
		<?php } ?>

		<!-- 一栏小工具 -->
		<?php get_template_part( '/group/group-widget-one' ); ?>

		<!-- 下载 -->
		<?php if (zm_get_option('cms_edd')) { ?>
		<div class="g-row">
			<div class="g-col line-tab">
				<?php get_template_part( '/cms/cms-dow-tab' ); ?>
				<div class="clear"></div>
			</div>
		</div>
		<?php } ?>

		<!-- 最新文章 -->
		<?php if (zm_get_option('group_new')) { ?>
		<div class="g-row">
			<div class="g-col">
				<?php require get_template_directory() . '/group/group-news.php'; ?>
				<div class="clear"></div>
			</div>
		</div>
		<?php } ?>

		<!-- 三栏小工具 -->
		<?php get_template_part( '/group/group-widget-three' ); ?>

		<!-- 新闻资讯A -->
		<?php if (zm_get_option('group_cat_a')) { ?>
		<div class="g-row">
			<div class="g-col">
				<div class="group-cat">
					<?php require get_template_directory() . '/group/group-cat-a.php'; ?>
				</div>
			</div>
		</div>
		<?php } ?>

		<!-- 两栏小工具 -->
		<?php get_template_part( '/group/group-widget-two' ); ?>

		<!-- 新闻资讯B -->
		<?php if (zm_get_option('group_cat_b')) { ?>
		<div class="g-row">
			<div class="g-col">
				<div class="group-cat">
					<?php require get_template_directory() . '/group/group-cat-b.php'; ?>
				</div>
			</div>
		</div>
		<?php } ?>

		<!-- 产品案例 -->
		<?php if (zm_get_option('group_tab')) { ?>
		<div class="g-row">
			<div class="g-col">
				<?php require get_template_directory() . '/group/group-tab.php'; ?>
				<div class="clear"></div>
			</div>
		</div>
		<?php } ?>

		<!-- 新闻资讯 C-->
		<?php if (zm_get_option('group_cat_c')) { ?>
		<div class="g-row">
			<div class="g-col">
				<div class="group-cat">
					<?php require get_template_directory() . '/group/group-cat-c.php'; ?>
				</div>
			</div>
		</div>
		<?php } ?>

	</div>
	<div class="clear"></div>

	<!-- 滚动 -->
	<?php if (zm_get_option('group_carousel')) { ?>
	<div id="section-gtg">
		<div class="g-row">
			<div class="g-col">
				<?php require get_template_directory() . '/group/group-carousel.php'; ?>
				<div class="clear"></div>
			</div>
		</div>
		<div class="gtg"></div>
	</div>
	<?php } ?>

</div><!--  container end -->


<script type="text/javascript">
$("#group-section .g-row:even").addClass("g-line");
</script>

<?php get_footer(); ?>