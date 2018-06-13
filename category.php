<?php
  use Roots\Sage\Wrapper;
  $category = get_the_category();
  if(isset($category[0])){
    $cat = $category[0]->name;
  }else{
    $cat = '';
  }
?>
<div class="bannerInterna" style="background: url(<?php echo get_template_directory_uri(); ?>/dist/images/banner-interna.jpg) no-repeat center top / cover;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12"><h1>Blog</h1></div>
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
<section class="posts">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#">
          <span typeof="v:Breadcrumb">
              <a href="<?php echo get_home_url(); ?>" rel="v:url" property="v:title" title="Home">Home</a>
          </span>
          <span class="space"> - </span>
          <span typeof="v:Breadcrumb">
            <a href="<?php echo get_site_url(null, '/blog'); ?>" rel="v:url" property="v:title" title="blog">Blog</a>
        </span>
        <span class="space"> - </span>
          <span typeof="v:Breadcrumb">
              <span rel="v:url" property="v:title"><?php echo $cat;?></span>
          </span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <?php get_template_part('templates/page', 'header'); ?>

        <?php if (!have_posts()) : ?>
          <div class="alert alert-warning">
            <?php _e('Sorry, no results were found.', 'sage'); ?>
          </div>
            <?php get_search_form(); ?>
        <?php endif; ?>

        <?php while (have_posts()) :
            the_post(); ?>

            <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>

        <?php endwhile; ?>

        <?php //the_posts_navigation();?>
        <?php wp_pagenavi(); ?>

      </div>
      <div class="col-md-4">
        <aside class="sidebar">
            <?php include Wrapper\sidebar_path(); ?>
        </aside>
      </div>
    </div>
  </div>
</section>
