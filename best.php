
<div class="row"></div>

<div class="container">
    <div class="row">
        <div class="col s12 m3"></div>
        <div class="col s12 m6">
            <div class="drops-da-plus">
                As Melhores da Plus
            </div>
            <div class="subtitle-drops-da-plus">
                Top 10 Plusfm
            </div>
        </div>
        <div class="col s12 m3"></div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col s12 m1"></div>
        <?php
        $query = new WP_Query( array(
            'post_type' => 'best',
            'posts_per_page' => 10
        ));
        ?>
        <?php
        if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
            $id = get_field("id");
            $cod =  get_field("codigo");
            $artista =  get_field("artista");
            $frameUp = '<iframe width="570" height="315" src="https://www.youtube.com/embed/';
            $frameDow = '"></iframe>';

            if($id == '1'){
                echo '<div class="col s12 m2 ajuste-mobile">';
                echo '<div class="img-best">';
                if (has_post_thumbnail()) {
                    the_post_thumbnail('large', ['class' => 'modal-trigger', 'href' => '#modal1']);
                }
                echo '</div>';
                echo '<div class="title-top-dez">';
                echo '<a class="modal-trigger" href="#modal1">';
                the_title();
                echo '</a>';
                echo '</div>';
                echo '<div class="autor-top-dez">';
                echo $artista;
                echo '</div>';

                echo '<div id="modal1" class="modal">';
                echo '<div class="modal-content center">';
                echo $frameUp.$cod.$frameDow;
                echo '</div>';
                echo '<div class="modal-footer">';
                echo '<a href="javascript:void(null)" class="modal-close waves-effect waves-green btn-flat">Fechar</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }

            if($id == '2'){
                echo '<div class="col s12 m2 ajuste-mobile">';
                echo '<div class="img-best">';
                if (has_post_thumbnail()) {
                    the_post_thumbnail('large', ['class' => 'modal-trigger', 'href' => '#modal2']);
                }
                echo '</div>';
                echo '<div class="title-top-dez">';
                echo '<a class="modal-trigger" href="#modal2">';
                the_title();
                echo '</a>';
                echo '</div>';
                echo '<div class="autor-top-dez">';
                echo $artista;
                echo '</div>';

                echo '<div id="modal2" class="modal">';
                echo '<div class="modal-content center">';
                echo $frameUp.$cod.$frameDow;
                echo '</div>';
                echo '<div class="modal-footer">';
                echo '<a href="javascript:void(null)" class="modal-close waves-effect waves-green btn-flat">Fechar</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }

            if($id == '3'){
                echo '<div class="col s12 m2 ajuste-mobile">';
                echo '<div class="img-best">';
                if (has_post_thumbnail()) {
                    the_post_thumbnail('large', ['class' => 'modal-trigger', 'href' => '#modal3']);
                }
                echo '</div>';
                echo '<div class="title-top-dez">';
                echo '<a class="modal-trigger" href="#modal3">';
                the_title();
                echo '</a>';
                echo '</div>';
                echo '<div class="autor-top-dez">';
                echo $artista;
                echo '</div>';

                echo '<div id="modal3" class="modal">';
                echo '<div class="modal-content center">';
                echo $frameUp.$cod.$frameDow;
                echo '</div>';
                echo '<div class="modal-footer">';
                echo '<a href="javascript:void(null)" class="modal-close waves-effect waves-green btn-flat">Fechar</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }

            if($id == '4'){
                echo '<div class="col s12 m2 ajuste-mobile">';
                echo '<div class="img-best">';
                if (has_post_thumbnail()) {
                    the_post_thumbnail('large', ['class' => 'modal-trigger', 'href' => '#modal4']);
                }
                echo '</div>';
                echo '<div class="title-top-dez">';
                echo '<a class="modal-trigger" href="#modal4">';
                the_title();
                echo '</a>';
                echo '</div>';
                echo '<div class="autor-top-dez">';
                echo $artista;
                echo '</div>';

                echo '<div id="modal4" class="modal">';
                echo '<div class="modal-content center">';
                echo $frameUp.$cod.$frameDow;
                echo '</div>';
                echo '<div class="modal-footer">';
                echo '<a href="javascript:void(null)" class="modal-close waves-effect waves-green btn-flat">Fechar</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }

            if($id == '5'){
                echo '<div class="col s12 m2 ajuste-mobile">';
                echo '<div class="img-best">';
                if (has_post_thumbnail()) {
                    the_post_thumbnail('large', ['class' => 'modal-trigger', 'href' => '#modal5']);
                }
                echo '</div>';
                echo '<div class="title-top-dez">';
                echo '<a class="modal-trigger" href="#modal5">';
                the_title();
                echo '</a>';
                echo '</div>';
                echo '<div class="autor-top-dez">';
                echo $artista;
                echo '</div>';

                echo '<div id="modal5" class="modal">';
                echo '<div class="modal-content center">';
                echo $frameUp.$cod.$frameDow;
                echo '</div>';
                echo '<div class="modal-footer">';
                echo '<a href="javascript:void(null)" class="modal-close waves-effect waves-green btn-flat">Fechar</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>

        <?php endwhile;
        else : ?>
            <p><?php _e('Aguardando Publicações.'); ?></p>
        <?php endif;
        wp_reset_postdata();?>
        <div class="col s12 m1"></div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col s12 m1"></div>
    <?php
    $query = new WP_Query( array(
        'post_type' => 'best',
        'posts_per_page' => 10
    ));
    ?>
    <?php
    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
        $id = get_field("id");
        $cod =  get_field("codigo");
        $artista =  get_field("artista");
        $frameUp = '<iframe width="570" height="315" src="https://www.youtube.com/embed/';
        $frameDow = '"></iframe>';

        if($id == '6'){
            echo '<div class="col s12 m2 ajuste-mobile">';
            echo '<div class="img-best">';
            if (has_post_thumbnail()) {
                the_post_thumbnail('large', ['class' => 'modal-trigger', 'href' => '#modal6']);
            }
            echo '</div>';
            echo '<div class="title-top-dez">';
            echo '<a class="modal-trigger" href="#modal6">';
            the_title();
            echo '</a>';
            echo '</div>';
            echo '<div class="autor-top-dez">';
            echo $artista;
            echo '</div>';

            echo '<div id="modal6" class="modal">';
            echo '<div class="modal-content center">';
            echo $frameUp.$cod.$frameDow;
            echo '</div>';
            echo '<div class="modal-footer">';
            echo '<a href="javascript:void(null)" class="modal-close waves-effect waves-green btn-flat">Fechar</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }

        if($id == '7'){
            echo '<div class="col s12 m2 ajuste-mobile">';
            echo '<div class="img-best">';
            if (has_post_thumbnail()) {
                the_post_thumbnail('large', ['class' => 'modal-trigger', 'href' => '#modal7']);
            }
            echo '</div>';
            echo '<div class="title-top-dez">';
            echo '<a class="modal-trigger" href="#modal7">';
            the_title();
            echo '</a>';
            echo '</div>';
            echo '<div class="autor-top-dez">';
            echo $artista;
            echo '</div>';

            echo '<div id="modal7" class="modal">';
            echo '<div class="modal-content center">';
            echo $frameUp.$cod.$frameDow;
            echo '</div>';
            echo '<div class="modal-footer">';
            echo '<a href="javascript:void(null)" class="modal-close waves-effect waves-green btn-flat">Fechar</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }

        if($id == '8'){
            echo '<div class="col s12 m2 ajuste-mobile">';
            echo '<div class="img-best">';
            if (has_post_thumbnail()) {
                the_post_thumbnail('large', ['class' => 'modal-trigger', 'href' => '#modal8']);
            }
            echo '</div>';
            echo '<div class="title-top-dez">';
            echo '<a class="modal-trigger" href="#modal8">';
            the_title();
            echo '</a>';
            echo '</div>';
            echo '<div class="autor-top-dez">';
            echo $artista;
            echo '</div>';

            echo '<div id="modal8" class="modal">';
            echo '<div class="modal-content center">';
            echo $frameUp.$cod.$frameDow;
            echo '</div>';
            echo '<div class="modal-footer">';
            echo '<a href="javascript:void(null)" class="modal-close waves-effect waves-green btn-flat">Fechar</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }

        if($id == '9'){
            echo '<div class="col s12 m2 ajuste-mobile">';
            echo '<div class="img-best">';
            if (has_post_thumbnail()) {
                the_post_thumbnail('large', ['class' => 'modal-trigger', 'href' => '#modal9']);
            }
            echo '</div>';
            echo '<div class="title-top-dez">';
            echo '<a class="modal-trigger" href="#modal9">';
            the_title();
            echo '</a>';
            echo '</div>';
            echo '<div class="autor-top-dez">';
            echo $artista;
            echo '</div>';

            echo '<div id="modal9" class="modal">';
            echo '<div class="modal-content center">';
            echo $frameUp.$cod.$frameDow;
            echo '</div>';
            echo '<div class="modal-footer">';
            echo '<a href="javascript:void(null)" class="modal-close waves-effect waves-green btn-flat">Fechar</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }

        if($id == '10'){
            echo '<div class="col s12 m2 ajuste-mobile">';
            echo '<div class="img-best">';
            if (has_post_thumbnail()) {
                the_post_thumbnail('large', ['class' => 'modal-trigger', 'href' => '#modal10']);
            }
            echo '</div>';
            echo '<div class="title-top-dez">';
            echo '<a class="modal-trigger" href="#modal10">';
            the_title();
            echo '</a>';
            echo '</div>';
            echo '<div class="autor-top-dez">';
            echo $artista;
            echo '</div>';

            echo '<div id="modal10" class="modal">';
            echo '<div class="modal-content center">';
            echo $frameUp.$cod.$frameDow;
            echo '</div>';
            echo '<div class="modal-footer">';
            echo '<a href="javascript:void(null)" class="modal-close waves-effect waves-green btn-flat">Fechar</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        ?>

    <?php endwhile;
    else : ?>
        <p><?php _e('Aguardando Publicações.'); ?></p>
    <?php endif;
    wp_reset_postdata();?>
        <div class="col s12 m1"></div>
    </div>
</div>




