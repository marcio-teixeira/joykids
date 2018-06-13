<?php /* Template Name: Listagem Tipos de Festa */ ?>
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
<section id="conteudoFestas">
    <article>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-8 col-lg-7 col-xl-7">
                    <?php echo the_content() ?><br><br>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4">
                    <a class="chamadaFesta chamadaInfantil" href="<?php echo site_url();?>/tipo-de-festas/festa-infantil/" title="Festa Infantil">
                        <img class="img-fluid" alt="Festa Infantil" title="Festa Infantil" src="<?php echo get_template_directory_uri(); ?>/dist/images/chamada-festa-infantil.jpg">
                        <span class="hover">FESTA INFANTIL</span>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <a class="chamadaFesta chamadaTeen" href="<?php echo site_url();?>/tipo-de-festas/festa-teen/" title="Festa Teen">
                        <img class="img-fluid" alt="Festa Teen" title="Festa Teen" src="<?php echo get_template_directory_uri(); ?>/dist/images/chamada-festa-teen.jpg">
                        <span class="hover">FESTA TEEN</span>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <a class="chamadaFesta chamadaEscolar" href="<?php echo site_url();?>/tipo-de-festas/festa-escolar/" title="Festa Escolar">
                        <img class="img-fluid" alt="Festa Escolar" title="Festa Escolar" src="<?php echo get_template_directory_uri(); ?>/dist/images/chamada-festa-escolar.jpg">
                        <span class="hover">FESTA ESCOLAR</span>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <a class="chamadaFesta chamadaWedding" href="<?php echo site_url();?>/tipo-de-festas/mini-wedding/" title="Mini Wedding">
                        <img class="img-fluid" alt="Mini Wedding" title="Mini Wedding" src="<?php echo get_template_directory_uri(); ?>/dist/images/chamada-mini-wedding.jpg">
                        <span class="hover">MINI WEDDING</span>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <a class="chamadaFesta chamadaConfraternizacao" href="<?php echo site_url();?>/tipo-de-festas/festa-de-confraternizacao/" title="Festa de Confraternização">
                        <img class="img-fluid" alt="Festa de Confraternização" title="Festa de Confraternização" src="<?php echo get_template_directory_uri(); ?>/dist/images/chamada-confraternizacao.jpg">
                        <span class="hover">CONFRATERNIZAÇÃO</span>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <a class="chamadaFesta chamadaBodas" href="<?php echo site_url();?>/tipo-de-festas/bodas-de-prata-e-de-ouro/" title="Bodas de Prata e de Ouro">
                        <img class="img-fluid" alt="Bodas de Prata e de Ouro" title="Bodas de Prata e de Ouro" src="<?php echo get_template_directory_uri(); ?>/dist/images/chamada-festa-bodas.jpg">
                        <span class="hover">BODAS DE PRATA E DE OURO</span>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <a class="chamadaFesta chamadaFormatura" href="<?php echo site_url();?>/tipo-de-festas/festa-de-formatura/" title="Formatura Escolar">
                        <img class="img-fluid" alt="Formatura Escolar" title="Formatura Escolar" src="<?php echo get_template_directory_uri(); ?>/dist/images/chamada-formatura.jpg">
                        <span class="hover">FORMATURA ESCOLAR</span>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <a class="chamadaFesta chamadaFantasia" href="<?php echo site_url();?>/tipo-de-festas/festa-a-fantasia/" title="Festa a Fantasia">
                        <img class="img-fluid" alt="Festa a Fantasia" title="Festa a Fantasia" src="<?php echo get_template_directory_uri(); ?>/dist/images/chamada-fantasia.jpg">
                        <span class="hover">FESTA A FANTASIA</span>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <a class="chamadaFesta chamadaDebutante" href="<?php echo site_url();?>/tipo-de-festas/baile-de-debutante/" title="Baile de Debutante">
                        <img class="img-fluid" alt="Baile de Debutante" title="Baile de Debutante" src="<?php echo get_template_directory_uri(); ?>/dist/images/chamada-debutantes.jpg">
                        <span class="hover">BAILE DE DEBUTANTE</span>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <a class="chamadaFesta chamada1ano" href="<?php echo site_url();?>/tipo-de-festas/01-ano/" title="01 Ano">
                        <img class="img-fluid" alt="01 Ano" title="01 Ano" src="<?php echo get_template_directory_uri(); ?>/dist/images/chamada-1-ano.jpg">
                        <span class="hover">01 ANO</span>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <a class="chamadaFesta chamadaBatizado" href="<?php echo site_url();?>/tipo-de-festas/batizados-e-cha-de-bebe/" title="Batizados e Chá de Bebê">
                        <img class="img-fluid" alt="Batizados e Chá de Bebê" title="Batizados e Chá de Bebê" src="<?php echo get_template_directory_uri(); ?>/dist/images/chamada-batizado.jpg">
                        <span class="hover">BATIZADOS E CHÁ DE BEBÊ</span>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <a class="chamadaFesta chamadaBoneca" href="<?php echo site_url();?>/tipo-de-festas/festa-boneca/" title="Festa Boneca">
                        <img class="img-fluid" alt="Festa Boneca" title="Festa Boneca" src="<?php echo get_template_directory_uri(); ?>/dist/images/chamada-boneca.jpg">
                        <span class="hover">FESTA BONECA</span>
                    </a>
                </div>
            </div>
        </div>
    </article>
</section>

<?php get_template_part('templates/form-orcamento'); ?>

<?php endwhile; ?>