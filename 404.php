<?php get_header(); ?>
<section id="main" class="image__bg" style="height:auto;">
   <div class="sticky__top d-none d-lg-block w-100">
       <div class="container">
        <div class="row">
           <div class="col-12 d-flex flex-row align-items-center justify-content-between">
               <?php if( have_rows('phones', 'options') ): ?>
                                        <div class="d-flex flex-column">
                                        <?php while ( have_rows('phones', 'options') ) : the_row(); ?>
                                            <a href="tel:<?php the_sub_field('phone_tel'); ?>" class="text-white">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons8-phone.svg" alt=""><?php the_sub_field('phone_phone'); ?>
                                            </a>
                                        <?php endwhile; ?> 
                                        </div>
                <?php endif; ?>
                <?php if( have_rows('emails', 'options') ): ?>
                                        <div class="d-flex flex-column">
                                        <?php while ( have_rows('emails', 'options') ) : the_row(); ?>
                                            <a href="mailto:<?php the_sub_field('email_email'); ?>" class="text-white">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons8-envelope.svg" alt=""><?php the_sub_field('email_email'); ?>
                                            </a>
                                        <?php endwhile; ?> 
                                        </div>
                <?php endif; ?>
                <div class="text-white d-flex flex-row">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons8-location.svg" alt=""><?php the_field('address_add', 'options'); ?>
                </div>
                                        <div>
                                            <a href="<?php the_field('inst_inst', 'options'); ?>" target="_blank">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons8-instagram.svg" alt="" class="social">
                                            </a>
                                            <a href="<?php the_field('fb_fb', 'options'); ?>" target="_blank">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons8-facebook.svg" alt="" class="social">
                                            </a>
                                        </div>
           </div>
       </div>
    </div>
   </div>
   <div class="container">
       <div class="row">
           <h1 class="col-12 text-white text-center"><span><?php echo __('Страница не найдена'); ?></span></h1>
       </div>
   </div>
</section>
<?php get_footer(); ?>