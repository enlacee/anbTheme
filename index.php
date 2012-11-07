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
        <link href='<?php bloginfo('stylesheet_url'); ?>' rel="stylesheet" />
        <link href='<?php bloginfo('template_url'); ?><?php echo "/css/normalize.css"; ?>' rel="stylesheet" />
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
                        <input type="text" value="" name="s" id="s" placeholder="Buscar Algo..." />
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



        <!-- WRAPPER -->
        <div id="" class="wrapper clearfix">

            <!-- HEADER -->
            <section class="clearfix">
            <article id="header" >


                <?php
                $query = new WP_Query();
                //$query->query('posts_per_page=3&cat=11');
                $post_count = $query->post_count;
                //CONSULTA DE PAGINA PRINCIPAL
                //echo "<pre>";
                //print_r($query);                      
                //echo "<pre>";       
                ?>
                <!-- #slider-wrapper   imagen statica-->
                <div id="container">
                    <div id="slider-wrapperr"  >    

                        <ul>
                            <?php
                            if ($query->have_posts()):
                                while ($query->have_posts()):
                                    $query->the_post();
                                    ?>    
                                    <li>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('slider-thumbnail') ?>
                                        </a>
                                    </li>                        
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>





                        <!-- slider --> 
                        <div id="slides">
                            <div class="slides_container">

                                <div class="slide">
                                    <a href="#" 
                                       title="145.365 - Happy Bokeh Thursday! | Flickr - Photo Sharing!" target="_blank">
                                        <img src="<?php bloginfo('template_url'); ?>/images/slider/img-01.jpg" width="" height="" alt="Slide 1">
                                    </a>

                                    <div class="caption" style="bottom:0">
                                        <p>Sistema de Login!</p>
                                    </div>
                                </div>

                                <div class="slide">
                                    <a href="#" 
                                       title="145.365 - Happy Bokeh Thursday! | Flickr - Photo Sharing!" target="_blank">
                                        <img src="<?php bloginfo('template_url'); ?>/images/slider/img-02.jpg" width="" height="" alt="Slide 1">
                                    </a>

                                    <div class="caption" style="bottom:0">
                                        <p>Interfaz de usuario!</p>
                                    </div>
                                </div>

                                <div class="slide">
                                    <a href="#" 
                                       title="145.365 - Happy Bokeh Thursday! | Flickr - Photo Sharing!" target="_blank">
                                        <img src="<?php bloginfo('template_url'); ?>/images/slider/img-03.jpg" width="" height="" alt="Slide 1">
                                    </a>

                                    <div class="caption" style="bottom:0">
                                        <p>Configuracion</p>
                                    </div>
                                </div>




                            </div>
                            <a href="#" class="prev">
                                <img src="<?php bloginfo('template_url'); ?>/images/slider/arrow-prev.png" width="24" height="43" alt="Arrow Prev"></a>
                            <a href="#" class="next"><img src="<?php bloginfo('template_url'); ?>/images/slider/arrow-next.png" width="24" height="43" alt="Arrow Next"></a>

                        </div>                        


                        <!-- slider -->               
                        <div style ="clear: both;"></div>




                    </div>	

                </div>

                <!-- Final #slider-wrapper -->



                <!-- .vermasVideos 
                <div class="vermasVideos"><a href="#">Ver Más videos</a></div>
                 Final .vermasVideos -->

            </article>
            </section>
            <!-- FINAL HEADER -->




            <!-- #content -->
            <section id="content" role="main">
                <?php query_posts('&cat=-9'); //categoria del slider ?>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <!-- .Posts -->
                        <article class="posts">

                            <!-- .entry-header -->
                            <header class="entry-header">

                                <div class="">
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                </div>

                                <div class="MetaDatos">
                                    <span class="fecha"><?php the_date(); ?></span>
                                    <span>Categoría:<?php the_category(' ,'); ?></span>
                                    <span>Autor: <?php the_author(); ?></span>
                                </div>

                            </header>
                            <!-- Final .entry-header -->

                            <hr>

                            <!-- Imagen del post -->
                            <?php if (has_post_thumbnail()) { ?>
                                <figure>
                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('index-thumbnail'); ?></a>
                                </figure>
                            <?php } else { ?>
                                <figure>
                                    <a href="<?php the_permalink(); ?>">
                                        <img src="<?php bloginfo('template_url'); ?>/images/imageDefaul.png" alt="<?php the_title(); ?>"	/>
                                    </a>
                                </figure>	
                            <?php } ?>
                            <!-- Final Imagen del post -->

                            <!-- .entry-content -->
                            <div class="entry-content">
                                <?php the_excerpt(); ?>							
                            </div>
                            <!-- Final .entry-content -->

                            <div class="metaBottom">
                                <?php comments_popup_link('0 Comentario »', '1 Comentario »', '% Comentarios »'); ?>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="leermas">Seguir Leyendo</a>
                            </div>

                        </article>
                        <!-- Final .posts -->

                    <?php endwhile;
                else: ?>

                    <article class="posts">
                        <p><h2><?php _e('Ha ocurrido un error.'); ?></h2></p>
                        <p><?php _e('Disculpe, no existen post relacionados con su criterio de busqueda'); ?></p>
                        <?php get_search_form(); ?>
                    </article>
                <?php endif; ?>
            </section>
            <!-- final #content -->            



            <!-- #MAIN -->
            <div id="main" class="clearfix">

<!-- contente isquierda -->



            </div>            
            <!-- FINAL #MAIN -->

        </div>
        <!-- FINAL WRAPPER -->


            <!-- #FOOTER -->


            <footer class="alphacontainer">

<div class="wrapper  clearfix hidden">

                <!-- .Copy -->
                <p class="copy">&copy;2012 acopitan.com. All rights reserved.</p>
                <!-- Final .Copy -->

                <!-- Menu Footer -->
                <?php
                wp_nav_menu(array('theme_location' => 'MenuFooter',
                    'container' => 'false'));
                ?>
                <!-- Final Menu Footer -->

                <!-- .GoTop -->
                <a href="#" class="goTop">Ir Arriba</a>
                <!-- Final .GoTop -->


                <div class = "clearfix"></div>
                <div class="column300 paddingright20 paddingleft20">A</div>
                <div class="column300 paddingright20">B</div>
                <div class="column300">
<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fanbsys&amp;width=292&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=false&amp;appId=244715988912141" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:258px;" allowTransparency="true"></iframe>                                        
                </div>

</div>

            </footer>

            <!-- FINAL #FOOTER -->



    </body>
</html>
