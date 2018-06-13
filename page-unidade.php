<?php /* Template Name: Unidade Interna */ ?>
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
<section id="conteudoUnidade">
    <article>
        <div class="container">
            <div class="row">
                <div class="migalha">
                    <div class="col-12">
                        <?php
                        if ( function_exists('yoast_breadcrumb') ) {
                            yoast_breadcrumb('<div id="breadcrumbs">','</div>');
                        } ?>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-sm-8 col-md-9 col-lg-10 col-xl-10">
                    <?php echo the_content() ?>
                </div>
                <div class="colCapacidade col-12 col-sm-4 col-md-3 col-lg-2 col-xl-2">
                    <img class="img-fluid" alt="Capacidade" title="Capacidade" src="<?php echo get_template_directory_uri(); ?>/dist/images/icone-capacidade.png">
                    <span>
                        CAPACIDADE<br>
                        <?php if (get_field('capacidade_da_casa')) : ?>
                        <strong><?php echo get_field('capacidade_da_casa'); ?> pessoas</strong>
                        <?php endif; ?>
                    </span>
                </div>
            </div>
        </div>
    </article>
</section>
<section id="nossoEspaco">
    <article>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-5 col-md-4">
                    <?php
                    if (get_field('imagem_espaco')) :
                    $imgEspaco = get_field('imagem_espaco');
                    ?>
                    <img class="img-fluid" alt="<?php echo $imgEspaco['alt']; ?>" title="<?php echo $imgEspaco['alt']; ?>" src="<?php echo $imgEspaco['url']; ?>">
                    <?php endif; ?>
                </div>
                <div class="col-12 col-sm-7 col-md-8">
                    <h2>NOSSO ESPAÇO</h2>
                    <?php if (get_field('texto_espaco')) : ?>
                    <?php echo get_field('texto_espaco'); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </article>
</section>
<section id="galeriaFotos">
    <article>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2>GALERIA DE FOTOS</h2>
                </div>
                <div class="col-12 colGaleria">
                    <div class="sliderGaleria">
                        <?php if (get_field('galeria')) : ?>
                        <?php
                        $fotos = get_field('galeria');
                        ?>
                        <?php foreach ($fotos as $foto) :
                        $imageArray = get_field('foto_galeria'); // Array returned by Advanced Custom Fields
                        $imageThumb = esc_url($imageArray['sizes']['thumb_galeria']);?>
                        <div class="item">
                            <a data-fancybox="galeria" href="<?php echo $foto['foto_galeria']['url'];?>" data-caption="<?php echo $foto['foto_galeria']['title'];?>">
                                <img class="img-fluid" alt="<?php echo $foto['foto_galeria']['title'];?>" title="<?php echo $foto['foto_galeria']['title'];?>" src="<?php echo $foto['foto_galeria']['sizes']['thumb_galeria'];?>">
                            </a>
                        </div>
                        <?php endforeach;?>
                        <?php endif; ?>    
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>
<section id="atracoes">
    <article>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>ATRAÇÕES</h2>
                </div>
                <div class="col-12">
                    <div class="listaAtracoes">
                        <?php if (get_field('lista_atracoes')) : ?>
                        <?php
                        $atracoes = get_field('lista_atracoes');
                        ?>
                        <?php foreach ($atracoes as $atracao) : ?>
                        <a data-fancybox="galeria" href="<?php echo $atracao['foto_atracao']['url'];?>" data-caption="<?php echo $atracao['nome_atracao'];?>">
                            <img class="img-fluid" alt="<?php echo $atracao['nome_atracao'];?>" title="<?php echo $atracao['nome_atracao'];?>" src="<?php echo $atracao['foto_atracao']['sizes']['thumb_atracoes'];?>">
                            <span class="hover"><?php echo $atracao['nome_atracao'];?></span>
                        </a>
                        <?php endforeach;?>
                        <?php endif; ?>    
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>
<section id="localizacao">
    <article>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <h2>LOCALIZAÇÃO</h2>
                </div>
                <div class="col-12 col-sm-6 col-md-4 colLocalizacao">
                    <?php if (get_field('unidade_localizacao')) : ?>
                    <h3><?php echo get_field('unidade_localizacao');?></h3>
                    <?php endif; ?>
                    <?php if (get_field('telefone_localizacao')) : ?>
                    <p><?php echo get_field('telefone_localizacao');?></p>
                    <?php endif; ?>
                    <?php if (get_field('endereco_localizacao')) : ?>
                    <p><?php echo get_field('endereco_localizacao');?></p>
                    <?php endif; ?>
                </div>
                <div class="col-12 col-sm-6 col-md-8 colMapa">
                    <?php if (get_field('mapa_localizacao')) : ?>
                    <?php echo do_shortcode( ''.get_field('mapa_localizacao').'' ); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </article>
</section>

<?php get_template_part('templates/form-orcamento'); ?>

<?php endwhile; ?>