<?php get_header(); ?>
<main class="full-width">
<div id="content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr(sprintf(__("Permalink to: %s", 'ci_theme'), get_the_title())); ?>"><?php the_title(); ?></a></h1> 
<?php echo get_the_date(); ?><?php the_excerpt(); ?>

<h4>Posted on <?php the_time('F jS, Y') ?></h4>
<h3><?php echo $post->post_excerpt; ?> <a href="<?php the_permalink(); ?>">Læs mere her!</a></h3>
<hr> <?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
</div>
<?php get_sidebar(); ?>
</div>
<div id="delimiter">
</div>
<?php get_footer(); ?>