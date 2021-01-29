<?php get_header(); ?>

<div class="row">
    <div class="col">

        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>

                <h1><?php the_title(); ?></h1>

                <?php the_content(); ?>

            <?php endwhile; ?>

        <?php endif; ?>

    </div>
</div>

<?php
$args = [
    'numberposts' => 3,
    'order' => 'desc'
];

$latestPosts = get_posts($args);
?>

<div class="row">
    <?php foreach ($latestPosts as $post) :
        setup_postdata($post); ?>

        <div class="col mt-5 gx-5">
            <a href="<?php the_permalink(); ?>">
                <?php if (has_post_thumbnail()) {
                    the_post_thumbnail('medium');
                } ?>

                <h2 class="pt-2">
                    <?php the_title(); ?>
                </h2>
            </a>
        </div>

    <?php endforeach; ?>
</div>

<h4 class="col mt-5 "><a href="<?php echo get_permalink(get_option('page_for_posts')); ?>">View all blog posts</a></h4>



<?php get_footer(); ?>