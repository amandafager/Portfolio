<?php get_header(); ?>

<div class="row">
    <div class="col">

        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>


                <h1 class="pb-2"><?php the_title(); ?></h1>

                <div class="pb-2"><?php if (has_post_thumbnail()) {
                                        the_post_thumbnail('medium');
                                    } ?>
                </div>
                <span class="h5"> <?php the_date(); ?></span>

                <div class="pt-2"><?php the_content(); ?></div>

            <?php endwhile; ?>

        <?php endif; ?>

    </div>
</div>

<?php get_footer(); ?>