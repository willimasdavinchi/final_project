<?php get_header();?>
  <div class="jumbotron introheader align-middle">
   <video autoplay muted loop class="background__video">
     <source src="<?php echo get_template_directory_uri(); ?>/assets/video/background_mobile.mp4" type="video/mp4">
   </video>
   <div class="container introheader__title">
     <div class="row introheader__text">
       <div class="col-md-12">
         <img style="padding-bottom: 2vh;" class="img-fluid rounded mb-3 mb-md-0" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_grupo_kaufmann.png" alt="Marketing">
        </div>
       <div class="col-md-12 text-light introheader__text">
         <p>Conoce todas nuestras últimas acciones comerciales para las diferentes marcas que representamos.
         </p>
       </div>
     </div>
     <div class="row align-self-center introheader__control">
        <div class="align-self-center"><i class="fas fa-angle-double-down introheader__button  introheader__expandbutton" aria-hidden="true" autofocus></i></div>
          <div class="row introheader__controlvideo">
            <div class="introheader__button"><a href="https://youtu.be/tJXyktvVTf4" target="_blank"><i class="fab fa-youtube" aria-hidden="true" autofocus></i></a>
            </div>
          </div>
       </div>
     </div>
  </div>
  <div class="container">
    <div class="row resumen hidden">
      <div class="hidden">
        <img class="resumen__img hidden" src="<?php echo get_template_directory_uri(); ?>/assets/images/main_header.jpg">
      </div>
      <div class="col-md-12 resumen__text hidden">
        <div class="text__barb hidden"></div>
        <div class="text__titulo hidden">
          <p><strong><?php the_title(); ?></strong></p>
        </div>
        <div class="hidden">
          <p><?php if ( have_posts() ) : while ( have_posts() ) : the_post();the_content();endwhile; else: ?><p>Sorry, no posts matched your criteria.</p><?php endif; ?></p>
        </div>
      </div>
    </div>
  </div>
  <div class="container containermain__button">
    <?php get_template_part('template_cards'); ?>
  </div>
<?php get_footer();