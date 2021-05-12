<div class="noibat">
	<h2 class="title-news">Bài viết nổi bật</h2>
	<?php 
		$args = array(
			'post_status' => 'publish', // Chỉ lấy những bài viết được publish
			'post_type' => 'post', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page 
			'showposts' => 1, // số lượng bài viết
			'cat' => 1, // lấy bài viết trong chuyên mục có id là 1
		);
	?>
	<?php $getposts = new WP_query($args); ?>
	<?php global $wp_query; $wp_query->in_the_loop = true; ?>
	<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
		<div class="content-nb">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('full'); ?>
			</a>
			<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
			<div class="meta">
				<span>Ngày đăng: <?php echo get_the_date('d-m-y'); ?></span>
				<span>Lượt xem: 2344 Lượt</span>
			</div>
			<p><?php the_excerpt(); ?></p>
		</div>
	<?php endwhile; wp_reset_postdata(); ?>

	<div class="list-nb">
		<div class="row">
			<?php 
				$args = array(
					'post_status' => 'publish', // Chỉ lấy những bài viết được publish
					'post_type' => 'post', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page 
					'showposts' => 3, // số lượng bài viết
					'cat' => 1, // lấy bài viết trong chuyên mục có id là 1
					'offset' =>1, // Bỏ đi 1 bài viết đầu tiên
				);
			?>
			<?php $getposts = new WP_query($args); ?>
			<?php global $wp_query; $wp_query->in_the_loop = true; ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
				<div class="col-xs-4 col-sm-4 col-md-4 style-box">
					<div class="list-post">
						<a href="<?php the_permalink(); ?>">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail('full', ['alt' => get_the_title(), 'title' => 'Feature image']); ?>
							<?php else : ?>
								<img src="<?php bloginfo('template_directory') ?>/images/post.jpg" width="265px" height="150px" alt="<?php the_title(); ?>">
							<?php endif; ?>
						</a>
						<h4>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h4>
						<div class="meta">
							<span>Ngày đăng: <?php echo get_the_date('d-m-y'); ?></span>
						</div>
					</div>
				</div>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>
</div>