<section class="l-gallery py-5">
    
    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="row">

                    <div class="col-lg-6">

                        <h2 class="l-here__title u-line-height-100 text-uppercase u-font-weight-black u-color-folk-primary">
                            Galeria
                        </h2>
                    </div>
                </div>

                <div class="row">
                    
                    <div class="col-12">

                        <div class="row">
                            
                            <!-- loop -->
                            <?php
                                $args = array(
                                    'posts_per_page' => 8,
                                    'post_type'      => 'galeria',
                                    'order'          => 'DESC'
                                );

                                $galleries = new WP_Query( $args );

                                if( $galleries->have_posts() ) :
                                    while( $galleries->have_posts() ) : $galleries->the_post();
                            ?>
                                        <div class="col-md-4 my-3">
                                            
                                            <a 
                                            class="l-gallery__album d-block"
                                            href="<?php the_permalink() ?>">
                                                <img
                                                class="img-fluid w-100"
                                                src="<?php echo get_field( 'capa_do_album' ) ?>"
                                                alt="<?php the_title() ?>">
                                            </a>
                                        </div>
                            <?php   endwhile;
                                endif;

                                wp_reset_query();
                            ?>
                            <!-- end loop -->
                        </div>

                        <div class="row justify-content-center">

                            <div class="col-md-4 col-lg-3 my-3">

                                <a 
                                class="l-news__small__card-read-more u-line-height-100 hover:u-opacity-8 d-block u-font-weight-bold text-center text-decoration-none u-color-folk-white u-bg-folk-theme py-3 px-4" 
                                href="<?php echo get_home_url( null, 'fotos' ) ?>">
                                    Mais fotos
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-4">

                        <!-- swiper -->
                        <div class="swiper-container js-swiper-videos">

                            <div class="swiper-wrapper">

                                <!-- slide -->
                                <?php 
                                    if( have_rows( 'videos' ) ) : 
                                        while( have_rows( 'videos' ) ) : the_row();
                                ?>
                                            <div class="swiper-slide flex-column">

                                                <!-- <iframe class="w-100" src="https://www.youtube.com/embed/nnr7kAkrSJk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                                                <?php echo get_sub_field( 'video' ) ?>

                                                <p class="l-gallery__video-title u-font-weight-bold text-center text-uppercase u-color-folk-primary mt-3">
                                                    <!-- Terço Luminoso reúne famílias -->
                                                    <?php echo get_sub_field( 'titulo_video' ) ?>
                                                </p>
                                            </div>
                                <?php   endwhile;
                                    endif;
                                ?>
                                <!-- end slide -->

                                <!-- <div class="swiper-slide flex-column">

                                    <iframe class="w-100" src="https://www.youtube.com/embed/nnr7kAkrSJk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    
                                    <p class="l-gallery__video-title u-font-weight-bold text-center text-uppercase u-color-folk-primary mt-3">
                                        Terço Luminoso reúne famílias
                                    </p>
                                </div>

                                <div class="swiper-slide flex-column">

                                    <iframe class="w-100" src="https://www.youtube.com/embed/nnr7kAkrSJk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    
                                    <p class="l-gallery__video-title u-font-weight-bold text-center text-uppercase u-color-folk-primary mt-3">
                                        Terço Luminoso reúne famílias
                                    </p>
                                </div>

                                <div class="swiper-slide flex-column">

                                    <iframe class="w-100" src="https://www.youtube.com/embed/nnr7kAkrSJk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    
                                    <p class="l-gallery__video-title u-font-weight-bold text-center text-uppercase u-color-folk-primary mt-3">
                                        Terço Luminoso reúne famílias
                                    </p>
                                </div> -->
                            </div>
                        </div>
                        <!-- end swiper -->

                        <!-- arrows -->
                        <div class="swiper-button-prev swiper-button-patterns swiper-button-prev-videos js-swiper-button-prev-videos after::u-color-folk-white u-bg-folk-primary"></div>
                        <div class="swiper-button-next swiper-button-patterns swiper-button-next-videos js-swiper-button-next-videos after::u-color-folk-white u-bg-folk-primary"></div>
                    </div>

                    <div class="col-12 mt-5 mt-lg-0">

                        <div class="row justify-content-center">

                            <div class="col-md-4 col-lg-3 my-3">

                                <a 
                                class="l-news__small__card-read-more u-line-height-100 hover:u-opacity-8 d-block u-font-weight-bold text-center text-decoration-none u-color-folk-white u-bg-folk-theme py-3 px-4" 
                                href="<?php echo get_field( 'mais_videos_link' ) ?>">
                                    Mais vídeos
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>