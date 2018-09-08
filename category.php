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
        <div class="center hide-on-med-and-up">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Anúncio Mas Destaques Right -->
            <ins class="adsbygoogle"
                 style="display:inline-block;width:250px;height:250px"
                 data-ad-client="ca-pub-9443599461482101"
                 data-ad-slot="5530168010"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    </div>
</div>

<?php
    $categories = get_the_category();
    $cat = $categories[0]->term_id;
    if($cat == 2){
?>
    <div class="container">
        <div class="row">
            <div class="col s12 m3"></div>
            <div class="col s12 m6">
                <div class="drops-da-plus category">
                    <?php single_cat_title();?>
                </div>
                <div class="subtitle-drops-da-plus">
                    <?php echo category_description( $category_id ); ?>
                </div>
            </div>
            <div class="col s12 m3"></div>
        </div>
        <div class="row">
        <?php
        if(have_posts()):
            while(have_posts()): the_post();
                ?>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <a href="<?php the_permalink(); ?>">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('large');
                                }
                                ?>
                            </a>
                        </div>
                        <div class="card-date">
                            <time><?php the_time('d/m/Y' ); ?></time>
                            <time><?php the_time('G:i'); ?></time>
                        </div>
                        <div class="card-bigode">
                            <?php
                            $cartola = get_field( "cartola" );
                            if( $cartola ){
                                echo $cartola;
                            }else{
                                echo ' ';
                            }
                            ?>
                        </div>
                        <div class="card-title">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
            endwhile;
        else:
            echo 'Aguardando Publicações.';
        endif;
        ?>
        </div>

        <div class="row">
            <div class="center">
                <?php wordpress_pagination(); ?>
            </div>
        </div>

        <div class="row">
            <div class="col s12 m8">
                <div class="row">
                    <div class="col s12 m6">
                        <div class="button-cidade">
                            Curtindo a Cidade
                        </div>
                        <br/>
                            <?php
                                $query = new WP_Query( array(
                                    'posts_per_page' => 2,
                                    'category_name' => 'curtindo-a-cidade',
                                    'order' => 'DESC',
                                    'orderBy' => 'ID'
                                ));
                            ?>
                            <?php
                                if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                            ?>
                                <div class="card">
                                    <div class="card-date">
                                        <time><?php the_time('d/m/Y' ); ?></time>
                                        <time><?php the_time('G:i'); ?></time>
                                    </div>
                                    <div class="card-title">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </div>
                                </div>
                            <?php
                                endwhile;
                            else : ?>
                                <p><?php _e('Aguardando Publicações.'); ?></p>
                            <?php endif;
                            wp_reset_postdata();?>

                    </div>
                    <div class="col s12 m6">
                        <div class="card">
                            <div class="button-giro">
                                Giro da Mídia
                            </div>
                            <br/>
                            <?php
                                $query = new WP_Query( array(
                                    'posts_per_page' => 2,
                                    'category_name' => 'giro-na-midia',
                                    'order' => 'DESC',
                                    'orderBy' => 'ID'
                                ));
                                ?>
                            <?php
                                if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                            ?>
                                <div class="card">
                                    <div class="card-date">
                                        <time><?php the_time('d/m/Y' ); ?></time>
                                        <time><?php the_time('G:i'); ?></time>
                                    </div>
                                    <div class="card-title">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </div>
                                </div>
                            <?php endwhile;
                            else : ?>
                                <p><?php _e('Aguardando Publicações.'); ?></p>
                            <?php endif;

                            wp_reset_postdata();?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="center">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Anúncio Mas Destaques Right -->
                    <ins class="adsbygoogle"
                         style="display:inline-block;width:250px;height:250px"
                         data-ad-client="ca-pub-9443599461482101"
                         data-ad-slot="5530168010"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </div>
        </div>

    </div>
<?php
    }else{
?>
    <div class="container">
        <div class="row">
            <div class="col s12 m3"></div>
            <div class="col s12 m6">
                <div class="drops-da-plus category">
                    <?php single_cat_title();?>
                </div>
                <div class="subtitle-prog-da-plus">
                    <?php echo category_description( $category_id ); ?>
                </div>
            </div>
            <div class="col s12 m3"></div>
        </div>


        <div class="row">
            <div class="col s12 m8">
                <?php
                if(have_posts()):
                    while(have_posts()): the_post();
                        ?>
                        <div class="col s12 m6">
                            <div class="card">
                                <div class="card-image">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('large');
                                        }
                                        ?>
                                    </a>
                                    <span class="card-title">
                                        <?php
                                        $cartola = get_field( "cartola" );
                                        if( $cartola ){
                                            echo $cartola;
                                        }else{
                                            echo ' ';
                                        }
                                        ?>
                                    </span>
                                </div>
                                <div class="card-date">
                                    <time><?php the_time('d/m/Y' ); ?></time>
                                    <time><?php the_time('G:i'); ?></time>
                                </div>
                                <div class="card-title">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </div>
                                <!--<div class="card-content">
                                    <a href="javascript:void()">
                                        I am a very simple card. I am good at containing small bits of information
                                    </a>
                                </div>-->
                            </div>
                        </div>
                        <?php
                    endwhile;
                else:
                    echo 'Aguardando Publicações.';
                endif;
                ?>

            </div>

            <div class="col s12 m4">
                <div class="center">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Anúncio Mas Destaques Right -->
                    <ins class="adsbygoogle"
                         style="display:inline-block;width:250px;height:250px"
                         data-ad-client="ca-pub-9443599461482101"
                         data-ad-slot="5530168010"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </div>
        </div>
    </div>
<?php
    }
?>

<?php get_footer(); ?>