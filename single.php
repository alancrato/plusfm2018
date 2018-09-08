<?php get_header();?>


<div class="header-category"></div>

<div class="container">
    <div class="row">
        <div class="center hide-on-small-only">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Anúncio Topo 02 -->
            <ins class="adsbygoogle"
                 style="display:inline-block;width:728px;height:90px"
                 data-ad-client="ca-pub-9443599461482101"
                 data-ad-slot="5320016866"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    </div>
</div>

<div class="container">

    <div class="row">
        <div class="col s12 m8">
            <?php
            if (have_posts()): the_post();
                ?>

                <div class="title-single">
                    <?php single_post_title(); ?>
                </div>
                <div class="img-single">
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('large', array('class' => 'materialboxed'));
                    }
                    ?>
                </div>
                <div class="date-single">
                    <time><?php the_time('d/m/Y' ); ?></time>
                    <time><?php the_time('G:i'); ?></time>
                </div>
                <div class="content-single">
                    <?php the_content(); ?>
                </div>
                <br>

                <div class="social-single">
                    <div class="share-social">Compartilhe</div>
                    <img class="face-img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/social/facebook.png"/>
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/social/twitter.png"/>
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/social/whatsapp.png"/>
                </div>

                <div class="hide-on-small-only">
                    <!-- Facebook comments visivel apenas para Desktop -->
                    <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s); js.id = id;
                            js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.11&appId=306666596445150';
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));
                    </script>
                    <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="1"></div>
                </div>
                <?php
            endif;
            ?>

            <div class="line"></div>

            <div class="row">
                <div class="leia">Leia Também</div>
                <div class="col s12 m12">
                    <?php
                        $categories = get_the_category($post->ID);
                    if ($categories) {  $category_ids = array();
                        foreach($categories as $individual_category)
                            $category_ids[] = $individual_category->term_id;
                        $args=array(
                            'category__in' => $category_ids,
                            'post__not_in' => array($post->ID),
                            'showposts'=>4,
                            'caller_get_posts'=>1
                        );
                        $my_query = new WP_Query($args);
                    if($my_query->have_posts() ) {
                            $count=1;
                            while ($my_query->have_posts()) {
                        $my_query->the_post(); ?>

                                <div class="col s12 m6">
                                    <div class="card horizontal">
                                        <div class="card-image">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php
                                                    if (has_post_thumbnail()) {
                                                        the_post_thumbnail('large');
                                                    }
                                                ?>
                                            </a>
                                        </div>
                                        <div class="card-stacked">
                                            <div class="card-title-horizontal">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_title(); ?>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        <?php $count ++; ?>
                        <?php }
                            wp_reset_query();
                        }
                      }
                    ?>
                </div>
            </div>
            <div class="line"></div>

        </div>
        <div class="col s12 m4">
            <?php
                require 'sidebar.php';
            ?>
        </div>
    </div>

    <div class="row">
        <!--<div class="col s12 m12">
            <div class="leia">Patrocinados</div>
        </div>-->
        <!--<?php
        for($i = 1; $i <= 3; $i++){;?>
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/drops1.png">
                    </div>
                    <div class="card-date">
                        17/08/2018 13:45
                    </div>
                    <div class="card-title">
                        <a href="javascript:void(null)">
                            I am a very simple card
                        </a>
                    </div>
                    <div class="card-content">
                        <a href="javascript:void()">
                            I am a very simple card. I am good at containing small bits of information
                        </a>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>-->
    </div>

</div>

<?php get_footer(); ?>
