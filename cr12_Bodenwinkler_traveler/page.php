<?php get_header(); ?>

<div class="container page card mx-auto my-5 p-5" id="cardsID">


        <!-- Bring Dynamic User Content to the Page: - Posts -->
        <div class="content" id="postsID">
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>

                    <h2> <?php the_title(); ?> </h2>

                    <div class="description"><?php the_content(); ?></div>

                <?php endwhile; ?>
            <?php else : ?>
                <?php__('No Posts Found'); ?>
            <?php endif; ?>
        </div>
</div>

<?php get_footer(); ?>