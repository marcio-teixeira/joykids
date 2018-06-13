<?php //get_template_part('templates/content-single', get_post_type()); ?>


<?php
use Roots\Sage\Wrapper;
?>
<div class="bannerInterna" style="background: url(<?php echo get_template_directory_uri(); ?>/dist/images/banner-interna.jpg) no-repeat center top / cover;">
    <div class="container">
        <div class="row align-items-center">
           <div class="col-12"><h1><?php the_title();?></h1></div>
        </div>
    </div>
</div>
<section class="posts">
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
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php //get_template_part('templates/page', 'header'); ?>

                <?php get_template_part('templates/content-single', get_post_type()); ?>

                <div class="clear"></div>

            </div>
            <div class="col-md-4">
                <aside class="sidebar">
                    <?php include Wrapper\sidebar_path(); ?>
                </aside>
            </div>
        </div>
    </div>
</section>
