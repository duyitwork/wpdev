<article id="news-<?php the_ID(); ?>" class="col-xs-6 col-xs-full col-sm-6 col-md-4 iterm-select">
	<div class="crpost-iterm wow fadeInUp">
	    <div class="row">
	    	<div class="col-xs-4">
	    		<a href="<?php the_permalink(); ?>" class="d_block photoframe ">
					<?php 
						the_dns_image(array(100,135),'img-responsive tr_all_long_hover',get_the_post_thumbnail_url( get_the_ID(), 'full' )) 
					?>
				</a>
	    	</div>
	    	<div class="col-xs-8">
	    		 <div class="mini_post_content">
			        <div class="post-title ">
			        	<a href="<?php the_permalink(); ?>" class="color_dark">
			        		<?php the_title(); ?>
			        	</a>
			        </div>
			        <div class="post_meta">
			        	<span class="fa fa-calendar "></span> <?php print get_the_date('d/m/Y', get_the_ID() ); ?>
			        </div>
			        <div class="post_content">
			        	<?php print wp_trim_words(get_the_content(),15,'...'); ?>
			        </div>
			        <div class="post_more text-right">
			        	<a class="more-btn" href="<?php the_permalink(); ?>">Xem thêm <i class="fa fa-angle-double-right"></i></a>
			        </div>
			    </div>
	    	</div>
	    </div>
	</div>
</article>