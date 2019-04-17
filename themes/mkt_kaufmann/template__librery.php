<?php /* Template Name: Plantilla-Libreria */
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
			<div class="content__post" style="float: left;">
				<p><?php if ( have_posts() ) : while ( have_posts() ) : the_post();the_content();endwhile; else: ?></p>
				<p>Sorry, no posts matched your criteria.</p>
			<?php endif;?>
		</div>
	</div>
</div>
<div class="row resumen">
	<div class="col-md-12 resumen__text">
		<div class="text__barb">
			<a id="plantillaref" rel="m_PageScroll2id"></a>
		</div>
		<div class="text__titulo">
			<p><strong>Plantillas</strong></p>
		</div>
		<div class="content__post">
			<p>Utiliza nuestras plantillas para mantener el estándar Kaufmann.</p>
		</div>
	</div>
</div>
<?php get_template_part('template_cards'); ?>
<div class="row resumen">
	<div class="col-md-12 resumen__text">
		<div class="text__barb">
			<a id="logoref" rel="m_PageScroll2id"></a>
		</div>
		<div class="text__titulo">
			<p><strong>Logos y Editables</strong></p>
		</div>
		<div class="content__post">
			<p>Descarga el logo que necesites, compilados en diferentes formatos para que los puedas utilizar, y si en caso que necesites los formatos editables, dentro del mismo paquetes encontraras los archivos en vectores.</p>
		</div>
	</div>
</div>
<div class="container__library containermain__button">
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
	</div>
</div>
<script type="text/javascript">
	if (window.location.hash=='#logo'||window.location.hash=='#galeria'||window.location.hash=='#plantilla'){
		setTimeout(function(){
			$('html, body').animate({
				scrollTop: $(window.location.hash+'ref').offset().top -50
			}, 1000);
		},500);
	};

</script>
<?php get_footer();