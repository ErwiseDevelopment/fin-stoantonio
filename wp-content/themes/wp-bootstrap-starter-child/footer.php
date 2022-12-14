<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
  
    <?php get_template_part( 'footer-widget' ); ?>
    
    <!-- <footer id="colophon" class="site-footer <php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
        <div class="container pt-3 pb-3">
            <div class="site-info">
                &copy; <php echo date('Y'); ?> <php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
                <span class="sep"> | </span>
                <a class="credits" href="https://afterimagedesigns.com/wp-bootstrap-starter/" target="_blank" title="WordPress Technical Support" alt="Bootstrap WordPress Theme"><php echo esc_html__('Bootstrap WordPress Theme','wp-bootstrap-starter'); ?></a>

            </div>
        </div>
    </footer> #colophon -->

    <!-- loader
    < echo get_template_part( 'template-parts/content', 'loader' ); >
    end loader -->
    
    <footer class="l-footer u-bg-folk-primary mt-5 py-4">
        
        <div class="container">

            <div class="row">

                <div class="col-12">
                    
                    <div class="row justify-content-center">

                        <div class="col-md-5 mt-3 mt-md-0">

                            <div class="row justify-content-center">
                    
                                <div class="col-md-9">
                                    <h3 class="c-title d-block u-font-weight-bold text-uppercase u-color-folk-white">
                                        onde nos <br>
                                        <span class="u-font-weight-black u-color-folk-white">encontrar</span>
                                    </h3>

                                    <div class="row">

                                        <div class="col-12">

                                            <span class="l-footer__text d-block u-font-weight-semibold">
                                                <?php echo get_field( 'endereco', 'option') ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-5 d-flex justify-content-center mt-3 mt-md-0">

                            <div class="row justify-content-center">
                                
                                <div class="col-md-9">
                                    <h3 class="c-title d-block u-font-weight-bold text-uppercase u-color-folk-white">
                                        fale <br>
                                        <span class="u-font-weight-black u-color-folk-white">conosco</span>
                                    </h3>

                                    <div class="row">

                                        <div class="col-12">

                                            <p class="l-footer__text u-font-weight-semibold u-color-folk-white">
                                                <?php echo get_field( 'e-mail', 'option' ) ?> <br>
                                                <?php echo get_field( 'telefone', 'option' ) ?>
                                            </p>
                                        </div>

                                        <div class="col-12 mt-2">

                                            <ul class="l-top__social-media d-flex mb-0 pl-0">

                                                <?php if(get_field( 'instagram', 'option' )) : ?>
                                                    <li class="l-top__social-media__item d-flex justify-content-center align-items-center u-bg-folk-white mx-1">
                                                        <a 
                                                        class="u-icon__brands u-icon__instagram u-font-size-0 before::u-font-size-20 text-decoration-none u-color-folk-primary" 
                                                        href="<?php echo get_field( 'instagram', 'option' ) ?>" 
                                                        target="_blank" 
                                                        rel="noreferrer noopener">
                                                            Link do Instagram
                                                        </a>
                                                    </li>
                                                <?php endif; ?>

                                                <?php if(get_field( 'facebook', 'option' )) : ?>
                                                    <li class="l-top__social-media__item d-flex justify-content-center align-items-center u-bg-folk-white mx-1">
                                                        <a 
                                                        class="u-icon__brands u-icon__facebook u-font-size-0 before::u-font-size-20 text-decoration-none u-color-folk-primary" 
                                                        href="<?php echo get_field( 'facebook', 'option' ) ?>" 
                                                        target="_blank" 
                                                        rel="noreferrer noopener">
                                                            Link do Facebook
                                                        </a>
                                                    </li>
                                                <?php endif; ?>

                                                <?php if(get_field( 'youtube', 'option' )) : ?>
                                                    <li class="l-top__social-media__item d-flex justify-content-center align-items-center u-bg-folk-white mx-1">
                                                        <a 
                                                        class="u-icon__brands u-icon__youtube u-font-size-0 before::u-font-size-20 text-decoration-none u-color-folk-primary" 
                                                        href="<?php echo get_field( 'youtube', 'option' ) ?>" 
                                                        target="_blank" 
                                                        rel="noreferrer noopener">
                                                            Link do Youtube
                                                        </a>
                                                    </li>
                                                <?php endif; ?>

                                                <?php if(get_field( 'whatsapp', 'option' )) : ?>
                                                    <li class="l-top__social-media__item d-flex justify-content-center align-items-center u-bg-folk-white mx-1">
                                                        <a 
                                                        class="u-icon__brands u-icon__whatsapp u-font-size-0 before::u-font-size-20 text-decoration-none u-color-folk-primary" 
                                                        href="<?php echo get_field( 'whatsapp', 'option' ) ?>" 
                                                        target="_blank" 
                                                        rel="noreferrer noopener">
                                                            Link do Whatsapp
                                                        </a>
                                                    </li>
                                                <?php endif; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">

       <!-- footer logos -->
                    <div class="col-12 my-4">
                        
                        <div class="row">

                            <div class="col-lg-8 d-flex align-items-center">
                                <p class="u-line-height-100 u-font-weight-semibold text-center text-md-left u-color-folk-white mb-0" style= "font-size: 13px;">
                                    SALESIANOS REGI??O SUL ?? <?php echo date('Y'); ?> TODOS OS DIREITOS RESERVADOS.
                                </p>
                            </div>

                            <div class="col-lg-4">
                            
                                <div class="row">

                                    <div class="col-6">
                                        <a 
                                        href="https://www.dominuscomunicacao.com/" 
                                        target="_blank" 
                                        rel="noreferrer noopener">
                                            <img
                                            class="img-fluid my-3 my-md-0"
                                            src="https://erwise.com.br/wp-content/uploads/2022/06/dominus.png"
                                            alt="Dominus">
                                        </a>
                                    </div>

                                    <div class="col-6">
                                        <a 
                                        href="https://www.erwise.com.br" 
                                        target="_blank" 
                                        rel="noreferrer noopener">
                                            <img
                                            class="img-fluid my-3 my-md-0"
                                            src="https://erwise.com.br/wp-content/uploads/2022/06/erwise.png"
                                            alt="Erwise">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<!-- end footer logo -->
    </footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>