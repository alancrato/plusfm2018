
<div class="row"></div>

<footer class="page-footer purple darken-3">
    <div class="container">
        <div class="row">
            <div class="col s12 m3">
                <div class="logo-footer-plus">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-plus-footer.png"/>
                </div>
            </div>
            <div class="col s6 m3 border-menu-footer">
                <ul>
                    <li><a class="white-text" href="<?php echo home_url('/');?>">Home</a></li>
                    <li><a class="white-text" href="<?php echo home_url('/');?>quem-somos">Quem Somos</a></li>
                    <li><a class="white-text" href="<?php echo home_url('/');?>categoria/drops-da-plus">Drops da Plus</a></li>
                    <li><a class="white-text" href="<?php echo home_url('/');?>programacao">Programação</a></li>
                    <li><a class="white-text" href="<?php echo home_url('/');?>categoria/promocoes">Promoções</a></li>
                    <li><a class="white-text" href="<?php echo home_url('/');?>contato">Contato</a></li>
                </ul>
            </div>
            <div class="col s6 m3 border-menu-footer">
                <ul>
                    <li><a class="white-text" href="https://www.facebook.com/plusfmrede" target="_blank">Facebook</a></li>
                    <li><a class="white-text" href="https://www.instagram.com/plusfmrede" target="_blank">Instagram</a></li>
                    <li>
                        <a href="javascript:void(null)" class="white-text" onclick="M.toast({
                            html: 'WhatsApp da Plus (85) 9-9261-8871'
                        })">Whatsapp</a>
                    </li>
                    <li>
                        <a href="javascript:void(null)" class="white-text" onclick="M.toast({
                            html: 'Nosso Email: contato@plusfm.com.br'
                        })">E-mail</a>
                    </li>
                </ul>
            </div>
            <div class="col s12 m3">
               <div class="logo-footer-don">
                   <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-footer-don.png"/>
               </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Copyright <a class="orange-text text-lighten-3" href="http://cearanews7.com">Don7 - Media Group </a> 2000-<?= date('Y'); ?>
        </div>
    </div>
</footer>


<!-- Scripts -->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/init.js"></script>

<!-- Facebook -->
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.1&appId=1719551754798065&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<!-- LightWidget WIDGET -->
<script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>

<?php wp_footer(); ?>
</body>
</html>
