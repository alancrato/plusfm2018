<div class="row"></div>

<div class="container">
    <div class="row">
        <div class="col s12 m3"></div>
        <div class="col s12 m6">
            <div class="drops-da-plus">
                Drops da Plus
            </div>
            <div class="subtitle-drops-da-plus">
                Notícias e novidades sobre os artistas e famosos
            </div>
        </div>
        <div class="col s12 m3"></div>
    </div>
    <div class="row">
        <?php
            $query = new WP_Query( array(
                'posts_per_page' => 3,
                'category_name' => 'drops-da-plus',
                'order' => 'DESC',
                'orderBy' => 'ID'
            ));
            ?>
            <?php
            if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
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
        else : ?>
            <p><?php _e('Aguardando Publicações.'); ?></p>
        <?php endif;
        wp_reset_postdata();?>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="pub-desktop hide-on-small-only">
            PUBLICIDADE
        </div>
        <div class="pub-mobile hide-on-med-and-up">
            PUBLICIDADE
        </div>
    </div>
</div>

<div class="container">
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
            <div class="pub-desktop2">
                PUBLICIDADE
            </div>
        </div>
    </div>

    <div class="line"></div>
</div>