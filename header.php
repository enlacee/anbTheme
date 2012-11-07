<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
    <head>

        <!-- METAS -->
        <meta charset="<?php bloginfo('charset'); //cambiamos <meta charset="utf-8"> por su            ?>" />
        <!-- /METAS -->

        <title><?php
/* Con este código agregamos a wordpress un titulo que cambia dependiendo 
 * del lugar donde te encuentres en el blog. También puede utilizar <?php bloginfo('name'); ?>
 * Muestra en la etiqueta <title> el nombre de lo que esta viendo, la forma en la que lo estamos creando
 * es mucho más amigable para los navegadores ya que muestra información de cada lugar que estés.
 */
global $page, $paged;

wp_title('|', true, 'right');

// Agrega el nombre del blog.
bloginfo('name');

// Agrega la descripción del blog, en la página principal.
$site_description = get_bloginfo('description', 'display');
if ($site_description && ( is_home() || is_front_page() ))
    echo " | $site_description";

// Agrega el número de página si es necesario:
if ($paged >= 2 || $page >= 2)
    echo ' | ' . sprintf(__('Page %s', 'twentyten'), max($paged, $page));
?>
        </title>
        <!-- CSS anibal -->
        <link href='<?php bloginfo('template_url'); ?><?php echo "/css/main.css"; ?>' rel="stylesheet" />
        <link href='<?php bloginfo('stylesheet_url'); ?>' rel="stylesheet" />
        <!--<link href='<?php bloginfo('template_url'); ?><?php //echo "/css/normalize.css"; ?>' rel="stylesheet" />-->
        
        <link href='<?php bloginfo('template_url'); ?><?php echo "/css/slider.css"; ?>' rel="stylesheet" />
        

        <!-- /CSS -->

        <!-- RSS & PINGBACKS -->
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />
        <!-- /RSS & PINGBACKS -->

        <?php /* Para compatibilizar HTML5 con navegadores antiguos */ ?>
        <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <?php
        /* Siempre agrege wp_head antes del cierre de </ head> de su thema,
         * si no lo agrega puede que muchos plugins no funcionen ya que
         * lo utilizan este gancho (hook)para agregar elementos al head.
         */
        wp_head();
        ?>

        <script>
            $(function(){
                $('#slides').slides({
                    preload: true,
                    preloadImage: '<?php bloginfo('template_url'); ?><?php echo "/images/slider/loading.gif"; ?>',
                    play: 3500,
                    pause: 1000,
                    hoverPause: true,
                    animationStart: function(current){
                        $('.caption').animate({
                            bottom:-35
                        },100);
                        if (window.console && console.log) {
                            // example return of current slide number
                            console.log('animationStart on slide: ', current);
                        };
                    },
                    animationComplete: function(current){
                        $('.caption').animate({
                            bottom:0
                        },200);
                        if (window.console && console.log) {
                            // example return of current slide number
                            console.log('animationComplete on slide: ', current);
                        };
                    },
                    slidesLoaded: function() {
                        $('.caption').animate({
                            bottom:0
                        },200);
                    }
                });
            });
        </script>



    </head>

    <body <?php body_class(); ?>>
<div class="">
<div class ="wrapper">           
            <!-- NAV#TOP-MENU -->
            <header id="top-menu">
                <!-- #logo -->
                <h1 id="logo">
                    <a href="<?php echo home_url(); ?>" 
                       title="<?php bloginfo('description') ?>">
                           <?php bloginfo('name'); ?>
                    </a>
                </h1>
                <!-- Final #logo -->
                <!--<H1>LOGO ACOPITAN</H1>-->

                <!-- .Top-search -->

                <div class="top-search">
                    <form  method="get" id="searchform" action="#">
                        <input type="text" value="" name="s" id="s" placeholder="Buscar..." />
                        <button id="searchsubmit">Go</button>
                    </form>
                </div>

                <!-- Final .Top-search  -->

                
            </header>

            <div style="clear: both;"></div>
            <nav id="access"  class="" role="navigation" >
                <!-- ul Menú -->                                
                <?php wp_nav_menu(array('theme_location' => 'MenuPrincipal', 'container' => 'false')); ?>                                
                <!-- final ul Menú-->
            </nav>            
            <!-- FINAL NAV#TOP-MENU -->
            <div style="clear: both;"></div>

</div>
</div>