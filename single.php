<?php get_header();?>
<main id="main-content">
	<?php the_post_thumbnail(); ?>
<h2><?php the_title(); ?></h2>
<p><?php the_content(); ?></p>
</main>
<?php get_footer(); ?>