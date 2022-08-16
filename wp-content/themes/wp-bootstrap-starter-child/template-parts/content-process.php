<section class="l-process u-bg-folk-theme py-5">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="row justify-content-center">

                    <!-- loop -->
                    <?php
                        if( have_rows( 'icones' ) ) :
                            while( have_rows( 'icones' ) ) : the_row();
                    ?>
                                <div class="col-md-4 my-3 my-md-0">

                                    <div class="card border-0 flex-row u-bg-folk-none">

                                        <div class="l-process__card-img card-img">
                                            <a href="<?php echo get_sub_field('link_redirecionamento')?>">
                                            <img
                                            class="img-fluid"
                                            src="<?php echo get_sub_field( 'icone_imagem' ) ?>"
                                            alt="<?php echo get_sub_field( 'titulo' ) ?>">
                                        </div>

                                        <div class="card-body d-flex flex-column justify-content-center">

                                            <h4 class="l-process__card-title u-font-weight-black text-uppercase u-color-folk-white">
                                                <!-- Sacramentos -->
                                                <?php echo get_sub_field( 'titulo' ) ?>
                                            </h4>

                                            <p class="l-process__card-text u-font-weight-medium u-color-folk-white mb-0">
                                                <!-- // Informações, agenda
                                                documentação necessária -->
                                                <?php echo(limit_words(get_sub_field( 'descricao' ) , 25)); ?>
                                            </p>
                                            <a>
                                        </div>
                                    </div>
                                </div>
                    <?php
                            endwhile;
                        endif;
                    ?>
                    <!-- end loop -->
                </div>
            </div>
        </div>
    </div>
</section>