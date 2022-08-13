<section class="l-illustration">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="row">

                    <!-- loop -->
                    <?php
                        if( have_rows( 'imagens_ilustracao' ) ) :
                            while( have_rows( 'imagens_ilustracao' ) ) : the_row();
                    ?>
                                <div class="l-illustration__col-child my-3 my-md-0 px-3">
                                    
                                    <a
                                    class="hover:u-opacity-8"
                                    href="<?php echo get_sub_field( 'link_ilustracao'   ) ?>">
                                        <img
                                        class="img-fluid"
                                        src="<?php echo get_sub_field( 'imagem_ilustracao' ) ?>"
                                        alt="<?php the_title() ?>">    
                                    </a>
                                </div>
                    <?php   endwhile;
                        endif;
                    ?>
                    <!-- end loop -->

                    <!-- <div class="col-md-8 my-3 my-md-0">
                        
                        <a
                        class="hover:u-opacity-8"
                        href="#">
                            <img
                            class="img-fluid h-100"
                            src="http://santoantonio.test/wp-content/uploads/2022/03/illustration-image-2.png"
                            alt="">    
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>