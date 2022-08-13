<section class="l-links my-3">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="row">

                    <div class="col-lg-6">

                        <h2 class="l-here__title u-line-height-100 text-uppercase u-font-weight-semibold u-color-folk-primary">
                            Links <br>
                            <span class="u-font-weight-black u-color-folk-primary">Úteis:</span>
                        </h2>
                    </div>
                </div>
            </div>

            <!-- desktop -->
            <div class="col-12 d-none d-lg-block">

                <div class="row">

                    <!-- loop -->
                    <?php 
                        if(have_rows( 'links_uteis' )) : 
                            while(have_rows( 'links_uteis' )) : the_row();
                    ?>
                                <div class="col-4 my-3">
                                    <a 
                                    href="<?php echo get_sub_field( 'link' ) ?>"
                                    target="_blank"
                                    rel="noreferrer noopener">
                                        <img
                                        class="img-fluid"
                                        src="<?php echo get_sub_field( 'logo' ) ?>"
                                        alt="<?php the_title() ?>">
                                    </a>
                                </div>
                    <?php   endwhile;
                        endif;
                    ?>
                    <!-- end loop -->
                </div>
            </div>
            <!-- end desktop -->

            <!-- mobile -->
            <div class="col-12 d-flex d-lg-none flex-wrap justify-content-between align-items-center mt-4">

                <!-- swiper -->
                <div class="swiper-container js-swiper-partners">

                    <div class="swiper-wrapper">

                        <?php 
                            if(have_rows( 'links_uteis' )) : 
                                while(have_rows( 'links_uteis' )) : the_row();
                        ?>
                                    <div class="swiper-slide">
                                        <a 
                                        href="<?php echo get_sub_field( 'link' ) ?>"
                                        target="_blank"
                                        rel="noreferrer noopener">
                                            <img
                                            class="img-fluid"
                                            src="<?php echo get_sub_field( 'logo' ) ?>"
                                            alt="<?php the_title() ?>">
                                        </a>
                                    </div>
                        <?php endwhile;
                            endif;
                        ?>
                    </div>
                </div>

                <!-- <div class="swiper-button-prev swiper-button-prev-partners js-swiper-button-prev-partners"></div>
                <div class="swiper-button-next swiper-button-next-partners js-swiper-button-next-partners"></div> -->
                <!-- end swiper -->
            </div>
            <!-- end mobile -->
        </div>
    </div>
</section>