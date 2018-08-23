
<div class="row"></div>

<div class="row">
        <?php
            $args = array( 'post_type' => 'lancamentos', 'posts_per_page' => 3 );
            $loop = new WP_Query( $args );

            while ( $loop->have_posts() ) : $loop->the_post();

                $lanc = get_field( "lançamento_1" );
                $lanc2 = get_field( "lançamento_2" );
                $lanc3 = get_field( "lançamento_3" );
        ?>
            <div class="bg-release">
                <div class="container">
                    <div class="row">
                        <div class="col s12 m3"></div>
                        <div class="col s12 m6">
                            <div class="release-da-plus">
                                <?php the_title(); ?>
                            </div>
                            <div class="subtitle-release-da-plus">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <div class="col s12 m3"></div>
                    </div>
                </div>
                <div class="col s12">
                    <div class="carousel-two">
                        <a class="carousel-item" href="#one!">
                            <iframe src="https://www.youtube.com/embed/<?=$lanc;?>" frameborder="0" encrypted-media" allowfullscreen></iframe>
                        </a>
                        <a class="carousel-item" href="#two!">
                            <iframe src="https://www.youtube.com/embed/<?=$lanc2;?>" frameborder="0" encrypted-media" allowfullscreen></iframe>
                        </a>
                        <a class="carousel-item" href="#three!">
                            <iframe src="https://www.youtube.com/embed/<?=$lanc3;?>" frameborder="0" encrypted-media" allowfullscreen></iframe>
                        </a>
                    </div>
                </div>
            </div>

    <?php
        endwhile;
    ?>
</div>
