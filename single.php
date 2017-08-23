<?php get_header(); ?>
<main class="full-width">
<div id="content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<p><?php the_content(__('(more...)')); ?></p>
<h4>Posted on <?php the_time('F jS, Y') ?></h4>
<?php comments_template();?>
<hr> <?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
</div>
<?php get_sidebar(); ?>
</div>
<div id="delimiter">
</div>
<?php get_footer(); ?>