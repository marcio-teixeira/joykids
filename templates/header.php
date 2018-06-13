<header>
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-4 col-md-4 col-lg-2 col-xl-2">
                <a href="<?php echo get_home_url(); ?>" title="JOYKIDS" class="logo">
                    <img class="img-fluid" alt="JOYKIDS" title="JOYKIDS" src="<?php echo get_template_directory_uri(); ?>/dist/images/logo.png">
                </a>
            </div>
            <div class="menuTopo col-6 col-sm-8 col-md-8 col-lg-10 col-xl-10">
                <div class="links">
                    <a class="linkRede" href="#" title="Facebook" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a class="linkRede" href="#" title="Instagram" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a class="btMenu d-block d-lg-none" href="#menuMobile" title="Menu"><i class="fa fa-bars" aria-hidden="true"></i></a>
                </div>
                <nav class="menuPrincipal d-none d-lg-block">
                    <?php
                    if (has_nav_menu('primary_navigation')) :
                    wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
                    endif;
                    ?>
                </nav>
            </div>
        </div>
    </div>
</header>
<nav id="menuMobile">
    <?php
    if (has_nav_menu('primary_navigation')) :
    wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
    endif;
    ?>
</nav>




