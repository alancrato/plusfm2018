<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Plusfm - Aqui é legal demais!</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/favicon.png" rel="icon"/>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110613692-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-110613692-1');
    </script>

    <?php wp_head(); ?>

</head>
<body>

<nav role="navigation" class="<?php if (!is_home()) echo 'background-about'; ?>">
    <div class="nav-wrapper container">
        <div class="row hide-on-small-only">
            <div class="col s2">
                <a id="logo-container" href="<?php echo home_url('/');?>" class="brand-logo">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png"/>
                </a>
            </div>
            <div class="col s2 margin-vivo">
                <a href="javascript:void(null)" data-target="slide-out" class="center sidenav-trigger">Ao vivo</a>
            </div>
            <div class="col s8 margin-menu">
                <ul class="right hide-on-med-and-down">
                    <li class="<?php if (is_home()) echo 'active-menu'; ?>">
                        <a href="<?php echo home_url('/');?>">Home</a>
                    </li>
                    <li class="<?php if (is_page('quem-somos')) echo 'active-menu'; ?>">
                        <a href="<?php echo home_url('/');?>quem-somos">Quem Somos</a>
                    </li>
                    <li class="<?php if (is_category('drops-da-plus')) echo 'active-menu'; ?>">
                        <a href="<?php echo home_url('/');?>categoria/drops-da-plus">Drops da Plus</a>
                    </li>
                    <li class="<?php if (is_page('programacao')) echo 'active-menu'; ?>">
                        <a href="<?php echo home_url('/');?>programacao">Programação</a>
                    </li>
                    <li class="<?php if (is_category('promocoes')) echo 'active-menu'; ?>">
                        <a href="<?php echo home_url('/');?>categoria/promocoes">Promoções</a>
                    </li>
                    <li class="<?php if (is_page('contato')) echo 'active-menu'; ?>">
                        <a href="<?php echo home_url('/');?>contato">Contato</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row hide-on-med-and-up">
            <div class="col s6">
                <a href="<?php echo home_url('/');?>" class="logo-mobile">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png"/>
                </a>
            </div>
            <div class="col s3">
                <a href="javascript:void(null)" data-target="slide-out" class="center sidenav-trigger ao-vivo">Ao vivo</a>
            </div>
            <div class="col s3">
                <a href="javascript:void(null)" data-target="nav-mobile" class="sidenav-trigger menu"><i class="material-icons">menu</i></a>
            </div>
            <ul id="nav-mobile" class="sidenav">
                <li>
                    <div class="user-view-cap">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/mascote-plus-nav.png"/>
                        <div class="legal">
                            Aqui é legal demais!
                        </div>
                    </div>
                </li>
                <li><a href="<?php echo home_url('/');?>"><i class="material-icons">home</i> Home</a></li>
                <li><a href="<?php echo home_url('/');?>quem-somos"><i class="material-icons">music_video</i> Quem Somos</a></li>
                <li><a href="<?php echo home_url('/');?>categoria/drops-da-plus"><i class="material-icons">textsms</i> Drops da Plus</a></li>
                <li><a href="<?php echo home_url('/');?>programacao"><i class="material-icons">queue_music</i> Programação</a></li>
                <li><a href="<?php echo home_url('/');?>categoria/promocoes"><i class="material-icons">card_giftcard</i> Promoções</a></li>
                <li><a href="<?php echo home_url('/');?>contato"><i class="material-icons">settings_cell</i> Contato</a></li>
                <li><a href="http://www.cearanews7.com" target="_blank"><i class="material-icons">web</i> Ceará News 7</a></li>
            </ul>
        </div>
    </div>
</nav>

<ul id="slide-out" class="sidenav states">
    <li>
        <div class="user-view-cap">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/mascote-plus-nav.png"/>
            <div class="legal">
                Aqui é legal demais!
            </div>
        </div>
    </li>
    </br>

    <div class="hide-on-med-and-down">
        <div class="row">
            <div class="col s3">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/states/rede.png"/>
            </div>
            <div class="col s9">
                <div class="row">
                    <div class="col s8">
                        <div class="state">
                            Rede
                        </div>
                        <div class="frequency">
                            Plus
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="ouvir">
                            <a href="http://plusfm.com.br/audio/#/home" onclick="javascript:popupwindow(this.href,'','300','480');return false;" title="Ao Vivo">
                                Ouvir
                            </a>
                        </div>
                    </div>
                </div>
                <div class="line-bottom"></div>
            </div>
        </div>
        <div class="row">
            <div class="col s3">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/states/aracati.png"/>
            </div>
            <div class="col s9">
                <div class="row">
                    <div class="col s8">
                        <div class="state">
                            Aracati
                        </div>
                        <div class="frequency">
                            98.1
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="ouvir">
                            <a href="http://plusfm.com.br/audio/#/aracati" onclick="javascript:popupwindow(this.href,'','300','480');return false;" title="Ao Vivo">
                                Ouvir
                            </a>
                        </div>
                    </div>
                </div>
                <div class="line-bottom"></div>
            </div>
        </div>
        <div class="row">
            <div class="col s3">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/states/cariri.png"/>
            </div>
            <div class="col s9">
                <div class="row">
                    <div class="col s8">
                        <div class="state">
                            Cariri
                        </div>
                        <div class="frequency">
                            100.5
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="ouvir">
                            <a href="http://plusfm.com.br/audio/#/cariri" onclick="javascript:popupwindow(this.href,'','300','480');return false;" title="Ao Vivo">
                                Ouvir
                            </a>
                        </div>
                    </div>
                </div>
                <div class="line-bottom"></div>
            </div>
        </div>
        <div class="row">
            <div class="col s3">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/states/crateus.png"/>
            </div>
            <div class="col s9">
                <div class="row">
                    <div class="col s8">
                        <div class="state">
                            Crateús
                        </div>
                        <div class="frequency">
                            93.3
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="ouvir">
                            <a href="http://plusfm.com.br/audio/#/crateus" onclick="javascript:popupwindow(this.href,'','300','480');return false;" title="Ao Vivo">
                                Ouvir
                            </a>
                        </div>
                    </div>
                </div>
                <div class="line-bottom"></div>
            </div>
        </div>
        <div class="row">
            <div class="col s3">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/states/iguatu.png"/>
            </div>
            <div class="col s9">
                <div class="row">
                    <div class="col s8">
                        <div class="state">
                            Iguatu/Cariús
                        </div>
                        <div class="frequency">
                            91.5
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="ouvir">
                            <a href="http://plusfm.com.br/audio/#/iguatu" onclick="javascript:popupwindow(this.href,'','300','480');return false;" title="Ao Vivo">
                                Ouvir
                            </a>
                        </div>
                    </div>
                </div>
                <div class="line-bottom"></div>
            </div>
        </div>
        <div class="row">
            <div class="col s3">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/states/paraipaba.png"/>
            </div>
            <div class="col s9">
                <div class="row">
                    <div class="col s8">
                        <div class="state">
                            Paraipaba
                        </div>
                        <div class="frequency">
                            88.7
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="ouvir">
                            <a href="http://plusfm.com.br/audio/#/paraipaba" onclick="javascript:popupwindow(this.href,'','300','480');return false;" title="Ao Vivo">
                                Ouvir
                            </a>
                        </div>
                    </div>
                </div>
                <div class="line-bottom"></div>
            </div>
        </div>
        <div class="row">
            <div class="col s3">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/states/redencao.png"/>
            </div>
            <div class="col s9">
                <div class="row">
                    <div class="col s8">
                        <div class="state">
                            Redenção
                        </div>
                        <div class="frequency">
                            98.7
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="ouvir">
                            <a href="http://plusfm.com.br/audio/#/redencao" onclick="javascript:popupwindow(this.href,'','300','480');return false;" title="Ao Vivo">
                                Ouvir
                            </a>
                        </div>
                    </div>
                </div>
                <div class="line-bottom"></div>
            </div>
        </div>
        <div class="row">
            <div class="col s3">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/states/santa_quiteria.png"/>
            </div>
            <div class="col s9">
                <div class="row">
                    <div class="col s8">
                        <div class="state">
                            Santa Quitéria
                        </div>
                        <div class="frequency">
                            106.5
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="ouvir">
                            <a href="http://plusfm.com.br/audio/#/santaq" onclick="javascript:popupwindow(this.href,'','300','480');return false;" title="Ao Vivo">
                                Ouvir
                            </a>
                        </div>
                    </div>
                </div>
                <div class="line-bottom"></div>
            </div>
        </div>
        <div class="row">
            <div class="col s3">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/states/sobral.png"/>
            </div>
            <div class="col s9">
                <div class="row">
                    <div class="col s8">
                        <div class="state">
                            Sobral
                        </div>
                        <div class="frequency">
                            105.1
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="ouvir">
                            <a href="http://plusfm.com.br/audio/#/sobral" onclick="javascript:popupwindow(this.href,'','300','480');return false;" title="Ao Vivo">
                                Ouvir
                            </a>
                        </div>
                    </div>
                </div>
                <div class="line-bottom"></div>
            </div>
        </div>
    </div>

    <div class="hide-on-med-and-up">
        <div class="row">
            <div class="col s3">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/states/rede.png"/>
            </div>
            <div class="col s9">
                <div class="row">
                    <div class="col s8">
                        <div class="state">
                            Rede
                        </div>
                        <div class="frequency">
                            Plus
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="ouvir">
                            <a href="http://plusfm.com.br/audio/mobile/#/home" target="_blank" title="Ao Vivo">
                                Ouvir
                            </a>
                        </div>
                    </div>
                </div>
                <div class="line-bottom"></div>
            </div>
        </div>
        <div class="row">
            <div class="col s3">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/states/aracati.png"/>
            </div>
            <div class="col s9">
                <div class="row">
                    <div class="col s8">
                        <div class="state">
                            Aracati
                        </div>
                        <div class="frequency">
                            98.1
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="ouvir">
                            <a href="http://plusfm.com.br/audio/mobile/#/aracati" target="_blank" title="Ao Vivo">
                                Ouvir
                            </a>
                        </div>
                    </div>
                </div>
                <div class="line-bottom"></div>
            </div>
        </div>
        <div class="row">
            <div class="col s3">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/states/cariri.png"/>
            </div>
            <div class="col s9">
                <div class="row">
                    <div class="col s8">
                        <div class="state">
                            Cariri
                        </div>
                        <div class="frequency">
                            100.5
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="ouvir">
                            <a href="http://plusfm.com.br/audio/mobile/#/cariri" target="_blank" title="Ao Vivo">
                                Ouvir
                            </a>
                        </div>
                    </div>
                </div>
                <div class="line-bottom"></div>
            </div>
        </div>
        <div class="row">
            <div class="col s3">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/states/crateus.png"/>
            </div>
            <div class="col s9">
                <div class="row">
                    <div class="col s8">
                        <div class="state">
                            Crateús
                        </div>
                        <div class="frequency">
                            93.3
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="ouvir">
                            <a href="http://plusfm.com.br/audio/mobile/#/crateus" target="_blank" title="Ao Vivo">
                                Ouvir
                            </a>
                        </div>
                    </div>
                </div>
                <div class="line-bottom"></div>
            </div>
        </div>
        <div class="row">
            <div class="col s3">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/states/iguatu.png"/>
            </div>
            <div class="col s9">
                <div class="row">
                    <div class="col s8">
                        <div class="state">
                            Iguatu/Cariús
                        </div>
                        <div class="frequency">
                            91.5
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="ouvir">
                            <a href="http://plusfm.com.br/audio/mobile/#/iguatu" target="_blank" title="Ao Vivo">
                                Ouvir
                            </a>
                        </div>
                    </div>
                </div>
                <div class="line-bottom"></div>
            </div>
        </div>
        <div class="row">
            <div class="col s3">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/states/paraipaba.png"/>
            </div>
            <div class="col s9">
                <div class="row">
                    <div class="col s8">
                        <div class="state">
                            Paraipaba
                        </div>
                        <div class="frequency">
                            88.7
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="ouvir">
                            <a href="http://plusfm.com.br/audio/mobile/#/paraipaba" target="_blank" title="Ao Vivo">
                                Ouvir
                            </a>
                        </div>
                    </div>
                </div>
                <div class="line-bottom"></div>
            </div>
        </div>
        <div class="row">
            <div class="col s3">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/states/redencao.png"/>
            </div>
            <div class="col s9">
                <div class="row">
                    <div class="col s8">
                        <div class="state">
                            Redenção
                        </div>
                        <div class="frequency">
                            98.7
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="ouvir">
                            <a href="http://plusfm.com.br/audio/mobile/#/redencao" target="_blank" title="Ao Vivo">
                                Ouvir
                            </a>
                        </div>
                    </div>
                </div>
                <div class="line-bottom"></div>
            </div>
        </div>
        <div class="row">
            <div class="col s3">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/states/santa_quiteria.png"/>
            </div>
            <div class="col s9">
                <div class="row">
                    <div class="col s8">
                        <div class="state">
                            Santa Quitéria
                        </div>
                        <div class="frequency">
                            106.5
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="ouvir">
                            <a href="http://plusfm.com.br/audio/mobile/#/santaq" target="_blank" title="Ao Vivo">
                                Ouvir
                            </a>
                        </div>
                    </div>
                </div>
                <div class="line-bottom"></div>
            </div>
        </div>
        <div class="row">
            <div class="col s3">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/states/sobral.png"/>
            </div>
            <div class="col s9">
                <div class="row">
                    <div class="col s8">
                        <div class="state">
                            Sobral
                        </div>
                        <div class="frequency">
                            105.1
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="ouvir">
                            <a href="http://plusfm.com.br/audio/mobile/#/sobral" target="_blank" title="Ao Vivo">
                                Ouvir
                            </a>
                        </div>
                    </div>
                </div>
                <div class="line-bottom"></div>
            </div>
        </div>
    </div>
</ul>