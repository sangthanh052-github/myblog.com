<div class="sidebar">
	<div class="widget">
		<h3>Chuyên mục</h3>
		<div class="content-w">
			<ul>
				<?php
				$args = array(
				    'type'      => 'post',
				    'child_of'  => 0,
				    'parent'    => ''
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
				<li>
					<a href="#"><img src="<?php bloginfo('template_directory') ?>/images/news.png" alt=""></a>
					<h4><a href="#">7 kênh youtube học lập trình web tốt nhất thế giới giúp bạn nâng cao kỹ năng</a></h4>
					<div class="meta"><span>Ngày đăng: 22-02-2016</span></div>
					<div class="clear"></div>
				</li>
				<li>
					<a href="#"><img src="<?php bloginfo('template_directory') ?>/images/news.png" alt=""></a>
					<h4><a href="#">Học HTML & CSS, học front end thông qua dự án thực tế</a></h4>
					<div class="meta"><span>Ngày đăng: 22-02-2016</span></div>
					<div class="clear"></div>
				</li>
				<li>
					<a href="#"><img src="<?php bloginfo('template_directory') ?>/images/news.png" alt=""></a>
					<h4><a href="#">5 frameworks frontend miễn phí tốt nhất cho dự án web của bạn</a></h4>
					<div class="meta"><span>Ngày đăng: 22-02-2016</span></div>
					<div class="clear"></div>
				</li>
				<li>
					<a href="#"><img src="<?php bloginfo('template_directory') ?>/images/news.png" alt=""></a>
					<h4><a href="#">Những đoạn code hay dùng trong lập trình theme woocommecre wordpressg</a></h4>
					<div class="meta"><span>Ngày đăng: 22-02-2016</span></div>
					<div class="clear"></div>
				</li>
				<li>
					<a href="#"><img src="<?php bloginfo('template_directory') ?>/images/news.png" alt=""></a>
					<h4><a href="#">Share plugin get bài viết từ 10 trang báo nổi tiếng của Việt Nam</a></h4>
					<div class="meta"><span>Ngày đăng: 22-02-2016</span></div>
					<div class="clear"></div>
				</li>
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
				<li><a href="http://huykira.net">Huy Kira</a></li>
				<li><a href="http://huykira.net">Blog Huy Kira</a></li>
			</ul>
		</div>
	</div>
	<div class="widget">
		<h3>Facebook</h3>
		<div class="content-fb">
			<ul>
				<li><a href="http://huykira.net"><img src="<?php bloginfo('template_directory') ?>/images/facebook.jpg" alt=""></a></li>
			</ul>
		</div>
	</div>
</div>