<div class="sidebar">
	<div class="widget">
		<h3>Chuyên mục</h3>
		<div class="content-w">
			<ul>
				<?php
				$args = array(
				    'type'      => 'post',
				    'child_of'  => 0,
				    'parent'    => 0,
				    'orderby'  => 'id'
				);
				$categories = get_categories( $args );
				foreach ( $categories as $category ) { ?>
				     <li>
				     	<a href="<?php echo get_term_link($category->slug, 'category');?>">
					     	<?php echo $category->name ; ?><span>(<?php echo $category->count ; ?>)</span>
					     </a>
				     </li>
				<?php } ?>
			</ul>
		</div>
	</div>
	<div class="widget">
		<h3>Bài viết mới</h3>
		<div class="content-new">
			<ul>
				<?php 
					$args = array(
						'post_status' => 'publish', // Chỉ lấy những bài viết được publish
						'post_type' => 'post', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page 
						'showposts' => 5, // số lượng bài viết
						'cat' => 1, // lấy bài viết trong chuyên mục có id là 1
					);
				?>
				<?php $getposts = new WP_query($args); ?>
				<?php global $wp_query; $wp_query->in_the_loop = true; ?>
				<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
					<li>
						<a href="<?php the_permalink(); ?>">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail('full', ['alt' => get_the_title(), 'title' => 'Feature image']); ?>
						<?php else : ?>
								<img src="<?php bloginfo('template_directory') ?>/images/post.jpg" width="265px" height="150px" alt="<?php the_title(); ?>">
							<?php endif; ?>
						</a>
						<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<div class="meta"><span>Ngày đăng: <?php echo get_the_date('d-m-y'); ?></span></div>
						<div class="clear"></div>
					</li>
				<?php endwhile; wp_reset_postdata(); ?>
			</ul>
		</div>
	</div>
	<div class="widget">
		<h3>Bài viết xem nhiều</h3>
		<div class="content-mostv">
			<ul>
				<li>
					<span>1</span>
					<h4><a href="#">Download file psd background chương trình, hội nghị</a></h4>
					<div class="clear"></div>
				</li>
				<li>
					<span>2</span>
					<h4><a href="#">Download miễn phí phần mềm Adobe indesign CS4 & CS5</a></h4>
					<div class="clear"></div>
				</li>
				<li>
					<span>3</span>
					<h4><a href="#">Du hí Quảng Nam – Làng bích họa – Tượng đài Mẹ Thứ</a></h4>
					<div class="clear"></div>
				</li>
				<li>
					<span>4</span>
					<h4><a href="#">Du hí Quảng Nam – Thánh địa Mỹ Sơn</a></h4>
					<div class="clear"></div>
				</li>
				<li>
					<span>5</span>
					<h4><a href="#">Share full code website tin tức sử dụng wordpress</a></h4>
					<div class="clear"></div>
				</li>
				<li>
					<span>6</span>
					<h4><a href="#">Share full code web shop, web bán hàng sử dụng wordpress</a></h4>
					<div class="clear"></div>
				</li>
				<li>
					<span>7</span>
					<h4><a href="#">Những câu hỏi thường gặp khi đi phỏng vấn lập trình php</a></h4>
					<div class="clear"></div>
				</li>
				<li>
					<span>8</span>
					<h4><a href="#">10 đoạn code đếm ngược sử dụng script cực đẹp, miễn phí</a></h4>
					<div class="clear"></div>
				</li>
			</ul>
		</div>
	</div>
	<div class="widget">
		<h3>Quảng cáo</h3>
		<div class="content-wc">
			<a href="#"><img src="<?php bloginfo('template_directory') ?>/images/qc.jpg" alt=""></a>
		</div>
	</div>
	<div class="widget">
		<h3>Bạn bè</h3>
		<div class="content-w">
			<ul>
				<li><a href="http://huykira.net">Sang Thanh</a></li>
				<li><a href="http://huykira.net">Blog Sang</a></li>
			</ul>
		</div>
	</div>
	<div class="widget">
		<h3>Facebook</h3>
		<div class="content-fb">
			<div class="fb-page" data-href="https://www.facebook.com/sangvst" data-tabs="timeline" data-width="" data-height="70" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/sangvst" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/sangvst">vsmobile.tk</a></blockquote></div>
		</div>
	</div>
</div>