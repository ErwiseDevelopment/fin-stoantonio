<?php $link_pattern = get_field( 'link_padrao_portal', 'option' ); ?>
<section class="l-here">

    <div class="container">

        <div class="row">

            <div class="col-12 mt-5">

                <div class="row">

                    <div >
                        <h2 class="l-here__title u-line-height-100 text-uppercase u-font-weight-black u-color-folk-primary">
                            Acontecendo <br>
                            <span class="u-font-weight-semibold u-color-folk-primary">por aqui</span>
                        </h2>
                    </div>

                    <div class="col-lg-6 d-flex justify-content-center justify-content-lg-end align-items-end mt-3 mt-lg-0">

                        <div class="row">

                            <div class="col-12">
                                <a class="l-news__medium__card-read-more u-line-height-100 hover:u-opacity-8 d-block u-font-weight-bold text-center text-decoration-none u-color-folk-white u-bg-folk-theme py-2 px-5" 
                                href="<?php echo $link_pattern . get_field ('ver_todas_noticias','option')?>" target = "_blank">
                                    Ver todas as notícias
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">

            <div class="col-12 mt-4 mb-5 pb-5">

                <!-- swiper -->
                <div class="swiper-container swiper-container-here js-swiper-here">

                    <div class="swiper-wrapper">

                        <!-- slide -->
                        <?php
                            $link_pattern = get_field( 'link_padrao_portal', 'option' );
                            $post_link = $link_pattern . get_field( 'link_do_post', 'option' );
                            $category_section = get_field( 'categoria_acontecendo_por_aqui', 'option' );
                            $request_posts = wp_remote_get( $post_link );

                            if(!is_wp_error( $request_posts )) :
                                $body = wp_remote_retrieve_body( $request_posts );
                                $data = json_decode( $body );

                                if(!is_wp_error( $data )) :
                                    foreach( $data as $rest_post ) :
                                        foreach($rest_post->child_category as $categories) :    
                                            if($categories == $category_section) :
                        ?>
                                                <div class="swiper-slide">

                                                    <div class="card border-0">

                                                        <div class="l-here__card-img card-img">
                                                            <img
                                                            class="img-fluid w-100 h-100"
                                                            src="<?php echo $rest_post->featured_image_src; ?>"
                                                            alt="<?php echo $rest_post->title->rendered; ?>">
                                                        </div>

                                                        <div class="card-body">

                                                            <h5 class="l-here__card-title u-font-weight-bold text-center text-uppercase u-color-folk-primary">
                                                                <!-- CONCLUSÃO DA ETAPA DA MISTAGOGIA É CELEBRADA PELAS CRIANÇAS DA PRIMEIRA EUCARISTIA -->
                                                                <?php echo $rest_post->title->rendered; ?>
                                                            </h5>

                                                            <p class="l-here__card-text u-font-weight-medium">
                                                                <!-- No último final de semana, 29 e 30 de maio, na 
                                                                Solenidade da Santíssima Trindade, os 
                                                                catequizandos da Paróquia Santo Antônio, que 
                                                                receberam a primeira eucaristia no mês de abril, 
                                                                participaram da Santa Missa para celebrar o 
                                                                enceramento da  […] -->
                                                                <?php echo $rest_post->post_excerpt; ?>
                                                            </p>

                                                            <p class="l-here__card-date u-font-weight-bold u-color-folk-theme">
                                                                <!-- 02 de junho de 2021 -->
                                                                <?php
                                                                    list($data_day, $data_month, $data_year) = explode("/", $rest_post->post_date);
                                                                    $post_long_month = get_long_month( $data_month );

                                                                    echo $data_day . ' de ' .  $post_long_month .  ' de ' . $data_year; 
                                                                ?>
                                                            </p>

                                                            <div class="row">

                                                                <div class="col-md-7">
                                                                    <a 
                                                                    class="l-news__small__card-read-more u-line-height-100 hover:u-opacity-8 d-block u-font-weight-bold text-center text-decoration-none u-color-folk-white u-bg-folk-secondary py-2 px-5" 
                                                                    href="<?php echo esc_url( $rest_post->link ); ?>">
                                                                        Ler mais
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                        <?php               endif;
                                        endforeach;
                                    endforeach;
                                endif; 
                            endif; 
                        ?>
                        <!-- end slide -->

                    </div>
                </div>

                <div class="swiper-button-prev swiper-button-prev-partners js-swiper-button-prev-here after::u-color-folk-white u-bg-folk-primary"></div>
                <div class="swiper-button-next swiper-button-next-partners js-swiper-button-next-here after::u-color-folk-white u-bg-folk-primary"></div>
                <!-- end swiper -->
            </div>
        </div>
    </div>
</section>