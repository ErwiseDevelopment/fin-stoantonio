<section 
class="l-patron pb-5"
style="background-image: url(<?php echo get_field( 'imagem_fundo' ) ?>)">

    <div class="container">
        
        <div class="row">

            <div class="col-12 l-patron__box">

                <div class="row">

                    <div class="col-lg-6">

                        <h2 class="l-here__title u-line-height-100 text-uppercase u-font-weight-semibold u-color-folk-primary">
                            Nosso <br>
                            <span class="u-font-weight-black u-color-folk-primary">padroeiro</span>
                        </h2>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-8">
                        <!-- <img
                        class="img-fluid"
                        src="http://santoantonio.test/wp-content/uploads/2022/03/Clip.png"
                        alt=""> -->

                        <img
                        class="img-fluid"
                        src="<?php echo get_field( 'imagem_padroeiro' ) ?>"
                        alt="<?php echo get_field( 'nome_do_padroeiro' ) ?>">
                    </div>

                    <div class="col-md-4 d-flex align-items-end mt-3 mt-md-0">
                        <h5 class="l-patron__title u-line-height-100 u-font-weight-bold u-color-folk-white">
                            <!-- Santo <br>
                            <span class="u-font-weight-black u-color-folk-white">Antônio</span> -->

                            <?php echo get_field( 'nome_do_padroeiro' ) ?> <br>
                            <span class="u-font-weight-black u-color-folk-white"><?php echo get_field( 'sobrenome_do_padroeiro' ) ?></span>
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-md-10 mt-4">

                <span class="l-patron__text d-block u-font-weight-medium all:u-color-folk-white">
                    <!-- Fernando de Bulhões (verdadeiro nome de Santo Antônio), nasceu em Lisboa em 15 de agosto de 1195, numa família de posses. Aos 15 anos entrou para um convento
                    agostiniano, primeiro em Lisboa e depois em Coimbra, onde provavelmente se ordenou.
                    Em 1220 trocou o nome para Antônio e ingressou na Ordem Franciscana, na esperança de, a exemplo dos mártires, pregar aos sarracenos no Marrocos. Após um ano de catequese nesse país, teve de deixá-lo devido a uma enfermidade e seguiu para a Itália.
                    Indicado professor de teologia pelo próprio são Francisco de Assis, lecionou nas universidades de Bolonha, Toulouse, Montpellier, Puy-en-Velay e Pádua, adquirindo grande renome como orador sacro no sul da França e na Itália. Ficaram célebres os sermões que proferiu em Forli, Provença, Languedoc e Paris.
                    Em todos esses lugares suas prédicas encontravam forte eco popular, pois lhe eram atribuídos feitos prodigiosos, o que contribuía para o crescimento de sua fama de santidade. A saúde sempre precária levou-o a recolher-se ao convento de Arcella, perto de Pádua, onde escreveu uma série de sermões para domingos e dias santificados, alguns dos quais seriam reunidos e publicados entre 1895 e 1913. Dentro da Ordem Franciscana, Antônio liderou um grupo que se insurgiu contra os abrandamentos introduzidos na regra pelo superior Elias. -->

                    <?php echo get_field( 'descricao_padroeiro' ) ?>
                </span>

                <div class="row">

                    <div class="col-md-3">
                        <a 
                        class="l-news__medium__card-read-more u-line-height-100 hover:u-opacity-8 d-block u-font-weight-bold text-center text-decoration-none u-color-folk-white u-bg-folk-primary py-2 px-5" 
                        href="<?php echo get_field( 'saiba_mais_padroeiro' ) ?>">
                            Ler mais
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>