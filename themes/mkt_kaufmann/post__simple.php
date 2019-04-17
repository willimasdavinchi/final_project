<?php
/**
* Template Name: Post-simple
* Template Post Type: post, page, product
*/
get_header();?>
	<div class="container container__post">
		<div class="row resumen">
			<div class="post__degrade__top"></div>
			<div class="col-md-12 resumen__text">
				<div class="text__barb">
				</div>
				<div class="text__titulo">
					<p><strong><?php the_title(); ?></strong></p>
				</div>
				<div class="content__post">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post();the_content();endwhile; else: ?>
					<p>Sorry, no posts matched your criteria.</p>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="row resumen">
			<div class="col-md-12 resumen__text">
				<div class="text__barb"></div>
				<div class="text__titulo">
					<p>Otros post</p>
				</div>
			</div>
		</div>
				<div class="row rowmain__button">
			<?php $the_query = new WP_Query( array ( 'orderby' => 'rand', 'posts_per_page' => '1' ) );
			while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<a class="main__buttona" href="<?php echo get_the_permalink(); ?>">
					<div class="main__button">
						<div class="main__buttontext">
							<div class="text__subtitulo">
								<p><?php echo get_the_title(); ?></p>
							</div>
							<div class="text__description">
								<p><?php echo get_the_excerpt(); ?></p>
							</div>
						</div>
						<div class="main__butonimg">
							<img class="resumen__img" src="<?php echo get_the_post_thumbnail_url();?>">
						</div>
					</div>
				</a>
			<?php endwhile; wp_reset_postdata();
			$the_query = new WP_Query( array ( 'orderby' => 'rand', 'posts_per_page' => '1' ) );
			while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<a class="main__buttona" href="<?php echo get_the_permalink(); ?>">
					<div class="main__button">
						<div class="main__buttontext">
							<div class="text__subtitulo">
								<p><?php echo get_the_title(); ?></p>
							</div>
							<div class="text__description">
								<p><?php echo get_the_excerpt(); ?></p>
							</div>
						</div>
						<div class="main__butonimg">
							<img class="resumen__img" src="<?php echo get_the_post_thumbnail_url();?>">
						</div>
					</div>
				</a>
			<?php endwhile; wp_reset_postdata();?>
		</div>
	</div>
	 <?php get_footer();