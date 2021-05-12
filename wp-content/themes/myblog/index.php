<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/libs/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/responsive.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/style.css">
		<?php wp_head(); ?>
	</head>
	<body>
		<div class="wallpaper">
			<?php get_header(); ?>
			<div id="content">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-9">
							<?php get_template_part('noibat'); ?>
							<div class="post-news">
								<h2 class="title-news">Bài viết mới nhất</h2>
								<div class="content-news">
									<?php if (have_posts()) : ?>
									<?php while (have_posts()) : the_post(); ?>
										<div class="news-detail">
											<a href="<?php the_permalink(); ?>">
												<?php if ( has_post_thumbnail() ) : ?>
													<?php the_post_thumbnail('full', ['alt' => get_the_title(), 'title' => 'Feature image']); ?>
												<?php else : ?>
													<img src="<?php bloginfo('template_directory') ?>/images/post.jpg" width="265px" height="150px" alt="<?php the_title(); ?>">
												<?php endif; ?>
											</a>
											<div class="info-post">
												<h4><a href="#"><?php the_title(); ?></a></h4>
												<div class="meta">
													<span>Ngày đăng: <?php echo get_the_date('d-m-y'); ?></span>
												</div>
												<p><?php the_excerpt(); ?></p>
											</div>
											<div class="clear"></div>
										</div>
									<?php endwhile;?>
									<?php endif; ?>
								</div>
								<?php if(paginate_links()!='') {?>
									<div class="quatrang">
										<?php
										global $wp_query;
										$big = 999999999;
										echo paginate_links( array(
											'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
											'format' => '?paged=%#%',
											'prev_text'    => __('« Mới hơn'),
											'next_text'    => __('Tiếp theo »'),
											'current' => max( 1, get_query_var('paged') ),
											'total' => $wp_query->max_num_pages
											) );
									    ?>
									</div>
								<?php } ?>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-3">
							<?php get_sidebar(); ?>
						</div>
					</div>
				</div>
			</div>
			<?php get_footer(); ?>
		</div>
		<script src="<?php bloginfo('template_directory') ?>/js/jquery-3.2.1.min.js"></script>
		<script src="<?php bloginfo('template_directory') ?>/libs/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php bloginfo('template_directory') ?>/js/main.js"></script>
		<<?php wp_footer(); ?>
	</body>
</html>