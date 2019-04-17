<div class="row rowmain__button">
  <?php if ( have_rows('card_group') ) :
    while ( have_rows('card_group') ) :  the_row();?>
      <a class="main__buttona ps2id" href="<?php echo get_sub_field('card_url'); ?>">
        <div class="main__button">
          <div class="main__buttontext hidden">
            <div class="text__subtitulo hidden">
              <p><?php echo get_sub_field('card_title'); ?></p></div>
              <div class="text__description hidden">
                <p><?php echo get_sub_field('card_description'); ?>
              </p>
            </div>
          </div>
          <div class="main__butonimg"><img class="resumen__img hidden" src="<?php echo get_sub_field('card_image')['url']; ?>"></div>
        </div>
      </a>
    <?php endwhile; else : _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); endif;?>
</div>