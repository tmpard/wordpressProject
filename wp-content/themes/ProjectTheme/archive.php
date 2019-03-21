<?php get_header();?>

<div class="container">
    <h1><?php single_cat_title();?></h1>
    <?php if(have_posts()) : while(have_posts()) : the_post();?>
        <div class="card mb-4">
        <h3><?php the_title();?></h3>
        <?php the_excerpt();?>
        <a href="<?php the_permalink();?> class="btn btn-sucess>">Read more</a>
        </div>
    <?php endwhile; endif;?>
</div>

<?php get_footer();?>
