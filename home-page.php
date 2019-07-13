<?php
/**
 * Template Name: Main page
 *
 */
get_header(); ?>

<section id="main" <?php if( !is_mobile() ) : ?>class="image__bg"<?php endif; ?>>
   <?php if( !is_mobile() && ( get_field('fon_bg') == 'video' ) ) : ?>
      <div id="video-bg">
            <video width="100%" height="100%" preload="auto" autoplay="autoplay"
            loop="loop" poster="<?php echo get_template_directory_uri(); ?>/img/Photo_sea.svg">
                <source src="<?php echo get_template_directory_uri(); ?>/video/Pexels-Videos-1918465.mp4" type="video/mp4"></source>
                <source src="<?php echo get_template_directory_uri(); ?>/video/Pexels-Videos-1918465.webm" type="video/webm"></source>
            </video>
        </div>
    <style>section#main{height: auto;}</style>
    <?php endif; ?>
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
            <div class="col-12 d-flex justify-content-center flex-column">
                <p class="site__subheader text-center"><?php the_field('site_subheader'); ?></p>
                <h1 class="text-white site__header text-center"><span><?php the_field('site_header'); ?></span></h1>
                <div class="site__desc text-white text-center"><?php the_field('site_desc'); ?></div>
                <div class=" d-flex align-items-center justify-content-center">
                    <a href="#" class="form__show text-white"><?php echo __('Принять участие'); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $first = get_field('section_second_text');
if( $first && !empty( $first ) ) : ?>
<section class="blue__bg">
    <div class="container">
        <div class="row">
            <h2 class="section__header col-12 text-center line__right d-flex justify-content-center align-items-center">
                <?php the_field('section_second_header'); ?><img src="<?php echo get_template_directory_uri(); ?>/img/Line.svg" alt="">
            </h2>
            <div class="section__content col-12"><?php the_field('section_second_text'); ?></div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php if( have_rows('section_third_puncts') ): ?>
<section class="white__bg">
    <div class="container">
        <div class="row">
            <h2 class="section__header col-12 text-center line__left d-flex justify-content-center align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Line.svg" alt=""><?php the_field('section_third_header'); ?>
            </h2>
            <div class="section__content col-12">
                <?php $count = 1; ?>
                <?php $length = get_field('section_third_puncts');
                          $len = count($length); ?>
                <?php if( $len > 4 ) : ?>
                <div class="row">
                   <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
                    <?php while ( have_rows('section_third_puncts') ) : the_row(); ?>
                                <?php if( $count % 3 == 0 ) : ?>
                                        <span class="d-block text-left count"><?php echo $count; ?><span class="crap">.</span></span>
                                        <span class="punct__text"><?php the_sub_field('one_punct'); ?></span>
                                    </div>
                                    <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
                                <?php else : ?>
                                    <span class="d-block text-left count"><?php echo $count; ?><span class="crap">.</span></span>
                                    <span class="punct__text"><?php the_sub_field('one_punct'); ?></span>
                                <?php endif; ?>
                    <?php $count++; endwhile; ?>   
                    </div>            
                </div>
                <?php endif; ?>    
                <?php if( $len <= 4 ) : ?>   
                <div class="row">
                    <?php while ( have_rows('section_third_puncts') ) : the_row(); ?>
                        <div class="col-12 col-md-6">
                            <span class="d-block text-left count"><?php echo $count; ?><span class="crap">.</span></span>
                            <span class="punct__text"><?php the_sub_field('one_punct'); ?></span>
                        </div>
                    <?php $count++; endwhile; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php if( have_rows('section_fourth_puncts') ): ?>
<section class="white__purpl noteb__bg">
    <div class="container">
        <div class="row">
            <h2 class="section__header col-12 text-center text-white line__left d-flex justify-content-center align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Line.svg" alt=""><?php the_field('section_fourth_header'); ?>
            </h2>
            <div class="section__content col-12">
                <div class="row figure">
                    <?php $counter = 1; ?>
                    <?php while ( have_rows('section_fourth_puncts') ) : the_row(); ?>
                        <div class="col-12 col-md-6 col-lg-3 d-flex flex-column <?php echo ( $counter % 2 == 0 ) ? 'check' : ''; ?>">
                            <span class="d-flex flex-column align-items-center w-100 text-center text-white"><?php the_sub_field('one_punct_header'); ?></span>
                            <small class="d-block w-100 text-center text-white punct__text"><?php the_sub_field('one_punct_text'); ?></small>
                        </div>
                    <?php $counter++; ?>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php if( have_rows('section_fifth_puncts') ): ?>
<section id="accordion__container">
    <div class="container">
        <div class="row">
            <h2 class="section__header col-12 text-center line__right d-flex justify-content-center align-items-center">
                <?php the_field('section_fifth_header'); ?><img src="<?php echo get_template_directory_uri(); ?>/img/Line.svg" alt="">
            </h2>
            <div class="panel-group col-12" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="row">
                <?php $counter = 1; ?>
                <?php while ( have_rows('section_fifth_puncts') ) : the_row(); ?>
                    <div class="panel col-12">
                        <div class="row">
                            <a role="button" class="col-12 d-flex align-items-center collapsed " data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $counter; ?>" aria-expanded="true" aria-controls="collapse<?php echo $counter; ?>">
                                <span class="counter text-white d-flex justify-content-center align-items-center"><?php echo $counter; ?></span>
                                <span class="panel__header__content d-flex justify-content-center align-items-center">
                                    <?php the_sub_field('one_punct_header'); ?>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div id="collapse<?php echo $counter; ?>" class="panel-collapse collapse in col-12" role="tabpanel" aria-labelledby="heading<?php echo $counter; ?>">
                        <div class="panel-body"><?php the_sub_field('one_punct_text'); ?></div>
                    </div>
                <?php $counter++; ?>
                <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<section class="white__purpl">
    <div class="container">
        <div class="row">
            <p class="__header col-12 text-center text-white"><?php echo __('Забронируйте Ваше участие на курсе!'); ?></p>
            <form action="" class="col-12 submit" method="post">
                <div class="row">
                   <?php echo '<style>textarea[name="comment"],textarea[name="message"]{display:none}</style>'; ?>
                                    <textarea name="comment"></textarea>
                                    <textarea name="message"></textarea>
                   <div class="form-group col-12 col-md-6 col-lg-4 col-xl-3">
                        <label for="name" class="sr-only"><?php echo __('Ваше имя'); ?></label>
                        <input id="name" name="name" type="text" placeholder="<?php echo __('Ваше имя'); ?>" class="form-control" required>
                   </div>
                   <div class="form-group col-12 col-md-6 col-lg-4 col-xl-3">
                        <label for="tel" class="sr-only"><?php echo __('номер телефона'); ?></label>
                        <input id="tel" name="tel" type="tel" placeholder="<?php echo __('номер телефона'); ?>" class="form-control" onkeypress='validate(event)'>
                   </div>
                   <div class="form-group col-12 col-md-6 col-lg-4 col-xl-3">
                        <label for="email" class="sr-only"><?php echo __('e-mail'); ?></label>
                        <input id="email" name="email" type="email" placeholder="<?php echo __('e-mail'); ?>" class="form-control">
                   </div>
                   <div class="form-group col-12 col-md-6 col-lg-4 offset-lg-4 offset-xl-0 col-xl-3">
                       <input type="submit" class="form-control" value="<?php echo __('Принять участие'); ?>">
                   </div>
                </div>
            </form>
        </div>
    </div>
</section>
<?php if( have_rows('section_seventh_puncts') ): ?>
<section class="blue__bg">
    <div class="container">
        <div class="row">
            <h2 class="section__header col-12 text-center line__right d-flex justify-content-center align-items-center">
                <?php the_field('section_seventh_header'); ?><img src="<?php echo get_template_directory_uri(); ?>/img/Line.svg" alt="">
            </h2>
            <?php while ( have_rows('section_seventh_puncts') ) : the_row(); ?>
                <div class="col-12 col-md-12 col-lg-6 section__content white__bg__wrapper">
                   <div class="white__bg d-block h-100">
                       <?php the_sub_field('one_punct'); ?>
                   </div>
                </div>
            <?php endwhile; ?> 
        </div>
    </div>
</section>
<?php endif; ?>
<?php $second = get_field('section_eighth_text');
if( $second && !empty( $second ) ) : ?>
<section class="">
    <div class="container">
        <div class="row">
            <h2 class="section__header col-12 text-center line__left d-flex justify-content-center align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Line.svg" alt=""><?php the_field('section_eighth_header'); ?>
            </h2>
            <div class="section__content col-12 col-lg-10 d-block ml-auto mr-auto"><?php the_field('section_eighth_text'); ?></div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php $cost_one = get_field('cost_price');
      $cost_two = get_field('cost_text');
if( $cost_one || $cost_two ) : ?>
<section class="blue__bg cost">
    <div class="container">
        <div class="row">
            <h2 class="section__header col-12 text-center line__right d-flex justify-content-center align-items-center">
                <?php the_field('section_cost_header'); ?><img src="<?php echo get_template_directory_uri(); ?>/img/Line.svg" alt="">
            </h2>
            <div class="cost_wrapper col-12 col-lg-7 d-block ml-auto mr-auto">
                <div class="row">
                    <div class="col-12 cost__header">
                        <h3 class="text-center text-white w-100 d-flex flex-column flex-md-row align-items-center justify-content-center"><?php echo __('Акционная цена'); ?><img src="<?php echo get_template_directory_uri(); ?>/img/Early_birds.svg" alt=""></h3>
                        <span class="d-block w-100 cost__price text-center"><?php the_field('cost_price'); ?><small><?php echo __('грн'); ?></small></span>
                    </div>
                    <div class="col-12 white__line text-center d-flex align-items-center w-100 h-100 justify-content-center">
                        <?php the_field('cost_text'); ?>
                    </div>
                    <?php if( have_rows('cost_cycle') ): ?>
                        <?php $counter = 1; ?>
                        <?php while ( have_rows('cost_cycle') ) : the_row(); ?>
                            <div class="col-12 cost__punct <?php echo( $counter % 2 == 0 ) ? 'white__line' : 'blue__line'; ?>">
                                <div class="content d-flex align-items-center w-100 h-100"><?php the_sub_field('cost_punct'); ?></div>
                            </div>
                        <?php $counter++; endwhile; ?> 
                    <?php endif; ?>
                    <div class="col-12 col-md-6 white__line d-flex align-items-center w-100 h-100 justify-content-center justify-content-md-start"><div class="content"><?php the_field('cost_friend'); ?></div></div>
                    <div class="col-12 col-md-6 white__line d-flex align-items-center w-100 h-100 justify-content-center justify-content-md-end">
                        <div class="content">
                            <span class="follow_price d-block text-center">
                                <?php echo __('Скидка'); ?>
                            </span>    
                            <span class="procent">
                                <?php the_field('cost_cost'); ?>
                            </span>
                        </div>
                    </div>
                    <div class="col-12 blue__line ">
                        <div class="content text-white text-center d-flex align-items-center w-100 h-100 justify-content-center "><a href="#" class="form__show"><?php echo __('Принять участие'); ?></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php $time = get_field('timer');
if( $time ) : ?>
<section id="timer">
    <div class="container">
        <div id="clockdiv" class="row">
            <p class="__header col-12 text-center text-white"><?php echo __('Успей купить по акционной цене!'); ?></p>
            <p class="__header col-12 text-center text-white"><?php echo __('До старта курса осталось:'); ?></p>
            <div class="col-12 col-md-6 col-lg-3 d-flex flex-column align-items-center justify-content-center">
                <div class="counter days d-flex align-items-center w-100 h-100 justify-content-center"><span></span></div>
                <div class="counter__desc text-center text-white"><?php echo __('дня'); ?></div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 d-flex flex-column align-items-center justify-content-center">
                <div class="counter hours d-flex align-items-center w-100 h-100 justify-content-center"><span></span></div>
                <div class="counter__desc text-center text-white"><?php echo __('часа'); ?></div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 d-flex flex-column align-items-center justify-content-center">
                <div class="counter minutes d-flex align-items-center w-100 h-100 justify-content-center"><span></span></div>
                <div class="counter__desc text-center text-white"><?php echo __('минуты'); ?></div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 d-flex flex-column align-items-center justify-content-center">
                <div class="counter seconds d-flex align-items-center w-100 h-100 justify-content-center"><span></span></div>
                <div class="counter__desc text-center text-white"><?php echo __('секунды'); ?></div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
            jQuery(document).ready(function($) {
                var deadline = '<?php the_field('timer'); ?>';                 
                initializeClock("clockdiv", deadline);
            });
</script>    
<?php endif; ?>
<?php if( have_rows('section_ninth_puncts') ): ?>
<section class="white__bg">
   <div class="container">
       <div class="row">
            <h2 class="section__header col-12 text-center line__left d-flex justify-content-center align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Line.svg" alt=""><?php the_field('section_ninth_header'); ?>
            </h2>
            <div class="col-12 table__time">
                <div class="row">
                    <div class="col-12 teble__header text-white d-none d-lg-block">
                            <div class="row">
                                <div class="start col-lg-3 d-flex align-items-center text-center justify-content-center"><?php echo __('Старт<br />курса'); ?></div>
                                <div class="day col-lg-3 d-flex align-items-center text-center justify-content-center"><?php echo __('День'); ?></div>
                                <div class="time col-lg-3 d-flex align-items-center text-center justify-content-center"><?php echo __('Время'); ?></div>
                                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                                   <div class="choose text-center">
                                      <?php echo __('Забронируйте<br />место'); ?> 
                                   </div>
                                </div>
                            </div>
                    </div>
                    <?php while ( have_rows('section_ninth_puncts') ) : the_row(); ?>
                        <div class="col-12 table__panel">
                            <div class="row">
                                <div class="start col-lg-3 col-12 d-flex align-items-center text-center text-center justify-content-center"><?php the_sub_field('course_start'); ?></div>
                                <div class="day col-lg-3 col-12 d-flex align-items-center text-center justify-content-center"><?php the_sub_field('course_day'); ?></div>
                                <div class="time col-lg-3 col-12 d-flex align-items-center text-center justify-content-center"><?php the_sub_field('course_time'); ?></div>
                                <div class="col-lg-3 col-12 d-flex align-items-center justify-content-center">
                                    <a href="#" class="form__show text-white text-center"><?php echo __('Принять участие'); ?></a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
       </div>
   </div>
</section>
<?php endif; ?>
<?php if( have_rows('section_tenth_puncts') ): ?>
<section class="white__purpl why__now">
    <div class="container">
        <div class="row">
            <h2 class="section__header col-12 text-center text-white line__right d-flex justify-content-center align-items-center">
                <?php the_field('section_tenth_header'); ?><img src="<?php echo get_template_directory_uri(); ?>/img/Line.svg" alt="">
            </h2>
            <div class="section__content col-12">
                <div class="row">
                    <?php while ( have_rows('section_tenth_puncts') ) : the_row(); ?>
                        <div class="col-12 col-md-6 col-lg-3 d-flex flex-column">
                            <span class="d-flex flex-column align-items-center w-100 text-center text-white"><?php the_sub_field('one_punct_header'); ?></span>
                            <small class="d-block w-100 text-center text-white punct__text"><?php the_sub_field('one_punct_text'); ?></small>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php get_footer(); ?>