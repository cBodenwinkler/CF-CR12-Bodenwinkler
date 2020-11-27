<?php get_header(); ?>


<!-- MAIN CONTENT -->
<div class="container mt-3" id="indexHead">
    <h2>Travel Blog</h2>
    <hr>
</div>

<div class="container blogSlider mt-5 index">

    <!-- Bring Dynamic User Content to the Page: - Posts -->
    <div class="content row" id="postsID">
        <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>

                <div class="card my-3" id="cardsID">
                <?php if(has_post_thumbnail()) : ?>
                    <img class="card-img-top" alt="..." src=<?php the_post_thumbnail(array(500,300));?>
                <?php endif; ?>
                    <div class="card-body">
                        <h5 class="card-title" style="text-align:center"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h5>
                        <p class="card-text"><?php the_excerpt(); ?></p>
                        <p class="card-text"><small class="text-muted"><?php the_time('F j, Y g:i a'); ?></small></p>
                    </div>
                </div>

            <?php endwhile; ?>
        <?php else : ?>
            <?php__('No Posts Found'); ?>
        <?php endif; ?>

    </div>
</div>


<?php get_footer(); ?>