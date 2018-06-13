<?php /* Template Name: Contato */ ?>
<?php
while (have_posts()) :
the_post();
?>
<div class="bannerInterna" style="background: url(<?php echo get_template_directory_uri(); ?>/dist/images/banner-interna.jpg) no-repeat center top / cover;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12"><h1><?php the_title();?></h1></div>
        </div>
    </div>
</div>
<div class="migalha">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb('<div id="breadcrumbs">','</div>');
                } ?>
            </div>
        </div>
    </div>
</div>
<section id="conteudoFestas" class="conteudoContato">
    <article>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-sm-12 col-md-6 col-lg-5 col-xl-5">
                    <?php echo the_content() ?><br><br>
                    <h4>E-mail:</h4>
                    <?php if (get_field('lista_unidades_contato')) : ?>
                    <?php
                    $emails = get_field('lista_unidades_contato');
                    ?>
                    <p class="emailsContato">
                        <?php foreach ($emails as $email) :?>
                        <a href="mailto:<?php echo $email['email_unidade'];?>" title="<?php echo $email['email_unidade'];?>"><?php echo $email['email_unidade'];?></a><br>
                        <?php endforeach;?>
                    </p>
                    <?php endif; ?>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="formularioContato">
                        <?php echo do_shortcode( '[contact-form-7 id="220" title="Contato"]' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>
<section id="listaUnidades">
    <article>
        <div class="container">
            <div class="row">
                <?php if (get_field('lista_unidades_contato')) : ?>
                <?php
                $unidades = get_field('lista_unidades_contato');
                ?>
                <?php foreach ($unidades as $unidade) :?>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="boxUnidade <?php echo $unidade['cor_do_box'];?>Box">
                        <h2><?php echo $unidade['nome_da_unidade'];?></h2>
                        <p><?php echo $unidade['telefone'];?></p>
                        <p><?php echo $unidade['endereco'];?></p>
                    </div>
                    <div class="mapa">
                        <?php echo do_shortcode( ''.$unidade['mapa'].'' ); ?>
                    </div>
                </div>
                <?php endforeach;?>
                <?php endif; ?>
            </div>
        </div>
    </article>
</section>

<section id="unidades">
    <article>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 col-lg-4 col-xl-4 d-none d-md-block">
                    <img class="img-fluid" alt="Joykids" title="Joykids" src="<?php echo get_template_directory_uri(); ?>/dist/images/boneco.png">
                </div>
                <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                    <div class="row">
                        <div class="col-12">
                            <h2>NOSSAS <strong>UNIDADES</strong></h2>
                        </div>
                        <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <a class="linkUnidade" href="<?php echo site_url(); ?>/nossas-unidades/buffet-joaquina/" title="Unidade Joaquina">
                                <img class="img-fluid" alt="Unidade Joaquina" title="Unidade Joaquina" src="<?php echo get_template_directory_uri(); ?>/dist/images/img-home-joaquina.jpg">
                                <span class="roxo">JOAQUINA</span>
                            </a>
                        </div>
                        <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <a class="linkUnidade" href="<?php echo site_url(); ?>/nossas-unidades/buffet-ataliba/" title="Unidade Ataliba">
                                <img class="img-fluid" alt="Unidade Ataliba" title="Unidade Ataliba" src="<?php echo get_template_directory_uri(); ?>/dist/images/img-home-ataliba.jpg">
                                <span class="vermelho">ATALIBA</span>
                            </a>
                        </div>
                        <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <a class="linkUnidade" href="<?php echo site_url(); ?>/nossas-unidades/buffet-mooca/" title="Unidade Mooca">
                                <img class="img-fluid" alt="Unidade Mooca" title="Unidade Mooca" src="<?php echo get_template_directory_uri(); ?>/dist/images/img-home-mooca.jpg">
                                <span class="amarelo">MOOCA</span>
                            </a>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </article>
</section>

<?php endwhile; ?>