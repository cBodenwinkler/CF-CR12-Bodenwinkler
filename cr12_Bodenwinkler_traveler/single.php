<?php get_header(); ?>

<div class="card mx-auto my-5 p-5" id="single">
    
        <!-- Bring Dynamic User Content to the Page: - Posts -->
        <div class="content container" id="postsID">
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>

                    <h2> <?php the_title(); ?> </h2>
                    <?php if(has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail(array(200,100)); ?>
                    <?php endif; ?>
                    <p>Created: <?php the_time('F j, Y g:i a'); ?></p>
                    <p>Author: <?php the_author(); ?></p>
                    <div class="description">
                        <hr>
                        <p id="contentID"><?php the_content(); ?></p>
                    </div>
                    <hr>
                    <div style="text-align:center" class="container"> <?php comments_template(); ?> </div>
                <?php endwhile; ?>
            <?php else : ?>
                <?php__('No Posts Found'); ?>
            <?php endif; ?>
        </div>
        
        <?php 
        if(is_active_sidebar('sidebar')) : 
            dynamic_sidebar('Sidebar');
        endif;
        ?>

    </div>

<?php get_footer(); ?>