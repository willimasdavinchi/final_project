<?php /* Template Name: platilla-actividades */
get_header();?>
<div class="jumbotron jumbotron__mainheader">
	<img class="jumbotron__image__header" src="<?php echo get_the_post_thumbnail_url('24'); ?>" alt="">
</div>
<div class="container">
	<div class="row resumen">
		<div class="col-md-12 resumen__text">
			<div class="text__barb">
			</div>
			<div class="text__titulo">
				<p><strong><?php echo get_the_title('24'); ?></strong></p>
			</div>
			<div class="">
				<p><?php $my_postid = 24; $content_post = get_post($my_postid);$content = $content_post->post_content;$content = apply_filters('the_content', $content);$content = str_replace(']]>', ']]&gt;', $content);
				echo $content;?></p>
			</div>
		</div>
	</div>
</div>
<div class="container containermain__button">
	<div class="row rowmain__button">
		<?php
		$args = array(
			'posts_per_page' => 100,'post_type'=> 'post','order' => 'DESC',);
		$the_query = new WP_Query( $args );
		if( $the_query->have_posts() ):
		while( $the_query->have_posts() ) : $the_query->the_post();
			get_template_part('loop');?>
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
			<?php endwhile;else : _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); endif;?>
		</div>
	</div>
	<?php get_footer();