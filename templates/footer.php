<?php
    global $post;
    $url = get_permalink($post->ID);
    if(! $url == site_url()){
?>
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
                            <a class="linkUnidade" href="#" title="Unidade Joaquina">
                                <img class="img-fluid" alt="Unidade Joaquina" title="Unidade Joaquina" src="<?php echo get_template_directory_uri(); ?>/dist/images/img-home-joaquina.jpg">
                                <span class="roxo">JOAQUINA</span>
                            </a>
                        </div>
                        <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <a class="linkUnidade" href="#" title="Unidade Ataliba">
                                <img class="img-fluid" alt="Unidade Ataliba" title="Unidade Ataliba" src="<?php echo get_template_directory_uri(); ?>/dist/images/img-home-ataliba.jpg">
                                <span class="vermelho">ATALIBA</span>
                            </a>
                        </div>
                        <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <a class="linkUnidade" href="#" title="Unidade Mooca">
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
<?php }; ?>


   
<section id="ultimas">
    <article>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Veja as últimas de nosso BLOG</h3>
                </div>
                <?php
                $args = array( 'numberposts' => '3', 'post_status' => 'publish' );
                $recent_posts = wp_get_recent_posts( $args );
                ?>
                <?php foreach( $recent_posts as $recent ):?>
                <div class="col-12 col-sm-4">
                    <a class="chamadaBlog" href="<?php echo get_permalink($recent["ID"]);?>" title="<?php echo $recent["post_title"];?>">
                        <?php
                        if (has_post_thumbnail($recent["ID"])){
                            $featured_img_url = get_the_post_thumbnail_url($recent["ID"],'post_thumb_home');
                        }else{
                            $featured_img_url = get_template_directory_uri() . '/dist/images/home/temp/blog-1.jpg';
                        }
                        ?>
                        <img class="img-fluid" alt="<?php echo $recent["post_title"];?>" title="<?php echo $recent["post_title"];?>" src="<?php echo esc_url($featured_img_url); ?>">
                        <h4><?php echo $recent["post_title"];?></h4>
                        <?php $string = $recent["post_content"]; ?>
                        <p>
                            <?php echo resumo($string, $limite = 80); ?>...<br><br>
                            ver mais
                        </p>
                    </a>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </article>
</section>
<section id="redes">
    <article>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-4">
                    <h4>Siga Nossas Redes SOCIAIS:</h4>
                </div>
                <div class="col-6 col-sm-6 col-md-4">
                    <a class="face" href="https://www.facebook.com/joykidsoficial" title="Facebook" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </div>
                <div class="col-6 col-sm-6 col-md-4">
                    <a class="insta" href="https://www.instagram.com/joykidsoficial/" title="Instagram" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </article>
</section>
<section id="depoimentos">
    <article>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-8">
                    <h3>DEPOIMENTOS</h3>
                    <div class="sliderDepoimento">
                        <?php
                        $args_depoimentos = array( 'numberposts' => '3', 'post_status' => 'publish', 'post_type' => 'depoimentos' );
                        $recent_depoimentos = wp_get_recent_posts( $args_depoimentos );
                        ?>
                        <?php foreach( $recent_depoimentos as $depoimento ):?>
                        <div class="item">
                            <p><span>"</span>
                                <?php echo $depoimento["post_content"]; ?>
                                <span>"</span>
                            </p>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>
<footer class="content-info">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-8">
                <h4>TELEFONES</h4>
                <p class="telefones">
                    Joaquina <a href="tel:+551135699900" title="11 3569-9900">11 3569-9900</a>
                    Ataliba <a href="tel:+551129769415" title="11 2976-9415">11 2976-9415</a>
                    Mooca <a href="tel:+551121933677" title="11 2193-3677">11 2193-3677</a>
                </p>

                <h4>E-MAIL:</h4>
                <p><a href="mailto:contato@buffetjoykids.com.br" title="contato@buffetjoykids.com.br">contato@buffetjoykids.com.br</a></p>
            </div>
            <div class="col-12 col-sm-12 col-md-4 aRight">
                <a class="redes" href="https://www.facebook.com/joykidsoficial" title="Facebook" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a class="redes" href="https://www.instagram.com/joykidsoficial/" title="Instagram" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-8 col-md-8">
                <p class="copy">© Copyright. Direitos Reservados Buffet Joykids.</p>
            </div>
            <div class="col-12 col-sm-12 col-md-4 aRight">
                <a class="logoRS" href="http://www.rsdezoito.com.br" title="Agência RS DEZOITO" target="_blank"><img class="img-fluid" alt="RS DEZOITO" title="RS DEZOITO" src="<?php echo get_template_directory_uri(); ?>/dist/images/assinatura-rs.png"></a>
            </div>
        </div>
    </div>
</footer>
