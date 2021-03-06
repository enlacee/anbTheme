<?php get_header(); ?>
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

        <?php get_sidebar(); ?>


        </div>
        <!-- FINAL WRAPPER -->

        <?php get_footer(); ?>
