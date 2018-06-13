<div class="bannerHome">
    <div class="bannerslider">
        <?php if (get_field('banner')) : ?>
        <?php
        $banners = get_field('banner');
        ?>
        <?php foreach ($banners as $banner) :?>
        <div class="item" style="background:url(<?php echo $banner['imagem_banner']['url'];?>) no-repeat center top / cover">
            <div class="container">
                <div class="row justify-content-end align-items-center">
                    <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                        <h3><?php echo $banner['titulo_banner'];?></h3>
                        <p><?php echo $banner['texto_banner'];?></p>
                        <a class="<?php echo $banner['cor_do_link_banner'];?>" href="<?php echo $banner['link_banner'];?>" title="Saiba Mais">SAIBA MAIS</a>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach;?>
        <?php endif; ?>
    </div>
</div>
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
<section id="sliderOrcamento">
    <article>
        <div class="sliderOrcamento">
            <?php if (get_field('item_slider_home')) : ?>
            <?php
            $sliders = get_field('item_slider_home');
            ?>
            <?php foreach ($sliders as $slider) :?>
            <div class="item" style="background-image:url(<?php echo $slider['imagem_slider']['url'];?>)">
                <div class="container">
                    <div class="row justify-content-end align-items-center">
                        <div class="colImgMobile col-12 d-block d-sm-none">
                            <img class="img-fluid" alt="<?php echo $slider['imagem_mobile_slider']['title'];?>" title="<?php echo $slider['imagem_mobile_slider']['title'];?>" src="<?php echo $slider['imagem_mobile_slider']['url'];?>">
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <p><?php echo $slider['texto_slider'];?></p>
                            <a class="<?php echo $slider['cor_do_botao_slider'];?>" href="<?php echo $slider['link_slider'];?>" title="<?php echo $slider['texto_botao_slider'];?>"><?php echo $slider['texto_botao_slider'];?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
            <?php endif; ?>
        </div>
    </article>
</section>

