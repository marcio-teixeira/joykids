<?php
use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
?>

<!doctype html>
<html <?php language_attributes(); ?>>
    <?php get_template_part('templates/head'); ?>
    <?php
    if(is_front_page()){
        $class = '';
    }else{
        $class = 'interna';
    }
    ?>
    <body <?php body_class($class); ?>>
        <?php
        do_action('get_header');
        get_template_part('templates/header');
        ?>
        <div id="page">
            <div class="conteudo">
                <?php include Wrapper\template_path(); ?>
            </div>

            <?php
            do_action('get_footer');
            get_template_part('templates/footer');
            wp_footer();
            ?>

        </div>
    </body>
</html>
