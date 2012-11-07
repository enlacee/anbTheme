<?php get_header(); ?>
        <!-- WRAPPER -->
        <div id="" class="wrapper clearfix">



<?php if(!is_single()):?>
            <!-- HEADER -->
            <section class="clearfix">
            <article id="header" >

                <!-- #slider-wrapper   imagen statica-->
                <div id="container">
                    <div id="slider-wrapperr"  >    


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

<?php endif; ?>




            <!-- #content -->  
<div id="content">                      
            <section  role="main">
                
                <?php while (have_posts()) : the_post(); ?>

                        <!-- .Posts -->
                        <article >

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
                                <?php the_content(); ?>							
                            </div>
                            <!-- Final .entry-content -->



                        </article>
                        <!-- Final .posts -->

                    <?php endwhile; ?>


            </section>


<section class="newer-older posts">
     <p class="older"><?php previous_post_link('%link', '&laquo; Post Anterior') ?>
     <p class="newer"><?php next_post_link('%link', 'Siguiente Post &raquo;') ?></p>
</section>




<?php comments_template( '', true ); ?>
 

</div>         
<!-- final #content -->  










        <?php get_sidebar(); ?>


        </div>
        <!-- FINAL WRAPPER -->

        <?php get_footer(); ?>
