<?php get_header(); ?>

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





        <!-- WRAPPER -->
        <div id="" class="wrapper clearfix">

            <!-- #content -->  
<div id="content-all">                      
            <section  role="main">
                
                <?php while (have_posts()) : the_post(); ?>
                        <article >                            
                            <header class="entry-header">
                                <div>
                                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                                </div>
                            </header>

                            <!-- Final .entry-header -->
                            <hr>  
                            <div class="entry-content">
                                <?php the_content(); ?>							
                            </div>
                        </article>
               <?php endwhile; ?>

            </section>

</div>         
<!-- final #content -->  

</div>
<!-- FINAL WRAPPER -->

<?php get_footer(); ?>