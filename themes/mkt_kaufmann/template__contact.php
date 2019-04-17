<?php /* Template Name: Plantilla-Contacto */
get_header();?>
<div class="jumbotron jumbotron__mainheader">
	<img class="jumbotron__image__header" src="<?php echo get_the_post_thumbnail_url(''); ?>" alt="">
</div>
<div class="container container__color">
	<div class="row resumen">
		<div class="col-md-12 resumen__text">
			<div class="text__barb">
			</div>
			<div class="text__titulo">
				<p><strong><?php the_title(); ?></strong></p>
			</div>
			<div class="content__post col-md-12">
				<p><?php if ( have_posts() ) : while ( have_posts() ) : the_post();the_content();endwhile; else: ?></p>
				<p>Sorry, no posts matched your criteria.</p>
			<?php endif;?>
			</div>
		</div>
	</div>
	<div class="row rowmain__button">
		<?php if ( have_rows('logo_group') ) : while ( have_rows('logo_group') ) :  the_row();?>
			<a class="" href="<?php echo get_sub_field('logo_url'); ?>">
				<div class="main__button">
					<div class="main__buttontext hidden">
						<div class="text__subtitulo hidden">
							<p style="color: black;"><?php echo get_sub_field('logo_name'); ?></p>
						</div>
					</div>
					<div class="main__butonimg"><img class="resumen__img" src="<?php echo get_sub_field('logo_image')['url']; ?>">
					</div>
				</div>
			</a>
		<?php endwhile; endif;?>
	</div>
	<div class="row rowmain__button">
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
		<div class="col-md-6 text-center">
			<p><span class="api_text"></span></p>
			<img class="api_image" src="" alt="">
		</div>
	</div>
</div>
<?php get_footer();