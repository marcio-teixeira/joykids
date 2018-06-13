<?php /* Template Name: Cardapio */ ?>
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
<section id="conteudoFestas" class="conteudoInstitucional">
    <article>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-8 col-lg-7 col-xl-7">
                    <?php echo the_content() ?><br><br>
                </div>
            </div>
        </div>
    </article>
</section>
<section id="cardapios">
    <article>
        <div class="container">
            <div class="row">
                <?php if (get_field('lista_cardapios')) : ?>
                <?php
                $cardapios = get_field('lista_cardapios');
                ?>
                <?php foreach ($cardapios as $cardapio) :?>
                <div class="col-12 col-sm-6 col-md-4 colCardapio">
                    <img class="img-fluid" alt="<?php echo $cardapio['imagem_cardapio']['title'];?>" title="<?php echo $cardapio['imagem_cardapio']['title'];?>" src="<?php echo $cardapio['imagem_cardapio']['url'];?>">
                    <h3><?php echo $cardapio['nome_cardapio'];?></h3>
                    <?php echo $cardapio['texto_cardapio'];?>
                </div>
                <?php endforeach;?>
                <?php endif; ?>
            </div>
        </div>
    </article>
</section>

<?php get_template_part('templates/form-orcamento'); ?>

<?php endwhile; ?>