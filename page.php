<?php get_header(); ?>
        <!-- WRAPPER -->
        <div id="" class="wrapper clearfix">

            <!-- #content -->  
<div id="content-all">                      
            <section  role="main">
                
                <?php while (have_posts()) : the_post(); ?>
                        <article >                            
                            <header class="entry-header">
                                <div>
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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