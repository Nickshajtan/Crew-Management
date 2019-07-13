                <footer>
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <p class="__header col-12 text-left text-white"><?php echo __('Забронируйте место на курсе и получите консультацию по программе обучения'); ?></p>
                                <form action="" class="col-12 submit" method="post">
                                    <div class="row">
                                      <?php echo '<style>textarea[name="comment"],textarea[name="message"]{display:none}</style>'; ?>
                                        <textarea name="comment"></textarea>
                                        <textarea name="message"></textarea>
                                       <div class="form-group col-12">
                                            <label for="name" class="sr-only"><?php echo __('Ваше имя'); ?></label>
                                            <input id="name" name="name" type="text" placeholder="<?php echo __('Ваше имя'); ?>" class="form-control" required>
                                       </div>
                                       <div class="form-group col-12">
                                            <label for="tel" class="sr-only"><?php echo __('номер телефона'); ?></label>
                                            <input id="tel" name="tel" type="tel" placeholder="<?php echo __('номер телефона'); ?>" class="form-control" onkeypress='validate(event)'>
                                       </div>
                                       <div class="form-group col-12">
                                            <label for="email" class="sr-only"><?php echo __('e-mail'); ?></label>
                                            <input id="email" name="email" type="email" placeholder="<?php echo __('e-mail'); ?>" class="form-control">
                                       </div>
                                       <div class="form-group col-12">
                                           <input type="submit" class="form-control" value="<?php echo __('Принять участие'); ?>">
                                       </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-12 col-md-6 d-flex justify-content-start align-items-center contacts">
                                <div class="row">
                                    <p class="__header col-12 text-left text-white"><?php echo __('Контакты:'); ?></p>
                                    <?php if( have_rows('phones', 'options') ): ?>
                                        <?php while ( have_rows('phones', 'options') ) : the_row(); ?>
                                            <a href="tel:<?php the_sub_field('phone_tel'); ?>" class="text-white col-12 footer__line">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons8-phone.svg" alt=""><?php the_sub_field('phone_phone'); ?>
                                            </a>
                                        <?php endwhile; ?> 
                                    <?php endif; ?>
                                    <?php if( have_rows('emails', 'options') ): ?>
                                        <?php while ( have_rows('emails', 'options') ) : the_row(); ?>
                                            <a href="mailto:<?php the_sub_field('email_email'); ?>" class="text-white col-12 footer__line">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons8-envelope.svg" alt=""><?php the_sub_field('email_email'); ?>
                                            </a>
                                        <?php endwhile; ?> 
                                    <?php endif; ?>
                                    <div class="text-white col-12 footer__line d-flex flex-row">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons8-location.svg" alt=""><?php the_field('address_address', 'options'); ?>
                                    </div>
                                    <div class="col-12 footer__line">
                                        <a href="<?php the_field('inst_inst', 'options'); ?>" target="_blank" style="margin-right:5px">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons8-instagram.svg" alt="" class="social">
                                        </a>
                                        <a href="<?php the_field('fb_fb', 'options'); ?>" target="_blank" style="margin-left:5px">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons8-facebook.svg" alt="" class="social">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 copyright text-white text-center">2019 © Все права защищены</div>
                        </div>
                    </div>
                </footer>
            </div>
        <div class="overlay"></div>
        <div id="loader" style="display:none;"></div>
        <div class="modal modal__thanks text-center justify-content-center align-items-center">
                 <div class="value text-center d-flex flex-column justify-content-center align-items-center">
                     <p class="__header col-12 text-center text-white"></p>
                     <p class="desc"></p>
                 </div>
        </div>
        <div class="modal modal__form text-center justify-content-center align-items-center">
                  <div class="value d-flex flex-column justify-content-center align-items-center">
                      <p class="__header col-12 text-center text-white"><?php echo __('Заполните форму и забронируйте Ваше участие на курсе!'); ?></p>
                  <form action="" class="col-12 col-md-8 submit d-flex flex-column" method="post">
                                    <div class="row">
                                      <?php echo '<style>textarea[name="comment"],textarea[name="message"]{display:none}</style>'; ?>
                                        <textarea name="comment"></textarea>
                                        <textarea name="message"></textarea>
                                       <div class="form-group col-12">
                                            <label for="name" class="sr-only"><?php echo __('Ваше имя'); ?></label>
                                            <input id="name" name="name" type="text" placeholder="<?php echo __('Ваше имя'); ?>" class="form-control" required>
                                       </div>
                                       <div class="form-group col-12">
                                            <label for="tel" class="sr-only"><?php echo __('номер телефона'); ?></label>
                                            <input id="tel" name="tel" type="tel" placeholder="<?php echo __('номер телефона'); ?>" class="form-control" onkeypress='validate(event)'>
                                       </div>
                                       <div class="form-group col-12">
                                            <label for="email" class="sr-only"><?php echo __('e-mail'); ?></label>
                                            <input id="email" name="email" type="email" placeholder="<?php echo __('e-mail'); ?>" class="form-control">
                                       </div>
                                       <div class="form-group col-12">
                                           <input type="submit" class="form-control" value="<?php echo __('Принять участие'); ?>">
                                       </div>
                                    </div>
                                </form>
                  </div>
        </div>
    <?php wp_footer(); ?>
</body>
</html>
