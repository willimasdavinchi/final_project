<?php get_header();?>
<div class="jumbotron jumbotron__mainheader">
	<img class="jumbotron__image__header" src="<?php echo get_the_post_thumbnail_url('86'); ?>" alt="">
</div>
<div class="container">
	<div class="row resumen">
		<div class="col-md-12 resumen__text">
			<div class="text__barb">
			</div>
			<div class="text__titulo">
				<p><strong><?php echo get_the_title('86'); ?></strong></p>
			</div>
			<div class="">
				<p><?php $my_postid = 86; $content_post = get_post($my_postid);$content = $content_post->post_content;$content = apply_filters('the_content', $content);$content = str_replace(']]>', ']]&gt;', $content);
				echo $content;?></p>
			</div>
		</div>
	</div>
</div>
<div class="container containermain__button">
	<div class="row rowmain__button">
		<?php if ( have_posts()) :
			while ( have_posts()) :  the_post();?>
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
		<div class="row resumen">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
			<div class="col-md-12 resumen__text">
				<div class="text__barb">
				</div>
				<div class="text__titulo">
					<p><strong>Just4Fun</strong></p>
				</div>
			</div>
			<div class="col-md-12 resumen__text">
					<p>Adivina que clase de auto eres, según la cuota que puedes pagar</p>
			</div>
			<div class="col-md-3 text-center resumen__text">
				<p><b>Valor del dia</b></p>
				<p>Dolar: <span class="indicador usd"></span></p>
				<p>Euro: <span class="indicador euro"></span></p>
				<p>UF: <span class="indicador UF"></span></p>
				<p>UTM: <span class="indicador UTM"></span></p>
			</div>
			<div class="col-md-3 text-center resumen__text">
				<input type="number" name="Valor" class="exchange value" id="value">
				<p>Dolar: <span class="exchange usd"></span></p>
				<p>Euro: <span class="exchange euro"></span></p>
				<p>UF: <span class="exchange UF"></span></p>
				<p>UTM: <span class="exchange UTM"></span></p>
			</div>
		</div>
	</div>
	<?php get_footer();