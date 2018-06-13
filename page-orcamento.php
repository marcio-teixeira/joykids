<?php /* Template Name: Orcamento */ ?>
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
        </div>
    </article>
</section>

<?php get_template_part('templates/form-orcamento'); ?>

<?php endwhile; ?>