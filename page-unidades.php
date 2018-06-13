<?php /* Template Name: Listagem Unidades */ ?>
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
                    <a class="chamadaUnidades chamadaJoaquina" href="<?php echo site_url();?>/nossas-unidades/buffet-joaquina/" title="Unidade Joaquina">
                        <img class="img-fluid" alt="Unidade Joaquina" title="Unidade Joaquina" src="<?php echo get_template_directory_uri(); ?>/dist/images/chamada-joaquina.jpg">
                        <span class="hover">JOAQUINA</span>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <a class="chamadaUnidades chamadaAtaliba" href="<?php echo site_url();?>/nossas-unidades/buffet-ataliba/" title="Unidade Ataliba">
                        <img class="img-fluid" alt="Unidade Ataliba" title="Unidade Ataliba" src="<?php echo get_template_directory_uri(); ?>/dist/images/chamada-ataliba.jpg">
                        <span class="hover">ATALIBA</span>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <a class="chamadaUnidades chamadaMooca" href="<?php echo site_url();?>/nossas-unidades/buffet-mooca/" title="Unidade Mooca">
                        <img class="img-fluid" alt="Unidade Mooca" title="Unidade Mooca" src="<?php echo get_template_directory_uri(); ?>/dist/images/chamada-mooca.jpg">
                        <span class="hover">MOOCA</span>
                    </a>
                </div>
            </div>
        </div>
    </article>
</section>

<?php get_template_part('templates/form-orcamento'); ?>

<?php endwhile; ?>